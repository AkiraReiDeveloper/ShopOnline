<?php
include "includes/topBar.php";
?>


  <div id="wrapper">

    <?php
    include "includes/side_nav.php";
    ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <?php
        $titulo_seccion = "";
        $pagina = "";
        /*
        /~multiplataforma7/ShopOnline/Login/admin/
        /~multiplataforma7/ShopOnline/Login/admin/index.php
        */
        if($_SERVER['REQUEST_URI']=="/shoponline/Login/admin/"||$_SERVER['REQUEST_URI']=="/shoponline/Login/admin/index.php"){
          $titulo_seccion = "Resumen";
          $pagina = "includes/icon_cards.php";
          $bottom_content = "includes/admin_bottom.php";
          $footer = "includes/admin_fotter.php";
        }
        if(isset($_GET['agregar_producto'])){
          $titulo_seccion = "Agregar Producto";
          $pagina = "includes/admin_agregar_producto.php";
          $bottom_content = "includes/admin_bottom.php";
          $footer = "includes/admin_fotter.php";
        }
        if(isset($_GET['actualizar_producto'])){
          $titulo_seccion = "Actualizar Producto";
          $pagina = "includes/admin_actualizar_producto.php";
          $bottom_content = "includes/admin_bottom.php";
          $footer = "includes/admin_fotter.php";
        }
        if(isset($_GET['eliminar_producto'])){
          $titulo_seccion = "Eliminar Producto";
          $pagina = "includes/admin_eliminar_producto.php";
          $bottom_content = "includes/admin_bottom.php";
          $footer = "includes/admin_fotter.php";
        }
        if(isset($_GET['agregar_categoria'])){
          $titulo_seccion = "Agregar Categoria";
          $pagina = "includes/admin_agregar_categoria.php";
          $bottom_content = "includes/admin_bottom.php";
          $footer = "includes/admin_fotter.php";
        }
        if(isset($_GET['actualizar_categoria'])){
          $titulo_seccion = "Actualizar Categoria";
          $pagina = "includes/admin_actualizar_categoria.php";
          $bottom_content = "includes/admin_bottom.php";
          $footer = "includes/admin_fotter.php";
        }
        if(isset($_GET['eliminar_categoria'])){
          $titulo_seccion = "Eliminar Categoria";
          $pagina = "includes/admin_eliminar_categoria.php";
          $bottom_content = "includes/admin_bottom.php";
          $footer = "includes/admin_fotter.php";
        }
        if(isset($_GET['agregar_usuario'])){
          $titulo_seccion = "Agregar Usuario";
          $pagina = "includes/admin_agregar_usuario.php";
          $bottom_content = "includes/admin_bottom.php";
          $footer = "includes/admin_fotter.php";
        }
        if(isset($_GET['actualizar_usuario'])){
          $titulo_seccion = "Actualizar Usuario";
          $pagina = "includes/admin_actualizar_usuario.php";
          $bottom_content = "includes/admin_bottom.php";
          $footer = "includes/admin_fotter.php";
        }
        if(isset($_GET['eliminar_usuario'])){
          $titulo_seccion = "Eliminar Usuario";
          $pagina = "includes/admin_eliminar_usuario.php";
          $bottom_content = "includes/admin_bottom.php";
          $footer = "includes/admin_fotter.php";
        }

        
        ?>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active"> <?php echo $titulo_seccion?></li>
        </ol>

        <!-- Icon Cards-->
        <?php require_once($pagina); ?>

        <!-- Area Chart Example-->

        <!-- DataTables Example -->
        
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php include_once $footer; ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <?php include_once $bottom_content;?>

</body>

</html>