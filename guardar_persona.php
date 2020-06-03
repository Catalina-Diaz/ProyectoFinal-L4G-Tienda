<?php
include('includes/db.php');
if (!empty($_POST)) {
    // $id = $_POST["id"];

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $pasword = $_POST["pasword"];
    $celular = $_POST["celular"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];
    $estado = "inactivo";
    $sql = "insert into usuarios(nombre,correo,password,telefono,ciudad,direccion) values('" . $nombre . "','" . $email . "','" . $pasword . "','" . $celular . "','" . $ciudad . "','" . $direccion . "');";
    DB::query($sql);
    $saber = "SELECT MAX(id) AS id FROM usuarios";
    $id = DB::query($saber);
    $idd = "";
    $result1 = mysqli_num_rows( $id);
    if ($result1 > 0) {
        while ($fila = mysqli_fetch_assoc($id)) {
            $idd = $fila["id"];
        }
    }
    ?>
    <script> console.log(<?php echo($idd);?>)</script> 
    <?php
    $sql = " insert into sesion(correo,passwor,estado,idUsuario) values('" . $email . "','" . $pasword . "','" . $estado . "','" . $idd . "');";
    DB::query($sql);
    $_POST = array();
    //header('Location: crearusuario.php');
}
