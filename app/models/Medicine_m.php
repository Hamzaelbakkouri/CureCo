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
        $this->db->query("SELECT `id_m`, `name_m`, `price` , `quantity`,`image_m` FROM `medicine`");
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



    function deletemedicine($id)
    {
        $this->db->query("DELETE  FROM `medicine` WHERE id_m =:id_m");
        $this->db->bind(":id_m", $id);

        if ($this->db->execute()) {
            return true;
        };
    }
}
