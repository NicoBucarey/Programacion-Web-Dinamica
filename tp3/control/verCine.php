<?php

Class Cine{
public function validarArchivo(){
$dir = 'descargas/'; 

if ($_FILES['imagen']["error"] <= 0) {

    if (!copy($_FILES['imagen']['tmp_name'], $dir . $_FILES['imagen']['name'])) {
        echo "ERROR: No se pudo cargar el archivo.";
    } else {
        echo "El archivo " . $_FILES['imagen']['name'] . " se ha copiado con éxito.<br />";
        $imagenCargada = $dir . $_FILES['imagen']['name'];
    }
} else {
    echo "ERROR: No se pudo cargar el archivo. No se pudo acceder al archivo temporal.";
}

}
    
}