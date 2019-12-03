<?php

  

    $id = $_GET["id"];
    $nombre = "";
    $precio = "";
    $cantidad = "";
    $img = "";
    $categoria = "";//date("Y-m-d")
    $descripcion_cor = "";
    $descripcion = "";
    include "modelos/productos.php";
    if($id != null){
        
        $productos = new productos();
        $array = $productos->getProductoPorId($id); 
        foreach ($array as &$valor) {
            
            $id = $valor["id_productos"];
            $nombre = $valor['nombre'] ;
            $precio = $valor['precio'] ;
            $cantidad = $valor['cantidad'] ;
            $img = $valor['img'] ;
            $categoria = $valor['categoria'] ;
            $descripcion_cor = $valor['descripcion-corta'] ;
            $descripcion = $valor['descripcion'] ;
        }
    }

?>
<div class="col-md-12">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <div class="form-group row">
                <label for="product-title">Nombre del producto</label>
                <input type="text" name="nombre_producto" class="form-control" value="<?php echo $nombre?>">
            </div>
            <div class="form-group row">
                <label for="product-title">Descripcion corta del producto</label>
                <textarea name="descripcion_producto" id="" cols="10" rows="5" class="form-control" ><?php echo $descripcion_cor?></textarea>
            </div>
            <div class="form-group row">
                <label for="product-title">Descripcion del producto</label>
                <textarea name="descripcion_producto" id="" cols="10" rows="5" class="form-control" ><?php echo $descripcion?></textarea>
            </div>
            <div class="form-group row">
                <div class="col-xs-2 mx-2">
                    <label for="product-price">Precio</label>
                    <input type="text" name="precio_producto" class="form-control" size="10" value="<?php echo $precio?>">
                </div>
                <div class="col-xs-2 mx-1">
                    <label for="product-price">Cantidad</label>
                    <input type="number" name="cantidad_producto" class="form-control" size="10" value="<?php echo $cantidad?>">
                </div>
                <div class="col-xs-2 mx-2">
                    <label for="product-title">Categoria</label>
                    <select name="produc_category" id="" class="form-control">
                        <option value=""><?php echo $categoria?></option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label>Imagen del Producto</label>
                        <div class="input-group row">
                            <span class="input-group-btn"></span>
                                <span class="btn btn-default btn-file">
                                    <input type="file" id="ImgInp">
                                </span>
                            </span>
                        </div>
                        <img src="../../<?php echo $img?>" id='img-upload' height="150" width="120">
                    </div>
                </div>
            </div>
        </div>

        <aside id="admin_sidebar" class="col-md-4">
            <div class="form-group">
                <input type="submit" name="guardar" class="btn btn-warning btn-lg" value="Guardar">
                <input type="submit" name="cancelar" class="btn btn-primary btn-lg" value="Cancelar">
            </div>
        </aside>

    </form>
</div>