<?php 
  include './User.php';

  class SellerUser extends User{
    public $company;

    function __construct($name, $lastName, $celular, $ci, $bornDate, $email, $pass, $company){
      parent::__construct($name, $lastName, $celular, $ci, $bornDate, $email, $pass);
      $this->company = $company;
    }

    function getCompany(){
      return $this->company;
    }

    function setCompany($company){
      $this->company = $company;
    }

  }

?>