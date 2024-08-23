
<?php
class Cinemas{
    private $datos;
    public function __construct($datos){
        $this->datos = $datos;
    }
    public function getDatos(){
        return $this->datos;
    }
    public function setDatos($datos){
        $this->datos=$datos;
    }
    public function verificarAnio($datos){
        $valor= true;
        $anio=$datos['anio'];
        if(strlen($anio) > 4){
            $valor=false;
        }
        return $valor;
    }
    public function verificarDuracion($datos){
        $valor = true;
        $duracion = $datos['duracion'];
        if(strlen($duracion) > 3){
            $valor=false;
        }
        return $valor;
    }
    public function verificarLetra($dato){
        $valor = true;
        if(!ctype_alpha($dato)){
            $valor=false;
        }
        return $valor;
    }
    
}