<?php
require_once("phpmailer.php");
require_once("smtp.php");

//if($_POST){
    if(isset($_GET["RememberPass"])){
        $destino = $_GET["username"];
        $email = "vmrg241096@gmail.com";
        $nombre = "Usuario";
        $asunto = "Recuperar Contraseña";
        $mensaje = "Token";
    }else{
        $destino = $_POST["email"];
        $nombre = $_POST["nombre"];
        $email = "vmrg241096@gmail.com";
        $asunto = $_POST["asunto"];
        $mensaje = $_POST["mensaje"];
    }
// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "vmrg241096@gmail.com";  // Mi cuenta de correo
$smtpClave = "Tostitos1?";  // Mi contraseña

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


$mail->From = $email; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($destino); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Contacto de ShopOnline"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
if(isset($_GET["RememberPass"])){
    $mail->Body="<form action='' method='post' enctype='multipart/form-data'>
    <aside id='admin_sidebar' class='col-md-8'>
        <div class='form-group'>
            <a href='http://localhost/ShopOnline/Login/index.php?return&token=".$_GET["token"]."' class='btn btn-primary btn-lg'> Recuperar Contraseña </a>
        </div>
    </aside>

    </form>";
}else{
$mail->Body = "
<html> 

<body> 

<h1>Recibiste un nuevo mensaje desde el formulario de contacto</h1>

<p>Informacion enviada por el usuario de la web: ShopOnline</p>

<p>nombre: {$nombre}</p>

<p>email: {$email}</p>

<p>asunto: {$asunto}</p>

<p>mensaje: {$mensaje}</p>

</body> 

</html>

<br />";
}


// Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    if(isset($_GET["RememberPass"])){
        header("Location: ../envio_contrasena.php");
    }else{
        header("Location: ../");
    }
    
} else {
    header("Location: ../envio_contrasena.php?error");
}

//}else {
  //  echo "Hay datos vacios.";
//}

?>