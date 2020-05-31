<?php
    include('includes/db.php');
    if(isset($_GET['id']) == false){
        echo "Ingresar Id";
        die;
    }
    $id = $_GET['id'];
    $sql = "select * from persona where id= $id";
    $personas = DB::query($sql);
    $personas = mysqli_fetch_object($personas);
    if($personas == false){
        echo "El usuario no existe";
        die;
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

    <form action="guardarpersona.php" method="post">
    <input type="hidden" name="id" value="<?= $personas->id ?>">
        <table class="table">
            <thead>
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Email</td>
                <td>password</td>
                <td>Estado</td>
            </tr>
            </thead>

            <body class="center">
            <tr>
                <td><input type="text" name="nombre" value="<?= $personas->nombre ?>"></td>
                <td><input type="text" name="apellido" value="<?= $personas->apellido ?>"></td>
                <td><input type="text" name="email"  value="<?= $personas->email?>"></td>
                <td><input type="password" name="pasword"  value=""></td>
                <td>
                <?php  if($personas->estado == "activo"){  ?>
                    <input type="radio" name="estado" value="activo" checked>Activo<br>
                    <input type="radio" name="estado" value="inactivo">Inactivo
                <?php  }else{  ?>
                    <input type="radio" name="estado" value="activo" >Activo<br>
                    <input type="radio" name="estado" value="inactivo" checked>Inactivo
                <?php  }  ?>
                </td>
            </tr>
            </body>
        </table>

        <center>
        <tr>
            <td colspan="5"><br><button type="submit">Guardar</button></td>
        </tr>
        <a href="index.php">Lista </a><br>
        <a href="crear.php">Nuevo</a>
        </center>
        
    </form>
    </div>
</div>

</body>
</html>