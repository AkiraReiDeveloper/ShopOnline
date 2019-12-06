<?php
    $id = $_GET["id"];
    $usuario = "";
    $nombre = "";
    $apellido = "";
    $correo= "";
    $contrasena = "";
    $fecha = date("Y-m-d");//date("Y-m-d")
    include_once "modelos/usuarios.php";
    include_once "CRUD/usuario_crud.php";
    if($id != null){
        
        $usuarios = new usuarios();
        $array = $usuarios->getUsuarioPorId($id); 
        foreach ($array as &$valor) {
            
            $id = $valor["id"];
            $usuario = $valor["usuario"];
            $nombre = $valor['nombre'] ;
            $apellido = $valor['apellido'] ;
            $correo = $valor['correo'] ;
            $contrasena = $valor['contrasena'] ;
            $img = $valor['img_usuario'] ;
            $fecha = $valor['fecha_registro'] ;
        }
    }

?>
<div class="col-md-12">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <div class="form-group row ">
                <div class="col-sm">
                <label for="product-title">ID Usuario</label>
                <input type="text" name="id_u" class="form-control" value="<?php echo $id?>" readonly>
                </div>
                <div class="col-sm">
                <div class="input-group row">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file">
                                <input type="file" id="file_input" name="file" required>
                            </span>
                        </span>
                    </div>
                <?php 
                    if(isset($_GET['agregar'])){
                        echo "<img src='images/default_user.png' id='img_upload' height='150' width='150'>";
                    }else{
                        echo "<img src='../../".$img."' id='img_upload' height='150' width='150'>";
                    }
                ?> 
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm">
                <label for="product-title">Usuario</label>
                <input type="text" name="usuario" class="form-control" value="<?php echo $usuario?>" required>
                </div>
                <div class="col-sm">
                <label for="product-title">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="<?php echo $nombre?>" require>
                </div>
                <div class="col-sm">
                <label for="product-title">Apellido</label>
                <input type="text" name="apellido" class="form-control" value="<?php echo $apellido?>" require>
                </div>
            </div>
            <div class="form-group row col-md-12">
                <label for="product-title">Correo</label>
                <input type="text" name="correo" class="form-control" value="<?php echo $correo?>" require>
            </div>
            <div class="form-group row col-md-12">
                <label for="product-title">Contraseña</label>
                <input type="text" name="contrasena" class="form-control" value="<?php echo $contrasena?>" require>
            </div>
            </div>
        </div>

        <aside id="admin_sidebar" class="col-md-8">
            <div class="form-group">
                <?php 
                    if(isset($_GET['agregar'])){
                        echo "<input type='submit' name='registrar' class='btn btn-success btn-lg' value='Agregar'>";
                    }else{
                        echo "<input type='submit' name='actualizar' class='btn btn-warning btn-lg' value='Actualizar'>";
                    }
                ?>
                <a href="index.php?agregar_usuario" class="btn btn-primary btn-lg"> Cancelar </a>
            </div>
        </aside>

    </form>
</div>
<script src="js/funtions.js"></script>