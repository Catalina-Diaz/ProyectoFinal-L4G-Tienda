<?php
include("../includes/db.php");

$vari = "SELECT * FROM sesion";
$query = DB::query($vari);
$usuario = "";
$otro = "";
$result = mysqli_num_rows($query);
if ($result > 0) {
    while ($fila = mysqli_fetch_assoc($query)) {
        if ($fila["estado"] == "activo") {
            $usuario = $fila["correo"];
        }
    }
    if ($usuario != "") {
        $otro = "Cerrar sesion";
    }
} 
function fun()
{
    $vari = "SELECT * FROM sesion";
    $query = DB::query($vari);
    $result = mysqli_num_rows($query);
    if ($result > 0) {
        while ($fila = mysqli_fetch_assoc($query)) {
            if ($fila["estado"] == "activo") {
                $vari = "UPDATE sesion SET estado='inactivo' where estado='activo'";
                DB::query($vari);
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylo.css">

    <title>HOME</title>
</head>

<body>
    <nav class="navbar navbar- warning bg-warning">
        <a class="navbar-brand">
            <H1>
                <p>TIENDA <kbd>TIERRA MUJER</kbd></p>
                <H1>
        </a>

        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscador" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
        </form>
    </nav>
    <!----------------------------------------------------------->
    <section>
        <nav class="navegacion">
            <ul class="menu">

                <li>
                    <a href="../ingreso/login.php">
                        <img src="imahom/seccion.png" alt="" class="imagen">
                        <span class="text-item">Inicio De Sesion</span>
                        <span class="down-item"></span>
                    </a>
                </li>

                <li>
                    <a href="../ingreso/crearusuario.php">
                        <img src="imahom/sec.png" alt="" class="imagen">
                        <span class="text-item">Crear cuenta</span>
                        <span class="down-item"></span>
                    </a>
                </li>

                <li>
                    <a href="../categoria/categorias.php">
                        <img src="imahom/cate.png" alt="" class="imagen">
                        <span class="text-item">Categorias</span>
                        <span class="down-item"></span>
                    </a>
                </li>

            </ul>

        </nav>
    </section>

    <section id="contenedor">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imahom/ima2.jpg " class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imahom/ima3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imahom/ima4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imahom/ima5.jpg" class="d-block w-100" alt="...">
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- Redes sociales ------------------------------------------>
    <footer class="page-footer font-large pt-4 bg-dark">
        <div class="container">
            <ul class="list-unstyled list-inline text-center">

                <li class="list-inline-item">
                    <a class="btn btn-social-icon btn-facebook">
                        <span class="fa fa-facebook"></span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn btn-social-icon btn-twitter">
                        <span class="fa fa-twitter"></span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn btn-social-icon btn-instagram">
                        <span class="fa fa-instagram"></span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn btn-social-icon btn-google">
                        <span class="fa fa-google"></span>
                    </a>
                </li>
            </ul>
            <!-- Social buttons -->
            <a class="fb-ic mr-3" role="button"><i class="fab fa-lg fa-facebook-f"></i></a>
        </div>
    </footer>
</body>

</html>