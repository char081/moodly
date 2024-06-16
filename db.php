<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "moodly";

// Crear conexión
$conn = new mysqli($server, $usuario, $contraseña, $bd);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
