<?php
include_once "includes/conexion.php";
include_once "modelos/mensajes.php";
class usuarios extends ConexionDB{

  private $db;
  private $usuarios;
  private $usuariosPorId;

  public function __construct(){

    $this->db = ConexionDB::conexion();
    $this->usuarios=array();
  }

  public function getUsuario(){

    $sql = "select * from clientes";
    $resultado = $this->db->prepare($sql);
    if(!$resultado->execute()){
      echo "error";
    }else{
      while($registro = $resultado->fetch()){
        $this->usuarios[]=$registro;
      }
      return $this->usuarios;
    }

  }

  public function insertarUsuario($sql){
    //echo $sqls;
    $resultado = $this->db->prepare($sql);
    if($resultado->execute()){
			mensaje("Registro agregado correctamente");
		}else{
      mensaje_danger("Error al agregar el producto");
    }
  }

  public function getUsuarioPorId($id_usuario){

    $sql = "select * from clientes where id =".$id_usuario;
    $resultado = $this->db->prepare($sql);
    if(!$resultado->execute()){
      echo "error";
    }else{
      while($registro = $resultado->fetch()){
        $this->usuariosPorId[]=$registro;
      }
      return $this->usuariosPorId;
    }
  }

  public function editarUsuario(){

  }

  public function eliminarUsuario($id){

    $sql = "DELETE from clientes WHERE id = '{$id}'";

    $resultado = $this->db->prepare($sql);
    if($resultado->execute()){
			mensaje("Registro eliminado correctamente");
		}else{
      mensaje_danger("Error al eliminar el producto");
    }
  }

  public function mostrarTituloUsuario(){

  }

  public function getNumeroUsuario(){

  }
}
?>
