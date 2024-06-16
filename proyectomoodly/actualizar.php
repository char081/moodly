<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>ACTUALIZAR</title>
<style>
body {
font-family: 'Arial', sans-serif;
font-size: 18px;
background: linear-gradient(to bottom, #ccffcc, #ccffff);
color: #BDB76B;
margin: 0;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
min-height: 100vh;
}
h1 {
font-size: 2em;
margin-bottom: 20px;
}
button {
padding: 10px 20px;
font-size: 1em;
background-color: #556B2F;
color: #fff;
border: none;
cursor: pointer;
margin-top: 20px;
}
</style>
</head>
<body> <?php
$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "moodly";
$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
or die ("Error al guardar los datos");
$IDUSUARIO = $_POST['IDUSUARIO'];
$NOMBREDEUSUARIO = $_POST['NOMBREDEUSUARIO'];
$CONTRASENA = $_POST['CONTRASENA'];
$CONTACTO = $_POST['CONTACTO'];
$query = "UPDATE registro SET NOMBREDEUSUARIO='$NOMBREDEUSUARIO', CONTRASENA='$CONTRASENA', CONTACTO='$CONTACTO' WHERE IDUSUARIO='$IDUSUARIO'";
if (mysqli_query($conexion, $query)) {
    echo "<h1>Datos actualizados correctamente</h1>";
} else {
    echo "Error al actualizar los datos: " . mysqli_error($conexion);
}

mysqli_close($conexion);

?>
<br>
<button onclick="window.location.href='tabla.php'">Ver tabla</button>

</body>
</html>


