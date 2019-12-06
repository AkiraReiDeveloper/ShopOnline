<?php

  

    $id = $_GET["id"];
    $nombre = "";
    $img = "";
    $descripcion_cat = "";
    include_once "modelos/categoria.php";
    include_once "CRUD/categoria_crud.php";
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
                <label for="product-title">ID categoria</label>
                <input type="text" name="id" class="form-control" value="<?php echo $id?>" readonly>
            </div>
            <div class="form-group row">
                <label for="product-title">Nombre de la categoria</label>
                <input type="text" name="nombre" class="form-control" value="<?php echo $nombre?>" required>
            </div>
            <div class="form-group row">
                <label for="product-title">Descripcion de la categoria</label>
                <textarea name="descripcion_categoria" id="" cols="30" rows="10" class="form-control" required><?php echo $descripcion_cat?></textarea>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label>Imagen de la categoria</label>
                        <div class="input-group row">
                            <span class="input-group-btn">
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
                <a href="index.php?agregar_categoria" class="btn btn-primary btn-lg"> Cancelar </a>
            </div>
        </aside>

    </form>
</div>
<script src="js/funtions.js"></script>