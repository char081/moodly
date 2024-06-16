<?php
$conexion=mysqli_connect ('localhost', 'root',
'', 'moodly');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mostrar Tabla</title>
<style>
body {
color: #CD6155 ;
background-color: #F8BBD0 ;
}
table {
border: 5px solid #58D68D; /* Ancho y estilo del borde de la
tabla */
border-collapse: collapse; /* Colapsar bordes dobles en una
sola línea */
margin: 20px auto; /* Ajustar márgenes para centrar la tabla
*/
}
th, td {
border: 5px solid #58D68D; /* Estilo del borde de las celdas
*/
padding: 10px;
text-align: center;
}
img {
width: 300px;
height: 300px;
}
</style>
</head>
<body text="red" bgcolor="#F8BBD0 ">
<br>
<center>
<table border="1">
<tr>
<td bgcolor="#F8BBD0 ">ID USUARIO</td>
<td bgcolor="#F8BBD0 ">NOMBRE DE USUARIO</td>
<td bgcolor="#F8BBD0 ">CONTRASEÑA</td>
<td bgcolor="#F8BBD0 ">CORREO O NUMERO DE TELEFONO</td>

</tr>
<?php
$sql="SELECT * from registro";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){
?>
</tr>
<td ><?php echo $mostrar ['IDUSUARIO'] ?> </td>
<td ><?php echo $mostrar ['NOMBREDEUSUARIO'] ?> </td>
<td ><?php echo $mostrar ['CONTRASENA'] ?> </td>
<td ><?php echo $mostrar ['CONTACTO'] ?> </td>
</tr>
<?php
}
?>
</table>
<br>
<br>
<br>
<button width=130px
onclick=
"window.location.href='formulario.php'">Volver</button>
</html>