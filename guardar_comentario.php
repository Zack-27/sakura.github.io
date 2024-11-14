<?php
// guardar_comentario.php

// Incluir el archivo de conexión
include 'conexion.php';

// Verificar si se han recibido datos vía POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir y limpiar los datos del formulario
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $email = $conn->real_escape_string($_POST['email']);
    $comentario = $conn->real_escape_string($_POST['comentario']);
    $producto = isset($_POST['producto']) && !empty($_POST['producto']) ? $conn->real_escape_string($_POST['producto']) : null;

    // Preparar la consulta SQL para insertar el comentario
    $sql = "INSERT INTO comentarios (nombre, email, producto, comentario) VALUES ('$nombre', '$email', ";
    $sql .= $producto ? "'$producto'" : "NULL";
    $sql .= ", '$comentario')";

    // Ejecutar la consulta y verificar el resultado
    if ($conn->query($sql) === TRUE) {
        echo "Comentario enviado con éxito.";
    } else {
        echo "Error al enviar el comentario: " . $conn->error;
    }
} else {
    echo "Método no permitido.";
}

// Cerrar la conexión
$conn->close();
?>

