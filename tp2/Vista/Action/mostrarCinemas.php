<?php
include "../../Utils/funciones.php";
include "../../Control/verCinemas.php";

$datos = darDatosSubmitted();
$obj = new Cinemas($datos);

$valorAnio = $obj->verificarAnio($datos);
$valorDuracion = $obj->verificarDuracion($datos);

$datoTitulo = $datos['titulo'];
$valorTitulo = $obj->verificarLetra($datoTitulo);

$datoActor = $datos['actor'];
$valorActor = $obj->verificarLetra($datoActor);

$datoDirector = $datos['director'];
$valorDirector = $obj->verificarLetra($datoDirector);

$datoGuion = $datos['guion'];
$valorGuion = $obj->verificarLetra($datoGuion);

$datoProduccion = $datos['produccion'];
$valorProduccion = $obj->verificarLetra($datoProduccion);

$datoNacionalidad = $datos['nacionalidad'];
$valorNacionalidad = $obj->verificarLetra($datoNacionalidad);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Cinemas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-light">
<div class="container mt-5">
    <h1 class="text-center mb-4">Resultado de la Película</h1>

    <?php if(!$valorAnio): ?>
        <div class="alert alert-danger">El campo AÑO no puede ser completado por más de cuatro dígitos</div>
    <?php endif; ?>
    
    <?php if(!$valorDuracion): ?>
        <div class="alert alert-danger">El campo DURACIÓN no puede ser completado por más de tres dígitos</div>
    <?php endif; ?>
    
    <?php if(!$valorTitulo): ?>
        <div class="alert alert-danger">El campo TÍTULO debe ser completado solo con letras</div>
    <?php endif; ?>
    
    <?php if(!$valorActor): ?>
        <div class="alert alert-danger">El campo ACTOR debe ser completado solo con letras</div>
    <?php endif; ?>
    
    <?php if(!$valorDirector): ?>
        <div class="alert alert-danger">El campo DIRECTOR debe ser completado solo con letras</div>
    <?php endif; ?>
    
    <?php if(!$valorGuion): ?>
        <div class="alert alert-danger">El campo GUION debe ser completado solo con letras</div>
    <?php endif; ?>
    
    <?php if(!$valorProduccion): ?>
        <div class="alert alert-danger">El campo PRODUCCIÓN debe ser completado solo con letras</div>
    <?php endif; ?>
    
    <?php if(!$valorNacionalidad): ?>
        <div class="alert alert-danger">El campo NACIONALIDAD debe ser completado solo con letras</div>
    <?php endif; ?>

    <?php if($valorTitulo && $valorActor && $valorDirector && $valorGuion && $valorProduccion && $valorNacionalidad && $valorAnio && $valorDuracion): ?>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">La película introducida es:</h5>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Título:</strong> <?= $datos['titulo'] ?></li>
                    <li class="list-group-item"><strong>Actor:</strong> <?= $datos['actor'] ?></li>
                    <li class="list-group-item"><strong>Director:</strong> <?= $datos['director'] ?></li>
                    <li class="list-group-item"><strong>Guion:</strong> <?= $datos['guion'] ?></li>
                    <li class="list-group-item"><strong>Producción:</strong> <?= $datos['produccion'] ?></li>
                    <li class="list-group-item"><strong>Nacionalidad:</strong> <?= $datos['nacionalidad'] ?></li>
                    <li class="list-group-item"><strong>Año:</strong> <?= $datos['anio'] ?></li>
                    <li class="list-group-item"><strong>Duración:</strong> <?= $datos['duracion'] ?> minutos</li>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>


</body>
</html>
