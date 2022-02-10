<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Form Components</h1>
            <p>Bootstrap default form components</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Forms</li>
              <li><a href="#"></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="POST" action="?c=producto&a=Guardar">
                      <fieldset>
                        <legend>Productos</legend>
                        <div class="form-group">
                          <div class="col-lg-10">
                            <input class="form-control" name="ID" type="hidden" value="<?=$p->getPro_id()?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Nombre" >Nombre Producto</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Nombre" type="text" placeholder="Nombre Producto" value="<?=$p->getPro_nom()?>">
                          </div>
                          <label class="col-lg-2 control-label" for="Marca">Marca</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Marca" type="text" placeholder="Marca" >
                          </div>
                          <label class="col-lg-2 control-label" for="Precio">Precio</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Precio" type="text" placeholder="Precio" >
                          </div>
                          <label class="col-lg-2 control-label" for="Cantidad">Cantidad</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Cantidad" type="text" placeholder="Cantidad" >
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default" type="reset">Cancel</button>
                            <button class="btn btn-primary" type="submit">Submit</button>
                          </div>
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