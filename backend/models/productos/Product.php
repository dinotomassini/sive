<?php 

  class Producto{

    // private const NACIONAL = 'Nacional';
    // private const INTERNACIONAL = 'Internacional';
    private int $id;
    private string $nombre;
    private string $descripcion;
    private float $precio;
    private string $procedencia;
    private bool $esNuevo;
    private int $stock;

    function __construct(string $nombre, string $descripcion, float $precio, string $procedencia, bool $estado, int $stock){
      $this->nombre = $nombre;
      $this->descripcion = $descripcion;
      $this->precio = $precio;
      $this->procedencia = $procedencia;
      $this->esNuevo = $estado;
      $this->stock = $stock;
    }

    /**
     * ID
     */
    public function getId(): int {
      return $this->id;
    }

    /**
     * NOMBRE
     */
    public function setNombre(string $nombre): void {
      $this->nombre = $nombre;
    }
    
    public function getNombre(): string {
      return $this->nombre;
    }

    /**
     * DESCRIPCION
     */
    public function setDescripcion(string $descripcion): void {
      $this->descripcion = $descripcion;
    }
    
    public function getDescripcion(): string {
      return $this->descripcion;
    }

    /**
     * PRECIO
     */
    public function setPrecio(float $precio): void {
      $this->precio = $precio;
    }
    
    public function getPrecio(): float{
      return $this->precio;
    }

    /**
     * PROCEDENCIA
     */
    public function setProcedencia(string $procedencia): void {
      $this->procedencia = $procedencia;
    }

    public function getProcedencia(): string {
      return $this->procedencia;
    }

    /**
     * ESTADO
     */
    public function setEstado(bool $estado): void {
      $this->isNuevo = $estado;
    }

    public function getEstado(): bool {
      return $this->isNuevo;
    }

    /**
     * STOCK
     */
    public function setStock(int $stock): void {
      $this->stock = $stock;
    }

    public function getStock(): int {
      return $this->stock;
    }

    public function masStock(int $cantidad): void {
      $this->stock += $cantidad;
    }

    public function verificarStock(): bool {
      
    }

    public function menosStock(int $cantidad): string {
      $stockInicial = $this->stock;
      $stockFinal = $stockInicial - $cantidad;
      if ($stockFinal >= 0){
        $this->stock = $stockFinal;
        return '[ESTADO] => OK';
      }
      $stockFaltante = $stockInicial - $stockFinal;
      return '
        [ESTADO] => ERROR,
        [FALTANTE] => $stockFaltante
      ';
    }






    /**
     * NOMBRE
     */


    /**
     * NOMBRE
     */
  }

?>
