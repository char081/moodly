<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>ALTAS</title>
<style>
body {
    font-family: 'Cambria', sans-serif;
    font-size: 18px;
    background: linear-gradient(to bottom, #FFCCBC, #FFCCBC);
    color: #E91E63;
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
    text-align: center;
    
}

button {
    padding: 10px 20px;
    font-size: 1em;
    background-color: #EF9A9A;
    color: #fff;
    border: none;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
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
mysqli_query($conexion,
"INSERT into registro(IDUSUARIO,NOMBREDEUSUARIO,CONTRASENA,CONTACTO)
values('$IDUSUARIO','$NOMBREDEUSUARIO','$CONTRASENA','$CONTACTO')") or die ("Error al
insertar los datos");
mysqli_close($conexion);
echo "<h1>Datos insertados correctamente</h1>";
?>
<img  width="300" height="300" src="logo2.png" alt="">
<button onclick="window.location.href='usuario.php'">Regresar</button>
<button onclick="window.location.href='tabla.php'">Ver tabla</button>

</body>
</html>

