<?php

class Arbusto{

    private $cantidadAlimento;

    function __construct(){
        $this->cantidadAlimento=125;
    }


    public function getAlimento(){

        return $this->cantidadAlimento;
    }



}

?>