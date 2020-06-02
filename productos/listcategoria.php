<?php
session_start();
$varSesion = $_SESSION['usuario'];

if($varSesion == null || $varSesion = ''){
    header("location: ../index.php");
    die();
}

require_once '../controlador/AreaControl.php';
$areaControl = new AreaControl();
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <title>Sistema Granja</title>

    <style>
    .color1 {
        color: blue;
    }
    </style>

    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
    </style>
</head>

<body>


    <div class="">
        <div class="row">
            <div class="col">
                <a href="areaAgregar.php" class="btn btn-success" target="myframe"
                    style="margin:8px; float:right;">Agregar</a>
                <table class="table table-striped">

                    <caption>Listado De Areas</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($areaControl->obtenerTodas() as $ar) { ?>
                        <tr>
                            <th><?php echo $ar->getCodArea(); ?></th>
                            <td><?php echo $ar->getNombre(); ?></td>
                            <td><?php echo $ar->getDescripcion(); ?></td>
                        
                            <td>
                                <div>
                                    <a href="areaModificar.php?codigo=<?php echo $ar->getCodArea(); ?>"
                                       class="btn btn-info">Modificar</a>
                                    <a href="../funciones/eliminarArea.php?codigo=<?php echo $ar->getCodArea(); ?>"
                                        class="btn btn-danger">Eliminar</a>
                                </div>

                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>

        </div>




    </div>
    <!--Scripts necesarios para trabajar con bootstrap-->
    <script src="../js/jquery-3.3.1.slim.min.js"> </script>
    <script src="../js/popper.min.js"> </script>
    <script src="../js/bootstrap.min.js"></script>
</body>


</html>