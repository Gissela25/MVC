<?php require_once "config.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProyectoMVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?php echo SERVERURL;?>/assets/css/encabezado.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: #000000;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <img src="<?php echo SERVERURL;?>/vistas/img/logo5.jpeg" alt="" width="140" height="70" class="d-inline-block align-text-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo SERVERURL;?>producto/Indice">Incio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo SERVERURL;?>producto/Ver">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo SERVERURL;?>inicio">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row mx-5 mt-5">
        <div class="col ml-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card text-white bg-dark mb-3">
                        <h3 class="card-title text-center">Zona de Redes</h3>
                        <img src="<?php echo SERVERURL;?>/vistas/img/redes.jpg" class="card-img-top" alt="...">
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
                        <img src="<?php echo SERVERURL;?>/vistas/img/laptop.jpg" class="card-img-top">
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
                        <img src="<?php echo SERVERURL;?>/vistas/img/pc.jpg" class="card-img-top">
                        <div class="card-body border border-success">
                            <h4 align="center">Cantidad de Productos</h4>
                            <p class="card-text text-center"><?php $p=$this->modelo->Cantidad3()?>
                                <?=$p->Cantidad?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>