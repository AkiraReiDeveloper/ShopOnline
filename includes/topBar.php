<?php 
ob_start();
session_start();
include "includes/busqueda.php";
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
  <link href="vendor/fontawesome-free/css/font-awesome.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" >
  <div class="container">
    <a class="navbar-brand" href="index.php">AKD Commerce Online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" method="post" action="index.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="query">
        <div class="input-group-append">
          <div class="input-group">
            <button class="btn btn-primary border" type="submit" value="">
              <i class="fa fa-search text-white" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </form>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <?php
        if(isset($_SESSION["user"])){
          echo "<li class='nav-item dropdown no-arrow'>
          <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <img src='".$_SESSION['img']."' class='fa-fw rounded-circle'></img>
            <spam>".$_SESSION['user']."</spam>
          </a>
          <div class='dropdown-menu dropdown-menu-right' aria-labelledby='userDropdown'>
            <a class='dropdown-item' href='#'>Ajustes</a>
            <a class='dropdown-item' href='#'>Actividad</a>
            <div class='dropdown-divider'></div>
            <a class='dropdown-item' href='includes/logout.php'>Salir</a>
          </div>
        </li>";
        if(isset($_SESSION["admin"])){
          echo "<li class='nav-item'>
          <a class='nav-link' href='Login/admin'>Administrar</a>
        </li>";
        }
        }else{
          echo "<li class='nav-item'>
          <a class='nav-link' href='Login/'>Sesión</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='Register/'>Registrar</a>
        </li>";
        }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="contacto/">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-success btn-block" href="carrito_.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito 
          <span class="badge badge-light">
          <?php
            if(isset($_SESSION["total_articulos"])){
              if(isset($_GET["st"])){
                echo $_SESSION["total_articulos"]="0";
              }else{
                if($_SESSION["total_articulos"]>0){
                echo $_SESSION["total_articulos"];
                }
              }
            }else{
              echo "0";
            }
              
            
          ?>
          </span></a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
