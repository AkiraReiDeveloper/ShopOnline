<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/bootstrap/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../jquery/bootstrap/jquery.slim.min.js">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" id="register_id" action="php/registrerDB.php" method="post">
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" name="Unombre" placeholder="Username" required autofocus>
                <label for="inputUserame">Username</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="inputName" class="form-control" name="nombre" placeholder="Name" required autofocus>
                <label for="inputName">Name</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="inputUserape" class="form-control" name="apellido" placeholder="LastName" required autofocus>
                <label for="inputUserape">LastName</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>

              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="contrasena" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="register_post" >Register</button>
              <a class="d-block text-center mt-2 small" href="../Login/indexLogin.php">Sign In</a>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  </body>
</html>
