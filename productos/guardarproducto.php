<?php
include('../includes/db.php');
$mensaje = "";
if (!empty($_POST)) {
    // $id = $_POST["id"];
    $nombrep = $_POST["nombre"];
    $descripccion = $_POST["descripccion"];
    $precio = $_POST["precio"];
    $categoria = $_POST["categoria"];

    $imageTemp = $_FILES["imagen"]["tmp_name"]; 

    $fileName = basename($_FILES["imagen"]["name"]); 
    $imageUploadPath = $uploadPath . $fileName; 
    $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
    $allowTypes = array('jpg','png','jpeg','gif');  

    if(in_array($fileType, $allowTypes)){ 
        // Image temp source 
        $imageTemp = $_FILES["imagen"]["tmp_name"]; 
         
        // Comprimos el fichero
        $compressedImage = compressImage($imageTemp,$imageUploadPath, 3); 
         echo( $compressedImage);
        if($compressedImage){ 
            $status = 'success'; 
            $statusMsg = "La imagen se ha subido satisfactoriamente."; 
        }else{ 
            $statusMsg = "La compresion de la imagen ha fallado"; 
        } 
    }else{ 
        $statusMsg = 'Lo sentimos, solo se permiten imágenes con estas extensiones: JPG, JPEG, PNG, & GIF.'; 
    } 
    // Comprimos el fichero
   
    $image = $_FILES['imagen']['tmp_name'];
    $imgContent = addslashes(file_get_contents( compressImage($imageTemp,$imageUploadPath, 10)));
   
    echo(filesize($imgContent));
    if(filesize($imgContent)<64){
        $sql = " insert into productos(nombre,precio,descripcion,categoria,imagen) values('" . $nombrep . "','" . $precio . "','" . $descripccion . "','" . $categoria . "','" . $imgContent . "');";
        DB::query($sql);
        header('Location: crearproducto.php');
    }else{
        $mensaje = "La imagen es demasiado pesada. ";
    }
   
    
}
function compressImage($source, $destination, $quality) { 
    // Obtenemos la información de la imagen
    $imgInfo = getimagesize($source); 
    $mime = $imgInfo['mime']; 
     
    // Creamos una imagen
    switch($mime){ 
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

?>