<?php

require_once "modelos/producto.php";

class ProductoControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Producto;
    }

    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/pie.php";
        require_once "vistas/productos/index.php";
    }

    public function FormCrear(){
        $titulo="Registrar";
        $p=new Producto();
        if(isset($_GET['ID'])){
            $p=$this->modelo->Obtener($_GET['ID']);
            $titulo="Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/productos/form.php";
        require_once "vistas/pie.php";
    }

    public function Guardar(){
        $p=new Producto();
        $p->setPro_id(intval($_POST['ID']));
        $p->setPro_nom($_POST['Nombre']);
        $p->setPro_marca($_POST['Marca']);
        $p->setPro_pre($_POST['Precio']);
        $p->setPro_can($_POST['Cantidad']);

        $this->modelo->Insertar($p);

        header("location:?c=producto");

    }

    public function Borrar(){
        $this->modelo->Eliminar($_GET['id']);
        header("location:?c=producto");
    }
}