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

      <div class="col-lg-9">

    <?php
    $conexion = ConexionDB::conexion();
    $id_categoria = $_GET["id_categoria"];
    $sql="select * from categoria where id_categoria=?";
    $resultado = $conexion->prepare($sql);
    $resultado->bindParam(1,$id_categoria);
    if(!$resultado->execute()){
      echo"<h1 style='color:red'></h1>";
    }else{
      while($registro = $resultado->fetch()){
        $id_categoria = $registro["id_categoria"];
        $nombre_categoria = $registro["nombre"];
        $descripcion_categoria = $registro["descripcion_categoria"];
    ?>
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3"><?php echo $nombre_categoria ?></h1>
      <p class="lead"><?php echo $descripcion_categoria ?></p>
      <!--<a href="#" class="btn btn-primary btn-lg">Call to action!</a>-->
    </header>
    <?php
      }
    }
    ?>
    <!-- Page Features -->
    <div class="row text-center">
      <?php
        $sql="select * from productos where categoria=?";
        $resultado = $conexion->prepare($sql);
        $resultado->bindParam(1,$id_categoria);
        if(!$resultado->execute()){
          echo"<h1 style='color:red'></h1>";
        }else{
          while($registro = $resultado->fetch()){
            $id_producto = $registro["id_productos"];
            $nombre_producto = $registro["nombre"];
            $precio_producto = $registro["precio"];
            $image_producto = $registro["img"];
            $descripcion_corta_producto = $registro["descripcion_corta"];
            $descripcion_producto = $registro["descripcion"];

       ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top img_categoria" src="<?php echo $image_producto;?>" alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo $nombre_producto ?></h4>
            <p class="card-text"><?php echo $descripcion_corta_producto?></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Mas Información</a>
          </div>
        </div>
      </div>

      <?php
        }
      }
      ?>

</div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php
  include_once "includes/footer.php" ?>
