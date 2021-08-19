<?php 
  include './User.php';

  class CompanyUser extends User{
    private $companyName;
    private $rut;
    private $pickupCenters = array();

    function __construct($name, $lastName, $celular, $ci, $bornDate, $userName, $email, $pass, $companyName, $rut){
      parent::__construct($name, $lastName, $celular, $ci, $bornDate, $userName, $email, $pass);
      $this->companyName = $companyName;
      $this->rut = $rut;
    }

    function addPickupCenter($address){
      array_push($this->pickupCenters, $address);
      echo "Agregada la direccion: $address";
    }

    function deleltePickupCenter($id){
      $del = array_search($this->pickupCenters, $id);
      echo "Borrando $del";
    }

    function verifyRut($rut){
      // verificar rut, se puede?
      echo "Verificando el RUT: $rut";
    }

    function getCompanyName(){
      return $this->companyName;
    }

    function getRut(){
      return $this->rut;
    }

    function getPickupCenters(){}
  }
?>