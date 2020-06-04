<?php
include("guardarproducto.php");
$nombree = "";
$descripccionn = "";
$precioo = "";
$categoriaa = "";
$imagenn = "";
$pro = " SELECT * FROM productos";
$productos = DB::query($pro);
$res = mysqli_num_rows($productos);


if ($res > 0) {
    while ($fila = mysqli_fetch_assoc($productos)) {
        if ($id == $fila["id"]) {
            $nombree = $fila["nombre"];
            $descripccionn = $fila["descripcion"];
            $precioo = $fila["precio"];
            $categoriaa = $fila["categoria"];
            $imagenn = "imagen";
        }
    }
}


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
                    <form id="signupform" onsubmit="return validar()" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="nombre" class="col-md-3 control-label">Nombre de producto</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Producto" value="<?php echo $nombree ?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Descripcion</label>
                            <div class="col-md-9">
                                <!--<input type="text" class="form-control" name="precio" placeholder="Ingresa el precio">-->
                                <textarea name="descripccion" class="form-control" id="exampleFormControlTextarea1" rows="4"> <?php echo ($descripccionn); ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Precio</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="precio" value="<?php echo $precioo ?>" placeholder="Ingresa el precio" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="direccion" class="col-md-3 control-label">Categoria</label>
                            <div class="col-md-9">
                                <select name="categoria" class="form-control form-control-sm"  required>
                                    <option > </option>
                                    <?php
                                    $sql = " SELECT nombre FROM categoria";
                                    $categoria = DB::query($sql);
                                    $result1 = mysqli_num_rows($categoria);
                                    if ($result1 > 0) {
                                        while ($fila = mysqli_fetch_assoc($categoria)) {
                                    ?>
                                        <option <?php if($categoriaa==$fila["nombre"]){echo "selected"; } ?> > <?php echo $fila["nombre"] ?></option>

                                    <?php
                                        }
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="imagen" class="col-md-3 control-label">Imagen</label>
                            <div class="col-md-9">
                                <input type="file" name="imagen" id="imagen" value="<?php echo $imagenn ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn" type="submit" class="btn btn-success"><i class="icon-hand-right"></i> Guardar</button>
                                <span style="margin-left:8px"></span>
                                <a href="../productos/inicioProducto.php"> Ver productos vigentes</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-md-offset-3 col-md-9">
                                <?php echo $mensaje ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>