<?php

  class Users extends Controller{
    protected $userModel;
    
    public function __construct(){
      $this->userModel = $this->model('User');
    }

    public function index(){
      redirect('index');
    }
    
    
    public function login(){
      // Check if logged in
      if($this->isLoggedIn()){
        redirect('pages/about');
      }
      
      // Check if POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST);
        
        $data = [       
          'email' => $_POST['emailuse'],
          'password' => $_POST['passuse'],
        ];
        
        
        // Check and set logged in user
        // var_dump($data);
        $loggedInUser = $this->userModel->login($data['email'], $data['password']);
            if($loggedInUser == true){
            // User Authenticated!
            // $this->view('pages/about');
            $this->createUserSession($loggedInUser);

          }
          else {
            // Load View
            $this->view('pages/login');
          }
        
        } else {
            // If NOT a POST

            // Init data
        //     $data = [
        //   'email' => '',
        //   'password' => '',
        //   'email_err' => '',
        //   'password_err' => '',
        // ];
      
        // Load View
        $this->view('pages/login');
      }
    }
    
    
    
    // Create Session With User Info
      public function createUserSession($user){
        // var_dump($user);
       $_SESSION['id'] = $user->id_u;
       $_SESSION['email'] = $user->email;
       $_SESSION['name'] = $user->Fname;
       redirect('admin/dashboard');
      
      }
      // Logout & Destroy Session
      public function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['email']);
        unset($_SESSION['name']);
          session_destroy();
          redirect('pages/login');
        }
        
        // Check Logged In
        public function isLoggedIn(){
            if(isset($_SESSION['id'])){
              return true;
            } else {
              return false;
            }
          }
        }