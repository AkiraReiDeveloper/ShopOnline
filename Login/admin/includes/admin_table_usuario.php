        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <?php
              include "modelos/usuarios.php";
              $usuarios = new usuarios();
              $array = $usuarios->getUsuario(); 
              ?>
              <thead>
                  <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Fecha de Registro</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Fecha de Registro</th>
                    <th>Opciones</th>
                  </tr>
                </tfoot>
                
                
                <tbody>
                <?php
                
                foreach ($array as &$valor) {

                $id = $valor["id"];
                $user = $valor['usuario'] ;
                $nombre = $valor['nombre'] ;
                $apellido = $valor['apellido'] ;
                $correo = $valor['correo'] ;
                $contrasena = $valor['contrasena'] ;
                $fecha_reg = $valor['fecha_registro'] ;

                echo "<tr>
                <td>".$user."</td>
                <td>".$nombre."</td>
                <td>".$apellido."</td>
                <td>".$correo."</td>
                <td>".$contrasena."</td>
                <td>".$fecha_reg."</td>
                <td>
                <a class='btn btn-primary btn-block' href='index.php?producto_form&id=".$id."'><i class='fas fa-pencil-alt'></i></a>
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