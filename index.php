<?php 
    include('includes/verify_install.php');
    include('includes/db.php');

    $sql = "select * from persona";
    $result = DB::query($sql);
   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <!--Bosstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Bosstrap-->
</head>


<body>
    <div class="container">
        <div>
            <h1>
                Listado de Usuarios
            </h1>
        </div>
        <!--
            m = Margin
            t = Top - Arriba
            l = left - Izquierda
            r = Rigth - Derecha
            
        -->

        <div>
            <table border="1px" class="table table-hover"> <!--Bosstrap-->
                <thead>
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Nombre</b></td>
                        <td><b>Apellido</b></td>
                        <td><b>Email</b></td>
                        <td><b>Estado</b></td>
                        <td><b>Acciones</b></td>     
                    </tr>
            
                </thead>

                <tbody class="center">

                <?php while($mostrar=mysqli_fetch_array($result)){ //cuando se quiere recorrer varios objetos, array?> 
                    <tr>
                        <td><?= $mostrar['id'] ?></td>
                        <td><?= $mostrar['nombre'] ?></td>
                        <td><?= $mostrar['apellido'] ?></td>
                        <td><?= $mostrar['email'] ?></td>
                        
                        <td class = "<?=$mostrar['estado'] ?>"><?=$mostrar['estado']?></td>
                        <input type="hidden" name="estado" value="<?= $mostrar['estado']?>">

                        <td>
                        
                            <?php if($mostrar['estado'] == "activo"){ ?>
                                <a href="guardarpersona.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>" class="btn btn-danger btn-sm">inactivar</a> <!--Bosstrap-->
                            <?php }else{ ?>
                                <a href="guardarpersona.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>" class="btn btn-success btn-sm">activar</a> <!--Bosstrap-->
                            <?php } ?>
                                <a href="editarpersona.php?id=<?= $mostrar['id']?>" class="btn btn-info btn-sm">Editar</a><!--Bosstrap-->
                        </td>
                        
                        
                    </tr>
                    
                <?php } ?>
                    
                </tbody>
            </table>
            <center>
            <br><a href="crear.php" class="btn btn-primary">Nuevo</a> <!--Bosstrap-->
            </center>
            
        </div>
    </div>
</body>
</html>