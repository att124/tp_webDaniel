<?php

require_once('recolectable.php');

// Clase Arbusto -------------------------------------------------------------------------------------------------------------------------------------------------


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

// fin de la clase arbusto --------------------------------------------------------------------------------------------------------------------------------------------

?>