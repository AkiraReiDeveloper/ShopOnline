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
    //include_once "../includes/topBar.php";
    include_once "../includes/conexion.php";
    //include_once "php/consulta.php";
  ?>

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="admin/index.php" method="post">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="contrasena" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1" >
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login_post">Sign in</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>