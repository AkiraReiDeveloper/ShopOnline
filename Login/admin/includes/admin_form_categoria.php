<?php

  

    $id = $_GET["id"];
    $nombre = "";
    $img = "";
    $descripcion_cat = "";
    include "modelos/categoria.php";
    if($id != null){
        
        $categoria = new categoria();
        $array = $categoria->getCategoriaPorId($id); 
        foreach ($array as &$valor) {
            
            $id = $valor['id_categoria'] ;
            $nombre = $valor['nombre'] ;
            $img = $valor['img_categoria'] ;
            $descripcion_cat = $valor['descripcion_categoria'] ;
        }
    }

?>
<div class="col-md-12">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <div class="form-group row">
                <label for="product-title">Nombre de la categoria</label>
                <input type="text" name="nombre_producto" class="form-control" value="<?php echo $nombre?>">
            </div>
            <div class="form-group row">
                <label for="product-title">Descripcion de la categoria</label>
                <textarea name="descripcion_producto" id="" cols="30" rows="10" class="form-control"><?php echo $descripcion_cat?></textarea>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label>Imagen de la categoria</label>
                        <div class="input-group row">
                            <span class="input-group-btn">
                                <span class="btn btn-default btn-file">
                                    <input type="file" id="ImgInp">
                                </span>
                            </span>
                        </div>
                        <img src="../../<?php echo $img?>" id='img-upload' height="100" width="170">
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