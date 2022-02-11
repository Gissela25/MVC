<?php
    

    class Usuario{
        
        private $pdo;

        private $ID;
        private $user;
        private $name;
        private $lname;
        private $email;
        private $passd;
        private $hash;
        private $activo;
        private $i_user;
        private $i_pass;
        public function __CONSTRUCT(){
            $this->pdo = BasedeDatos::Conectar();
        }
    
        public function getUser_id(): ?int{
            return $this->ID;
    
        }

        public function setUser_id(int $id){
            $this->ID=$id;
        }

        public function getUser_user(): ?string{
            return $this->user;
    
        }
    
        public function setUser_user(string $usuario){
            $this->user=$usuario;
        }
        public function getName_name(): ?string{
            return $this->name;
    
        }
    
        public function setName_name(string $nombre){
            $this->name=$nombre;
        }

        public function getLname_lname(): ?string{
            return $this->lname;
    
        }
    
        public function setLname_lname(string $apellido){
            $this->lname=$apellido;
        }

        public function getEmail_email(): ?string{
            return $this->email;
    
        }
    
        public function setEmail_email(string $correo){
            $this->email=$correo;
        }

        public function getPass_passd(): ?string{
            return $this-> passd;
    
        }
    
        public function setPass_passd(string $contra){
            $this->passd=$contra;
        }

        public function getHash_hash(): ?string{
            return $this->hash;
    
        }
    
        public function setHash_hash(string $hash_){
            $this->hash=$hash_;
        }
        public function getEstado_activo(): ?int{
            return $this->activo;
    
        }
    
        public function setEstado_activo(int $estado){
            $this->activo=$estado;
        }
        public function getPass(): ?string{
            return $this-> i_pass;
    
        }
    
        public function setPass(string $ipass){
            $this->i_pass=$ipass;
        }
        public function getUser(): ?string{
            return $this->i_user;
    
        }
    
        public function setUser(string $iuser){
            $this->i_user=$iuser;
        }
        
        public function Save(){
            try{
                $consulta=$this->pdo->prepare("SELECT COUNT(*) from usuarios WHERE Usuario='{$this->getUser_user()}' OR Email='{$this->getEmail_email()}';");
                $consulta->execute(array($this->getUser_user(),$this->getEmail_email()));
                $filas= $consulta ->fetchColumn();
                
                if($filas==0)
                {
                    $sql=$this->pdo->prepare("INSERT INTO usuarios VALUES(NULL,'{$this->getUser_user()}', '{$this->getName_name()}','{$this->getLname_lname()}','{$this->getEmail_email()}','{$this->getPass_passd()}',NULL,'1');");
                    $sql->execute(array($this->getUser_user(), $this->getName_name(), $this->getLname_lname(),$this->getEmail_email(),$this->getPass_passd() ));
                    echo "<div class='alert alert-success'>Usuario ingresado con exito</div>";
                }
                else{
                    echo "<div class='alert alert-danger'><ul> <li>Credenciales en uso</li><li>Las credenciales coinciden con un usuario en existencia.</li></ul></div>";
                }

            }catch(Exception $e){
                die($e->getMessage());
            }
        }
       
        public function Into(){
            try{
                $consulta=$this->pdo->prepare("SELECT COUNT(*) FROM usuarios WHERE Usuario='{$this->getUser()}' AND Contraseña='{{$this->getPass()}';");
                $consulta->execute(array($this->getUser(),$this->getPass()));
                $filas= $consulta ->fetchColumn();
                
                if($filas==0)
                {
                    echo "<ul> <li>No existe ningún usuario con esas credenciales</li></ul>";
                   
                }
                else{
                   
                }

            }catch(Exception $e){
                die($e->getMessage());
            }
        }
        
    }