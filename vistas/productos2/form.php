<div class="row justify-content-center mt-5 mr-2">
    <div class="col-md-3 formulario">
        <form class="form-horizontal" method="POST" action="?c=producto&a=Guardar2">
            <fieldset>
                <legend style="color:#FFFFFF"  class="text-center">Ingresando Articulos Laptops</legend>
                <div class="form-group">
                    <div class="col-lg-10">
                        <input class="form-control" name="ID" type="hidden" value="<?=$p->getPro_id()?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label mt-2" for="Nombre">Nombre</label>
                    <div class="col-lg-10">
                        <input required class="form-control" name="Nombre" type="text" placeholder="Nombre Producto"
                            value="<?=$p->getPro_nom()?>">
                    </div>
                    <label class="col-lg-2 control-label mt-2" for="Marca">Marca</label>
                    <div class="col-lg-10">
                        <input required class="form-control" name="Marca" type="text" placeholder="Marca">
                    </div>
                    <label class="col-lg-2 control-label mt-2" for="Precio">Precio</label>
                    <div class="col-lg-10">
                        <input required class="form-control" name="Precio" type="text" placeholder="Precio">
                    </div>
                    <label class="col-lg-2 control-label mt-2" for="Cantidad">Cantidad</label>
                    <div class="col-lg-10 " >
                        <input required class="form-control" name="Cantidad" type="text" placeholder="Cantidad">
                    </div>
                </div>
                <div class="mt-5 mx-5 pb-2">
                    <button class="btn btn-danger" type="reset">Cancel</button>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>

</div>
</div>
</div>
</div>
</div>