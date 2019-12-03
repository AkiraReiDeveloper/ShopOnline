<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Data Table Example</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <?php
      include "modelos/categoria.php";
      $categorias = new categoria();
      $array = $categorias->getCategoria();
      ?>
      <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Descripcion</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Descripcion</th>
            <th>Opciones</th>
          </tr>
        </tfoot>


        <tbody>
        <?php

        foreach ($array as &$valor) {
        $id = $valor['id_categoria'] ;
        $name = $valor['nombre'] ;
        $img = $valor['img_categoria'] ;
        $descripcion_cat = $valor['descripcion_categoria'] ;

        echo "<tr>
        <td>".$id."</td>
        <td>".$name."</td>
        <td><img src='../../".$img."' id='img-user' height='100' width='170'></td>
        <td>".$descripcion_cat."</td>
        <td>
          <a class='btn btn-primary btn-block' href='index.php?categoria_form&id=".$id."'><i class='fas fa-pencil-alt'></i></a>
          <a class='btn btn-danger btn-block' href='#'><i class='fas fa-trash-alt'></i></a>
        </td>
      </tr>";
        ?>

        </tbody>
        <?php
        }
      ?>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<p class="small text-center text-muted my-5">
  <em>More table examples coming soon...</em>
</p>
