<?php
include_once './Usuario.php';

class Admin extends Usuario {

  private $algo;

  public function algo($algo) {
    $this->algo = $algo;
  }
}
?>
