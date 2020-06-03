<?php
include("../validar.php");
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
        <div style=" font-size: 20px;">
            <span class="text-item"> <?php echo $usuario ?> </span>
            <a href="" onclick="<?php fun(); ?>" class="deletebtn"><?php echo $otro ?></a>
        </div>
        <form class="form-inline">

            <input class="form-control mr-sm-2" type="search" placeholder="Buscador" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
        </form>
    </nav>
    <!----------------------------------------------------------->
    <section>
        <nav class="navegacion">
            <ul class="menu">

                <li class="first-item">
                    <a href="#">
                        <img src="imahom/us.jpg" alt="" class="imagen">
                        <span class="text-item">Nosotros</span>
                        <span class="down-item"></span>
                    </a>
                </li>

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
                <?php
                if ($usuario != "") {
                ?>
                    <li>

                        <a href="../productos/crearproducto.php">
                            <img src="imahom/cate.png" alt="" class="imagen">
                            <span class="text-item">Agregar productos</span>
                            <span class="down-item"></span>
                        </a>

                    </li>
                <?php
                } else {
                }
                ?>

            </ul>

        </nav>
    </section>
    <!------------------------------------------->
    <?php $cat = $_GET['ide']; ?>
    <div class="galeria">
        <h1><?php echo $cat;  ?></h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <?php
            // include("includes/db.php");
            $vari = "SELECT * FROM productos where categoria= '$cat' ";
            $query = DB::query($vari);
            $result = mysqli_num_rows($query);
            if ($result > 0) {
                while ($fila = mysqli_fetch_assoc($query)) {
            ?>
                    <div class="card" style="width: 18rem;">
                    <?php echo '<img class="card-img-top" src="data:image/jpeg;base64,' . base64_encode(($fila['imagen'])) . ' "/>'; ?>
                       
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $fila["nombre"] ?></h5>
                            <p class="card-text"> Precio: $ <?php echo $fila["precio"] ?> <br> <?php echo $fila["descripcion"] ?> </p>
                            
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
</body>

</html>