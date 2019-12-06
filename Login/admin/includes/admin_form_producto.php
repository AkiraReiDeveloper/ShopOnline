<?php

  

    $id = $_GET["id"];
    $nombre = "";
    $precio = "";
    $cantidad = "";
    $img = "";
    $categoria = "";//date("Y-m-d")
    $descripcion_cor = "";
    $descripcion = "";
    include_once "modelos/productos.php";
    include_once "CRUD/productos_crud.php";
    $productos = new productos();
    if($id != null){

        $array = $productos->getProductoPorId($id); 
        foreach ($array as &$valor) {
            
            $id = $valor["id_productos"];
            $nombre = $valor['nombre'] ;
            $precio = $valor['precio'] ;
            $cantidad = $valor['cantidad'] ;
            $img = $valor['img'] ;
            $categoria = $valor['categoria'] ;
            $descripcion_cor = $valor['descripcion_corta'] ;
            $descripcion = $valor['descripcion'] ;
        }
    }

?>
<div class="col-md-12">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <div class="form-group row">
                <label for="product-title">ID Producto</label>
                <input type="text" name="id_p" class="form-control" value="<?php echo $id?>" readonly>
            </div>
            <div class="form-group row">
                <label for="product-title">Nombre del producto</label>
                <input type="text" name="nombre" class="form-control" value="<?php echo $nombre?>" required>
            </div>
            <div class="form-group row">
                <label for="product-title">Descripcion corta del producto</label>
                <textarea name="descripcion_corta" id="" cols="10" rows="5" class="form-control" required><?php echo $descripcion_cor?></textarea>
            </div>
            <div class="form-group row">
                <label for="product-title">Descripcion del producto</label>
                <textarea name="descripcion" id="" cols="10" rows="5" class="form-control" required><?php echo $descripcion?></textarea>
            </div>
            <div class="form-group row">
                <div class="col-xs-2 mx-2">
                    <label for="product-price">Precio</label>
                    <input type="text" name="precio" class="form-control" size="10" value="<?php echo $precio?>" required>
                </div>
                <div class="col-xs-2 mx-1">
                    <label for="product-price">Cantidad</label>
                    <input type="number" name="cantidad" class="form-control" size="10" value="<?php echo $cantidad?>" required>
                </div>
                <div class="col-xs-2 mx-2">
                    <label for="product-title">Categoria</label>
                    <select name="categoria" id="" class="form-control">
                        <?php $productos->mostrarTituloProducto($categoria)?>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label>Imagen del Producto</label>
                        <div class="input-group row">
                            <span class="input-group-btn"></span>
                                <span class="btn btn-default btn-file">
                                    <input type="file" id="file_input" name="file" required>
                                </span>
                            </span>
                        </div>
                        <?php 
                        if(isset($_GET['agregar'])){
                            echo "<img src='../../imagenes/add_image.jpg' id='img_upload' height='100' width='170'>";
                        }else{
                            echo "<img src='../../".$img."' id='img_upload' height='100' width='170'>";
                        }
                        ?> 
                    </div>
                </div>
            </div>
        </div>

        <aside id="admin_sidebar" class="col-md-4">
            <div class="form-group">
            <?php 
                    if(isset($_GET['agregar'])){
                        echo "<input type='submit' name='registrar' class='btn btn-success btn-lg' value='Agregar'>";
                    }else{
                        echo "<input type='submit' name='actualizar' class='btn btn-warning btn-lg' value='Actualizar'>";
                    }
                ?>
                <a href="index.php?agregar_producto" class="btn btn-primary btn-lg"> Cancelar </a>
            </div>
        </aside>

    </form>
</div>
<script src="js/funtions.js"></script>