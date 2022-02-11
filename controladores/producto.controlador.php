<?php

require_once "modelos/producto.php";

class ProductoControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Producto;
    }

    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/productos/index.php";
        require_once "vistas/productos2/index.php";
        require_once "vistas/productos3/index.php";
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
    }
    public function FormCrear2(){
        $titulo="Registrar";
        $p=new Producto();
        if(isset($_GET['ID'])){
            $p=$this->modelo->Obtener($_GET['ID']);
            $titulo="Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/productos2/form.php";
    }
    public function FormCrear3(){
        $titulo="Registrar";
        $p=new Producto();
        if(isset($_GET['ID'])){
            $p=$this->modelo->Obtener($_GET['ID']);
            $titulo="Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/productos3/form.php";
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
    public function Guardar2(){
        $p=new Producto();
        $p->setPro_id(intval($_POST['ID']));
        $p->setPro_nom($_POST['Nombre']);
        $p->setPro_marca($_POST['Marca']);
        $p->setPro_pre($_POST['Precio']);
        $p->setPro_can($_POST['Cantidad']);

        $this->modelo->Insertar2($p);

        header("location:?c=producto");

    }

    public function Guardar3(){
        $p=new Producto();
        $p->setPro_id(intval($_POST['ID']));
        $p->setPro_nom($_POST['Nombre']);
        $p->setPro_marca($_POST['Marca']);
        $p->setPro_pre($_POST['Precio']);
        $p->setPro_can($_POST['Cantidad']);

        $this->modelo->Insertar3($p);

        header("location:?c=producto");

    }

    public function Borrar(){
        $this->modelo->Eliminar($_GET['id']);
        header("location:?c=producto");
    }
    public function Borrar2(){
        $this->modelo->Eliminar2($_GET['id']);
        header("location:?c=producto");
    }
    public function Borrar3(){
        $this->modelo->Eliminar3($_GET['id']);
        header("location:?c=producto");
    }
}