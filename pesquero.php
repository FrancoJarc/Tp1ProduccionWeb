<?php

require_once("recolector.php");

class Pesquero implements Recolector{

    private $velocidadRecoleccion;

    function __construct(){
        $this->velocidadRecoleccion=18;

    }

    public function recolectar(Recolectable $banco, int $cantidad){

        $tiempo=($banco->getAlimento()*$cantidad)/$this->velocidadRecoleccion;
        $tiempo=ceil($tiempo);

        if($tiempo<=1){
            return"Recolecté toda la pesca en ".$tiempo." minuto.";
        }else{
            return"Recolecté toda la pesca en ".$tiempo." minutos.";
        }
    }



}





?>