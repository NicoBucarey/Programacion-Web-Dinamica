<?php
include "../../Utils/funciones.php";
include "../../../tp2/Control/verCinemas.php";
include "../../control/verCine.php";

$datos = darDatosSubmitted();
$obj = new Cinemas($datos);
$objCine= new Cine();
echo $objCine->validarArchivo();

$valorAnio = $obj->verificarAnio($datos);
if(!$valorAnio){
    echo "<p>El campo AÑO no puede ser completado por más de cuatro dígitos.</p>";
}
$valorDuracion = $obj->verificarDuracion($datos);
if(!$valorDuracion){
    echo "<p>El campo DURACIÓN no puede ser completado por más de tres dígitos.</p>";
}
$datoTitulo = $datos['titulo'];
$valorTitulo = $obj->verificarLetra($datoTitulo);
if(!$valorTitulo){
    echo "<p>El campo TÍTULO debe ser completado solo con letras.</p>";
}
$datoActor = $datos['actor'];
$valorActor = $obj->verificarLetra($datoActor);
if(!$valorActor){
    echo "<p>El campo ACTOR debe ser completado solo con letras.</p>";
}
$datoDirector = $datos['director'];
$valorDirector = $obj->verificarLetra($datoDirector);
if(!$valorDirector){
    echo "<p>El campo DIRECTOR debe ser completado solo con letras.</p>";
}
$datoGuion = $datos['guion'];
$valorGuion = $obj->verificarLetra($datoGuion);
if(!$valorGuion){
    echo "<p>El campo GUION debe ser completado solo con letras.</p>";
}
$datoProduccion = $datos['produccion'];
$valorProduccion = $obj->verificarLetra($datoProduccion);
if(!$valorProduccion){
    echo "<p>El campo PRODUCCIÓN debe ser completado solo con letras.</p>";
}
$datoNacionalidad = $datos['nacionalidad'];
$valorNacionalidad = $obj->verificarLetra($datoNacionalidad);
if(!$valorNacionalidad){
    echo "<p>El campo NACIONALIDAD debe ser completado solo con letras.</p>";
}

if ($valorTitulo && $valorActor && $valorDirector && $valorGuion && $valorProduccion && $valorNacionalidad && $valorAnio && $valorDuracion && isset($imagenCargada)) {
    echo "<h1 class='text-center'>La película introducida es: </h1><br>";
    echo "<div class='resultado p-4'>";
    echo "Título: " . $datos['titulo'] . "<br>";
    echo "Actor: " . $datos['actor'] . "<br>";
    echo "Director: " . $datos['director'] . "<br>";
    echo "Guion: " . $datos['guion'] . "<br>";
    echo "Producción: " . $datos['produccion'] . "<br>";
    echo "Nacionalidad: " . $datos['nacionalidad'] . "<br>";
    echo "Año: " . $datos['anio'] . "<br>";
    echo "Duración: " . $datos['duracion'] . "<br>";
    echo "<img src='$imagenCargada' alt='Imagen de la película' class='img-fluid mt-3'>";
    echo "</div>";
} else {
    echo "<p>Por favor, corrige los errores en el formulario.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Cine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .resultado {
            background-color: rgba(144, 238, 144, 0.7); 
            border: 2px solid green;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <?php
        
        ?>
    </div>
</body>
</html>
