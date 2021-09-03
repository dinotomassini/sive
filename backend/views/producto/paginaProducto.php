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
<h1>Pagina del producto</h1>

<div class="container">
  <div class="row">
    <div class="col">
      <img src="/assets/images/product-5222398_1280.jpg" alt="lentes" style="width: 100%;" class="" />
    </div>
  </div>

  <div class="row">

    <div class="col-8">
      <h4 class="text-center">Lentes ESPIAS</h4>
      <p class="">
        Lentes de sol, muy buen estilo y materiales; y si, si tiene rayos X.
      </p>
      <p>Opciones del producto</p>
    </div>

    <div class="col-4 align-self-end">
      <button class="btn btn-danger"><i class="fas fa-cart-plus"></i>Agregar al carrito</button>
      <h3 class="">$ 15555</h3>
      <p>Envio</p>
    </div>


  </div>

</div>



<?php
include BASE_DIR."/views/partials/footer.php";
?>
