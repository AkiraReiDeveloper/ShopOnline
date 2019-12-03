<div class="col-md-12">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <div class="form-group row ">
                <div class="col-sm">
                <label for="product-title">Usuario</label>
                <input type="text" name="usuario" class="form-control">
                </div>
                <div class="col-sm">
                <img src="images/default_user.png" id='img-user' height="150" width="150">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm">
                <label for="product-title">Nombre</label>
                <input type="text" name="nombre" class="form-control">
                </div>
                <div class="col-sm">
                <label for="product-title">Apellido</label>
                <input type="text" name="apellido" class="form-control">
                </div>
            </div>
            <div class="form-group row col-md-12">
                <label for="product-title">Correo</label>
                <input type="text" name="correo" class="form-control">
            </div>
            <div class="form-group row col-md-12">
                <label for="product-title">Contraseña</label>
                <input type="text" name="contrasena" class="form-control">
            </div>
            <div class="form-group row col-md-12">
                <label for="product-title">Fecha de Registro</label>
                <input type="date" name="fecha" class="form-control">
            </div>
            </div>
        </div>

        <aside id="admin_sidebar" class="col-md-8">
            <div class="form-group">
                <input type="submit" name="guardar" class="btn btn-warning btn-lg" value="Guardar">
                <input type="submit" name="cancelar" class="btn btn-primary btn-lg" value="Cancelar">
            </div>
        </aside>

    </form>
</div>