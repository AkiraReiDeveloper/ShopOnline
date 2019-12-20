<?php
include_once "includes/conexion.php";
include_once "mensajes.php";
class usuarios extends ConexionDB{

  private $db;
  private $usuarios;
  private $usuariosPorId;
  private $nameUsuario;
  private $imgUsuario;
  private $tipoUsuario;
  private $idUsuario;

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
      $array = $this->usuariosPorId;
      foreach ($array as $valor) {
        $this->idUsuario = $valor['id'];
        $this->nameUsuario = $valor['usuario'];
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

  public function existeUsuario($user, $password){

    $sql = "SELECT * from clientes WHERE correo = '{$user}' AND contrasena = '{$password}'";

    $resultado = $this->db->prepare($sql);
    
    $resultado->execute(['correo' => $user, 'contrasena' => $password]);
    if($resultado->rowCount()){
      while($registro = $resultado->fetch()){
        $this->usuarios[]=$registro;
      }
      $array = $this->usuarios;
      foreach ($array as $valor) {
        $this->idUsuario = $valor['id'];
        $this->nameUsuario = $valor['usuario'];
        $this->imgUsuario = $valor['img_usuario'];
        $this->tipoUsuario = $valor['tipo'];
      }
			return true;
		}else{
      return false;
    }
  }

  public function validarCorreo($correo){

    $sql = "SELECT * from clientes WHERE correo = '{$correo}'";
    $resultado = $this->db->prepare($sql);
    $resultado->execute(['correo' => $correo]);
    if($resultado->rowCount()){
			return true;
		}else{
      return false;
    }
  }

  public function generarToken($correo){
    $token = bin2hex(random_bytes(24));
    $sql = "UPDATE clientes set token = '{$token}' where correo = '{$correo}'";
    $this->insertarUsuario($sql);
    return $token;
  }

  public function validarToken($token){
    $sql = "SELECT * from clientes WHERE token = '{$token}'";
    $resultado = $this->db->prepare($sql);
    $resultado->execute(['token' => $token]);
    if($resultado->rowCount()){
			return true;
		}else{
      return false;
    }
  }

  public function actualizarContrasena($contrasena, $token){

    $sql = "UPDATE clientes set contrasena = '{$contrasena}' where token = '{$token}'";
    $resultado = $this->db->prepare($sql);
    if($resultado->execute()){
			return true;
		}else{
      return false;
    }
  }

  public function setUsuario($usuario){

    $this->nameUsuario = $usuario;
  }

  public function getUsuarioId(){

    return $this->idUsuario;

  }

  public function getUsuarioName(){

    return $this->nameUsuario;

  }

  public function getUsuarioImagen(){

    return $this->imgUsuario;

  }

  public function getUsuarioTipo(){

    return $this->tipoUsuario;

  }
}
?>
