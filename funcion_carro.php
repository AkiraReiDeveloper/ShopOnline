<?php

    require_once 'includes/conexion.php';
    include 'includes/topBar.php';

    if(isset($_GET["agregar"])){

        $id_producto = $_GET["agregar"];
        $conexion = ConexionDB::conexion();
        $sql = "select * from productos where id_producto=?";
        $resultado = $conexion->prepare($sql);
        $resultado->bindParam(1,$id_producto);
        if(!$resultado->execute()){
            echo "<h1 style='color:red'>Fallo la consulta </h1>";
        }else{
            if($resultado->rowCount>0){
                while($registro=$resultado->fetch()){
                    if($registro["cantidad"]!=$_SESSION["producto_".$_GET["agregar"]]){

                        $_SESSION["producto_".$_GET["agregar"]]+=1;
                        header("Location: index.php");
                    }else{
                        header("Location: index.php?cantidad=".$registro["cantidad"]."&nombre_producto=".$registro["nombre_producto"]."");
                    }
                    
                }
            }
        }
        
    }

?>