<!DOCTYPE html>
<html lang="en">
<head>

<title>Inicio de sesion</title>
<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../vendor/bootstrap/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="../jquery/bootstrap/jquery.slim.min.js">
<link rel="stylesheet" href="css/style.css">
<?php

include "../includes/topBar.php";
?>
</head>

<body style="background:#ffffff">
  <div class="container" style="margin-top: 10%">
    <div class="row" >
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Contacto</h5>
            <form class="form-signin" action="php/validacion.php" method="post">
              <div class="form-label-group">
                <input type="text" id="inputNombre" class="form-control" name="nombre" placeholder="Nombre" required autofocus>
                <label for="inputEmail">Nombre</label>
              </div>
              <div class="form-label-group">
                <input type="text" id="inputCorreo" class="form-control" name="email" placeholder="Correp" required autofocus>
                <label for="inputCorreo">Correo</label>
              </div>
              <div class="form-label-group">
                <input type="text" id="inputAsunto" class="form-control" name="email" placeholder="Asunto" required autofocus>
                <label for="inputAsunto">Asunto</label>
              </div>
              <div class="form-label-group">
                <textarea type="text" id="inputMensaje" class="form-control" name="email" placeholder="Mensaje" required autofocus></textarea>
                <label for="inputMensaje"></label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login_post">Enviar</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php
      require_once "../includes/footer.php";
 ?>
