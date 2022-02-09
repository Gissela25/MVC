<?php
 
class InicioControlador{
    private $modelo;

    public function _CONSTRUCT(){

    }

    public function Inicio(){
        $bd = BasedeDatos::Conectar();
        require_once "vistas/inicio/principal.php";
    }
}

