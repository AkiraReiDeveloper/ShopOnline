<?php

include_once 'modelos/usuarios.php';


	if(isset($_POST["registrar"])){

		$uploaddir = '../../imagenes/usuarios/';
		$uploadfile = $uploaddir . basename($_FILES['file']['name']);
		move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
		$ruta_img = "imagenes/usuarios/".$_FILES['file']['name'];
		$usuarios = new usuarios();
		$usuario = $_POST['usuario'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$contrasena = $_POST['contrasena'];
		//$fecha = $_POST['fecha'];


		$sql = "INSERT INTO clientes( id, usuario, nombre, apellido, correo, contrasena, img_usuario, token, tipo )
		VALUES ('', '$usuario', '$nombre', '$apellido', '$correo', '$contrasena', '$ruta_img', '', '2')";
		//echo $sql;

		$usuarios->insertarUsuario($sql);

	}

	if(isset($_POST['actualizar'])){

		$uploaddir = '../../imagenes/usuarios/';
		$uploadfile = $uploaddir . basename($_FILES['file']['name']);
		move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
		$ruta_img = "imagenes/usuarios/".$_FILES['file']['name'];
		$usuarios = new usuarios();
		$id = $_POST['id_u'];
		$usuario = $_POST['usuario'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$contrasena = $_POST['contrasena'];
		//$fecha = $_POST['fecha'];

		$sql = "UPDATE clientes set usuario = '{$usuario}', nombre = '{$nombre}', apellido = '{$apellido}', correo = '{$correo}', contrasena = '{$contrasena}', img_usuario = '{$ruta_img}', token = '' WHERE id = '{$id}'";

		//echo $sql;

		$usuarios->insertarUsuario($sql);
	}

?>
