<?php

require_once('recolectable.php');
require_once('recolectar.php');

// Clase aldeano. ---------------------------------------------------------------------------------------------------------------------------------------------------------------

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

// Fin de la clase aldeano --------------------------------------------------------------------------------------------------------------------------------------

?>