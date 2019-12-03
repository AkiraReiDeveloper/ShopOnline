<?php
include "includes/conexion.php";
class usuarios extends ConexionDB{

  private $db;
  private $usuarios;
  //private $usuariosPorId;

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

  public function insertarUsuario(){

  }

  public function getUsuarioPorId(){


  }

  public function editarUsuario(){

  }

  public function eliminarUsuario(){

  }

  public function mostrarTituloUsuario(){

  }

  public function getNumeroUsuario(){

  }
}
?>
