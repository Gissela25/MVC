<?php
 
    class Entrada{
        private $i_user;
        private $i_pass;
        private $correo;
        public function __CONSTRUCT(){
            $this->pdo = BasedeDatos::Conectar();
        }
        public function getPass(): ?string{
            return $this-> i_pass;
    
        }
    
        public function setPass(string $contra){
            $this->i_pass=$contra;
        }
        public function getUser(): ?string{
            return $this->i_user;
    
        }
    
        public function setUser(string $usuario){
            $this->i_user=$usuario;
        }

        public function getEmail_email(): ?string{
            return $this->correo;
    
        }
    
        public function setEmail_email(string $correoo){
            $this->correo=$correoo;
        }

        public function Into($i_user,$i_pass){
            try{
                $consulta=$this->pdo->prepare("SELECT COUNT(*) FROM usuarios WHERE Usuario='$i_user' AND Contraseña='$i_pass';");
                $consulta->execute(array($i_user,$i_pass));
                $filas= $consulta ->fetchColumn();
                
                if($filas>0)
                {
                   header("Location: http://localhost/mvc/?c=producto&a=Indice");
                }
                else{
                    echo "<ul> <li>No existe ningún usuario con esas credenciales</li></ul>";
                }

            }catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function Recuperando($correo){
            try{
                $consulta=$this->pdo->prepare("SELECT COUNT(*) FROM usuarios WHERE Email='$correo';");
                $consulta->execute(array($correo));
                $filas= $consulta ->fetchColumn();
                $sql=$this->pdo->prepare("SELECT Usuario,Nombre,Apellido,Contraseña FROM usuarios WHERE Email='$correo';");
                $sql->execute(array($correo));
                $r=$sql->fetch(PDO::FETCH_ASSOC);
                if($filas==1)
                {                
                    $asunto="Recuperando Cuenta - Evo Tech.";
                    $msg="Hola, ".$r['Usuario']." \nNombre:".$r['Nombre']."\nApellido:".$r['Apellido']."\nTu contraseña es:".$r['Contraseña'];
                    $msg.="\nSaludos.\nAtte:Evo Tech";
                    $header="From: noreply@evotech.com"."\r\n";
                    $header.="Reply-To: noreply@evotech.com"."\r\n";
                    $header.= "X-Mailer: PHP/".phpversion();
                    $mail = @mail($correo,$asunto,$msg,$header);
                    if($mail)
                    {
                     
                        echo "<ul> <li>Hemos enviado las credenciales a tu correo.</li></ul>";
                    }
                   
                }
                else{
                    echo "<ul> <li>No existe ningún usuario relacionado con ese correo</li></ul>";
                }

            }catch(Exception $e){
                die($e->getMessage());
            }
        }

    }