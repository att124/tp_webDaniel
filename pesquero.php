
 <?php 

require_once('recolectable.php');
require_once('recolectar.php');

class Pesquero implements Recolectar {
    
    private $VelocidadRecoleccion;
    private $nombrebarco;

    function __construct($VelocidadRecoleccion=18,$nombrebarco='pesquero'){
        
        
        $this -> VelocidadRecoleccion = $VelocidadRecoleccion;
        $this -> nombrebarco = $nombrebarco;
        
    }
    
    // funcion recolectar del pesquero.
    
    function recolectar(Recolectable $recolectable){
        
        
        $tiempoRecoleccion;
        
        $tiempoRecoleccion = ceil($recolectable->getAlimento() / $this->VelocidadRecoleccion);
        
        echo 'El barco demorará '.$tiempoRecoleccion.' minutos en recolectar todos los peces.'.'<br>';
        
        
    }


    function setNombreBarco($nombre){

        if (isset($nombre)){
        
        
            $this -> nombrebarco = $nombre;
            
        } else {
            
            echo 'nombre invalido.';
            
        }



    }


    function getNombrePesquero(){

        return $this ->     nombrebarco;


    }
    
    
}

$barca = new Pesquero();
$barca -> setNombreBarco("Barca");
echo 'El nombre de tu barco pesquero es: '.$barca -> getNombrePesquero();

?>