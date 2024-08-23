
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">Cinemas</h1>
        <form action="action/mostrarCinemas.php" method="POST" id="cineForm" class="p-4 bg-white rounded shadow">
            <div class="row">
                
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="produccion" class="form-label">Producción:</label>
                        <input type="text" class="form-control" name="produccion" id="produccion">
                    </div>
                    <div class="mb-3">
                        <label for="director" class="form-label">Director:</label>
                        <input type="text" class="form-control" name="director" id="director" required>
                    </div>
                    <div class="mb-3">
                        <label for="nacionalidad" class="form-label">Nacionalidad:</label>
                        <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" required>
                    </div>
                    <div class="mb-3">
                        <label for="duracion" class="form-label">Duración (min):</label>
                        <input type="number" class="form-control" name="duracion" id="duracion" required min="0">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="actor" class="form-label">Actor:</label>
                        <input type="text" class="form-control" name="actor" id="actor" required>
                    </div>
                    <div class="mb-3">
                        <label for="guion" class="form-label">Guion:</label>
                        <input type="text" class="form-control" name="guion" id="guion">
                    </div>
                    <div class="mb-3">
                        <label for="anio" class="form-label">Año:</label>
                        <input type="number" class="form-control" name="anio" id="anio">
                    </div>
                    <div class="mb-3">
                        <p class="form-label">Restricciones de edad:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="opcion1" name="restriccion" value="1" required>
                            <label class="form-check-label" for="opcion1">Todos los públicos</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="opcion2" name="restriccion" value="2" required>
                            <label class="form-check-label" for="opcion2">Mayores de siete años</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="opcion3" name="restriccion" value="3" required>
                            <label class="form-check-label" for="opcion3">Mayores de dieciocho años</label>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="mb-3">
                <label for="sinopsis" class="form-label">Sinopsis:</label>
                <textarea class="form-control" name="sinopsis" id="sinopsis"></textarea>
            </div>
            
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="button" id="borrar" class="btn btn-secondary">Borrar</button>
            </div>
        </form>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  
    <script>
        $(document).ready(function() {
           
            function validar() {
                var esValido = true;

                
                $('#cineForm input[required]').each(function() {
                    if ($(this).val().trim() === '') {
                        esValido = false;
                        $(this).addClass('is-invalid');
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                });

                
                var nacionalidad = $('#nacionalidad').val().trim();
                if (!/^[a-zA-Z]+$/.test(nacionalidad)) {
                    esValido = false;
                    $('#nacionalidad').addClass('is-invalid');
                } else {
                    $('#nacionalidad').removeClass('is-invalid');
                }

                return esValido;
            }

           
            $('#cineForm').on('submit', function(e) {
                if (!validar()) {
                    e.preventDefault(); 
                    alert('Por favor, completa todos los campos correctamente.');
                }
            });

            
            $('#borrar').on('click', function() {
                $('#cineForm')[0].reset(); 
                $('.is-invalid').removeClass('is-invalid'); 
            });
        });
    </script>
</body>
</html>
