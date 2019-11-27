        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Ruta de Imagen</th>
                    <th>Categoria</th>
                    <th>Opciones</th>
                  </tr>
                </tfoot>
                
                
                <tbody>
                <?php
                
                foreach ($array as &$valor) {
                $name = $valor['nombre'] ;
                $precio = $valor['precio'] ;
                $cantidad = $valor['cantidad'] ;
                $img = $valor['img'] ;
                $categoria = $valor['categoria'] ;

                echo "<tr>
                <td>". $name."</td>
                <td>".$precio."</td>
                <td>".$cantidad."</td>
                <td>".$img."</td>
                <td>".$categoria."</td>
                <td><a class='btn btn-success btn-block' href='#'><i class='fas fa-search'></i></a>
                <a class='btn btn-primary btn-block' href='#'><i class='fas fa-pencil-alt'></i></a>
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

      