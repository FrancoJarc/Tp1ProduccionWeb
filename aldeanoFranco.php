<?php

require_once("aldeano.php");
require_once("recolector.php");

class AldeanoFranco extends Aldeano implements Recolector{

    private $velocidadRecoleccion;
    private $bonus;

    function __construct(){
        $this->velocidadRecoleccion = 23;
        $this->bonus = 25;

    }

    public function recolectar(Recolectable $recolectable, int $cantidad){

        $tiempo=($recolectable->getAlimento()*$cantidad)/$this->velocidadRecoleccion;
        $tiempo=ceil($tiempo);

        if($tiempo<=1){
            return"Recolecté todo el alimento en ".$tiempo." minuto.";
        }else{
            return"Recolecté todo el alimento en ".$tiempo." minutos.";
        }

    }

}


?>