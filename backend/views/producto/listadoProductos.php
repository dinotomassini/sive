<?php include_once '../../config.php'; ?>

<?php
include BASE_DIR."/views/partials/head.php";
?>

<?php
include BASE_DIR."/views/partials/barraNavegacion.php";
?>

<!-- BUSCADOR -->
<section id="buscador" class="container mt-3 mb-3">
  <form class="d-flex mx-auto" style="max-width: 38rem;" action="#">
    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
    <button class="btn btn-outline-success" type="submit">Buscar</button>
  </form>
</section>

<!-- CAMINO PARA NAVEGAR MAS FACILMENTE -->
<nav class="container p-3" style="--bs-breadcrumb-divider: ' | ';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Inicio</li>
    <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
    <!-- <li class="breadcrumb-item">Data</li> -->
  </ol>
</nav>

<table class="table">
  <tr>
    <a href="/views/producto/paginaProducto.html">
      <td>
        <img src="/assets/images/product--3891591_1280.jpg" alt="reloj" class="" style="width: 100%;">
      </td>
      <td>
        <h4 class="">Reloj ETERNO</h4>
      </td>
      <td>
        <h3 class=""><span class="badge rounded-pill bg-primary">$ 15555</span></h3>
      </td>
      <td>
        <button class="btn btn-danger"><i class="fas fa-cart-plus"></i></button>
      </td>
    </a>
  </tr>

  <tr>
    <a href="/views/producto/paginaProducto.html">
      <td>
        <img src="/assets/images/product-5222394_1280.jpg" alt="camara" class="" style="width: 100%;">
      </td>
      <td>
        <h4 class="">Camara TOTAL</h4>
      </td>
      <td>
        <h3 class=""><span class="badge rounded-pill bg-primary">$ 15555</span></h3>
      </td>
      <td>
        <button class="btn btn-danger"><i class="fas fa-cart-plus"></i></button>
      </td>
    </a>
  </tr>

  <tr>
    <a href="/views/producto/paginaProducto.html">
      <td>
        <img src="/assets/images/product-5222398_1280.jpg" alt="lentes" class="" style="width: 100%;">
      </td>
      <td>
        <h4 class="">Lentes ESPIAS</h4>
      </td>
      <td>
        <h3 class=""><span class="badge rounded-pill bg-primary">$ 15555</span></h3>
      </td>
      <td>
        <button class="btn btn-danger"><i class="fas fa-cart-plus"></i></button>
      </td>
    </a>
  </tr>

  <tr>
    <a href="/views/producto/paginaProducto.html">
      <td>
        <img src="/assets/images/product-5226389_1280.jpg" alt="cuchillas" class="" style="width: 100%;">
      </td>
      <td>
        <h4 class="">Cuchillas Nordicas</h4>
      </td>
      <td>
        <h3 class=""><span class="badge rounded-pill bg-primary">$ 15555</span></h3>
      </td>
      <td>
        <button class="btn btn-danger"><i class="fas fa-cart-plus"></i></button>
      </td>
    </a>
  </tr>

  <tr>
    <a href="/views/producto/paginaProducto.html">
      <td>
        <img src="/assets/images/product-958804_1280.jpg" alt="zapatos" class="" style="width: 100%;">
      </td>
      <td>
        <h4 class="">Zapatos Acuaticos</h4>
      </td>
      <td>
        <h3 class=""><span class="badge rounded-pill bg-primary">$ 15555</span></h3>
      </td>
      <td>
        <button class="btn btn-danger"><i class="fas fa-cart-plus"></i></button>
      </td>
    </a>
  </tr>
</table>

<?php
include BASE_DIR."/views/partials/footer.php";
?>
