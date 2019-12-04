        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
              <?php
              include "modelos/productos.php";
              $productos = new productos();
              $array = $productos->getProducto(); 
              ?>
              <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Ruta de Imagen</th>
                    <th>Categoria</th>
                    <th>Descripcion Corta</th>
                    <th>Descripcion</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                
                foreach ($array as $valor) {?>
                <tr>
                  <td><?php echo $valor['nombre']?></td>
                  <td><?php echo $valor['precio'] ?></td>
                  <td><?php echo $valor['cantidad']?></td>
                  <td><img  src= "../../<?php echo $valor['img'] ?>"id='img-user' height='150' width='120'></td>
                  <td><?php echo $valor['categoria']?></td>
                  <td><?php echo $valor['descripcion-corta']?></td>
                  <td><?php echo $valor['descripcion'] ?></td>
                  <td>
                  <a class='btn btn-primary btn-block' href='index.php?producto_form&id=<?php echo $valor["id_productos"] ?>'><i class='fas fa-pencil-alt'></i></a>
                  <a class='btn btn-danger btn-block' href='#'><i class='fas fa-trash-alt'></i></a>
                  </td>
                </tr>
                
                <?php 
                }
              ?>
              </tbody>
              <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Ruta de Imagen</th>
                    <th>Categoria</th>
                    <th>Descripcion Corta</th>
                    <th>Descripcion</th>
                    <th>Opciones</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      