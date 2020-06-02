<?php 
    include('includes/db.php');
    if(!empty($_POST)){

   
       // $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $pasword = $_POST["pasword"];
        $celular = $_POST["celular"];
        $direccion = $_POST["direccion"];
        $ciudad = $_POST["ciudad"];
        $cons = md5($pasword);
       
        $sql = "insert into usuarios(nombre,correo,password,telefono,ciudad,direccion) values('".$nombre."','".$email."','".$cons."','".$celular."','".$ciudad."','".$direccion."')"; 
        
        class crudusuario{
            public function obtenerUsuario($email, $cons){
                $db=Db::conectar();
                $select=$db->prepare('SELECT * FROM usuarios WHERE correo=:correo');//AND clave=:clave
                $select->bindValue('correo',$email);
                $select->execute();
                $registro=$select->fetch();
                $usuario=new Usuario();
                //verifica si la clave es conrrecta
                if (password_verify($clave, $registro['pasword'])) {				
                    //si es correcta, asigna los valores que trae desde la base de datos
                    $usuario->setId($registro['Id']);
                    $usuario->setNombre($registro['correo']);
                    $usuario->setClave($registro['pasword']);
                }			
                return $usuario;
            }

            //busca el nombre del usuario si existe
            public function buscarUsuario($email){
                $db=Db::conectar();
                $select=$db->prepare('SELECT * FROM usuarios WHERE correo=:correo');
                $select->bindValue('correo',$email);
                $select->execute();
                $registro=$select->fetch();
                if($registro['Id']!=NULL){
                    $usado=False;
                }else{
                    $usado=True;
                }	
                return $usado;
            }
        }


    DB::query($sql);
    header('Location: ../inicio/home.php');
    }
?>