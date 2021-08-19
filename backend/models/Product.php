<?php 

  class Product{
    private $name;
    private $description;
    private $price;

    function __construct($name, $description, $price){
      $this->name = $name;
      $this->description = $description;
      $this->price = $price;
    }

    function setName($name){
      $this->name = $name;
    }
    
    function getName(){
      return $this->name;
    }

    function setDescription($description){
      $this->description = $description;
    }
    
    function getDescription(){
      return $this->description;
    }

    function setPrice($price){
      $this->price = $price;
    }
    
    function getPrice(){
      return $this->price;
    }

  }

?>