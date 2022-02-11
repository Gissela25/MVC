<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width,user-scalable=no,initial-
scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
   <title>Informacion recibida</title>
   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nobile" />
   <link rel="stylesheet" href="css/tables.css" />
   <script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
    <section>
        <article>
            <div id="info">
                <table id="hor-zebra" summary="Datos recibidos del formulario">
                    <caption>Informacion de formulario</caption>
                    <thead>
                        <tr class="thead">
                            <th scope="col">Campo</th>
                            <th scope="col">Dato Ingresado</th>
</tr>
</thead>
<tbody>
    <?php
    if(isset ($_POST['submit']) && $_POST['submit'] == "Enviar"):
        echo "\t<tr class=\"odd\">\n";
        echo "\t\t<td>\nNombre Completo\n</td>\n";

        extract($_POST);
        $cliente = !empty($client) ? $client : "<a href=\"ingresodatos.html\">No ingreso el Nombre</a>";
        echo "\t\t<td>\n" . $cliente . "\n</td>\n";
        echo "\t</tr>\n";
        echo "\t<tr>\n";
        echo "\t\t<td>\nLugar de Nacimiento\n</td>\n";
        $producto = !empty($product) ? $product : "<a href=\"ingresodatos.html\">No ingreso el lugar de nacimiento</a>";
        echo "\t\t<td>\n" . $producto . "\n</td>\n";
        echo "\t</tr>\n";
        echo "\t<tr class=\"odd\">\n";
        echo "\t\t<td>\nEdad\n</td>\n";
        $precio = !empty($price) ? $price : "<a href=\"ingresodatos.html\">No ingreso el Edad</a>";
        echo "\t\t<td>\n" . $precio . "\n</td>\n";
        echo "\t</tr>\n";
        echo "\t<tr>\n";
        echo "\t\t<td>\nCarnet\n</td>\n";
        $cantidad = !empty($quantity) ? $quantity : "<a href=\"ingresodatos.html\">Carnet</a>";
        echo "\t\t<td>\n" . $cantidad . "\n</td>\n";
        echo "\t</tr>\n";
        echo "\t<tr class=\"odd\">\n";
        echo "\t\t<td>\n\n</td>\n";
        if(isset($cliente) && isset($producto) && floatval($precio)>0 && 
        floatval($cantidad)>0):
        echo "\t<td>\n$ " . number_format($precio * $cantidad, 2, '.', ',') . "\n</td>\n";
    else:
        echo "\t<td>\n\n</td>\n";
    endif;
    echo "\t</tr>\n";
else:
    echo "\t<tr class=\"odd\">\n";
    echo "\t\t<td>No se han ingresado desde el formulario.</td>";
    echo "\t</tr>\n";
endif;
?>
</tbody>
</table>
<div id="link">
    <a href="ingresodatos.html" class="button-link">Ingresar nuevos datos</a>
</div>
</div>
</article>
</section>
</body>
</html>
    