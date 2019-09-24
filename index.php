<?php
    include "includes/conexion.php";
    require_once "includes/topBar.php";
   ?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <?php
          require_once "includes/slidenav.php";
         ?>

      <div class="col-lg-9">

        <?php
            require_once "includes/slider.php";
           ?>

        <div class="row">
          <?php
            $conexion = ConexionDB::conexion();
            $sql="select * from productos";
            $resultado = $conexion->prepare($sql);
            if(!$resultado->execute()){
              echo"<h1 style='color:red'></h1>";
            }else{
              while($registro = $resultado->fetch()){
                $id_producto = $registro["id_productos"];
                $nombre_producto = $registro["nombre"];
                $precio_producto = $registro["precio"];
                $image_producto = $registro["img"];
                $descripcion_corta_producto = $registro["descripcion-corta"];
                $descripcion_producto = $registro["descripcion"];

           ?>

           <div class="col-lg-4 col-md-6 mb-4">
             <div class="card h-100">
               <a href="producto.php?id_producto=<?php echo $id_producto;?>"><img class="card-img-top" src="<?php echo $image_producto;?>" alt=""></a>
               <div class="card-body">
                 <h4 class="card-title">
                   <a href="producto.php?id_producto=<?php echo $id_producto?>"><?php echo $nombre_producto;?></a>
                 </h4>
                 <h5>&#36;<?php echo $precio_producto;?></h5>
                 <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                 <a href="producto.php?id_producto=<?php echo $id_producto;?>" class="btn btn-primary" target="_blank" > Agregar al Carro</a>
               </div>
               <div class="card-footer">
                 <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
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
        require_once "includes/footer.php";
   ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
