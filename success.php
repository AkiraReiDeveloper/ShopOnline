<?php
require_once 'includes/conexion.php';
include 'includes/topBar.php';

/**
* crear tabla 'pedido'
* id_pedido (int) primary key
* estatus_pedido varchar
* monto_pedido float
* codigo_pedido varchar
* divisa_pedido varchar
**/
    if(!empty($_GET)){
        if(isset($_GET['st']))
         $estatus_pedido = $_GET['st'];
        if(isset($_GET['amt']))
         $monto_pedido = $_GET['amt'];
        if(isset($_GET['tx']))
         $codigo_pedido = $_GET['tx'];
        if(isset($_GET['cc']))
         $divisa_pedido = $_GET['cc'];
    }    
            $conexion = ConexionDB::conexion();
            $sql="insert into pedido values (null,?,?,?,?)";
            $resultado = $conexion->prepare($sql);
            $resultado->bindParam(1,$estatus_pedido);
            $resultado->bindParam(2,$monto_pedido);
            $resultado->bindParam(3,$codigo_pedido);
            $resultado->bindParam(4,$divisa_pedido);
            if($resultado->execute()){
              echo"<h1 id='success'></h1>";
            }else{
              echo"<h1 id='fail>Algo salio mal</h1>'";
            }
            session_destroy();

    include 'includes/footer.php';
?>
