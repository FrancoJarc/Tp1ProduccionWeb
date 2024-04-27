<?php

require_once("arbusto.php");
require_once("aldeanoChino.php");
require_once("aldeanoFranco.php");
require_once("bancodepesca.php");
require_once("pesquero.php");
/*
$arbusto1 = new Arbusto();
$aldeano1= new Aldeano();
$aldeano1->recolectar($arbusto1);


$pesquero1 = new Pesquero();
$bancoDePesca1= new BancoDePesca();

$pesquero1->recolectar($bancoDePesca1);
*/

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
</head>
<body>

<form action="main.php" method="post">

    <h2>Tiempo de recolección </h2>
    <label for="">Elige recolector</label>
    <select name="recolector" id="">
        <option value="">Seleccione un recolector</option>
        <option value="">Aldeano Chino</option>
        <option value="">Aldeano Franco</option>
        <option value="">Pesquero</option>
    </select>    

    <label for="">Elige recolectable</label>
    <select name="recolectable" id="">
        <option value="">Seleccione un recolectable</option>
        <option value="">Arbusto</option>
        <option value="">Banco de pesca</option>
    </select>   
    
    <input type="submit" value="Calcular">
</form>



    
</body>
</html>
