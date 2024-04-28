<?php

require_once('recolectable.php');
require_once('recolectar.php');


// Clase aldeano.

// abstract class Aldeano implements Recolectar (Genera problemas al tener intaciado el primero aldeano.)

abstract class Aldeano implements Recolectar {
    
    public $nombre;
    private $VelocidadRecoleccion; 
    public $bonus;
    
    public function __construct($nombre,$VelocidadRecoleccion,$bonus=0){
        
        $this-> nombre = $nombre;
        $this -> VelocidadRecoleccion = $VelocidadRecoleccion;
        $this -> bonus = $bonus;
        
    }

// funcion recolectar del aldeano se hereda tanto en el aldeano chino y franco por ser public.

function recolectar(Recolectable $recolectable){
    
    $tiempoRecoleccion;
    
// funcion ceil redondea el numero ya que el resultado es 6.94 periodico, $tiempo de recoleccion calcula el tiempo que se requiere para que el aldeano recolecte todo del arbusto
// formula (Cantidad de alimento del arbusto) / (la velocidad de recoleccion que siempre es 18)

    $calculobonus = $this->VelocidadRecoleccion * $this->bonus;

    $tiempoRecoleccion = ceil( $recolectable->getAlimento() / ($this->VelocidadRecoleccion + ($this->VelocidadRecoleccion * ($this->bonus/100) )));
    
    echo 'El aldeano tardará '.$tiempoRecoleccion.' minutos en recolectar todo el alimento'.'<br>';
    
    
}

// get de bonus
function getBonus(){
    
    return $this->bonus;

}

// fin get de bonus


// Set de velocidad, el atribut VelocidadRecoleccion al ser privado las clases hijas no pueden obtener el valor por defecto deben setearlo.

function SetVelocidadRecoleccion($velocidad) {
    
    if ($velocidad == 18 ){
        
        
        $this -> VelocidadRecoleccion = $velocidad;
        
    } else {
        
        echo 'error, no se puede crear aldeanos con mayor velocidad de recoleccion que 18.';
        
        $velocidad = 18;
        
        $this-> VelocidadRecoleccion = $velocidad;
        
    }
    
}

// fin de la funcion setter.


// para probar la velocidad de recoleccion de las clases hijas.

function getVelocidad () {
    
    return $this -> VelocidadRecoleccion;
    
}

function getNombre(){


return $this -> nombre;

}




}

// Clase Arbusto

class Arbusto implements Recolectable{
    
    
    private $CantidadAlimento;
    
function __construct($CantidadAlimento=125){
    

$this -> CantidadAlimento = $CantidadAlimento;

}

// get de Arbusto

function getAlimento(){
    
    
    return $this->CantidadAlimento;
    
    
}


}

// Clase pesquero

class Pesquero implements Recolectar {
    
    private $VelocidadRecoleccion;
    
    function __construct($VelocidadRecoleccion=18){
        
        
        $this -> VelocidadRecoleccion = $VelocidadRecoleccion;
        
        
    }
    
    // funcion recolectar del pesquero.
    
    function recolectar(Recolectable $recolectable){
        
        
        $tiempoRecoleccion;
        
        $tiempoRecoleccion = ceil($recolectable->getAlimento() / $this->VelocidadRecoleccion);
        
        echo 'El barco demorará '.$tiempoRecoleccion.' minutos en recolectar todos los peces.'.'<br>';
        
        
    }
    
    
    
}

// Clase Bando de pesca

class BancoDePesca implements Recolectable {
    
    private $CantidadAlimento;
    
    function __construct($CantidadAlimento=225){
        
        $this -> CantidadAlimento = $CantidadAlimento;
        
    }
    
    
    // GET 
    
    function getAlimento(){
        
        
        return $this->CantidadAlimento;
        
        
    }
    
    
}

// Creacion de las intancias (ya no las puedo utilizar por ser una clase abstracta.) 


// $roberto = new Aldeano();

$arbusto = new Arbusto();

// Metodos

echo 'La cantidad de alimento del arbusto es de: '.$arbusto->getAlimento().'<br>';

// $roberto -> recolectar($arbusto);

// echo 'El bonus de Roberto es: '.$roberto -> getBonus().'%'.'<br>';

// intacias

$barco = new Pesquero();

$peces = new BancoDePesca();

// metodos

echo 'La cantidad de peces del banco de pesca es de: '.$peces->getAlimento().'<br>';

$barco -> recolectar($peces); 

// En caso de necesitar el requiere_once de aldeano.php este tiene que estar despues de las demas clases porque se estan generando instacias de objetos en el archivo aldeano.php.

//require_once('aldeano.php');

?>
