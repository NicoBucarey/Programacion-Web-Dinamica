<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- ICONOS FONT AWESOME -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- BOOTSTRAP CSS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
     <!-- JQUERY -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script>
        $(document).ready(function() {
            $('form').on('submit', function(event) {
                var usuario = $('#usuario').val();
                var clave = $('#clave').val();
                var mensajeError = "";

                if (usuario === "" || clave === "") {
                    mensajeError = "Por favor, complete todos los campos.\n";
                }

                if (clave.length < 8) {
                    mensajeError += "La contraseña debe tener al menos 8 caracteres.\n";
                }

                if (clave === usuario) {
                    mensajeError += "La contraseña no puede ser igual al nombre de usuario.\n";
                }

                var regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
                if (!regex.test(clave)) {
                    mensajeError += "La contraseña debe contener al menos una letra y un número.\n";
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
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="Action/mostrarLogin.php" method="post">
                            <div class="form-group">
                                <label for="usuario">Usuario:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="clave">Contraseña:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" id="clave" name="clave" class="form-control" placeholder="Contraseña" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
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