<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require_once "includes/conexion.php";
    include "includes/topBar.php";
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
                4.0 stars
              </div>
            </div>
            <?php
              }
            }
            ?>
            <!-- /.card -->

            <div class="card card-outline-secondary my-4">
              <div class="card-header">
                Product Reviews
              </div>
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                <hr>
                <a href="#" class="btn btn-success">Leave a Review</a>
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
