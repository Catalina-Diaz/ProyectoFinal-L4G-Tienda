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
    $sql = " insert into sesion(correo,passwor,estado) values('" . $email . "','" . $pasword . "','".$estado."');";
    DB::query($sql);
    $_POST = array();
    header('Location: crearusuario.php');
}
