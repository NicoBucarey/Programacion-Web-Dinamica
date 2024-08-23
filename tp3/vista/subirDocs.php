<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir doc o pdf</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('form').on('submit', function(event) {
                var archivo = $('#miArchivo').val();
                var ext = archivo.split('.').pop().toLowerCase();
                var tamaño = document.getElementById('miArchivo').files[0].size;
                var mensajeError = "";

                if (archivo === "") {
                    mensajeError = "Por favor, seleccione un archivo.\n";
                }

                if ($.inArray(ext, ['pdf', 'doc']) == -1) {
                    mensajeError += "Solo se permiten archivos .doc o .pdf.\n";
                }

                if (tamaño > 2097152) {
                    mensajeError += "El archivo excede el tamaño máximo permitido de 2MB.\n";
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
                    <h4>Subir un archivo</h4>
                </div>
                <div class="card-body">
                    <form action="action/mostrarDocs.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="miArchivo">Ingrese el archivo (PDF o DOC, máx. 2MB):</label>
                            <input type="file" name="miArchivo" id="miArchivo" class="form-control" required>
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
