<?php
require_once './Usuario.php';

class Empleado extends Usuario {
    //Atributos.
    public $nombre;
    public $apellido;

    //Constructor
    public function __construct($nombre, $apellido = '') { 
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    //Métodos. 
    public function mostrar() { 
        return $this->nombre." ".$this->apellido;
    }
}

?>