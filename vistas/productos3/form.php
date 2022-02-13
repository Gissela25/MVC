<div class="d-flex justify-content-center">
    <div class="col-md-4 formulario my-3">
        <form class="form-horizontal" method="POST" action="<?php echo SERVERURL;?>producto/Guardar3">
            <fieldset>
                <legend style="color:#FFFFFF"  class="text-center"><?=$titulo?> Artículos PCs</legend>
                <div class="form-group">
                    <div class="col-lg-10">
                        <input class="form-control" name="ID" type="hidden" value="<?=$p->getPro_id()?>">
                    </div>
                </div>
                <div class="form-group">
                    <label style="color:#FFFFFF" class="col-lg-2 control-label mt-2" for="Nombre">Nombre</label>
                    <div class="col-lg-10">
                        <input required class="form-control" name="Nombre" type="text" placeholder="Nombre Producto"
                            value="<?=$p->getPro_nom()?>">
                    </div>
                    <label style="color:#FFFFFF" class="col-lg-2 control-label mt-2" for="Marca">Marca</label>
                    <div class="col-lg-10">
                        <input required class="form-control" name="Marca" type="text" placeholder="Marca" value="<?=$p->getPro_marca()?>">
                    </div>
                    <label style="color:#FFFFFF" class="col-lg-2 control-label mt-2" for="Precio">Precio</label>
                    <div class="col-lg-10">
                        <input required class="form-control" name="Precio" type="text" placeholder="Precio" value="<?=$p->getPro_pre()?>">
                    </div>
                    <label style="color:#FFFFFF" class="col-lg-2 control-label mt-2" for="Cantidad">Cantidad</label>
                    <div class="col-lg-10 " >
                        <input required class="form-control" name="Cantidad" type="text" placeholder="Cantidad" value="<?=$p->getPro_can()?>">
                    </div>
                </div>
                <div class="mt-5 mx-5 pb-2">
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                    <button class="btn btn-success" type="submit">Enviar</button>
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