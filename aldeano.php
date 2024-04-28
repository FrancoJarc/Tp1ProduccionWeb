<?php
require_once("recolector.php");


abstract class Aldeano implements Recolector{

    private $velocidadRecoleccion;
    private $bonus;

    function __construct($velocidadRecoleccion,$bonus){

        $this->velocidadRecoleccion=$velocidadRecoleccion;
        $this->bonus=$bonus;
    }

    public function recolectar(Recolectable $recolectable, int $cantidad){}

}


?>