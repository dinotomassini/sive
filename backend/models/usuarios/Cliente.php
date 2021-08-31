<?php
include_once './Usuario.php';

class Cliente extends Usuario {

  private int $id;
  private int $reputacion;
  private string $direccion;

  function __construct(string $nombre = "", string $apellido = "", $celular = "", $cedula = "", $fechaNac, string $email, string $pass,  string $direccion = "") {
    parent::__construct($nombre, $apellido, $celular, $cedula, $fechaNac, $email, $pass);
    $this->direccion = $direccion;
    $this->reputacion = 0;
  }

  /**
   * ID
   */
  public function getId(): int {
    return $this->id;
  }

  /**
   * DIRECCION
   */
  public function setDireccion(string $direccion) {
    $this->direccion = $direccion;
  }

  public function getDireccion(): string {
    return $this->direccion;
  }

  /**
   * REPUTACION
   */
  public function masReputacion(): void {
    if ($this->reputacion < 10) {
      $this->reputacion += 1;
    }
  }

  public function menosReputacion(): void {
    if ($this->reputacion > 0) {
      $this->reputacion -= 1;
    }
  }

  public function getReputacion(): int {
    return $this->reputacion;
  }

  
}
?>
