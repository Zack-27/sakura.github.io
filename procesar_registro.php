<?php
include 'conexion.php';

// Verificar si se recibieron datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipo_documento = $conn->real_escape_string($_POST['tipo_documento']);
    $numero_documento = $conn->real_escape_string($_POST['numero_documento']);
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $apellidos = $conn->real_escape_string($_POST['apellidos']);
    $puesto_trabajo = $conn->real_escape_string($_POST['puesto_trabajo']);
    $correo_electronico = $conn->real_escape_string($_POST['correo_electronico']);
    $usuario = $conn->real_escape_string($_POST['usuario']);
    $contrasena = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar la contraseña

    // Insertar usuario en la base de datos
    $sql = "INSERT INTO usuarios (tipo_documento, numero_documento, nombre, apellidos, puesto_trabajo, correo_electronico, usuario, contrasena)
            VALUES ('$tipo_documento', '$numero_documento', '$nombre', '$apellidos', '$puesto_trabajo', '$correo_electronico', '$usuario', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso. <a href='login.php'>Iniciar sesión</a>";
    } else {
        echo "Error al registrar usuario: " . $conn->error;
    }
}

$conn->close();
?>

