<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos personales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            margin-bottom: 15px;
            color: #333;
        }
        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .form-container input[type="submit"] {
            background-color: #5cb85c;
            color: #fff;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        .form-container .radio-group {
            margin-bottom: 15px;
        }
        .form-container .radio-group label {
            margin-right: 10px;
        }
    </style>
    <script>
        function validarFormulario() {

            var validacion = true;
            var nombre = document.getElementById("nombre").value;
            if (nombre.trim() === "") {
                alert("El campo Nombre es obligatorio.");
                validacion = false;
            }

            var apellido = document.getElementById("apellido").value;
            if (apellido.trim() === "") {
                alert("El campo Apellido es obligatorio.");
                validacion = false;
            }

            var edad = document.getElementById("edad").value;
            if (edad.trim() === "" || parseInt(edad) <= 0) {
                alert("Por favor, ingrese una edad válida.");
                validacion = false;
            }

            var direccion = document.getElementById("direccion").value;
            if (direccion.trim() === "") {
                alert("El campo Dirección es obligatorio.");
                validacion = false;
            }

            var nivelEstudio = document.querySelector('input[name="nivel_estudio"]:checked');
            if (!nivelEstudio) {
                alert("Por favor, seleccione su nivel de estudios.");
                validacion = false;
            }

            var sexo = document.getElementById("sexo").value;
            if (sexo.trim() === "") {
                alert("Por favor, seleccione su sexo.");
                validacion = false;
            }

            var deportes = document.querySelectorAll('input[name="deportes[]"]:checked');
            if (deportes.length === 0) {
                alert("Por favor, seleccione al menos un deporte.");
                validacion = false;
            }

            return validacion;
        }
    </script>
</head>
<body>
    <div class="form-container">
    <h2>Formulario de datos personales</h2>
    <form action="action/mostrarDatosPersona.php" method="GET" onsubmit="return validarFormulario();">
        Nombre: <input type="text" name="nombre" id="nombre" required/> <br/>
        Apellido: <input type="text" name="apellido" id="apellido" required/> <br/>
        Edad: <input type="number" name="edad" id="edad" required/> <br/>
        Direccion: <input type="text" name="direccion" id="direccion" required/> <br/>
        <div class="radio-group">
        Nivel de estudios: <br/>
            <label><input type="radio" id="nivel_estudio" name="nivel_estudio" value="1" required> Ninguno</label>
            <label><input type="radio" id="nivel_estudio" name="nivel_estudio" value="2"> Primario</label>
            <label><input type="radio" id="nivel_estudio" name="nivel_estudio" value="3"> Secundario</label>
        </div>

        Sexo: <br/>
        <select id="sexo" name="sexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select>

        <div class="checkbox-group">
            Deportes que practica: <br/>
            <label><input type="checkbox" name="deportes[]" value="Futbol"> Futbol</label>
            <label><input type="checkbox" name="deportes[]" value="Basket"> Basket</label>
            <label><input type="checkbox" name="deportes[]" value="Tennis"> Tennis</label>
            <label><input type="checkbox" name="deportes[]" value="Voley"> Voley</label>
        </div>

        <input type="submit" name="submit" value="Aceptar"/>
    </form>
    </div>
</body>
</html>