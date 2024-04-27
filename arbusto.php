<?php

require_once("recolectable.php");

class Arbusto implements Recolectable{

    private $cantidadAlimento;

    function __construct(){
        $this->cantidadAlimento=125;
    }


    function getAlimento(){
        return $this->cantidadAlimento;
    }



}

?>