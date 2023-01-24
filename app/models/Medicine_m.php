<?php

class Medicine_m extends Database
{
    protected $db;
    function __construct()
    {
        $this->db = new Database;
    }

    function getmedicine()
    {
        $this->db->query("SELECT `id_m`, `name_m`, `price` , `quantity`,`image_m`,`date` FROM `medicine`");
        $data = $this->db->resultset();
        return $data;
    }
    public function getedit($id)
    {
        $this->db->query("SELECT `id_m`, `name_m`, `price` , `quantity`,`image_m` FROM `medicine` WHERE `id_m`= :id ");
        $this->db->bind(":id", $id);
        $data = $this->db->resultset();
        return $data;
    }

    public function getdesc($by){
        $this->db->query("SELECT `id_m`, `name_m`, `price` , `quantity`,`image_m`,`date` FROM `medicine` ORDER BY $by DESC");
        $data = $this->db->resultset();
        return $data;
    }

    public function getasc($by){
        $this->db->query("SELECT `id_m`, `name_m`, `price` , `quantity`,`image_m` FROM `medicine` ORDER BY $by ASC");
        $data = $this->db->resultset();
        return $data;
    }

    function editmedicine($id, $data)
    {
        $this->db->query(" UPDATE `medicine` SET `name_m`= :name_m , `price`=:price , `quantity`= :quantity,`image_m`=:image_m WHERE `id_m`= $id");
        $this->db->bind(":name_m", $data['name']);
        $this->db->bind(":price", $data['price']);
        $this->db->bind(":image_m", $data['image']);
        $this->db->bind(":quantity", $data['quantity']);

        if ($this->db->execute())
            return TRUE;
        else
            return FALSE;
    }

    function addmedicine($name, $Prix, $Quantity, $Image)
    {
        $this->db->query("INSERT INTO `medicine` (name_m,price,quantity,image_m) values (:name,:price,:quantity,:image_m)");
        $this->db->bind(":name", $name);
        $this->db->bind(":price", $Prix);
        $this->db->bind(":quantity", $Quantity);
        $this->db->bind(":image_m", $Image);

        if ($this->db->execute())
            return TRUE;
        else
            return FALSE;
    }

    public function price_product()
    {
        $this->db->query('SELECT SUM(price) FROM medicine');
        $this->db->execute();
        $count = $this->db->fetchColumn();
        return $count;
    }
    public function products_number()
    {
        $this->db->query("SELECT COUNT(*) FROM medicine");

        $this->db->execute();

        return $this->db->fetchColumn();
    }



    function deletemedicine($id)
    {
        $this->db->query("DELETE  FROM `medicine` WHERE id_m =:id_m");
        $this->db->bind(":id_m", $id);

        if ($this->db->execute()) {
            return true;
        };
    }
}
