<?php
class Operacion{
    private $datos;

    public function __construct($datos){
        $this->datos = $datos;
    }
    public function getDatos() {
    	return $this->datos;
    }
    
    public function setDatos($datos) {
    	$this->datos = $datos;
    }
    public function darResultado($datos){
        $resultado=null;
        $num1 = $datos['numero1'];
        $num2 = $datos['numero2'];
        $operador = $datos['operaciones'];

        if ($operador == "suma"){
            $resultado= $num1 + $num2;
        }elseif($operador == "resta"){
            $resultado = $num1 - $num2;
        }elseif($operador == "multiplicacion"){
            $resultado = $num1 * $num2;
        }else{
            $resultado = $num1 / $num2;
        }
        return $resultado;
    }
}
?>