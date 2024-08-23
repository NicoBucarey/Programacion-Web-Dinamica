<?php  
    include "../../Control/verCalculadora.php";
    include "../../Utils/funciones.php";
    $datos = darDatosSubmitted();
    $obj = new Operacion($datos);
    $resultado=$obj->darResultado($datos);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Resultado de la operacion: </h2> <br>
    <?php echo "El resultado de la operacion es: ". $resultado ?>
    <br> 
    <a href="../calculadora.php">Volver</a>
</body>
</html>