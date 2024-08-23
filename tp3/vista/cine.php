<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .resultado {
            background-color: rgba(144, 238, 144, 0.7); 
            border: 2px solid green;
            border-radius: 10px;
            padding: 15px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Cinemas</h1>
        <form action="action/mostrarCine.php" method="post" enctype="multipart/form-data" onSubmit="return validar();">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="produccion" class="form-label">Producción:</label>
                        <input type="text" name="produccion" id="produccion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="director" class="form-label">Director:</label>
                        <input type="text" name="director" id="director" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nacionalidad" class="form-label">Nacionalidad:</label>
                        <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="duracion" class="form-label">Duración:</label>
                        <input type="number" name="duracion" id="duracion" class="form-control" required min="0">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="actor" class="form-label">Actor:</label>
                        <input type="text" name="actor" id="actor" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="guion" class="form-label">Guion:</label>
                        <input type="text" name="guion" id="guion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="anio" class="form-label">Año:</label>
                        <input type="number" name="anio" id="anio" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Restricciones de edad:</label><br>
                        <div class="form-check">
                            <input type="radio" id="opcion1" name="restriccion" value="1" class="form-check-input" required>
                            <label for="opcion1" class="form-check-label">Todos los públicos</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="opcion2" name="restriccion" value="2" class="form-check-input" required>
                            <label for="opcion2" class="form-check-label">Mayores de siete años</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="opcion3" name="restriccion" value="3" class="form-check-input" required>
                            <label for="opcion3" class="form-check-label">Mayores de dieciocho años</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="sinopsis" class="form-label">Sinopsis:</label>
                <textarea name="sinopsis" id="sinopsis" class="form-control" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen de la película:</label>
                <input type="file" name="imagen" class="form-control" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-secondary">Borrar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function validar() {
           
            if ($('#titulo').val().trim() === '' || $('#actor').val().trim() === '' || 
                $('#director').val().trim() === '' || $('#nacionalidad').val().trim() === '' || 
                $('#duracion').val().trim() === '') {
                alert('Por favor, complete todos los campos obligatorios.');
                return false;
            }
           
            var letrasRegex = /^[a-zA-Z\s]+$/;
            if (!letrasRegex.test($('#titulo').val()) || 
                !letrasRegex.test($('#actor').val()) || 
                !letrasRegex.test($('#director').val()) || 
                !letrasRegex.test($('#nacionalidad').val())) {
                alert('Por favor, ingrese solo letras en los campos correspondientes.');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>

