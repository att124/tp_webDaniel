<?php



class Aldeano {


private $VelocidadRecoleccion; 

 function __construct($VelocidadRecoleccion = 18){


    $this -> VelocidadRecoleccion = $VelocidadRecoleccion;


}

function recolectar(Arbusto $arbusto){

$tiempoRecoleccion;

$tiempoRecoleccion = ceil($arbusto->getAlimento() / $this->VelocidadRecoleccion);

echo 'El aldeano tardará '.$tiempoRecoleccion.' minutos en recolectar todo el alimento'.'<br>';


}


}


class Arbusto {


    private $CantidadAlimento;

function __construct($CantidadAlimento=125){


$this -> CantidadAlimento = $CantidadAlimento;

}


function getAlimento(){


    return $this->CantidadAlimento;


}




}



class Pesquero {

private $VelocidadRecoleccion;

function __construct($VelocidadRecoleccion=18){


$this -> VelocidadRecoleccion = $VelocidadRecoleccion;


}

function recolectar(BancoDePesca $peces){


    $tiempoRecoleccion;

    $tiempoRecoleccion = ceil($peces->getAlimento() / $this->VelocidadRecoleccion);

    echo 'El barco demorará '.$tiempoRecoleccion.' minutos en recolectar todos los peces.'.'<br>';


}



}



class BancoDePesca {

private $CantidadAlimento;

function __construct($CantidadAlimento=225){

$this -> CantidadAlimento = $CantidadAlimento;

}

function getAlimento(){


    return $this->CantidadAlimento;


}


}


$roberto = new Aldeano();

$arbusto = new Arbusto();

echo 'La cantidad de alimento del arbusto es de: '.$arbusto->getAlimento().'<br>';

$roberto -> recolectar($arbusto);

$barco = new Pesquero();

$peces = new BancoDePesca();

echo 'La cantidad de peces del banco de pesca es de: '.$peces->getAlimento().'<br>';

$barco -> recolectar($peces); 



?>
