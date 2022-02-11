<?php
    require 'validacion-ingresar.php';
    $errores_in=array();
    if(isset($_POST['ingresar']))
    {
        extract($_POST);
        if(!isset($i_user)||esVoid($i_user))
        {
            array_push($errores_in,"Debes ingresar un usuario");
        }
        if(!isset($i_pass)||esVoid($i_pass))
        {
            array_push($errores_in,"Debes ingresar una contraseña");
        }
        if(esUser($i_user)&&esAlphanumeric($i_pass))
        {
            $modelo = new Usuario();
            $modelo->setUser($i_user);
            $modelo->setPass($i_pass);
            $modelo->Into();     
        }
      
    }
    ?>