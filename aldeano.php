<?php

abstract class Aldeano{

    private $velocidadRecoleccion;
    private $bonus;

    function __construct($bonus){

        $this->velocidadRecoleccion=18;
        $this->bonus=$bonus;
    }

    public function recolectar(Arbusto $arbusto){
        $tiempo=$arbusto->getAlimento()/$this->velocidadRecoleccion;
        $tiempo=ceil($tiempo);

        if($tiempo<=1){
            echo"Recolecte todo el alimento en ".$tiempo." minuto.";
        }else{
            echo"Recolecte todo el alimento en ".$tiempo." minutos.";
        }
        
    }

    public function getBonus(){
        return $this->bonus;
    }
}


?>