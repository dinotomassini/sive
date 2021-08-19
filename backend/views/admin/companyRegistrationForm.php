<?php
require "../partials/head.php";
?>
<?php
require "../partials/menuBar.php";
?>
<main class="container">
  <h1 class="text-center mb-3">Formulario de empresa</h1>

  <div class="card mx-auto" style="max-width: 42rem;">
    <form id="signupForm" action="#" method="post" class="container mb-3 mt-3">
      <div class="form-group">
        <label for="name">Nombre de la empresa:</label>
        <input type="text" name="name" id="name" placeholder="Ingrese el nombre" class="form-control" autofocus
          required>
      </div>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="rut">RUT:</label>
            <!-- pattern="/^([0-9])*$/" -->
            <input type="text" name="rut" id="rut" minlength="12" maxlength="12" placeholder="Ingrese su RUT"
              class="form-control">
            <small id="rutHelper" class="form-text text-muted">Solo se aceptan números.</small>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="razon">Razón social:</label>
            <input type="text" name="razon" id="razon" placeholder="Ingrese la razon social" class="form-control"
              autofocus required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="mail">Email de la empresa:</label>
        <input type="email" name="mail" id="mail" placeholder="Ingrese el email" class="form-control" autofocus
          required>
        <!-- En este input de tipo email, es valido ingresar algo@algo , no es necesario agregar el .algo , esto habria que verlo con JS -->
      </div>
      <div class="form-group">
        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" id="pass" minlength="6" placeholder="Ingrese su contraseña"
          class="form-control" required>
        <small id="passHelp" class="form-text text-muted">Mínimo 6 caracteres.</small>
      </div>
      <div class="form-group">
        <label for="repass">Confirme su contraseña:</label>
        <input type="password" name="repass" minlength="6" id="repass" placeholder="Ingrese nuevamente su contraseña"
          class="form-control" required>
      </div>

      <div class="form-group">
        <label for="celular">Celular de contacto:</label>
        <!-- pattern="/^([0-9])*$/" -->
        <input type="text" name="celular" id="celular" placeholder="Ingrese su celular" class="form-control">
        <small id="celularHelp" class="form-text text-muted">Solo se aceptan números.</small>
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
        <label for="direccion">Dirección casa central:</label>
        <input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion" class="form-control">
      </div>

      <div class="form-group">
        <label for="pickupcenter">Dirección del pickup center:</label>
        <input type="text" name="pickupcenter" id="pickupcenter" placeholder="Ingrese un pickup center"
          class="form-control">
      </div>
      <div class="form-group d-flex justify-content-center">
        <button type="submit" id="btnSubmitSignupEmpresa" class="btn btn-primary w-50 mt-3">Registrarse</button>
      </div>
    </form>
  </div>

</main>

<?php
require "../partials/footer.php";
?>