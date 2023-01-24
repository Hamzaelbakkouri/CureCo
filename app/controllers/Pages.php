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
    if (isset($_SESSION['email']) && $_SESSION['name']) {
      $data = $this->medicine->getmedicine();
      $this->view('pages/admin/dashboard', $data);
    } else {
      redirect('pages/login');
    }
  }

  public function newdash()
  {
    if (isset($_SESSION['email']) && $_SESSION['name']) {
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
    } else {
      redirect('pages/login');
    }
  }


  public function add()
  {
    if (isset($_SESSION['email']) && $_SESSION['name']) {
      $this->view('pages/admin/add');
    } else {
      redirect('pages/login');
    }
  }


  public function statistique()
  {
    if (isset($_SESSION['email']) && $_SESSION['name']) {
      $products_price = $this->medicine->price_product();
      $products_number = $this->medicine->products_number();
      $data = [
        'price' => $products_price,
        'number' => $products_number,
      ];

      $this->view('pages/admin/statistique', $data);
    } else {
      redirect('pages/login');
    }
  }



  public function edit()
  {
    if (isset($_SESSION['email']) && $_SESSION['name']) {
      $url = $_GET['url'];
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      $id = $url[2];
      $data = $this->medicine->getedit($id);
      $this->view('pages/admin/edit', $data);
    } else {
      redirect('pages/login');
    }
  }
}
