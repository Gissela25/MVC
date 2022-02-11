<div class="row mx-5 mt-5">
    <div class="col ml-5">

        <!-- <div class="card" style="width: 18rem;">
            <h3 class="text-center">Zona de Redes</h3>
            <img src="vistas/img/redes.jpg" class="card-img-top">
            <div class="card-body">
                <h4>Cantidad de Productos</h4>
                <p class="card-text text-center">
                </p>
            </div>
        </div>
    </div>

    <div class="col ml-5">

        <div class="card" style="width: 18rem;">
            <h3 class="text-center">Zona de Laptos</h3>
            <img src="vistas/img/laptop.jpg" class="card-img-top">
            <div class="card-body">
                <h4>Cantidad de Productos</h4>
                <p class="card-text text-center">
                </p>
            </div>
        </div>
    </div>

     <div class="col ml-5">

        <div class="card" style="width: 18rem;">
            <h3 class="text-center">Zona de PC</h3>
            <img src="vistas/img/pc.jpg" class="card-img-top">
            <div class="card-body">
                <h4>Cantidad de Productos</h4>
                <p class="card-text text-center"><?php $p=$this->modelo->Cantidad3()?>
                    <?=$p->Cantidad?>
                </p>
            </div>
        </div>
    </div> -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card text-white bg-dark mb-3">
                <h3 class="card-title text-center">Zona de Redes</h3>
                    <img src="vistas/img/redes.jpg" class="card-img-top" alt="...">
                    <div class="card-body border border-success">
                        <h4 align="center">Cantidad de Productos</h4>
                        <p class="card-text text-center"><?php $p=$this->modelo->Cantidad()?>
                    <?=$p->Cantidad?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark mb-3">
                <h3 class="card-title text-center">Zona de Laptops</h3>
                    <img src="vistas/img/laptop.jpg" class="card-img-top">
                    <div class="card-body border border-success">
                        <h4 align="center">Cantidad de Productos</h4>
                        <p class="card-text text-center"><?php $p=$this->modelo->Cantidad2()?>
                    <?=$p->Cantidad?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark mb-3">
                <h3 class="card-title text-center">Zona de PC</h3>
                    <img src="vistas/img/pc.jpg" class="card-img-top">
                    <div class="card-body border border-success">
                        <h4 align="center">Cantidad de Productos</h4>
                        <p class="card-text text-center"><?php $p=$this->modelo->Cantidad3()?>
                    <?=$p->Cantidad?></p>
                    </div>
                </div>
            </div>
