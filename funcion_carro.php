<?php

    require_once 'includes/conexion.php';
    include 'includes/topBar.php';

    if(isset($_GET["agregar"])){

        $id_producto = $_GET["agregar"];
        $conexion = ConexionDB::conexion();
        $sql = "select * from productos where id_productos=?";
        $resultado = $conexion->prepare($sql);
        $resultado->bindParam(1,$id_producto);
        if(!$resultado->execute()){
            echo "<h1 style='color:red'>Fallo la consulta </h1>";
        }else{
            if($resultado->rowCount()>0){
                while($registro=$resultado->fetch()){
                    if($registro["cantidad"]!=$_SESSION["producto_".$_GET["agregar"]]){

                        $_SESSION["producto_".$_GET["agregar"]]+=1;
                        $_SESSION["total_articulos"]++;
                        header("Location: carrito_.php");
                    }else{
                        header("Location: carrito_.php?cantidad=".$registro["cantidad"]."&nombre_producto=".$registro["nombre"]."");
                    }
                    
                }
            }
        }
        
    }

    if(isset($_GET["remover"])){
        $_SESSION["producto_".$_GET["remover"]]--;
        $_SESSION["total_articulos"]--;
        if($_SESSION["producto_".$_GET["remover"]]<1){
            unset($_SESSION["producto_".$_GET["remover"]]);
            header("Location: carrito_.php");
        }else{
            header("Location: carrito_.php");
        }
    }

    if(isset($_GET["eliminar"])){
        $_SESSION["total_articulos"]-=$_SESSION["producto_".$_GET["eliminar"]];
        unset($_SESSION["producto_".$_GET["eliminar"]]);
        //$_SESSION["producto_".$_GET["eliminar"]]=0;
        header("Location: carrito_.php");
    }

?>
