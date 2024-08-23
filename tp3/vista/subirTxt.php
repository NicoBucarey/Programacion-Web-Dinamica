<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo txt</title>
 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('form').on('submit', function(event) {
                var archivo = $('#miArchivo').val();
                var ext = archivo.split('.').pop().toLowerCase();
                var mensajeError = "";

                if (archivo === "") {
                    mensajeError = "Por favor, seleccione un archivo.\n";
                }

                if (ext !== 'txt') {
                    mensajeError += "Solo se permiten archivos .txt.\n";
                }

                if (mensajeError !== "") {
                    alert(mensajeError);
                    event.preventDefault();
                }
            });
        });
    </script>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Subir un archivo txt</h4>
                </div>
                <div class="card-body">
                    <form action="action/mostrarTxt.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="miArchivo">Ingrese el archivo (.txt):</label>
                            <input type="file" name="miArchivo" id="miArchivo" accept=".txt" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
