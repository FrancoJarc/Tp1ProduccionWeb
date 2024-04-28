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

    public function recolectar(Recolectable $recolectable){

        $tiempo=$recolectable->getAlimento()/$this->velocidadRecoleccion;
        $tiempo=ceil($tiempo);

        if($tiempo<=1){
            echo"Recolecte todo el alimento en ".$tiempo." minuto.";
        }else{
            echo"Recolecte todo el alimento en ".$tiempo." minutos.";
        }

    }

}


?>