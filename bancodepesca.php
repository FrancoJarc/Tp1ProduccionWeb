<?php

require_once("recolectable.php");

class BancoDePesca implements Recolectable{

    private $cantidadAlimento;

    function __construct(){
        $this->cantidadAlimento=225;
    }

    function getAlimento(){
        return $this->cantidadAlimento;
    }

}


?>