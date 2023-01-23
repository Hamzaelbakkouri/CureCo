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

  public function newdash(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (isset($_POST['submit_sort'])) {
        $by = $_POST['by'];
        $way = $_POST['way'];
        if ($by == 'date' && $way = 'DESC') {
          $data = $this->medicine->getdesc($by);
          $this->view('pages/admin/dashboard', $data);
        } else if ($by == 'price' && $way = 'DESC') {
          $data = $this->medicine->getdesc($by);
          $this->view('pages/admin/dashboard', $data);
        }

        if ($by == 'date' && $way = 'ASC') {
          $data = $this->medicine->getasc($by);
          $this->view('pages/admin/dashboard', $data);
        } else if ($by == 'price' && $way = 'ASC') {
          $data = $this->medicine->getasc($by);
          $this->view('pages/admin/dashboard', $data);
        }
      }
    }
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
