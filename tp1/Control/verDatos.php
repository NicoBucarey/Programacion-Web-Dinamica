<?php 

class VerificaDatos{
private $info;

public function __construct($info){
    $this->info;
}
public function getInfo() {
    return $this->info;
}

public function setInfo($info) {
    $this->info = $info;
}

    public function verificarEdad($info){
        $mensaje = "";
        if ($info['edad'] >= 18) {
            $mensaje = "Es mayor de edad";
        }else{
            $mensaje = "No es mayor de edad";
        }
        return $mensaje;
    }

    public function verificarSexo($info){
        $mensaje = "";
        $sexo = strtoupper($info['sexo']);
        if ($sexo == 'MASCULINO') {
            $mensaje = "Usted es del sexo masculino";
        } elseif ($sexo == 'FEMENINO') {
            $mensaje = "Usted es del sexo femenino";
        }else{
            $mensaje = "Usted es de otro sexo";
        }
        return $mensaje;
    }

    public function verificarEstudios($info){
        $mensaje = "";
        $estudio = strtoupper($info['nivel_estudio']);
        if ($estudio == 2) {
            $mensaje = "Usted tiene estudio primario";
        } elseif ($estudio == 3) {
            $mensaje = "Usted tiene estudio secundario";
        }else{
            $mensaje = "Usted no tiene ningun estudio";
        }
        return $mensaje;
    }

    public function verificarDeporte($info){
        $mensaje = "";
        foreach($info['deportes'] as $deporte){
            $mensaje= $mensaje."Usted practica: ". $deporte."\n";
        }
        return $mensaje;
    }
}
