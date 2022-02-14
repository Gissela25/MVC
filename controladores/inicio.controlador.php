<?php

require_once "modelos/producto.php";

class InicioControlador{
    private $modelo;

    public function __CONSTRUCT(){
       $this->modelo=new Producto();
    }
    public function Inicio(){
        //$bd = BasedeDatos::Conectar();
        require_once "Inicio.php";
    }
}