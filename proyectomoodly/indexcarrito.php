<?php
session_start();
require_once 'productos.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
</head>

<body bgcolor="mistyrose">
    <h1>Versiones Premium de Moodly</h1>
    <h2>Coronado Garcia Mia Nahomi</h2>
    <ul>
    <?php foreach ($productos as $id => $producto): ?>
        <li>
            <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" width="250">
            <br>
            <?php echo $producto['nombre']; ?> - <?php echo $producto['precio']; ?>
            <br>
            <form action="carrito.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" value="Agregar al Carrito">
            </form>
        </li>
    <?php endforeach; ?>
    </ul>
    </center>
</body>
</html>
