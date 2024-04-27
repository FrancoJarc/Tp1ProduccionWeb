<?php

class BancoDePesca{

    private $cantidadAlimento;

    function __construct(){
        $this->cantidadAlimento=225;
    }

    public function getAlimento(){
        return $this->cantidadAlimento;
    }

}


?>