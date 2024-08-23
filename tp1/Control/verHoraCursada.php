<?php

class Cursada{
    private $horas;

    public function __construct($horas){
        $this->horas = $horas;
    }
    public function getHoras(){
        return $this->horas;
    }
    public function setHoras($horas){
        $this->horas = $horas;
    }

    public function horaCursada(){
        $horas = $this->getHoras();
        if ($horas != "") {
            $horasSemanales = (intval($horas['lunesS']) - intval($horas['lunesE'])) + (intval($horas['martesS']) - intval($horas['martesE'])) + (intval($horas['miercolesS']) - intval($horas['miercolesE'])) + (intval($horas['juevesS']) - intval($horas['juevesE'])) + (intval($horas['viernesS']) - intval($horas['viernesE']));
        }
        return $horasSemanales;
    }
}