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



<form action="" method="post">

    <h2>Tiempo de recolección </h2>
    <label for="">Elige recolector</label>
    <select name="recolector" required>
        <option value="" hidden >Seleccione un recolector</option>
        <option value="aldeano_chino">Aldeano Chino</option>
        <option value="aldeano_franco">Aldeano Franco</option>
        <option value="pesquero">Pesquero</option>
    </select>    

    <label for="">Elige recolectable</label>
    <select name="recolectable" required>
        <option value="" hidden>Seleccione un recolectable</option>
        <option value="arbusto">Arbusto</option>
        <option value="banco">Banco de pesca</option>
    </select>   
    
    <input type="submit" value="Calcular">
</form>

<?php

if($_POST){

$recolector= $_POST['recolector'];
$recolectable= $_POST['recolectable'];


    echo"Recolector:  ".$recolector."<br>Recolectable:   ".$recolectable."<br>";

    if($recolector=="aldeano_chino" && $recolectable=="arbusto"){
        $aldeanoChino= new AldeanoChino();
        $arbusto= new Arbusto();
        $aldeanoChino->recolectar($arbusto);

    }elseif($recolector=="aldeano_franco" && $recolectable=="arbusto"){
        $aldeanoFranco= new AldeanoFranco();
        $arbusto= new Arbusto();
        $aldeanoFranco->recolectar($arbusto);
    }elseif($recolector=="pesquero" && $recolectable=="banco"){
        $pesquero= new Pesquero();
        $banco=new BancoDePesca();
        $pesquero->recolectar($banco);
    }else{

        echo"Error";
    }
}

?>



    
</body>
</html>
