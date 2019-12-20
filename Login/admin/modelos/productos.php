<?php

include_once "includes/conexion.php";

class productos extends ConexionDB{

  private $db;
  private $productos;
  private $productoPorId;
  
  public function __construct(){

    $this->db = ConexionDB::conexion();
    $this->productos=array();
  }

  public function getProducto(){

    $sql = "select * from productos";
    $resultado = $this->db->prepare($sql);
    if(!$resultado->execute()){
      echo "error";
    }else{
      while($registro = $resultado->fetch()){
        $this->productos[]=$registro;
      }
      return $this->productos;
    }
  }

  public function insertarProducto($sql){

    $resultado = $this->db->prepare($sql);
    if($resultado->execute()){
			mensaje("Registro agregado correctamente");
		}else{
      mensaje_danger("Error al agregar el producto");
    }
  }

  public function getProductoPorId($id_producto){

    $sql = "select * from productos where id_productos =".$id_producto;
    $resultado = $this->db->prepare($sql);
    if(!$resultado->execute()){
      echo "error";
    }else{
      while($registro = $resultado->fetch()){
        $this->productoPorId[]=$registro;
      }
      return $this->productoPorId;
    }
  }

  public function editarProducto(){

  }

  public function eliminarProducto($id){
    $sql = "DELETE from productos WHERE id_productos = '{$id}'";

    $resultado = $this->db->prepare($sql);
    if($resultado->execute()){
			mensaje("Registro eliminado correctamente");
		}else{
      mensaje_danger("Error al eliminar el producto");
    }
/*
    $sql = "select * from productos where id_productos=?";
    $resultado = $this->db->prepare($sql);
    $resultado->bindValue(1, $id_productos);
    if(!$resultado->execute()){
      header("Location:index.php?productos&cmd=1");
    }else{
      if($resultado->rowCount()>0){
        $sql = "delete from productos where id_productos=?";
        $resultado = $this->db->prepare($sql);
        $resultado->bindValue(1, $id_producto);
        if($resultado->execute()){
          header("Location:index.php?productos&cmd=1");
        }else{
          if($resultado->rowCount()>0){
            header("Location:index.php?productos&cmd=2");
          }
        }
      }else{
        header("Location:index.php?productos&cmd=3");
      }
    }*/
  }
  
  public function mostrarTituloProducto($value){

    $sql = "SELECT id_categoria, nombre FROM categoria";
    $resultado = $this->db->prepare($sql);
    $resultado->execute();
    while( $registro = $resultado->fetch()){

        if($registro['id_categoria'] == $value){

              echo "<option value = '".$registro['id_categoria']."' selected> ".$registro['nombre']."</option>";

        }else {

             echo "<option value = '".$registro['id_categoria']."'>".$registro['nombre']."</option>";
        }
    }

  }

  public function getNumeroProducto(){

  }

  public function setComentario($comentario, $id_producto, $id_usuario){
    $sql = "INSERT INTO comentarios( comentario, forenkey_producto, forenkey_usuario )VALUES ( '$comentario', '$id_producto', '$id_usuario')";
    $resultado = $this->db->prepare($sql);
    if($resultado->execute()){
      return true;
		}else{
      return false;
    }
  }
}
?>
