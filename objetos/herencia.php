<?php

require_once('aldeano.php');
require_once('arbusto.php');
require_once('recolectable.php');
require_once('recolectar.php');


// Clase aldeano Chino que hereda de Aldeano en el archivo objeto.php

class AldeanoChino extends Aldeano {

// El atributo bonus no se inicia como atributo de la clase AldeanoChino/AldeanoFranco ya que es un atributo heredado de la clase Aldeano(padre).

    public $nombre;

// En vez de usar null utilizo 0 ya que a la hora de mostrar el bonus figura como " ".

    function __construct(String $nombre,$bonus=0){

        $this-> nombre = $nombre;
        $this -> bonus = $bonus;
    }
}


// Clase aldeano Franco que hereda de Aldeano en el archivo objeto.php


class AldeanoFranco extends Aldeano {

public $nombre;

function __construct(String $nombre,$bonus=25){
    
    $this-> nombre = $nombre;
    $this -> bonus = $bonus;

}






}

// Instancias de prueba para las clases que heredan.

// echo '-----------------------------------------------------'.'<br>';

// echo 'Aldeano Chino'.'<br>';

 //$xiao = new AldeanoChino("Xiao");

 //$arbusto0 = new arbusto();

 //$xiao -> setVelocidadRecoleccion(18);


 //echo 'la velocidad es de: '.$xiao -> getVelocidad();

 //echo '<br>';

 //$xiao -> recolectar($arbusto0);

// echo 'El bonus del aldeano es: '.$xiao -> getBonus().'%'.'<br>';


// Instancias del aldeano franco

// echo '-----------------------------------------------------'.'<br>';

// echo 'Aldeano franco'.'<br>';

// $franco = new AldeanoFranco("Gustavo");

 // $arbusto1 = new Arbusto();

 // $franco -> setVelocidadRecoleccion(18);

 // echo 'la velocidad es de: '.$franco -> getVelocidad().'<br>';

//  echo 'el bonus del aldeano es: '.$franco -> getBonus().'%'.'<br>';

 // $franco -> recolectar($arbusto1);



?>