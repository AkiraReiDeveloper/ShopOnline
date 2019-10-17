<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AKD Commerce Online</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/fontawesome-free/css/fontawesome.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">AKD Commerce Online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Login/indexLogin.php">Inicio de Sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Register/register.php">Registrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto/indexContacto.php">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-success btn-block" href="carrito_.php">Carrito<i class="fas fa-shopping-cart"></i></a>
        </li>

      </ul>
    </div>
  </div>
</nav>
