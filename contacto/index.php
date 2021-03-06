<!DOCTYPE html>
<html lang="en">
<head>

<title>Inicio de sesion</title>
<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../vendor/bootstrap/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="../jquery/bootstrap/jquery.slim.min.js">
<link rel="stylesheet" href="css/style.css">

</head>

<body style="background:#1682F1">
  <div class="container" style="margin-top: 0%">
    <div class="row" >
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Contacto</h5>
            <form class="form-signin" action="../includes/pop.php" method="post">
              <div class="form-label-group">
                <input type="text" id="inputNombre" class="form-control" name="nombre" placeholder="Nombre" required autofocus>
                <label for="inputNombre">Nombre</label>
              </div>
              <div class="form-label-group">
                <input type="text" id="inputCorreo" class="form-control" name="email" placeholder="Correo" required >
                <label for="inputCorreo">Correo</label>
              </div>
              <div class="form-label-group">
                <input type="text" id="inputAsunto" class="form-control" name="asunto" placeholder="Asunto" required>
                <label for="inputAsunto">Asunto</label>
              </div>
              <div class="form-label-group">
                <textarea type="text" id="inputMensaje" class="form-control" name="mensaje" placeholder="Mensaje" required ></textarea>
                <label for="inputMensaje"></label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="lt">Enviar</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto" style="margin-top: 12%">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body">
                    <p>AKD Commerce Online</p>
                    <p>17073 Pradera 2</p>
                    <p>Mazatlán</p>
                    <p>Email : vmrg241096@gmail.com</p>
                    <p>Tel. +52 669-1-13-20-23</p>
                </div>
            </div>
        </div>
    </div>
  </div>
</body>

