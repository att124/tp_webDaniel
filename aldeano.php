<?php

require_once('objeto.php');
require_once('recolectable.php');
require_once('recolectar.php');

class AldeanoChino extends Aldeano {

    

    function __construct($bonus=0){


        $this -> bonus = $bonus;

    }



}


class AldeanoFranco extends Aldeano {

function __construct($bonus=25){

$this -> bonus = $bonus;

}






}

$xiao = new AldeanoChino();

$arbusto0 = new arbusto();

echo $xiao -> setVelocidadRecoleccion(18);


echo 'la velocidad es de: '.$xiao -> getVelocidad();

echo '<br>';

$xiao -> recolectar($arbusto0);

echo 'Aldeano franco'.'<br>';

$franco = new AldeanoFranco();

$arbusto1 = new Arbusto();

$franco -> setVelocidadRecoleccion(18);

echo 'la velocidad es de: '.$franco -> getVelocidad().'<br>';

$franco -> recolectar($arbusto1);