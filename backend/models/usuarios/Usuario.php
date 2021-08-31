<?php

abstract class Usuario {

  private int $cedula;
  private string $email;
  private string $pass;
  private $fechaNac;
  private string $nombre;
  private string $apellido;
  private int $celular;

  function __construct($nombre, $apellido, $celular, $cedula, $fechaNac, $email, $pass) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->celular = $this->verificarCelular($celular); // corroborar celular valido?
    $this->cedula = $this->verificarCedula($cedula); // corroborar cedula con funcion?
    $this->fechaNac = $this->verificarFechaNac($fechaNac); // corroborar fecha?
    $this->email = $email;
    $this->pass = password_hash($pass, PASSWORD_BCRYPT);
  }

  /**
   * CEDULA
   */
  private function verificarCedula($cedula) {
    // verificar la cedula
    echo "Verificando la cedula: $cedula";
    return true;
  }

  public function getCedula(): int {
    return $this->cedula;
  }

  public function setCedula(int $cedula): bool {
    if ($this->verificarCedula($cedula)) {
      $this->cedula = $cedula;
      return true;
    }
    return false;
  }

  /**
   * EMAIL
   */
  public function getEmail(): string {
    return $this->email;
  }

  /**
   * PASS
   */
  public function verificarPass(string $pass): bool {
    return password_verify($pass, $this->pass);
  }

  public function setPass(string $pass): bool {
    $hash = password_hash($pass, PASSWORD_BCRYPT);
    if ($hash == false || $hash == NULL) {
      return false;
    }
    $this->pass = $hash;
    return true;
  }

  /**
   * FECHA DE NACIMIENTO
   */
  private function verificarFechaNac($fecha) {
    // verificar la fecha de nacimiento
    echo "Verificando la fecha de nacimiento: $fecha";
    return true;
  }

  public function getfechaNac() {
    return $this->fechaNac;
  }

  /**
   * NOMBRE
   */
  public function getNombre(): string {
    return $this->nombre;
  }

  public function setNombre(string $nombre): void {
    $this->nombre = $nombre;
  }

  /**
   * APELLIDO
   */
  public function getApellido(): string {
    return $this->apellido;
  }

  public function setApellido(string $apellido): void {
    $this->apellido = $apellido;
  }

  /**
   * CELULAR
   */
  private function verificarCelular(int $celular): bool {
    // verificar el celular
    echo "Verificando el celular: $celular";
    return true;
  }

  public function getCelular(): int {
    return $this->celular;
  }

  public function setCelular(int $celular): bool {
    if ($this->verificarCelular($celular)) {
      $this->celular = $celular;
      return true;
    }
    return false;
  }
}
?>
