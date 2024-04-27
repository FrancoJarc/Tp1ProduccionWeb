<?php

require_once("aldeano.php");
require_once("recolector.php");

class AldeanoFranco extends Aldeano implements Recolector{

    function __construct(){
        parent:: __construct(23 ,25);

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