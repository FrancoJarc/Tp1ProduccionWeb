<?php

require_once("arbusto.php");
require_once("aldeano.php");

$arbusto1 = new Arbusto();
$aldeano1= new Aldeano();
$aldeano1->recolectar($arbusto1);

$arbusto1->getAlimento();




?>
