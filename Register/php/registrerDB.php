<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "online_shop";

try{

  $pdo = new PDO("mysql:host=$server;dbname=$database", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if( isset($_POST['register_post']) ){

  $nombreUsuario = $_POST["Unombre"];
  $nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$correo = $_POST["email"];
  $contrasena = md5($_POST["contrasena"]);

  //consulta para crear mysql_tablename
  //$sql = "CREATE TABLE clientes (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(30) NOT NULL, apellido VARCHAR(30) NOT NULL, correo VARCHAR(50) NOT NULL, fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
  $consulta = $pdo->prepare("INSERT INTO clientes( usuario, nombre, apellido, correo, contrasena) VALUES (:usuario, :nombre,:apellido,:correo,:contrasena)");
  //$consulta->bind_param("sss", $nombre, $apellido, $correo);
  $consulta->bindParam(':usuario', $nombreUsuario);
  $consulta->bindParam(':nombre', $nombre);
  $consulta->bindParam(':apellido', $apellido);
  $consulta->bindParam(':correo', $correo);
  $consulta->bindParam(':contrasena', $contrasena);

  //se usa exec() porque no se estan pidiendo registros
  //$pdo->exec($sql);

  $consulta->execute();

}

  $ultimo_id = $pdo->lastInsertId();
  echo "el ultimo registro es:".$ultimo_id;
  //echo "tabla clientes creada.";
}catch(Exeption $e){
  echo $sql . "<br>" . $e->getMessage();
}

  $pdo = null;
  $consulta = null;
?>
