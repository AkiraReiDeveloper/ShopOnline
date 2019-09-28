<div class="col-lg-3">

  <h1 class="lead my-4">Categorias</h1>
  <div class="list-group">
    <?php
      $conexion = ConexionDB::conexion();
      $sql = "select * from categoria";
      $resultado = $conexion->prepare($sql);
      if(!$resultado->execute()){
        echo"<h1 style='color:red'></h1>";
      }else{
        while($registro = $resultado->fetch()){
          $id_categoria = $registro["id_categoria"];
          $titulo_categoria = $registro["nombre"];
          echo "<a href='categoria.php?id_categoria=$id_categoria' class='list-group-item'>$titulo_categoria</a>";
        }
      }

     ?>
     <!--
    <a href="#" class="list-group-item">Category 1</a>
    <a href="#" class="list-group-item">Category 2</a>
    <a href="#" class="list-group-item">Category 3</a>-->
  </div>

</div>
<!-- /.col-lg-3 -->
