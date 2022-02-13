<?php

require_once "modelos/producto.php";
require_once "config.php";
class ProductoControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Producto;
    }
    public function Indice(){
        require_once "vistas/inicio/principal.php";
    }

    public function Ver(){
        require_once "vistas/encabezado.php";
        require_once "vistas/productos/index.php";
        require_once "vistas/productos2/index.php";
        require_once "vistas/productos3/index.php";
    }

    public function FormCrear(){
        $titulo="Registrar";
        $p=new Producto();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $titulo="Modificar";
        }
        require_once "vistas/encabezado.php";
        require_once "vistas/productos/form.php";
    }
    public function FormCrear2(){
        $titulo="Registrar";
        $p=new Producto();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener2($_GET['id']);
            $titulo="Modificar";
        }
        require_once "vistas/encabezado.php";
        require_once "vistas/productos2/form.php";
    }
    public function FormCrear3(){
        $titulo="Registrar";
        $p=new Producto();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener3($_GET['id']);
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

        $p->getPro_id() > 0 ?
        $this->modelo->Actualizar($p) :
        $this->modelo->Insertar($p);

        header("location: ".SERVERURL."producto/Ver");

    }
    public function Guardar2(){
        $p=new Producto();
        $p->setPro_id(intval($_POST['ID']));
        $p->setPro_nom($_POST['Nombre']);
        $p->setPro_marca($_POST['Marca']);
        $p->setPro_pre($_POST['Precio']);
        $p->setPro_can($_POST['Cantidad']);

        $p->getPro_id() > 0 ?
        $this->modelo->Actualizar2($p) :
        $this->modelo->Insertar2($p);

        header("location: ".SERVERURL."producto/Ver");

    }

    public function Guardar3(){
        $p=new Producto();
        $p->setPro_id(intval($_POST['ID']));
        $p->setPro_nom($_POST['Nombre']);
        $p->setPro_marca($_POST['Marca']);
        $p->setPro_pre($_POST['Precio']);
        $p->setPro_can($_POST['Cantidad']);

        $p->getPro_id() > 0 ?
        $this->modelo->Actualizar3($p) :
        $this->modelo->Insertar3($p);

        header("location: ".SERVERURL."producto/Ver");

    }

    public function Borrar(){
        $this->modelo->Eliminar($_GET['id']);
        header("location: ".SERVERURL."producto/Ver");
    }
    public function Borrar2(){
        $this->modelo->Eliminar2($_GET['id']);
        header("location: ".SERVERURL."producto/Ver");
    }
    public function Borrar3(){
        $this->modelo->Eliminar3($_GET['id']);
        header("location: ".SERVERURL."producto/Ver");
    }
    public function Inicio(){
        //$bd = BasedeDatos::Conectar();
        require_once "vistas/encabezado.php";
        require_once "vistas/productos/index.php";
        require_once "vistas/productos2/index.php";
        require_once "vistas/productos3/index.php";
    }
}