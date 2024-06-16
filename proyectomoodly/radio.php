<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de opciones</title>
</head>
<body bgcolor="lightpink">
<h1>Coronado Garcia Mia</h1>
<h2>Selecciona la opcion mas valida:</h2>

<form id="opcionesForm">
    <input type="checkbox" id="opcion1" name="opcion" value="Opción 1">
    <label for="opcion1">Soy usuario nuevo</label><br>
    <input type="checkbox" id="opcion2" name="opcion" value="Opción 2">
    <label for="opcion2">Acabo de instalar la aplicacion</label><br>
    <input type="checkbox" id="opcion3" name="opcion" value="Opción 3">
    <label for="opcion3">No soy usuario nuevo</label><br>

    <p>¿Cual es tu genero?:</p>
    <input type="radio" id="radio1" name="opcion_radio" value="Opción A">
    <label for="radio1">Femenino</label><br>
    <input type="radio" id="radio2" name="opcion_radio" value="Opción B">
    <label for="radio2">Masculino</label><br>
    <input type="radio" id="radio3" name="opcion_radio" value="Opción C">
    <label for="radio3">Prefiero no decir</label><br>

    <br>
    <input type="submit" value="Enviar">
</form>

<p id="mensaje"></p>

<script>
    const form = document.getElementById("opcionesForm");
    const mensaje = document.getElementById("mensaje");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Evitar que se envíe el formulario

        // Obtener opciones seleccionadas
        const opcionesCheckbox = document.querySelectorAll('input[name="opcion"]:checked');
        const opcionesRadio = document.querySelector('input[name="opcion_radio"]:checked');

        // Verificar si se han seleccionado al menos una opción de cada tipo
        if (opcionesCheckbox.length > 0 && opcionesRadio !== null) {
            // Construir el mensaje de agradecimiento
            let texto = "Gracias por tu selección. Has elegido:\n";
            opcionesCheckbox.forEach(opcion => {
                texto += "- " + opcion.value + "\n";
            });
            texto += "- " + opcionesRadio.value;

            // Mostrar el mensaje de agradecimiento
            mensaje.textContent = texto;
        } else {
            // Si falta alguna selección, mostrar un mensaje de error
            mensaje.textContent = "Por favor, selecciona al menos una opción de cada tipo.";
        }
    });
</script>

</body>
</html>
