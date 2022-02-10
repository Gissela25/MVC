<?php

class Producto{

    private $pdo;

    private $ID;
    private $Nombre;
    private $Marca;
    private $Precio;
    private $Cantidad;

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getPro_id(): ?int{
        return $this->ID;

    }

    public function setPro_id(int $id){
        $this->ID=$id;
    }

    public function getPro_nom(): ?string{
        return $this->Nombre;

    }

    public function setPro_nom(string $nom){
        $this->Nombre=$nom;
    }

    
    public function getPro_marca(): ?string{
        return $this->Marca;

    }

    public function setPro_marca(string $marc){
        $this->Marca=$marc;
    }

    
    public function getPro_pre(): ?float{
        return $this->Precio;

    }

    public function setPro_pre(float $pre){
        $this->Precio=$pre;
    }

    
    public function getPro_can(): ?int{
        return $this->Cantidad;

    }

    public function setPro_can(int $can){
        $this->Cantidad=$can;
    }

    public function Cantidad(){
        try{
            $consulta=$this->pdo->prepare("SELECT SUM(Cantidad) as Cantidad FROM redes;");
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Cantidad2(){
        try{
            $consulta=$this->pdo->prepare("SELECT SUM(Cantidad) as Cantidad FROM laptops;");
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    
    public function Cantidad3(){
        try{
            $consulta=$this->pdo->prepare("SELECT SUM(Cantidad) as Cantidad FROM pc;");
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function Listar(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM redes;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function Listar2(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM laptops;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function Listar3(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM pc;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function Insertar(Producto $p){
        try{
          $consulta="INSERT INTO redes(Nombre,Marca,Precio,Cantidad) VALUES (?,?,?,?);";
          $this->pdo->prepare($consulta)
                ->execute(array(
                    $p->getPro_nom(),
                    $p->getPro_marca(),
                    $p->getPro_pre(),
                    $p->getPro_can()
                ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function Insertar2(Producto $p){
        try{
          $consulta="INSERT INTO laptops(Nombre,Marca,Precio,Cantidad) VALUES (?,?,?,?);";
          $this->pdo->prepare($consulta)
                ->execute(array(
                    $p->getPro_nom(),
                    $p->getPro_marca(),
                    $p->getPro_pre(),
                    $p->getPro_can()
                ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function Insertar3(Producto $p){
        try{
          $consulta="INSERT INTO pc(Nombre,Marca,Precio,Cantidad) VALUES (?,?,?,?);";
          $this->pdo->prepare($consulta)
                ->execute(array(
                    $p->getPro_nom(),
                    $p->getPro_marca(),
                    $p->getPro_pre(),
                    $p->getPro_can()
                ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function Obtener(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM redes WHERE ID=?;");
            $consulta->execute(array($ID));
            $consulta->fetch(PDO::FETCH_OBJ);
            $p=new Producto();
            $p->setPro_id($r->pro_id);
            $p->setPro_nom($r->pro_nom);
            $p->setPro_marca($r->pro_marca);
            $p->setPro_pre($r->pro_pre);
            $p->setPro_can($r->pro_can);
            return $p;

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Eliminar($id){
        try{
            $consulta="DELETE FROM redes WHERE ID=?;";
            $this->pdo->prepare($consulta)
                 ->execute(array($id));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function Eliminar2($id){
        try{
            $consulta="DELETE FROM laptops WHERE ID=?;";
            $this->pdo->prepare($consulta)
                 ->execute(array($id));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function Eliminar3($id){
        try{
            $consulta="DELETE FROM pc WHERE ID=?;";
            $this->pdo->prepare($consulta)
                 ->execute(array($id));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}