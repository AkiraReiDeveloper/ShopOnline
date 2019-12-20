<!DOCTYPE html>
<html lang="en">
<head>

<title>Inicio de sesion</title>
<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../vendor/bootstrap/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="../jquery/bootstrap/jquery.slim.min.js">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
    require_once "../includes/conexion.php";
    include_once 'admin/modelos/mensajes.php';
  ?>

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          <?php 
          if(isset($_GET["error"])){
            mensaje_danger("Correo no valido");
          }
          if(isset($_GET["novalido"])){
            mensaje_danger("Usuario no valido");
          }
          if(isset($_GET["exito"])){
            mensaje("Contraseña Actualizada");
          }
          if(isset($_GET["fail"])){
            mensaje_danger("Ha ocurrido un error");
          }
          if(isset($_GET["notoken"])){
            mensaje_danger("Ha ocurrido un error");
          }
          if(isset($_GET["nocontra"])){
            mensaje_danger("Las Contraseñas no Coinciden");
          }
              if(isset($_GET["remember"])){
                echo "<h5 class='card-title text-center'>Recordar Contraseña</h5>";
              }else{
                if(isset($_GET["return"])){
                  echo "<h5 class='card-title text-center'>Ingresa Nueva Contraseña</h5>";
                }else{
                  echo "<h5 class='card-title text-center'>Inicio de Sesión</h5>";
                }
                
              }
            ?>
            <form class="form-signin" action="admin/index.php" method="post">
            <?php if(!isset($_GET["return"])){
              echo "<div class='form-label-group'>
                <input type='text' id='inputEmail' class='form-control' name='username' placeholder='Correo' required autofocus>
                <label for='inputEmail'>Correo</label>
              </div>";
            } 
              if(isset($_GET["remember"])){
                echo "<button class='btn btn-lg btn-primary btn-block text-uppercase' type='submit' name='RememberPass'>Enviar</button>
                <a class='btn btn-lg btn-danger btn-block text-uppercase' href='index.php'>Cancelar</a>";
              }else{
                if(isset($_GET["return"])){
                  echo "<div class='form-label-group'>
                  <input type='text' name='token' value='".$_GET["token"]."' hidden>
                  </div>
                  <div class='form-label-group'>
                <input type='password' id='newPassword' class='form-control' name='contrasena' placeholder='Contraseña' required>
                <label for='newPassword'>Nueva Contraseña</label>
              </div>
              <div class='form-label-group'>
                <input type='password' id='newRPassword' class='form-control' name='contrasena2' placeholder='Contraseña' required>
                <label for='newRPassword'>Repite Nueva Contraseña</label>
              </div>
              <button class='btn btn-lg btn-primary btn-block text-uppercase' type='submit' name='recuperar'>Aceptar</button>";
                }else{
                  echo "<div class='form-label-group'>
                <input type='password' id='inputPassword' class='form-control' name='contrasena' placeholder='Contraseña' required>
                <label for='inputPassword'>Contraseña</label>
              </div>
              <button class='btn btn-lg btn-primary btn-block text-uppercase' type='submit' name='login_post'>Iniciar Sesión</button>
              <br>
              <div class='form-label-group text-center'>
              <a class='' href='index.php?remember'>Olvide mi contraseña</a>
              </div>";
                }
                
              }
              ?>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
