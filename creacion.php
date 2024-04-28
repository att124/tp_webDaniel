<?php

require_once('objeto.php');
require_once('aldeano.php');
//require_once('recolectable.php');
//require_once('recolectar.php');

if (isset($_POST['nombre']) && $_POST['opciones']){

$nombre = $_POST['nombre'];
$selec = $_POST['opciones'];

if ($selec == 'Aldeanochino'){

echo '---------------------------------------------------------'.'<br>';

echo 'Aldeano chino'.'<br>';

$nombre = new AldeanoChino($nombre);

echo 'El nombre del aldeano es: '.$nombre->getNombre().'<br>';

$arbusto = new Arbusto();

$nombre -> setVelocidadRecoleccion(18);


echo 'la velocidad es de: '.$nombre -> getVelocidad().'<br>';

echo 'El bonus del aldeano es: '.$nombre -> getBonus().'%'.'<br>';

$nombre -> recolectar($arbusto).'<br>';

$selec = "";


echo '-----------------------------------------------------------';


} elseif ($selec == 'AldeanoFranco'){

echo '---------------------------------------------------------'.'<br>';

echo 'Aldeano franco'.'<br>';

$nombre = new AldeanoFranco($nombre);

echo 'El nombre del aldeano es: '.$nombre->getNombre().'<br>';

$arbusto = new Arbusto();

$nombre -> setVelocidadRecoleccion(18);

echo 'la velocidad es de: '.$nombre -> getVelocidad().'<br>';

echo 'El bonus del aldeano es: '.$nombre -> getBonus().'%'.'<br>';



$nombre -> recolectar($arbusto).'<br>';

echo '---------------------------------------------------------';

} else {


    echo 'nada';



}







}



?>