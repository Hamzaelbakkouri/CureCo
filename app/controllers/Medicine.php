<?php

class Medicine extends Controller
{
    protected $medicine;
    function __construct()
    {
        $this->medicine = $this->model('Medicine_m');
    }


    public function addmedicine()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST);
            for ($i = 0; $i < count($_POST["nom"]); $i++) {
                $filename = $_FILES["image"]["name"][$i];
                $tempname = $_FILES["image"]["tmp_name"][$i];
                $folder = "./images/" . $filename;

                $name = $_POST['nom'][$i];
                $Prix = $_POST['price'][$i];
                $Quantity = $_POST['quantity'][$i];
                $Image = $filename;
                
                move_uploaded_file($tempname, $folder);
                $this->medicine->addmedicine($name, $Prix, $Quantity, $Image);
            }
            redirect('Pages/dashboard');
        }
    }

    public function deletemedicine($id)
    {
        if ($this->medicine->deletemedicine($id) == true) {
            redirect('pages/dashboard');
        } else {
            redirect('pages/dashboard');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $filename = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            $folder = "./images/" . $filename;

            $data = [
                // 'id' => $_POST['id'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'image' => $filename,
                'quantity' => $_POST['quantity'],
            ];
            move_uploaded_file($tempname, $folder);

            $url = $_GET['url'];
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            $id = $url[2];

            if ($this->medicine->editmedicine($id, $data)) {
                redirect('pages/dashboard');
            }
        }
    }
}
