<?php
$server = "localhost:3307";
$user   = "root";
$pass   = "";
$db     = "lima_botanica";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}else{
    //echo "conectado";
}
?>

