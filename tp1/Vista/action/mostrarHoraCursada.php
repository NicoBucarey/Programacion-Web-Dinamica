<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver horario de cursada</title>
</head>
<body>
   
    <?php
    include '../../control/verHoraCursada.php';
    //include "../../utils/funciones.php";
    //$datos = darDatosSubmitted();
    $horas = [
                "lunesE" => $_GET['lunes_e'],
                "lunesS" => $_GET['lunes_s'],
                "martesE" => $_GET['martes_e'],
                "martesS" => $_GET['martes_s'],
                "miercolesE" => $_GET['miercoles_e'],
                "miercolesS" => $_GET['miercoles_s'],
                "juevesE" => $_GET['jueves_e'],
                "juevesS" => $_GET['jueves_s'],
                "viernesE" => $_GET['viernes_e'],
                "viernesS" => $_GET['viernes_s']
    ];
    
    $objCursada = new Cursada($horas);
    $horaSemanal = $objCursada->horaCursada();
    if($horaSemanal==0){
        echo "<p>No hay horas cursadas </p>";
    }
    echo  "<p>Total de horas cursadas: </p>". $horaSemanal;
    ?>
    <br/>
     <a href="../horaCursada.php">Volver</a>
</body>
</html>