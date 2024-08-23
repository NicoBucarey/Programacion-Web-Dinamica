<?php
include '../../Control/verDatos.php';
include "../../Utils/funciones.php";
$datos = darDatosSubmitted();
$persona = new VerificaDatos($datos);

$mensaje = $persona->verificarEdad($datos)."<br/>".$persona->verificarSexo($datos)."<br/>".$persona->verificarEstudios($datos)."<br/>".$persona->verificarDeporte($datos);

echo "<h1>".$mensaje."</h1>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver datos personales</title>
</head>
<body>
    <a href="../datosPersona.php" >Volver</a>
</body>
</html>