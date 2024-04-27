<?php

require_once("arbusto.php");
require_once("aldeano.php");
require_once("bancodepesca.php");

$arbusto1 = new Arbusto();
$aldeano1= new Aldeano();
$aldeano1->recolectar($arbusto1);

$bancoDePesca1= new BancoDePesca();



?>
