<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "online_shop";

try{

  $pdo = new PDO("mysql:host=$server;dbname=$database", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if( isset($_POST['login_post']) ){

  $correo = $_POST["email"];
  $contrasena = md5($_POST["password"]);

  $sql = $pdo->prepare("SELECT * FROM clientes WHERE (correo = :correo or usuario = :usuario) and contrasena = :contrasena");
  $sql->bindParam(':usuario', $correo);
  $sql->bindParam(':correo', $correo);
  $sql->bindParam(':contrasena', $contrasena);
  $sql->execute();
  if( $sql->rowCount() == 1){
    echo "<script>
        alert( 'Conectado' );
        </script>";
  }else{
    echo "<script>
        alert( 'Usuario o Contraseña Incorrectos' );
        </script>";
  }
  }

  $ultimo_id = $pdo->lastInsertId();
  echo "el ultimo registro es:".$ultimo_id;
  //echo "tabla clientes creada.";
}catch(Exeption $e){
  echo "Correo o Contraseña Incorrectos";
}

  $pdo = null;
  $consulta = null;
?>
