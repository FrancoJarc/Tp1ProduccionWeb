<?php

class Pesquero{

    private $velocidadRecoleccion;

    function __construct(){
        $this->velocidadRecoleccion=18;

    }

    public function recolectar(BancoDePesca $banco){

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