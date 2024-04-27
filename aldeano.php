<?php

require_once('objeto.php');
require_once('recolectable.php');
require_once('recolectar.php');


// Clase aldeano Chino que hereda de Aldeano en el archivo objeto.php

class AldeanoChino extends Aldeano {

    

    function __construct($bonus=0){


        $this -> bonus = $bonus;
    }
}


// Clase aldeano Franco que hereda de Aldeano en el archivo objeto.php


class AldeanoFranco extends Aldeano {

function __construct($bonus=25){

$this -> bonus = $bonus;

}






}

// Instancias de prueba para las clases que heredan.

$xiao = new AldeanoChino();

$arbusto0 = new arbusto();

$xiao -> setVelocidadRecoleccion(18);


echo 'la velocidad es de: '.$xiao -> getVelocidad();

echo '<br>';

$xiao -> recolectar($arbusto0);

echo 'El bonus del aldeano es: '.$xiao -> getBonus().'%'.'<br>';

echo 'Aldeano franco'.'<br>';

$franco = new AldeanoFranco();

$arbusto1 = new Arbusto();

$franco -> setVelocidadRecoleccion(18);

echo 'la velocidad es de: '.$franco -> getVelocidad().'<br>';

echo 'el bonus del aldeano es: '.$franco -> getBonus().'%'.'<br>';

$franco -> recolectar($arbusto1);

?>