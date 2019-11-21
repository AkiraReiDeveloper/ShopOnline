<div class="col-md-12">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <div class="form-group row">
                <label for="product-title">Nombre del producto</label>
                <input type="text" name="nombre_producto" class="form-control">
            </div>
            <div class="form-group row">
                <label for="product-title">Descripcion del producto</label>
                <textarea name="descripcion_producto" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group row">
                <div class="col-xs-2 mx-2">
                    <label for="product-price">Precio</label>
                    <input type="text" name="precio_producto" class="form-control" size="10">
                </div>
                <div class="col-xs-2 mx-2">
                    <label for="product-price">Cantidad</label>
                    <input type="text" name="cantidad_producto" class="form-control" size="10">
                </div>
                <div class="col-xs-2 mx-2">
                    <label for="product-title">Categoria</label>
                    <select name="produc_category" id="" class="form-control">
                        <option value="">Seleccionar Categoria</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Imagen del Producto</label>
                        <div class="input-group">
                            <span class="input-group-btn"></span>
                                <span class="btn btn-default btn-file">
                                    Buscar... <input type="file" id="ImgInp">
                                </span>
                            </span>
                        </div>
                        <img id='img-upload' height="100" width="100">
                    </div>
                </div>
            </div>
        </div>

        <aside id="admin_sidebar" class="col-md-4">
            <div class="form-group">
                <input type="submit" name="guardar" class="btn btn-warning btn-lg" value="Guardar">
                <input type="submit" name="cancelar" class="btn btn-primary btn-lg" value="Cancelar">
            </div>
        </aside>

    </form>
</div>