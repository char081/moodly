<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['NOMBREDEUSUARIO'])) {
    header("Location: usuario.php");
    exit();
}

$NOMBREDEUSUARIO = $_SESSION['NOMBREDEUSUARIO'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h2>Bienvenido, <?php echo htmlspecialchars($NOMBREDEUSUARIO); ?></h2>
    <p><a href="logout.php">Cerrar Sesión</a></p>
</body>
</html>
