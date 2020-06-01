<?php
    $alert = '';

    if(!empty($_POST)){

        if(empty($_POST['username']) || empty($_POST['password']))
        {
            $alert = "Ingrese su usuario y su clave";
            
        }else{

            include( "../includes/db.php");
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $vari = "SELECT * FROM sesion WHERE correo='".$user."' AND passwor= '".$pass."'";
            $query= DB::query($vari);
            $result = mysqli_num_rows($query);
            if($result > 0){
                $data = mysqli_fetch_array($query);
                print_r($data);
            }
        }
    }   
?>

<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar sesion</title>
        <!--Bosstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!--Bosstrap-->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                <h1 class="text-center text-white pt-2 font-italic display-3 font-weight-bold">Tienda Tierra <br> Mujer</h1>
                    <div id="login-column" class="col-md-5">
                        <div id="login-box" class="col-md-12">
                            
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center text-dark">INICIAR SESION</h3>

                                <div class="form-group">
                                    <label for="username" class="text-dark">Correo Electrónico</label><br>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="password" class="text-dark">Contraseña</label><br>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>

                                <div class="form-group" action="login.php">
                                    <br><button type="submit" name="guardar" class= "btn btn-success">Iniciar Sesión</button> <!--Bosstrap-->   
                                </div>

                                <div id="register-link" class="text-right">
                                    <br><a>¿No tienes cuenta? <a href="crearusuario.php">Registrate</a></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>