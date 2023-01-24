<?php
class User extends Database
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Login / Authenticate User
  public function login($email, $password)
  {
    $this->db->query("SELECT * FROM `user` WHERE `email` = :email");
    $this->db->bind(':email', $email);
    $row = $this->db->single();
    if ($row) {
      $check = password_verify($password, $row['pass']);
      if ($check == true) {
        return $row;
      } else {
        return false;
      }
    }else {
    echo 'error';
    }
    // var_dump($row);

  }

  public function register($data)
  {
    $this->db->query("INSERT INTO `user`(Fname,pass,email) values (:name,:pass,:email)");
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':pass', $data['password']);
    $this->db->execute();
  }
}
