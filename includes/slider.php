<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <?php
      $i = '1';
      $conexion = ConexionDB::conexion();
      $sql="select * from categoria";
      $resultado = $conexion->prepare($sql);
      if(!$resultado->execute()){
        echo"<h1 style='color:red'>Error</h1>";
      }else{
        while($registro = $resultado->fetch()){
          $id_categoria = $registro["id_categoria"];
          $image_producto = $registro["img_categoria"];
          $active = $i == "1" ? "active" : "";
          $i = $i + 1;
    ?>

    <div class="carousel-item <?php echo $active ?>">
      <a href="categoria.php?id_categoria=<?php echo $id_categoria ?>"><img class="d-block img-fluid" src="<?php echo $image_producto?>" alt="<?php echo $id_categoria ?>"></a>
    </div>

    <?php
      }
    }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
