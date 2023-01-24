<?php
class Users extends Controller
{
  protected $userModel;

  public function __construct()
  {
    $this->userModel = $this->model('User');
  }

  public function index()
  {
    redirect('index');
  }


  public function login()
  {
    // Check if logged in
    if ($this->isLoggedIn()) {
      redirect('pages/dashboard');
    }

    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST);

      $data = [
        'email' => $_POST['emailuse'],
        'password' => $_POST['passuse'],
      ];


      // Check and set logged in user
      // var_dump($data);
      $loggedInUser = $this->userModel->login($data['email'], $data['password']);
      if ($loggedInUser == true){
        // User Authenticated!
        $this->createUserSession($loggedInUser);
        // $this->view('pages/about');
      } else {
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

  public function register()
  {
    // Check if logged in
    if ($this->isLoggedIn()) {
      redirect('login');
    }

    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST);

      $data = [
        'name' => $_POST['nameuse'],
        'email' => $_POST['emailuse'],
        'password' => $_POST['passuse'],
      ];

      // Hash Password
      $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

      //Execute

      if ($this->userModel->register($data)) {
        // Redirect to login
        redirect('pages/login');
      } else {
        redirect('pages/login');
      }
    } else {
      // Load View
      $this->view('pages/register');
    } {
      // IF NOT A POST REQUEST

      // Init data
      $data = [
        'name' => '',
        'email' => '',
        'password' => '',
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
      ];

      // Load View
      $this->view('pages/register', $data);
    }
  }

  // Create Session With User Info
  public function createUserSession($loggedInUser)
  {
    $_SESSION['id'] = $loggedInUser['id_u'];
    $_SESSION['name'] = $loggedInUser['Fname'];
    $_SESSION['email'] = $loggedInUser['email'];
    redirect('pages/dashboard');
  }
  // Logout & Destroy Session
  public function logout()
  {
    unset($_SESSION['email']);
    unset($_SESSION['name']);
    session_destroy();
    redirect('pages/login');
  }

  // Check Logged In
  public function isLoggedIn()
  {
    if (isset($_SESSION['id'])) {
      return true;
    } else {
      return false;
    }
  }
}
