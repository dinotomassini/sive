<?php 
  include './Person.php';

  class User extends Person{
    public $email;
    public $pass;

    function __construct($name="", $lastName="", $celular="", $ci="", $bornDate="", $email, $pass){
      parent::__construct($name, $lastName, $celular, $ci, $bornDate);
      $this->email = $email;
      $this->pass = password_hash($pass, PASSWORD_BCRYPT);
    }

    function setPass($pass){
      $this->pass = password_hash($pass, PASSWORD_BCRYPT);
    }

    function verifyPass($pass){
      return password_verify($pass, $this->pass);
    }
  }
?>