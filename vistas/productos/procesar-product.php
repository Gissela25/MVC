<?php
    require 'validaciones-product.php';
    $errores=array();
    if(isset($_POST['enviar']))
    {
        extract($_POST);
        if(!isset($Nombre)||isVoid($Nombre))
        {
            array_push($errores,"Debes ingresar un Nombre");
        }
        elseif(!isText($Nombre))
        {
            array_push($errores,"Debes ingresar un Nombre válido.");
        }
        if(!isset($Marca)||isVoid($Marca))
        {
            array_push($errores,"Debe ingresar una Marca.");
        }elseif(!isText($Marca))
        {
            array_push($errores,"Debes ingresar una Marca válida.");
        }
        if(!isset($Precio)||isVoid($Precio))
        {
            array_push($errores,"Debe ingresar Precio.");
        }elseif(!isFloat($Precio))
        {
            array_push($errores,"El Precio debe contener sólo cifras monetarias.");
        }
        if(!isset($Cantidad)||isVoid($Cantidad))
        {
            array_push($errores,"Debe ingresar cantidad.");
        }elseif(!isNumber($Cantidad))
        {
            array_push($errores,"La cantidad debe ser sólo números.");
        }
        // if(isUser($user)&&isText($name)&&isText($lname)&&isMail($email)&&isAlphanumeric($passd))
        // {
        //    // echo "<div class='alert alert-success'>Por favor verifica que eres tú. Haz clic en el enlace que te enviamos al correo</div>";
        //    $modelo = new Producto();
        //    $modelo->setUser_user($user);
        //    $modelo->setName_name($name);
        //    $modelo->setLname_lname($lname);
        //    $modelo->setEmail_email($email);
        //    $modelo->setPass_passd($passd);
        //    $modelo->Save();     
          
        // }

    }
?>