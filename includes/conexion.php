<?php

class ConexionDB{
  public static function conexion(){

    $server = "localhost";
    $user = "root";
    $pass = "";//fimaz2019
    $database = "online_shop";

    try{

      $pdo = new PDO("mysql:host=$server;dbname=$database", $user, $pass);
      $pdo->query("SET NAMES 'utf8'");

      return $pdo;
    }catch(Exeption $e){
      print "Error". $e->getMessage();
      die();
    }

  }

}

if(ConexionDB::conexion()){

  //echo "conectado";
}else{
  echo "error en la conexion";
}


?>
