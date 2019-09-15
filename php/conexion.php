<?php
$server = "localhost";
$user = "root";
$pass = "fimaz2019";
$database = "ejemplo";

try{

  $pdo = new PDO("mysql:host=$server;dbname=$database", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $ultimo_id = $pdo->lastInsertId();
  echo "el ultimo registro es:".$ultimo_id;
  //echo "tabla clientes creada.";
}catch(Exeption $e){
  echo $sql . "<br>" . $e->getMessage();
}

  $pdo = null;

?>
