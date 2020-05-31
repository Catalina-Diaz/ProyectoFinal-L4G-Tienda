<?php
    if(isset($_POST['host'])){
        
        $file = fopen("includes/config.php", "w"); 

        fwrite($file, "<?php" . PHP_EOL);
        fwrite($file, "define('HOST', '" . $_POST['host'] ."');" . PHP_EOL);
        fwrite($file, "define('USER', '" . $_POST['user'] ."');" . PHP_EOL);
        fwrite($file, "define('PASSWORD', '" . $_POST['password'] ."');" . PHP_EOL);
        fwrite($file, "define('DB', '" . $_POST['db'] ."');" . PHP_EOL);
        fwrite($file, "?>");

        fclose($file);

        echo "Creando archivo de conexion";
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>Para el correcto funcionamiento del sistema llena la siguiente información:</h1>
        <form action="install.php" method="post">
            <div>
                <label for="host">Host</label>
                <input type="text" name="host" >
            </div>
            <div>
                <label for="user">Usuario DB</label>
                <input type="text" name="user" >
            </div>
            <div>
                <label for="password">Contrasña DB</label>
                <input type="text" name="password">
            </div>
            <div>
                <label for="db">Base de datos</label>
                <input type="text" name="db">
            </div>
            <button>Guardar</button>
        </form>
    </body>
</html>