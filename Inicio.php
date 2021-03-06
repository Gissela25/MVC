<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="assets/css/inicio.css">
</head>

<body>
    <div class="header">
        <div class="menu-bar">
            <nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: #000000;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <img src="assets/images/logo5.jpeg" alt="" width="120" height="50"
                        class="d-inline-block align-text-top">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="usuario/Ingresar">Inciar Sesion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="usuario/Guardar">Registrarse_HOLA</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
     <div class="d-grid gap-3 mt-3 mx-5">
       <h1 align="center" style="color:#FFFFFF">Inovaci??n en tecnol??gia</h1>
        <!-- <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card text-white bg-dark mb-3">
                    <img src="assets/images/router.jpg" class="card-img-top" alt="...">
                    <div class="card-body border border-success">
                        <h5 class="card-title text-center">Routers</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark mb-3">
                    <img src="assets/images/pc.jpg" class="card-img-top" alt="...">
                    <div class="card-body border border-success">
                        <h5 class="card-title text-center">PC</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark mb-3">
                    <img src="assets/images/lap.jpg" class="card-img-top" alt="...">
                    <div class="card-body border border-success">
                        <h5 class="card-title text-center">Laptops</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div> -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/lap.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/router.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/pc.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    </div>
</body>

</html>