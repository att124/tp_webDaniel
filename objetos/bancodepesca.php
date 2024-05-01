<?php
// Clase Bando de pesca -----------------------------------------------------------------------------------------------------------------------------------------------------

require_once('recolectable.php');

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

//$peces06 = new BancoDePesca();
//echo 'El alimento del banco de pesca es de: '.$peces06 -> getAlimento();

// fin de la clase Banco de pesca.
?>

