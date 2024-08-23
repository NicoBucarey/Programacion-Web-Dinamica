
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action/mostrarCine.php" method="$_GET">
        Ingrese su edad: <input type="number" min="0" name="edad" required>
        ¿Es estudiante? 
        <select name="estudiante" id="estudiante">
            <option value="si">SI</option>
            <option value="no">NO</option>
        </select>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>