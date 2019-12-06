<?php

include_once 'modelos/productos.php';


	if(isset($_POST["registrar"])){

		$uploaddir = '../../imagenes/productos/';
		$uploadfile = $uploaddir . basename($_FILES['file']['name']);
		move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
		$ruta_img = "imagenes/productos/".$_FILES['file']['name'];
		$productos = new productos();
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		$cantidad = $_POST['cantidad'];
        //$img = $_POST['img'];
        $descripcion_corta = $_POST['descripcion_corta'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];


		$sql = "INSERT INTO productos( id_productos, nombre, precio, cantidad, img, descripcion_corta, descripcion, categoria )
		VALUES ('', '$nombre', '$precio', '$cantidad', '$ruta_img', '$descripcion_corta', '$descripcion', '$categoria')";
		//echo $sql;

		$productos->insertarProducto($sql);

	}

	if(isset($_POST['actualizar'])){

		$uploaddir = '../../imagenes/productos/';
		$uploadfile = $uploaddir . basename($_FILES['file']['name']);
		move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
		$ruta_img = "imagenes/productos/".$_FILES['file']['name'];
		$productos = new productos();
		$id = $_POST['id_p'];
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		$cantidad = $_POST['cantidad'];
        //$img = $_POST['img'];
        $descripcion_corta = $_POST['descripcion_corta'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];

		$sql = "UPDATE productos set nombre = '{$nombre}', precio = '{$precio}', cantidad = '{$cantidad}', img = '', descripcion_corta = '{$descripcion_corta}', descripcion = '{$descripcion}', categoria = '{$categoria}', img = '{$ruta_img}' WHERE id_productos = '{$id}'";

		//echo $sql;

		$productos->insertarProducto($sql);
	}

?>
