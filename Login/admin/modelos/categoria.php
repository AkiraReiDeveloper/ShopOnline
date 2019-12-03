<?php
include "includes/conexion.php";

class categoria extends ConexionDB{

  private $db;
  private $categorias;
  private $categoriaPorId;

  public function __construct(){

    $this->db = ConexionDB::conexion();
    $this->categorias=array();
  }

  public function getCategoria(){

    $sql = "select * from categoria";
    $resultado = $this->db->prepare($sql);
    if(!$resultado->execute()){
      echo "error";
    }else{
      while($registro = $resultado->fetch()){
        $this->categorias[]=$registro;
      }
      return $this->categorias;
    }
  }

  public function insertarCategoria(){

  }

  public function getCategoriaPorId($id_categoria){

    $sql = "select * from categoria where id_categoria =".$id_categoria;
    $resultado = $this->db->prepare($sql);
    if(!$resultado->execute()){
      echo "error";
    }else{
      while($registro = $resultado->fetch()){
        $this->categoriaPorId[]=$registro;
      }
      return $this->categoriaPorId;
    }
  }

  public function editarCategoria(){

  }

  public function eliminarCategoria(){

  }

  public function mostrarTituloCategoria(){

  }

  public function getNumeroCategoria(){

  }
}
?>
