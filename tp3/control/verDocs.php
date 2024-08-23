<?php

class VerificarDoc{

    public function validarDocumentos($archivo){
        $mensaje = "";

        $dir = 'C:/xampp/htdocs/dinamica/tp3/descargas/';

        if ($archivo["error"] <= 0) {

       
            $tamaño = $archivo['size'];
            $nombre = $archivo['name'];
            $nombreTmp = $archivo['tmp_name'];

            $ext = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));

            if ($ext != 'pdf' && $ext != 'doc') {
                $mensaje = "Error: Solo se permiten archivos .doc o .pdf.";
            } elseif ($tamaño > 2097152) { 
                $mensaje = "Error: El archivo excede el tamaño máximo permitido de 2MB.";
            } else {
                if (!copy($nombreTmp, $dir.$nombre)) {
                    $mensaje = "ERROR: no se pudo cargar el archivo ";
                   }else{
                    $mensaje = "El archivo ".$nombre." se ha copiado con Éxito <br/>";
                    $mensaje = $mensaje. "<a href='" . $dir.$nombre . "'target='_blank'>Ver archivo</a>";
                   }
            }
        }else {
            $mensaje =  "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
        }
        return $mensaje;
    }
}