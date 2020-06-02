<?php
include("guardarproducto.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo producto</title>
    <!--Bosstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!--Bosstrap-->
    <link rel="stylesheet" href="stylepro.css">
</head>

<body>
    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class=" mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

            <div class="panel panel-info border border-dark">
                <div class="panel-heading bg-info">
                    <div class=" text-center panel-title text-white font-weight-bold ">
                        Nuevo producto
                    </div>
                </div>
                <div class="panel-body">
                    <form id="signupform" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">

<<<<<<< HEAD
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Descripcion</label>
                                <div class="col-md-9">
                                <input type="text" class="form-control" name="precio" placeholder="Ingresa el precio">
                                </div>
=======
                        <div class="form-group">
                            <label for="nombre" class="col-md-3 control-label">Nombre de producto</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nombre" placeholder="Producto">
>>>>>>> 1af8c0c3307052de49b64053fd60487bba29c3ff
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Descripcion</label>
                            <div class="col-md-9">
                                <!--<input type="text" class="form-control" name="precio" placeholder="Ingresa el precio">-->
                                <textarea name="descripccion" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                        </div>

<<<<<<< HEAD
                            <div class="form-group">
                                <label for="categoria" class="col-md-3 control-label">Categoria</label>
                                <div class="col-md-9">
                                    <select class="form-control form-control-sm">

                                    </select>
                                </div>
=======
                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Precio</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="precio" placeholder="Ingresa el precio">
>>>>>>> 1af8c0c3307052de49b64053fd60487bba29c3ff
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="direccion" class="col-md-3 control-label">Categoria</label>
                            <div class="col-md-9">
                                <select name="categoria" class="form-control form-control-sm">
                                    <option> </option>
                                    <option>Pantalones</option>
                                    <option>Zapatos</option>
                                    <option>blusas</option>
                                </select>
                            </div>
                        </div>

<<<<<<< HEAD
                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <button id="btn-signup" type="button" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp Guardar</button>
                                    <span style="margin-left:8px"></span>  
                                    <a href="login.php"> Ver productos vigentes</a>
                                </div>
=======
                        <div class="form-group">
                            <label for="imagen" class="col-md-3 control-label">Imagen</label>
                            <div class="col-md-9">
                                <input type="file" name="imagen" id="imagen">
>>>>>>> 1af8c0c3307052de49b64053fd60487bba29c3ff
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn-signup" type="submit" class="btn btn-success"><i class="icon-hand-right"></i> Guardar</button>
                                <span style="margin-left:8px"></span>
                                <a href="login.php"> Ver productos vigentes</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="alert alert-danger" role="alert">
  <?php echo "$mensaje"; ?>
</div>
            </div>
        </div>

        <div id="loginbox" style="margin-top:50px;" class=" mainbox col-md-6 col-md-offset-3 col-sm-4 col-sm-offset-8">
            <button id="btn-signup" type="button" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp Agregar Nuevo Producto</button>
            <button id="btn-signup" type="button" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp Editar Productos</button>
            <button id="btn-signup" type="button" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp Eliminar Productos</button>
        </div>

    </div>
</body>

</html>