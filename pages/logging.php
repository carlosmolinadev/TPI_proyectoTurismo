<?php
    define('TITLE', 'Registro');
    define('STYLE', "logging");
    include('../includes/header.php');
    include('../includes/navBar.php');
?>

<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4 text-center">Bienvenid@!</h3>
              <form>
                <div class="form-label-group input-round my-2">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Correo electronico</label>
                </div>

                <div class="form-label-group input-round my-2">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Contraseña</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Recordar mi contraseña</label>
                </div>
                <button class="btn btn-lg btn-dark btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Ingresar</button>
                <div class="text-center">
                  <a class="small" href="#" style="color: black;">Olvide mi contraseña</a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    include('../includes/footer.php');
?>  