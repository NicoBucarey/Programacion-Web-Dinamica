<?php
Class Entrada{
    private $datos;
    
    public function __construct($datos){
        $this->datos=$datos;
    }
    
    public function getDatos() {
    	return $this->datos;
    }
    
    public function setDatos($datos) {
    	$this->datos = $datos;
    }
    public function definirPrecio($datos){
        $valorEntrada = null;
        $edad = $datos['edad'];
        $esEstudiante = $datos['estudiante'];
        if($esEstudiante == "si"){
            if($edad >= 12){
               $valorEntrada = 180; 
            }else{
               $valorEntrada = 160; 
            }
        }else{
            $valorEntrada = 300;
        }
        return $valorEntrada;
    }
}