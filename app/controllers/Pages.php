<?php
class Pages extends Controller
{
  protected $medicine;
  public function __construct()
  {
    $this->medicine = $this->model('Medicine_m');
  }

  public function index()
  {

    $this->view('pages/index');
  }

  public function about()
  {

    $this->view('pages/about');
  }

  public function medicine()
  {

    $this->view('pages/medicine');
  }
  public function login()
  {
    $this->view('pages/login');
  }
  public function register()
  {

    $this->view('pages/register');
  }
  public function dashboard()
  {
    $data = $this->medicine->getmedicine();
    $this->view('pages/admin/dashboard', $data);
  }
  public function add()
  {
    $this->view('pages/admin/add');
  }
  public function edit()
  {

    $url = $_GET['url'];
    $url = rtrim($_GET['url'], '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);
    $id = $url[2];
    $data = $this->medicine->getedit($id);
    $this->view('pages/admin/edit', $data); 
  }
}
