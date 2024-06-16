<?php
$conexion=mysqli_connect ('localhost', 'root',
''
, 'moodly');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        /* Estilos CSS aquí */
        body {
            font-family: Arial, sans-serif;
            background-color: #FBE9E7 ; /* Color de fondo para la página */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .login-container {
            background-color: #F8BBD0; /* Color de fondo del formulario */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
            text-align: center;
            max-width: 80%; /* Ajustado para hacerlo responsivo */
            width: 400px;
        }

        .login-container h2 {
            font-family: 'Cambria', sans-serif;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input {
            width: calc(100% - 40px);
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
        }

        .form-group button[type="submit"], .btn-register {
            background-color: #F06292; /* Color de fondo del botón */
            color: white;
            border: none;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            outline: none;
            transition: background-color 0.3s ease;
            display: inline-block;
            width: 100%;
            margin-top: 10px;
            text-align: center;
            box-sizing: border-box;
        }
        
        .form-group button[type="submit"]:hover, .btn-register:hover {
            background-color: #F8BBD0; /* Color de fondo del botón al pasar el mouse */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="usuario2.png" alt="Logo de la empresa" class="logo">
        
        <h2>Iniciar Sesión</h2>
        <form action="guardar.php" method="post">
        <div class="form-group">
                <input type="text" name="IDUSUARIO" placeholder="ID Usuario (5 Caracteres)" required>
            </div>
            <div class="form-group">
                <input type="text" name="NOMBREDEUSUARIO" placeholder="Nombre de Usuario" required>
            </div>
            <div class="form-group">
                <input type="password" name="CONTRASENA" placeholder="Contraseña (8 caracteres)" required>
            </div>
            <div class="form-group">
                <input type="password" name="CONTACTO" placeholder="Numero de Telefono" required>
            </div>
            
            <div class="form-group">
                <button type="submit">Registrarse</button>
            </div>
            <a href="usuario.php" class="btn-register">Regresar</a>
        </form>
    
       
        

       
    </div>
</body>
</html>