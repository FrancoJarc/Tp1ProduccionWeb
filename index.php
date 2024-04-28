<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age of Empires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once("arbusto.php");
require_once("aldeanoChino.php");
require_once("aldeanoFranco.php");
require_once("bancodepesca.php");
require_once("pesquero.php");
require_once("recolector.php");
require_once("recolectable.php");
$mostrar="";
?>

    <nav class="navbar bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand">Calculadora</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <div class="container my-4">
        <div class="row">
            <div class="col-md-4">

                <form action="" method="post">

                    <fieldset>                  
                        <legend>Calcular tiempo de recolección</legend>
                        <div class="mb-3">
                            <label for="">Elige recolector</label><br>
                            <select name="recolector" required>
                                <option value="" hidden>Seleccione un recolector</option>
                                <option value="aldeano_chino">Aldeano Chino</option>
                                <option value="aldeano_franco">Aldeano Franco</option>
                                <option value="pesquero">Pesquero</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Elige recolectable</label><br>
                            <select name="recolectable" required>
                                <option value="" hidden>Seleccione un recolectable</option>
                                <option value="arbusto">Arbusto</option>
                                <option value="banco">Banco de pesca</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="cantidad">Cantidad de recolectable</label><br>
                            <input type="number" id="cantidad" name="cantidad" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Calcular</button>
                    
                    </fieldset>

                </form>
               
            </div>


            <div class="col-md-8">
                <h2>Tabla de guia</h2>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Recolector/Recolectable</th>
                            <th>Alimento</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Aldeano Chino</td>
                            <td>18 unidades</td>
                        </tr>
                        <tr>
                            <td>Aldeano Franco</td>
                            <td>23 unidades</td>
                        </tr>
                        <tr>
                            <td>Pesquero</td>
                            <td>18 unidades</td>
                        </tr>
                        <tr>
                            <td>Arbusto</td>
                            <td>125 unidades</td>
                        </tr>
                        <tr>
                            <td>Banco de pesca</td>
                            <td>225 unidades</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<?php  
if($_POST){

$recolector= $_POST['recolector'];
$recolectable= $_POST['recolectable'];
$cantidad= $_POST['cantidad'];

    if($recolector=="aldeano_chino" && $recolectable=="arbusto"){
        $aldeanoChino= new AldeanoChino();
        $arbusto= new Arbusto();
        $mostrar=$aldeanoChino->recolectar($arbusto,$cantidad);

    }elseif($recolector=="aldeano_franco" && $recolectable=="arbusto"){
        $aldeanoFranco= new AldeanoFranco();
        $arbusto= new Arbusto();
        $mostrar=$aldeanoFranco->recolectar($arbusto,$cantidad);
    }elseif($recolector=="pesquero" && $recolectable=="banco"){
        $pesquero= new Pesquero();
        $banco=new BancoDePesca();
        $mostrar=$pesquero->recolectar($banco,$cantidad);
    }else{
        $mostrar="Seleccione elementos compatibles.";
    }


    if ($mostrar == "Seleccione elementos compatibles.") {
        $clase = "rojo";
    } else {
        $clase = "verde";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <label for="mostrar"  class="<?php echo $clase; ?>"><?php echo $mostrar; ?></label>
        </div> 
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>