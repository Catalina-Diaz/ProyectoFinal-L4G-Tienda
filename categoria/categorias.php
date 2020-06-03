<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="stilocat.css">

    <title>Categorias</title>
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
                <li class="first-item">
                    <a href="">
                        <img src="../imagenes/inicio.png" alt="" class="imagen">
                        <span class="text-item">Inicio</span>
                        <span class="down-item"></span>
                    </a>
                </li>
                <li>
                    <a href="../ingreso/login.php">
                        <img src="../imagenes/seccion.png" alt="" class="imagen">
                        <span class="text-item">Nosotros</span>
                        <span class="down-item"></span>
                    </a>
                </li>
                <li>
                    <a href="../ingreso/login.php">
                        <img src="../" alt="" class="imagen">
                        <span class="text-item">Inicio De Sesion</span>
                        <span class="down-item"></span>
                    </a>
                </li>
                <li>
                    <a href="../ingreso/crearusuario.php">
                        <img src="../imahom/sec.png" alt="" class="imagen">
                        <span class="text-item">Crear cuenta</span>
                        <span class="down-item"></span>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
    <!------------------------------------------->
    <div class="galeria">
        <h1>CATEGORIAS</h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <?php
            include("../includes/db.php");
            $vari = "SELECT * FROM categoria";
            $query = DB::query($vari);
            $result = mysqli_num_rows($query);
            if ($result > 0) {
                while ($fila = mysqli_fetch_assoc($query)) {
            ?>
                    <div class="imagen">
                        <a href="../productos/mostrar.php?ide=<?php echo $fila["nombre"]?>">
                        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode(($fila['imagen'])) .' "/>';?>
                            <div class="overlay">
                                <h2><?php echo $fila["nombre"] ?></h2>
                            </div>
                        </a>
                        </div>
                <?php
                }
            }
                ?>            
        </div>
</body>

</html>