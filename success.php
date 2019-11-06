<?php
require_once 'include/ConexionBD.php';
include 'includes/top.php';

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
         $estatus_pedido = $_GET['amt'];
        if(isset($_GET['tx']))
         $estatus_pedido = $_GET['tx'];
        if(isset($_GET['cc']))
         $estatus_pedido = $_GET['cc'];
    }    
            $conexion = ConexionDB::conexion();
            $sql="insert into pedidos values (?,?,?,?)";
            $resultado = $conexion->prepare($sql);
            $resultado->bindParam(1,$estatus_pedido);
            $resultado->bindParam(2,$monto_pedido);
            $resultado->bindParam(3,$codigo_pedido);
            $resultado->bindParam(4,$divisa_pedido);
            if(!$resultado->execute()){
              echo"<h1 id='success'></h1>";
            }else{
              echo"<h1 id='fail>Algo salio mal</h1>'"
            }
            session_destroy();

    include 'includes/footer.php';
?>
