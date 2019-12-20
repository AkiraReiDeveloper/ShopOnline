<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require_once "includes/conexion.php";
    include "includes/topBar.php";
    include_once "Login/admin/modelos/usuarios.php";
    include_once "Login/admin/modelos/productos.php";
    $usuario = new usuarios();
    $producto = new productos();
   ?>
   <!-- Page Content -->
   <div class="container">

     <div class="row">

       <?php
           include "includes/slidenav.php";
          ?>
          <!-- /.col-lg-3 -->

          <div class="col-lg-9">
            <?php
              $id_producto = $_GET["id_producto"];
              $conexion = ConexionDB::conexion();
              $sql="select * from productos where id_productos=".$id_producto;
              $resultado = $conexion->prepare($sql);
              if(!$resultado->execute()){
                echo"<h1 style='color:red'>Error</h1>";
              }else{
                while($registro = $resultado->fetch()){
                  $id_producto = $registro["id_productos"];
                  $nombre_producto = $registro["nombre"];
                  $precio_producto = $registro["precio"];
                  $image_producto = $registro["img"];
                  $descripcion_corta_producto = $registro["descripcion_corta"];
                  $descripcion_producto = $registro["descripcion"];

             ?>

            <div class="card mt-4">
              <img class="img_producto card-img-top img-fluid" src="<?php echo $image_producto ?>" alt="">
              <div class="card-body">
                <h3 class="card-title"><?php echo $nombre_producto ?></h3>
                <h4>&#36;<?php echo $precio_producto ?></h4>
                <p class="card-text"><?php echo $descripcion_producto ?></p>
                <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                4.0 Calificación
              </div>
            </div>
            <?php
              }
            }
            ?>
            <!-- /.card -->

            <div class="card card-outline-secondary my-4">
              <div class="card-header">
                Comentarios
              </div>
              <div class="card-body">
              <?php
            
                $conexion = ConexionDB::conexion();
                $sql="select * from comentarios where forenkey_producto=".$_GET["id_producto"];
                $resultado = $conexion->prepare($sql);
                if(!$resultado->execute()){
                  echo"<h1 style='color:red'></h1>";
                }else{
                  $registro = $resultado->fetchAll();
                  foreach($registro as $value){
                    $id_comentario = $value["id_comentario"];
                    $comentario = $value["comentario"];
                    $fecha_comentario = $value["fecha_comentario"];
                    $usuario_array = $usuario->getUsuarioPorId($value["forenkey_usuario"]);
                    $name_usuario = $usuario->getUsuarioName();

              ?>
                <p><?php echo $comentario?></p>
                <small class="text-muted">Posteado por <?php echo $name_usuario?> el <?php echo $fecha_comentario?></small>
                <?php 
                if(isset($_SESSION["user"]) || isset($_SESSION["admin"])){
                  if($_SESSION["id_user"] == $usuario->getUsuarioId()){
                    echo "<a href='' class='btn btn-success fa fa-edit'></a>";
                  } 
                } ?>
                <hr>
                <?php
                  }
                }
                if(isset($_POST["comentario"])){
                  $id_product = $_POST["id_product"];
                  $coment = $_POST["coment"];
                  $id_user = $_SESSION["id_user"];
                  if($producto->setComentario($coment, $id_product, $id_user)){
                    header("location: producto.php?id_producto=".$id_producto);
                  }
                }
                if(isset($_SESSION["user"]) || isset($_SESSION["admin"])){
                  if(isset($_GET["comentar"])){
                    echo "
                    <form action='' method='post'>
                    <div class='form-group row'>
                    <label for='product-title'>Agrega tu comentario</label>
                    <textarea name='coment' id='' cols='10' rows='5' class='form-control' required></textarea>
                    </div>
                    <input type='text' name='id_product' class='form-control' value='".$_GET['id_producto']."' hidden>
                    <a href='producto.php?id_producto=".$_GET['id_producto']."' class='btn btn-danger btn-lg'>Cancelar</a>
                    <input type='submit' name='comentario' class='btn btn-success btn-lg' value='Aplicar'>
                    <form>
                    ";
                  }else{
                  ?>
                  <a href="producto.php?comentar&id_producto=<?php echo $_GET['id_producto']?>" class="btn btn-success">Dejar un comentario</a>
                  <?php 
                  } 
                }
                ?>
              </div>
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col-lg-9 -->

        </div>

      </div>
      <!-- /.container -->
      <?php
      include_once "includes/footer.php";
      ?>
