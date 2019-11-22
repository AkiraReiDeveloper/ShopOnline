<?php

include "includes/conexion.php";

class productos extends ConexionDB{

  private $db;
  private $productos;
  private $productoPorId;
  
  public function __construct(){

    $this->db = ConexionDB::conexion();
    $this->categorias=array();
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

  public function insertarProducto(){

  }

  public function getProductoPorId(){


  }

  public function editarProducto(){

  }

  public function eliminarProducto(){
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

  public function mostrarTituloProducto(){

  }

  public function getNumeroProducto(){

  }
}
?>
