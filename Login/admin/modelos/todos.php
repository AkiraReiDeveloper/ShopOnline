<?php
    include "productos.php";

    $productos = new productos();

    print_r($productos->getProducto());
?>