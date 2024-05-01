<?php
require_once('complementos/nav.php');
require_once('objetos/aldeano.php');
require_once('objetos/herencia.php');
require_once('objetos/arbusto.php');
require_once('objetos/pesquero.php');
require_once('objetos/bancodepesca.php');


//require_once('recolectable.php');
//require_once('recolectar.php');


if ((isset($_POST['nombre'])) && $_POST['opciones']){

$nombre = $_POST['nombre'];
$selec = $_POST['opciones'];

if ($selec == 'Aldeanochino'){

//echo '---------------------------------------------------------'.'<br>';

//echo 'Aldeano chino'.'<br>';

$nombre = new AldeanoChino($nombre);

//echo 'El nombre del aldeano es: '.$nombre->getNombre().'<br>';

$arbusto = new Arbusto();

$nombre -> setVelocidadRecoleccion(18);


//echo 'la velocidad es de: '.$nombre -> getVelocidad().'<br>';

//echo 'El bonus del aldeano es: '.$nombre -> getBonus().'%'.'<br>';

//$nombre -> recolectar($arbusto).'<br>';

$selec = "";

echo "
<div class=centrado>
<div class=col-lg-3>
<article class='card text-center' id=cr1>
    <img src=imgs/chinof.png alt=aldeano_chino width=300 height=200 class='rounded img-fluid mx-auto d-block'>
    <h2>Aldeano Chino</h2>";
   echo '<p class=centrarinf>'.'El nombre del aldeano: '.$nombre->getNombre().'<br>'.'</p>';
   echo '<p class=centrarinf>'.'La velocidad de recoleccion: '.$nombre->getVelocidad().'<br>'.'</p>';
   echo '<p class=centrarinf>'.'El bonus es de: '.$nombre->getBonus().'%'.'<br>'.'</p>';
   echo '<p class=centrarinf>'.$nombre->recolectar($arbusto).'<br>';
   echo "<form method=post action=index.php class=espb> <button type=submit>Volver</button></form>";
   echo "
</article>
</div> 
</div>
"
;



// echo '-----------------------------------------------------------';


} elseif ($selec == 'AldeanoFranco'){

//echo '---------------------------------------------------------'.'<br>';

//echo 'Aldeano franco'.'<br>';

$nombre = new AldeanoFranco($nombre);

//echo 'El nombre del aldeano es: '.$nombre->getNombre().'<br>';

$arbusto = new Arbusto();

$nombre -> setVelocidadRecoleccion(18);

//echo 'la velocidad es de: '.$nombre -> getVelocidad().'<br>';

//echo 'El bonus del aldeano es: '.$nombre -> getBonus().'%'.'<br>';



//$nombre -> recolectar($arbusto).'<br>';







echo "
<div class=centrado>
<div class=col-lg-3>
<article class='card text-center' id=cr>
    <img src=imgs/aldeanaf.png alt=aldeana width=300 height=200 class='rounded img-fluid mx-auto d-block'>
    <h2>Aldeano Franco</h2>";
   echo '<p class=centrarinf>'.'El nombre del aldeano: '.$nombre->getNombre().'<br>'.'</p>';
   echo '<p class=centrarinf>'.'La velocidad de recoleccion: '.$nombre->getVelocidad().'<br>'.'</p>';
   echo '<p class=centrarinf>'.'El bonus es de: '.$nombre->getBonus().'%'.'<br>'.'</p>';
   echo '<p class=centrarinf>'.$nombre->recolectar($arbusto).'<br>';
   echo "<form method=post action=index.php class=espb> <button type=submit>Volver</button></form>";
   echo "
</article>
</div> 
</div>
"
;







//echo '---------------------------------------------------------';

} elseif ($selec == 'pesquero') {

    //echo '----------------------------------------------------------------'.'<br>';

    $pesquero = new Pesquero();

    $pesquero -> setNombreBarco($nombre);

    // echo 'El nombre de tu barco es: '.$pesquero -> getNombrePesquero().'<br>';
          
    $peces = new BancoDePesca();

    //echo 'La cantidad de peces del Banco de pesca es de: '.$peces -> getAlimento().'<br>';

    //$pesquero -> recolectar($peces);




    echo "
    <div class=centrado>
    <div class=col-lg-3>
    <article class='card text-center' id=cr2>
    <img src=imgs/pesquerof.png alt=pesquero width=300 height=200 class='rounded img-fluid mx-auto d-block'>
    <h2>Pesquero</h2>";
    echo '<p class=centrarinf>'.'El nombre del pesquero es: '.$pesquero->getNombrePesquero().'<br>'.'</p>';
    echo '<p>'.'La cantidad de peces del Banco de pesca es de: '.$peces -> getAlimento().'</p>'.'<br>';
    echo '<p class=centrarinf>'.$pesquero->recolectar($peces).'<br>';
    echo "<form method=post action=index.php class=espb> <button type=submit>Volver</button></form>";
    echo "
</article>
</div> 
</div>
"
;







//echo '-------------------------------------------------------------------'.'<br>';

}







}

require_once('complementos/footer.php');

?>