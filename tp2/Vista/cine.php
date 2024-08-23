
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form" id="form" action="../../tp1/Vista/action/mostrarCine.php" method="$_GET" onSubmit="return validar()">
        Ingrese su edad: <input type="number" min="0" name="edad"  id="edad" >
        ¿Es estudiante? 
        <select name="estudiante" id="estudiante">
            <option value="si">SI</option>
            <option value="no">NO</option>
        </select>
        <input type="submit" name="submit" value="Enviar">
    </form>

<script src="../../jquery/jquery-3.7.1.js"></script>
<script type="text/javascript">
        
        
        $(document).ready(function() {
            function validar(){  
            $('#form').submit(function(event) {
                var edad = $('#edad').val();
                var estudiante = $('#estudiante').val();
                var isValid = true;

                
                if (edad === "" || isNaN(edad) || edad < 0) {
                    alert("Por favor, ingrese una edad válida.");
                    isValid = false;
                }

                
                if (estudiante === "") {
                    alert("Seleccione si es estudiante.");
                    isValid = false;
                }

                
                if (!isValid) {
                    event.preventDefault();
                }
            });}
        });
    </script>
    </body>
</html>