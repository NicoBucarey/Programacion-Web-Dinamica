<?php
include "../../Utils/funciones.php";
include "../../Control/verCine.php";

$datos = darDatosSubmitted();
$obj = new Entrada($datos);

$valor = $obj->definirPrecio($datos);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h2>Valor de la entrada</h2>
  <?php 
  echo "El valor de la entrada es ". $valor;
  ?>  
 <br>
  <a href="../cine.php">Volver</a>
</body>
</html>