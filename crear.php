<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <!--Bosstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Bosstrap-->
</head>

<body>
    <center>
    <form action="guardarpersona.php" method="post">
        <div>
            <h2>Crear Usuario</h2>
        </div>
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre">       
        </div>

        <div class="form-group">
        <br><label for="">Apellido</label>
            <input type="text" name="apellido">
        </div>

        <div class="form-group">
        <br><label for="">Email</label>
            <input type="text" name="email">
        </div>

        <div class="form-group">
        <br><label for="">Password</label>
            <input type="password" name="pasword">
        </div>

        <div>
        <br><button type="submit" name="guardar" class= "btn btn-primary">Guardar</button> <!--Bosstrap-->
            <a href="index.php">Volver</a>
        </div>


    </form>
    </center>

</body>
</html>