<?php
// conexion.php

$host = 'localhost';   
$username = 'root'; 
$password = ''; 
$database = 'sakuracafe'; 

// Crear conexión
$conn = new mysqli($host, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>
