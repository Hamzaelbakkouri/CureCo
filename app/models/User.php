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
    // var_dump($row);

    if ($password == $row['pass']) {
      return true;
    } else {
      return false;
    }
  }
}
