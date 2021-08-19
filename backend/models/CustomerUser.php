<?php 
  include './User.php';

  class CustomerUser extends User{
    private $address;

    function __construct($name="", $lastName="", $celular="", $ci="", $bornDate="", $email, $pass,  $address){
      parent::__construct($name, $lastName, $celular, $ci, $bornDate, $email, $pass);
      $this->address = $address;
    }

    function setAddress($address){
      $this->address = $address;
    }
    
    function getAddress(){
      return $this->address;
    }

  }

?>