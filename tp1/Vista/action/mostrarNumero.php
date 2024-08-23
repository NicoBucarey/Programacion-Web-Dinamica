

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver numero</title>
</head>
<body>
    <?php
    include '../../control/verNumero.php';
    include "../../utils/funciones.php";
    $datos = darDatosSubmitted();
    
    $numero = new Numero($datos);
    $resultado =$numero->validar();
   
    if($resultado == 1){
        echo "<p>El numero ingresado: </p>" . $numero . "<p> tiene valor positivo </p>";
    }elseif($resultado==0){
        echo "<p>El numero ingresado es: </p>" . $numero;
    }elseif($resultado==-1){
        echo "<p>El numero ingresado: </p>" . $numero . "<p> tiene valor negativo </p>";
    }else{
        echo "<p>No se ingresaron datos </p>";
    }
    ?>
    <h3>volver a la pagina anterior</h3><br/>
    <a href="javascript:history.back()">Volver</a>
</body>
</html>