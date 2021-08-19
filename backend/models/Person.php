<?php 

  class Person {
    private $name;
    private $lastName;
    private $celular;
    private $ci;
    private $bornDate;

    function __construct($name, $lastName, $celular, $ci, $bornDate){
      $this->name = $name;
      $this->lastName = $lastName;
      $this->celular = $celular; // corroborar celular valido
      $this->ci = $ci; // corroborar cedula con funcion?
      $this->bornDate = $bornDate; // corroborar fecha
    }

    function verifyCi($ci){
      // verificar la cedula
      echo "Verificando la cedula: $ci";
    }

    function verifyCelular($celular){
      // verificar el celular
      echo "Verificando el celular: $celular";
    }

    function verifyBornDate($date){
      // verificar la fecha de nacimiento
      echo "Verificando la fecha de nacimiento: $date";
    }

    function getName(){
      return $this->name;
    }

    function getLastName(){
      return $this->lastName;
    }
    
    function getCi(){
      return $this->ci;
    }

    function getBornDate(){
      return $this->bornDate;
    }
    
    function getCelular(){
      return $this->celular;
    }

    function setCelular($celular){
      $this->celular = $celular;
    }

    
  }

?>