<?php
include("includes/db.php");

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
 function fun(){ 
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