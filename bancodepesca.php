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

// fin de la clase Banco de pesca.
?>

