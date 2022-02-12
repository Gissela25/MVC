<div class="row mx-5 mt-5">
    <div class="col ml-5">
        <div class="container-xxl"></div>
        <h3 class="text-center" style="color:#FFFFFF">Accesorios de Laptops</h3>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn btn-primary btn-flat" href="?c=producto&a=FormCrear2">Insertar
            <i class="fa fa-lg fa-plus"></i></a>
        </div>
    </div>
</div>
<div class="row mx-5 mt-5">
    <div class="col ml-5">
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($this->modelo->Listar2() as $r):?>
                <tr>
                    <td><?=$r->ID?></td>
                    <td><?=$r->Nombre?></td>
                    <td><?=$r->Marca?></td>
                    <td>$<?=$r->Precio?></td>
                    <td><?=$r->Cantidad?></td>
                    <td>
                        <a class="btn btn-light btn-flat" href="?c=producto&a=FormCrear&id=<?=$r->ID?>">Editar
                            <i class="fa fa-lg fa-refresh"></i></a>
                        <a class="btn btn-secondary btn-flat" href="?c=producto&a=Borrar2&id=<?=$r->ID?>">Eliminar
                            <i class="fa fa-lg fa-trash"></i></a>
                    </td>
                    </td>
                </tr>
                <?php endforeach;?>
                <tr>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>