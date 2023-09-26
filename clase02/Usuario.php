<?php

class Usuario {
    //Atributos.
    public $nombre;
    public $apellido;

    //Constructor
    public function __construct($nombre, $apellido = null, $edad = 0) { 
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    //Métodos. 
    public function mostrar() { 
        return $this->nombre." ".$this->apellido;
    }

    // Estático
    public static function metodoEstatico(){
        return "Esto es un método estático";
    }
}

?>