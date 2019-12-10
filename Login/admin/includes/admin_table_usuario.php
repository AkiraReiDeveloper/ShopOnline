        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <a class=' btn btn-success ' href='index.php?usuario_form&id=&agregar'><i class='fas fa-plus'> Agregar </i></a>
              <br><br>
        
              <?php
              include_once "modelos/usuarios.php";
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
                    <th>Perfil</th>
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
                    <th>Perfil</th>
                    <th>Fecha de Registro</th>
                    <th>Opciones</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php
                
                foreach ($array as $valor) {?>
                <tr>
                <td><?php echo $valor['usuario'] ?></td>
                <td><?php echo $valor['nombre'] ?></td>
                <td><?php echo $valor['apellido']  ?></td>
                <td><?php echo $valor['correo'] ?></td>
                <td><?php echo $valor['contrasena'] ?></td>
                <td><img  src= "../../<?php echo $valor['img_usuario'] ?>"id='img-user' height='150' width='150'></td>
                <td><?php echo $valor['fecha_registro'] ?></td>
                <td>
                <a class='btn btn-primary btn-block' href='index.php?usuario_form&id=<?php echo $valor['id'] ?>'><i class='fas fa-pencil-alt'></i></a>
                <a class='btn btn-danger btn-block' href='index.php?agregar_usuario&eliminar&id=<?php echo $valor['id'] ?>' ><i class='fas fa-trash-alt'></i></a>
                </td>
              </tr>
                <?php 
                }
              ?></tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>