<?php

class Verifica{

    private $usuario;

    public function __construct($usuario) {
        $this->usuario = $usuario;
    }

    public function getUsuario() {
    	return $this->usuario;
    }

    public function setUsuario($usuario) {
    	$this->usuario = $usuario;
    }

    public function verificaPass($registrados){
        $usuario = $this->getUsuario();
        $mensaje = "Error al querer ingresar";
        foreach ($registrados as $registrado) {
            if ($registrado['usuario'] == $usuario['usuario'] && $registrado['clave'] == $usuario['clave']) {
                $mensaje = "Bienvenido";
            }
        }
        return $mensaje;
    }

    public function verificar(){

        $usuario = $this->getUsuario();
        $mensaje = "";
    
        if ($usuario['usuario'] == "" && $usuario['clave'] == "") {
            $mensaje= "Error: Por favor, complete todos los campos.";
        }
        
        if (strlen($usuario['clave']) < 8) {
            $mensaje= "Error: La contraseña debe tener al menos 8 caracteres.";
        }
        
        if ($usuario['usuario'] === $usuario['clave']) {
            $mensaje= "Error: La contraseña no puede ser igual al nombre de usuario.";
        }
        
        if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $usuario['clave'])) {
            $mensaje= "Error: La contraseña debe contener al menos una letra y un número.";
        }
        return $mensaje;
    }


}

