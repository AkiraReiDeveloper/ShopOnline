<?php

include_once 'modelos/categoria.php';


	if(isset($_POST["registrar"])){

		$uploaddir = '../../imagenes/categorias/';
		$uploadfile = $uploaddir . basename($_FILES['file']['name']);
		move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
		$ruta_img = "imagenes/categorias/".$_FILES['file']['name'];
		$categorias = new categoria();
		$nombre = $_POST['nombre'];
		//$img_categoria = $_POST['img_categoria'];
		$descripcion_categoria = $_POST['descripcion_categoria'];


		$sql = "INSERT INTO categoria( id_categoria, nombre, img_categoria, descripcion_categoria )
		VALUES ('', '$nombre', '$ruta_img', '$descripcion_categoria')";
		//echo $sql;

		$categorias->insertarCategoria($sql);

	}

	if(isset($_POST['actualizar'])){

		$categorias = new categoria();
		$nombre = $_POST['nombre'];
		//$img_categoria = $_POST['img_categoria'];
		$descripcion_categoria = $_POST['descripcion_categoria'];


		$sql = "UPDATE categoria set nombre = '{$nombre}', descripcion_categoria = '{$descripcion_categoria}' WHERE id_categoria = '{$id}'";

		//echo $sql;

		$categorias->insertarCategoria($sql);
	}

?>
