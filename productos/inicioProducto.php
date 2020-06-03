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
            $usuario = $fila["idUsuario"];
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

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</head>

<body>
    <br>
    <div class="container">
        <div class="panel-heading bg-info">
            <div class=" text-center panel-title text-white font-weight-bold ">
                Mis productos 
            </div>
        </div>
        <a href="crearproducto.php?ide=nn"><button type="button" class="btn btn-success">Agregar nuevo </button> </a>

         
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>Descripccion</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>

                <?php
               
                $sql1 = "SELECT * FROM productos where idusuario= $usuario";
                $todo = DB::query($sql1);
                $result1 = mysqli_num_rows($todo);
                ?>
                <script>
                    console.log("uer")
                </script>

                <?php
               
                if ($result1 > 0) {
                    while ($fila = mysqli_fetch_assoc($todo)) {
                            ?> <tr>
                            <td><?php echo $fila["nombre"] ?></td>
                            <td><?php echo $fila["descripcion"] ?></td>
                            <td><?php echo $fila["precio"] ?></td>
                            <td><?php echo $fila["categoria"] ?></td>
                            <td> <a href="crearproducto.php?ide=<?php echo $fila["id"] ?>"><button type="button" class="btn btn-success">Editar</button> </a><?php  ?>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                <?php
                        
                    }
                }
            
                ?>

            </tbody>
            <tfoot>
                <tr>
                    <th>nombre</th>
                    <th>Descripccion</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Opciones</th>
                </tr>
            </tfoot>
        </table>
    </div>

</body>

</html>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>