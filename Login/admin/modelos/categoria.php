<?php
include_once "includes/conexion.php";

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

  public function insertarCategoria($sql){

    //echo $sql;
    $resultado = $this->db->prepare($sql);
    if($resultado->execute()){
			mensaje("Registro agregado correctamente");
		}else{
      mensaje_danger("Error al agregar el registro");
    }
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

  public function eliminarCategoria($id){

    $sql = "DELETE from categoria WHERE id_categoria = '{$id}'";

    $resultado = $this->db->prepare($sql);
    if($resultado->execute()){
			mensaje("Registro eliminado correctamente");
		}else{
      mensaje_danger("Error al eliminar el producto");
    }
  }

  public function mostrarTituloCategoria($value){

    $sql = "SELECT id_categoria, nombre FROM categoria";
    $resultado = $this->db->prepare($sql);
 
    while( $registro = $resultado->fetch()){

        if($registro['nombre'] == $value){

              echo "<option value = '".$registro['id_categoria']."' selected> ".$registro['nombre'];

        }else {

             echo "<option value = '".$registro['id_categoria']."'>".$registro['nombre'];
        }
    }

  }

  public function getNumeroCategoria(){

  }
}
?>
