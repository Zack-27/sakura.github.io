<?php
session_start();
include 'conexion.php';

// Verificar si el usuario está autenticado como administrador
// Aquí asumimos que hay un sistema de roles que identifica a los administradores
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Obtener el número de comentarios a mostrar
$limite = isset($_GET['limite']) ? (int)$_GET['limite'] : 10;

// Consultar comentarios con el límite seleccionado
$sql = "SELECT * FROM comentarios ORDER BY fecha DESC LIMIT $limite";
$result = $conn->query($sql);

// Procesar el cambio de estado de un comentario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comentario_id'])) {
    $comentario_id = (int)$_POST['comentario_id'];
    $nuevo_estado = $_POST['estado'] === 'Respondido' ? 'No Respondido' : 'Respondido';

    // Actualizar el estado en la base de datos
    $update_sql = "UPDATE comentarios SET estado = '$nuevo_estado' WHERE id = $comentario_id";
    $conn->query($update_sql);
    header("Location: admin.php?limite=$limite"); // Redirigir para actualizar la lista
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - SAKURA</title>
    <link rel="stylesheet" href="admin_styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Panel de Administración</h2>
        
        <form method="GET" class="mb-3">
            <label for="limite">Mostrar últimos:</label>
            <select name="limite" id="limite" class="form-select w-25 d-inline-block" onchange="this.form.submit()">
                <option value="10" <?php if ($limite == 10) echo 'selected'; ?>>10</option>
                <option value="20" <?php if ($limite == 20) echo 'selected'; ?>>20</option>
                <option value="30" <?php if ($limite == 30) echo 'selected'; ?>>30</option>
            </select>
        </form>

        <?php if ($result->num_rows > 0): ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Producto</th>
                        <th>Comentario</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['producto'] ?? 'General'); ?></td>
                            <td><?php echo htmlspecialchars($row['comentario']); ?></td>
                            <td><?php echo htmlspecialchars($row['fecha']); ?></td>
                            <td><?php echo htmlspecialchars($row['estado']); ?></td>
                            <td>
                                <form method="POST" style="display:inline;">
                                    <input type="hidden" name="comentario_id" value="<?php echo $row['id']; ?>">
                                    <input type="hidden" name="estado" value="<?php echo $row['estado']; ?>">
                                    <button type="submit" class="btn btn-sm <?php echo $row['estado'] === 'Respondido' ? 'btn-success' : 'btn-secondary'; ?>">
                                        <?php echo $row['estado'] === 'Respondido' ? 'Marcar como No Respondido' : 'Marcar como Respondido'; ?>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay comentarios disponibles.</p>
        <?php endif; ?>

        <a href="index.php" class="btn btn-primary mt-3">Volver al Inicio</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
$conn->close();
?>
