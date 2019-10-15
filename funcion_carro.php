<?php

    require_once 'includes/conexion.php';
    include 'includes/topBar.php';

    if(isset($_GET["agregar"])){

        $_SESSION["producto_".$_GET["agregar"]]+=1;
        header("Location: index.php");
    }

?>