<?php
$conexion=mysqli_connect ('localhost', 'root',
''
, 'moodly');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ALTAS</title>
</head>
<body bgcolor="lightpink">
<center>
<h2>Alta de Usuarios</h2>
<form action="guardar.php" method="post">
<br/><br/><br/>
<input type="text" REQUIRED name="IDUSUARIO"
placeholder="ID" value=""/><br/><br/>
<input type="text" REQUIRED name="NOMBREDEUSUARIO"
placeholder="Nombre de Usuario" value=""/><br/><br/>
<input type="password" REQUIRED name="CONTRASENA"
placeholder="Contraseña"value=
""/><br/><br/>
<input type="text" REQUIRED name="CONTACTO"
placeholder="Correo/Numero "value=
""/><br/><br/>
<input type="submit" value="Aceptar" />
</form>
<h2>Coronado Garcia Mia Nahomi</h2>
</html>