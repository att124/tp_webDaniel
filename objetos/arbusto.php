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

//$arbusto07 = new Arbusto();

//echo 'El alimento del arbusto es de: '.$arbusto07 -> getAlimento();


// fin de la clase arbusto --------------------------------------------------------------------------------------------------------------------------------------------

?>