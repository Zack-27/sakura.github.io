<?php
session_start();
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $conn->real_escape_string($_POST['usuario']);
    $password = $_POST['password'];

    // Buscar usuario en la base de datos
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verificar la contraseña
        if (password_verify($password, $row['contrasena'])) {
            $_SESSION['usuario'] = $usuario;
            header("Location: admin.php"); // Redirigir a la página principal
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}

$conn->close();
?>

