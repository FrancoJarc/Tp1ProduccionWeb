<?php

class Aldeano{

    private $velocidadRecoleccion;

    public function __construct(){

        $this->velocidadRecoleccion=18;
    }

    public function recolectar(Arbusto $arbusto){
        $tiempo=$arbusto->alimento/$this->velocidadRecoleccion;
        $tiempo=ceil($tiempo);

        if($tiempo<=1){
            echo"Recolecte todo el alimento en ".$tiempo." minuto.";
        }else{
            echo"Recolecte todo el alimento en ".$tiempo." minutos.";
        }
        
    }
}


?>