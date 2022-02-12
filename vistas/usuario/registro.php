<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="vistas/css/registro.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center  mt-4 mr-1">
         <div class="col-md-5 formulario">
         <form action="http://localhost/mvc/?c=usuario&a=Guardar" method="POST" role="form" >
                    <div class="form-group text-center">
                        <h1 class="text-black">Registro</h1>
                    </div>
                    <?php require 'procesar-datos.php'?>
                    <?php
                    if(count($errores)>0&&isset($_POST['enviar']))
                    {
                        echo "<div class='alert alert-danger'> <ul>";
                        foreach($errores as $error)
                        {
                          echo "<li>$error</li>";
                        }
                        echo "</ul></div>";

                    }
                    ?>
                    <div class="form-group mx-sm-4 pt-2 ">  
                        <input type="text" class="form-control" placeholder="Usuario" name="user" id="user">
                    </div>
                    <div class="form-group mx-sm-4 ">
                        <input type="text" class="form-control" placeholder="Nombre" name="name" id="name">
                    </div>
                    <div class="form-group mx-sm-4 ">
                        <input type="text" class="form-control" placeholder="Apellido" name="lname" id="lname">
                    </div>
                    <div class="form-group mx-sm-4 ">
                        <input type="text" class="form-control" placeholder="Email" name="email" id="email">
                    </div>
                    <div class="form-group mx-sm-4 ">
                        <input type="password" class="form-control" placeholder="Contraseña" name="passd" id="passd">
                    </div>
                    <div class="form-group mx-sm-4 ">
                        <input type="password" class="form-control" placeholder="Confirmar Contraseña" name="passdc" id="passdc">
                    </div>
                    <div class="form-group mx-sm-4 text-right">      
                       <span class=""><a id="registrar" href="http://localhost/mvc/?c=usuario&a=Ingresar" class="olvide">Ya tengo una cuenta</a></span>
                    </div>
                    <div class="form-group mx-sm-4  ">
                       <center>
                       <input type="submit" class="btn btn-success" value="Registrarse" name="enviar" id="enviar">
                       </center> 
                    </div>
                    </form>
         </div>
                 
            
        </div>
    </div>
</body>
</html>