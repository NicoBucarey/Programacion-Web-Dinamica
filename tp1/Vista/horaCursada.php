<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora de cursada</title>
    <script type="text/javascript">
         function validarFormulario() {
            var validacion = true;
            var dias = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes'];
            for (let dia of dias) {
                const entrada = document.getElementById(`${dia}_e`).value;
                const salida = document.getElementById(`${dia}_s`).value;

                if (entrada !== "" && salida !== "") {
                    if (parseInt(entrada) >= parseInt(salida)) {
                        alert(`La hora de salida debe ser posterior a la hora de entrada en ${dia.charAt(0).toUpperCase() + dia.slice(1)}.`);
                        validacion = false;
                    }
                } else {
                    alert(`Debe ingresar las horas de entrada y salida para ${dia.charAt(0).toUpperCase() + dia.slice(1)}.`);
                    validacion = false;
                }
            }
            return validacion;
        }
    </script>
</head>
<body>
    <h1>Ingrese un horario de cursada</h1><br/>
    <form name="form_hora_cursada" id="form_hora_cursada" method="get" action="action/mostrarHoraCursada.php" onsubmit="return validarFormulario();">
        Lunes: <br/>
        Entrada: <input id="lunes_e" name="lunes_e" type="number" min="0" max="23"/> 
        Salida: <input id="lunes_s" name="lunes_s" type="number" min="0" max="23"/> <br/>
        Martes: <br/>
        Entrada: <input id="martes_e" name="martes_e" type="number" min="0" max="23"/>
        Salida: <input id="martes_s" name="martes_s" type="number" min="0" max="23"/> <br/>
        Miercoles: <br/>
        Entrada: <input id="miercoles_e" name="miercoles_e" type="number" min="0" max="23"/>
        Salida: <input id="miercoles_s" name="miercoles_s" type="number" min="0" max="23"/> <br/>
        Jueves: <br/>
        Entrada: <input id="jueves_e" name="jueves_e" type="number" min="0" max="23"/>
        Salida: <input id="jueves_s" name="jueves_s" type="number" min="0" max="23"/> <br/>
        Viernes: <br/>
        Entrada: <input id="viernes_e" name="viernes_e" type="number" min="0" max="23"/>
        Salida:  <input id="viernes_s" name="viernes_s" type="number" min="0" max="23"/> 
        <br/>
        <input type="submit" name="submit" value="Enviar">
    </form>
    
</body>
</html>