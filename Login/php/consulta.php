<?php

  if(isset($_POST["login_post"])){

    $correo = htmlentities(addslashes($_POST["email"]));
    $password = htmlentities(addslashes($_POST["password"]));

    if(empty($correo) and empty($password)){


    }else{

      $conexion = ConexionDB::conexion();
      $sql = "select * from clientes where correo=?";
      $resultado = $conexion->prepare($sql);
      $resultado->bindValue(1,$correo);

      if(!$resultado->execute()){


      }else{

        if($resultado->rowCount()>0){

          while($registro=$resultado->fetch()){

            $id_usuario = $registro["id"];
            $usuario = $registro["usuario"];
            $password_bd = $registro["contrasena"];
            $nombre = $registro["nombre"];
            $correo_bd = $registro["correo"];

          }

          if(($correo == $correo_bd)&&($password == $password_bd)){

            header("Location:admin");
          }else{

            header("Location:login.php");
          }
        }else{


        }
      }
    }
  }
 ?>
