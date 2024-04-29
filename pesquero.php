
 <?php 

require_once('recolectable.php');
require_once('recolectar.php');

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

?>