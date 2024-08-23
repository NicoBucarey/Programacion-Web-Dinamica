<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar archivos</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Resultado de la subida</h4>
                </div>
                <div class="card-body">
                    <?php
                    include '../../control/verDocs.php';
                    
                    $verificar = new VerificarDoc();
                    $archivo = $_FILES['miArchivo'];

                    $mensaje = $verificar->validarDocumentos($archivo);

                    if (strpos($mensaje, "ERROR") !== false) {
                        echo '<div class="alert alert-danger text-center" role="alert">';
                    } else {
                        echo '<div class="alert alert-success text-center" role="alert">';
                    }
                    echo $mensaje;
                    echo '</div>';
                    ?>
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
