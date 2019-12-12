<?php
    include "phpmailer.php";
    include "smtp.php";
    require_once "conexion.php";
    require_once "topBar.php";
    require_once "Login/admin/modelos/usuarios.php";

    $usuario = new usuarios();
    if(isset($_POST["recover"])){

        $correo = $_POST["recover_mail"];
        $longitud = 60;
        $token = bin2hex(openssl_random_pseudo_bytes($longitud));
        //$mail = new PHPMailer(true);
        $verificar_correo = $usuario->enviarCorreo($correo, $token);
    }
?>