<?php
include '../../Control/verificaPass.php';
include '../../Utils/funcion.php';

// Arreglo predefinido
$registrados = [
    ["usuario" => "admin", "clave" => "Mateo1234"],
    ["usuario" => "user1", "clave" => "Passw0rd1"],
    ["usuario" => "user2", "clave" => "Secure789"],
    ["usuario" => "user3", "clave" => "Alpha4567"],
    ["usuario" => "user4", "clave" => "Bravo1234"],
    ["usuario" => "user5", "clave" => "Charlie99"],
    ["usuario" => "user6", "clave" => "Delta5678"],
    ["usuario" => "user7", "clave" => "Echo2021"],
    ["usuario" => "user8", "clave" => "Foxtrot12"],
    ["usuario" => "user9", "clave" => "Golf9876"]
];

$datos = darDatosSubmitted();
$verifica = new Verifica($datos);

$mensaje = $verifica->verificar();
$mensaje = $mensaje . $verifica->verificaPass($registrados);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Login</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Resultado del Login</h4>
                </div>
                <div class="card-body">
                    <?php if ($mensaje): ?>
                        <div class="alert alert-info text-center" role="alert">
                            <?php echo htmlspecialchars($mensaje); ?>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-danger text-center" role="alert">
                            Ocurrió un error. Por favor, inténtelo de nuevo.
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-footer text-center">
                    <a href="javascript:history.back()" class="btn btn-primary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
