<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear Cuenta</title>
        <!--Bosstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!--Bosstrap-->
        <link rel="stylesheet" href="styleuser.css">
    </head>

    <body>
        <div class="container">    
            <div id="loginbox" style="margin-top:50px;" class=" mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                
                <div class="panel panel-info border border-white">
                    <div class="panel-heading bg-info">
                        <div class=" text-center panel-title text-white font-weight-bold " >
                            REGISTRATE
                        </div>
                    </div>  
                    <div class="panel-body" >
                        <form id="signupform" class="form-horizontal" role="form">

                            <div class="form-group">
                                <label for="nombre" class="col-md-3 control-label">Nombres</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="email" placeholder="Ingresa tu Email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Contraseña</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="contaseña" placeholder="Ingresa una contraseña">
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label for="numero" class="col-md-3 control-label">Celular</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="celular" placeholder="Celular - Whatsapp">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="direccion" class="col-md-3 control-label">Direccion</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="direccion" placeholder="Ingresa tu direccion">
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label for="ciudad" class="col-md-3 control-label">Ciudad</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="ciudad" placeholder="Ingresa tu ciudad">
                                </div>
                            </div>

                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <button id="btn-signup" type="button" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp Registrate</button>
                                    <span style="margin-left:8px">o</span>  
                                    <a href="login.php"> Inicia Sesión </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>    
            </div> 
        </div>
    </body>
</html>