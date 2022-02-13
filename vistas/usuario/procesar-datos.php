<?php
    require 'validaciones.php';
    $errores=array();
    if(isset($_POST['enviar']))
    {
        extract($_POST);
        if(!isset($user)||isVoid($user))
        {
            array_push($errores,"Debes ingresar un usuario");
        }
        elseif(!isUser($user))
        {
            array_push($errores,"Debes ingresar un usuario válido (No se admiten carácteres especiales)");
        }
        if(!isset($name)||isVoid($name))
        {
            array_push($errores,"Debe ingresar un nombre.");
        }elseif(!isText($name))
        {
            array_push($errores,"El nombre debe contener sólo letras.");
        }
        if(!isset($lname)||isVoid($lname))
        {
            array_push($errores,"Debe ingresar un apellido.");
        }elseif(!isText($lname))
        {
            array_push($errores,"El apellido debe contener sólo letras.");
        }
        if(!isset($email)||isVoid($email))
        {
            array_push($errores,"Debe ingresar un correo.");
        }elseif(!isMail($email))
        {
            array_push($errores,"El correo debe ser válido.");
        }
        if(!isset($passd)||isVoid($passd))
        {
            array_push($errores,"Debes ingresar una contraseña.");
        }
        elseif(!isAlphanumeric($passd))
        {
            array_push($errores,"La contraseña es inválida. (Al menos 8 carácteres)");
        }
        if(isUser($user)&&isText($name)&&isText($lname)&&isMail($email)&&isAlphanumeric($passd))
        {
           // echo "<div class='alert alert-success'>Por favor verifica que eres tú. Haz clic en el enlace que te enviamos al correo</div>";
           $modelo = new Usuario();
           $modelo->setUser_user($user);
           $modelo->setName_name($name);
           $modelo->setLname_lname($lname);
           $modelo->setEmail_email($email);
           $modelo->setPass_passd($passd);
           $modelo->Save();     
          
        }

    }
?>