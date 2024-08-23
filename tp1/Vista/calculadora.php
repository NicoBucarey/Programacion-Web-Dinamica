
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form name="form7" action="action/mostrarCalculadora.php" method="$_POST">
           <h1>Calculadora:</h1><br> <h3>Ingrese dos numeros: </h3>
            <br>
            <input type="text" name="numero1" id="numero1" required>
            <br>
            <input type="text" name="numero2" id="numero2" required>
            <br>
            <select name="operaciones" id="operaciones">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicacion</option>
                <option value="division">Division</option>
            </select>
            <input type="submit" name="submit" value="enviar">
        </form>
        
    </body>
    </html>