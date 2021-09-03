<?php include_once '../../config.php'; ?>

<?php
require BASE_DIR."/views/partials/head.php";
?>
<?php
require BASE_DIR."/views/partials/barraNavegacion.php";
?>
<main class="container mb-5">
  <h1 class="text-center mb-3">Formulario de registro de clientes</h1>
  <div class="card mx-auto" style="max-width: 26rem;">
    <form id="signupForm" action="#" method="post" class="m-3">
      <p>Ingrese los datos mínimos, le recomendamos luego completar todos sus datos personales en su perfil.</p>
      <!-- <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" placeholder="Ingrese su nombre" class="form-control" autofocus
          required>
      </div> -->


      <div class="row">
        <div class="col">
          <div class="form-group">
            <div class="form-floating m-3">
              <input type="email" name="mail" id="mail" placeholder="Ingrese su email" class="form-control" autofocus
                required>
              <label for="mail">Email</label>
            </div>
            <!-- En este input de tipo email, es valido ingresar algo@algo , no es necesario agregar el .algo , esto habria que verlo con JS -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <div class="form-floating m-3">
              <input type="password" name="pass" id="pass" minlength="6" placeholder="Ingrese su contraseña"
                class="form-control" required>
              <label for="pass">Contraseña</label>
            </div>
            <small id="passHelp" class="form-text text-muted">Mínimo 6 caracteres.</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <div class="form-floating m-3">
              <input type="password" name="repass" minlength="6" id="repass" placeholder="Confirme su contraseña"
                class="form-control" required>
              <label for="repass">Confirme su contraseña</label>
            </div>
          </div>
        </div>
      </div>

      <!-- ! AGREGAR TODOS LOS CAMPOS PARA EL REGISTRO DEL CLIENTE -->

      <!-- <div class="row">

        <div class="col">
          <div class="form-group">
            <label for="celular">Celular:</label>
            <!-- pattern="/^([0-9])*$/"
            <input type="text" name="celular" id="celular" placeholder="Ingrese su celular" class="form-control">
            <small id="celularHelp" class="form-text text-muted">Solo se aceptan números.</small>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="cedula">Cedula:</label>
            <!-- pattern="/^([0-9])*$/"
            <input type="text" name="cedula" id="cedula" minlength="7" maxlength="8"
              placeholder="Ingrese su cedula (12345678)" class="form-control">
            <small id="cedulaHelp" class="form-text text-muted">Solo se aceptan números.</small>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="departamento">Departamento:</label>
        <select name="departamento" id="departamento" class="form-control">
          <option value="artigas">Artigas</option>
          <option value="canelones">Canelones</option>
          <option value="cerroLargo">Cerro Largo</option>
          <option value="colonia">Colonia</option>
          <option value="durazno">Durazno</option>
          <option value="flores">Flores</option>
          <option value="florida">Florida</option>
          <option value="lavalleja">Lavalleja</option>
          <option value="maldonado">Maldonado</option>
          <option value="montevideo">Montevideo</option>
          <option value="paysandu">Paysandú</option>
          <option value="rioNegro">Río Negro</option>
          <option value="rivera">Rivera</option>
          <option value="rocha">Rocha</option>
          <option value="salto">Salto</option>
          <option value="sanJose">San José</option>
          <option value="soriano">Soriano</option>
          <option value="tacuarembo">Tacuarembó</option>
          <option value="treintaYtres">Treinta y Tres</option>
        </select>
      </div>
      <div class="form-group">
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion" class="form-control">
      </div> -->

      <div class="form-group d-flex justify-content-center">
        <button type="submit" id="btnSubmitSignupPerson" class="btn btn-primary w-50 mt-3">Registrarse</button>
      </div>
    </form>
  </div>
</main>

<?php
require BASE_DIR."/views/partials/footer.php";
?>
