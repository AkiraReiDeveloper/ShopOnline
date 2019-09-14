<?php
$server = "localhost";
$user = "root";
$pass = "fimaz2019";
$database = "ejemplo";

try{

  $pdo = new PDO("mysql:host=$server;dbname=$database", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $nombre = "Carlos";
  $apellido = "Alonso";
  $correo = "juan_ps@gmoil.me";

  //consulta para crear mysql_tablename
  //$sql = "CREATE TABLE clientes (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(30) NOT NULL, apellido VARCHAR(30) NOT NULL, correo VARCHAR(50) NOT NULL, fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
  $consulta = $pdo->prepare("INSERT INTO clientes( nombre, apellido, correo) VALUES (:nombre,:apellido,:correo)");
  //$consulta->bind_param("sss", $nombre, $apellido, $correo);
  $consulta->bindParam(':nombre', $nombre);
  $consulta->bindParam(':apellido', $apellido);
  $consulta->bindParam(':correo', $correo);

  $consulta->execute();

  //se usa exec() porque no se estan pidiendo registros
  //$pdo->exec($sql);

  $ultimo_id = $pdo->lastInsertId();
  echo "el ultimo registro es:".$ultimo_id;
  //echo "tabla clientes creada.";
}catch(Exeption $e){
  echo $sql . "<br>" . $e->getMessage();
}

  $pdo = null;

?>
