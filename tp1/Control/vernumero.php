<?php

class Numero{
    private $numero;

    public function __construct($numero) {
        $this->numero = $numero;
    }

    public function getNumero() {
    	return $this->numero;
    }
    
    public function setNumero($numero) {
    	$this->numero = $numero;
    }

    public function validar(){
        $resultado= null;
        $numero = $this->getNumero()['numero'];
        if (is_numeric($numero)) {
            if ($numero > 0) {
                $resultado= 1;
            }elseif ($numero == 0) {
                $resultado = 0;
            }else{
                $resultado = -1;
            }
        }else {
            $resultado=2;
        }
        return $resultado;
    }
    public function __toString(){
        return $this->getNumero()['numero'];
    }
}