<?php
    include "includes/topBar.php";
   ?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
    <!-- Jumbotron Header -->
    <?php if(isset($_GET["error"])){ ?>
    <header class="jumbotron my-4 bg-danger">
      <h1 class="display-3 text-white">Ha ocurriodo un error al enviar la solicitud</h1>
      <p class="lead text-white">Verifica tu conexión a internet</p>
      <!--<a href="#" class="btn btn-primary btn-lg">Call to action!</a>-->
    </header>
    <?php }else{ ?>
    <header class="jumbotron my-4 bg-success">
      <h1 class="display-3 text-white">Se te a enviado un correo para recuperar tu contraseña</h1>
      <p class="lead text-white">Verifica tu correo para recuperar tu contraseña</p>
      <!--<a href="#" class="btn btn-primary btn-lg">Call to action!</a>-->
    </header>
    <?php }?>
      </div>
      <!-- /.col-lg-9 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

  <?php
  include_once "includes/footer.php" ?>