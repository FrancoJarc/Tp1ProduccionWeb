<?php

require_once("recolector.php");

class Pesquero implements Recolector{

    private $velocidadRecoleccion;

    function __construct(){
        $this->velocidadRecoleccion=18;

    }

    public function recolectar(Recolectable $banco){

        $tiempo=$banco->getAlimento()/$this->velocidadRecoleccion;
        $tiempo=ceil($tiempo);

        if($tiempo<=1){
            echo"Recolecte toda la pesca en ".$tiempo." minuto.";
        }else{
            echo"Recolecte toda la pesca en ".$tiempo." minutos.";
        }
    }



}





?>