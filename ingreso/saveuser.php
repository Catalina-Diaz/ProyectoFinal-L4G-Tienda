<?php /*
    include('includes/db.php');

    if(isset($_GET['estado']) == TRUE){
        $estado = $_GET['estado'];
        $id = $_GET['id'];
        if($estado=="activo"){
            $ca = "inactivo";
        }else{
            $ca = "activo";
        }
        $sql = "UPDATE persona set estado='$ca' WHERE id='$id'";
        
    }else{
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $pasword = $_POST["pasword"];
        $con = md5($pasword);

        if(isset($id) == false){
            $estado = "activo";
            $sql = "insert into persona(nombre,apellido,email,pasword,estado) values('$nombre','$apellido','$email','$con','$estado')"; 
        }else{
            if($pasword != ""){
                $sql = "UPDATE persona set nombre='$nombre', apellido='$apellido',email='$email',pasword='$con',estado='$estado' WHERE id='$id'";
            }else{
                $sql = "UPDATE persona set nombre='$nombre', apellido='$apellido',email='$email',estado='$estado' WHERE id='$id'";
            }
        }
    }

    DB::query($sql);
    header('Location: index.php')*/
?>