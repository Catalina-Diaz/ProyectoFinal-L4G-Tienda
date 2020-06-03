<?php
include('../includes/db.php');
$mensaje = "";
function compressImage($source, $destination, $quality)
{
    // Obtenemos la información de la imagen
    $imgInfo = getimagesize($source);
    $mime = $imgInfo['mime'];

    // Creamos una imagen
    switch ($mime) {
        case 'image/jpeg':
            $image = imagecreatefromjpeg($source);
            break;
        case 'image/png':
            $image = imagecreatefrompng($source);
            break;
        case 'image/gif':
            $image = imagecreatefromgif($source);
            break;
        default:
            $image = imagecreatefromjpeg($source);
    }

    // Guardamos la imagen
    imagejpeg($image, $destination, $quality);

    // Devolvemos la imagen comprimida
    return $destination;
}


$id = "";
$id = $_GET['ide'];

?>
<script>
    window.onload = function() {
        var mb = document.getElementById("btn");
        mb.addEventListener("click", validar);
    }

    function validar() {
        //  var nombre = (document.getElementById('nombre').value);
        <?php
        if ($_POST["nombre"] != "" && $_POST["precio"] != "") {
            $nombrep = $_POST["nombre"];
            $descripccion = $_POST["descripccion"];
            $precio = $_POST["precio"];
            $categoria = $_POST["categoria"];
            $imageTemp = $_FILES["imagen"]["tmp_name"];
            $va = (int) filesize($imageTemp);
            $var = 64000;
            $vari = "SELECT * FROM sesion";
            $query = DB::query($vari);
            $usur = "";
            $otro = "";
            $result = mysqli_num_rows($query);
            if ($result > 0) {
                while ($fila = mysqli_fetch_assoc($query)) {
                    if ($fila["estado"] == "activo") {
                        $usur = $fila["idUsuario"]."";
                    }
                }
            }
            if ($va < $var) {
                if ($id == "nn" || $id == "") {
                    $imgContent = addslashes(file_get_contents($imageTemp));
                    $sql = " insert into productos(nombre,precio,descripcion,categoria,imagen,idusuario) values('" . $nombrep . "','" . $precio . "','" . $descripccion . "','" . $categoria . "','" . $imgContent . "','" . $usur . "');";
                    DB::query($sql);
                    $mensaje = "se guardo exitosamente. ";
                } else {
                    $sql = " UPDATE productos SET nombre='" . $nombrep . "',precio='" . $precio . "',descripcion = '" . $descripccion . "',categoria= '" . $categoria . "',imagen='" . $imgContent . "' WHERE id = " . $id . "";
                    DB::query($sql);
                    unlink($imageUploadPath);
                    $mensaje = "se guardo exitosamente. ";
                }
            } else {
                $uploadPath = "";
                $fileName = basename($_FILES["imagen"]["name"]);
                $imageUploadPath = $uploadPath . $fileName;
                $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                if (in_array($fileType, $allowTypes)) {
                    $imageTemp = $_FILES["imagen"]["tmp_name"];
                    $compressedImage = compressImage($imageTemp, $imageUploadPath, 10);
                    if ($compressedImage) {
                        $va = (int) filesize(addslashes(file_get_contents($compressedImage)));
                        $var = 64000;
                        $imgContent = addslashes(file_get_contents($compressedImage));
                        if ($va < $var) {
                            if ($id == "nn" || $id == "") {
                                $sql = " insert into productos(nombre,precio,descripcion,categoria,imagen,idusuario) values('" . $nombrep . "','" . $precio . "','" . $descripccion . "','" . $categoria . "','" . $imgContent . "','" . $usur . "');";
                                DB::query($sql);
                                unlink($imageUploadPath);
                                $mensaje = "se guardo exitosamente. ";
                            } else {
                                $sql = " UPDATE productos SET nombre='" . $nombrep . "',precio='" . $precio . "',descripcion = '" . $descripccion . "',categoria= '" . $categoria . "',imagen='" . $imgContent . "' WHERE id = " . $id . "";
                                DB::query($sql);
                                unlink($imageUploadPath);
                                $mensaje = "se guardo exitosamente. ";
                            }
                        } else {
                            $mensaje = "no se puede almacenar, la imagen es muy pesada ";
                        }
                    } else {
                        //  $mensaje = $compressedImage."no se puede almacenar, la imagen es muy pesada ";

                    }
                } else {
                    $mensaje = 'Lo sentimos, solo se permiten imágenes con estas extensiones: JPG, JPEG, PNG, & GIF.';
                }
            }
        }
        //$_POST = array();
        ?>
        //return false;
    }
</script>