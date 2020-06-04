<?php
include ("includes/config.php");
$conn2 =new mysqli(HOST, USER, PASSWORD );
$query1 ="CREATE DATABASE tienda";
mysqli_query($conn2,$query1);

$conn =new mysqli(HOST, USER, PASSWORD, DB);

$query = '';
$sqlScript = file('includes/db.sql');
foreach ($sqlScript as $line)   {
        
        $startWith = substr(trim($line), 0 ,2);
        $endWith = substr(trim($line), -1 ,1);
        
        if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
                continue;
        }
                
        $query = $query . $line;
        if ($endWith == ';') {
                mysqli_query($conn,$query) or die('<div class="error-response sql-import-response">Problemas al ejecutar SQL query <b>' . $query. '</b></div>');
                $query= '';             
        }
}
echo '<div class="success-response sql-import-response"> el archivo SQL ha sido importado con exito</div>';
?>