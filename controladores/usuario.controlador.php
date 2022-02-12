<?php

require_once "modelos/usuario.php";
require_once "modelos/entrada.php";


    class UsuarioControlador{
        private $modelo;

        public function __CONSTRUCT(){
            $this->modelo=new Usuario;
          
        }

        public function Guardar()
        {
            require_once "vistas/usuario/registro.php";
         
           
        }
        public function Ingresar()
        {
            require_once "vistas/usuario/login.php";
            
        }
        public function Recuperar()
        {
            require_once "vistas/usuario/recuperar.php";
            
        }

       
    }