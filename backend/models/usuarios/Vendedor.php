<?php
include_once './Usuario.php';

class Vendedor extends Usuario {

  public string $empresa;

  function __construct(string $nombre, string $apellido, int $celular, int $cedula, $fechaNac, string $email, string $pass, string $empresa) {
    parent::__construct($nombre, $apellido, $celular, $cedula, $fechaNac, $email, $pass);
    $this->empresa = $empresa;
  }

  /**
   * EMPRESA
   */
  function getEmpresa(): string {
    return $this->empresa;
  }

  function setEmpresa(string $empresa): void {
    $this->empresa = $empresa;
  }
}

?>
