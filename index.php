<?php require_once('complementos/nav.php');?>
<!-- Creacion de un formulario posiblemente para crear los objetos.-->



<h1 id="inicio">Formulario</h1>

<main id="bodyindx">

<?php

$val = "formajs";

error_reporting(0);


echo '<div class=fnds>';

if(($_POST['seleccion']==null)){

    echo '<h2 class=formjs>Aldeano y barco pesquero</h2>';

} elseif ($_POST['seleccion']=='aldeano') {

echo '<h2 class=formajs>Aldeano</h2>';

} else {

echo '<h2 class=formajs>Barco pesquero </h2>';

}



    echo'<section>';


if (!isset($_POST['seleccion'])) {

    echo '<h3 class=sel> Seleccionar </h3>';

    echo "
    <form action=# method=post>
    
    <input type = radio id=aldeano name=seleccion value=aldeano>
    <label for=aldeano> Aldeano </label> <br>
    <input type=radio id=barco name=seleccion value=barco>
    <label for=barco id=esp1>Barco</label><br>
    <button type=submit>Seleccionar</button>
    
    </form>
    
    
    
    
    </section>
    ";}

    else {

        
        if ($_POST['seleccion']=='aldeano'){
        // falta definir el action problamente sea otra página.
            echo "
           <h3 class=sel> Creacion de aldeano </h3>
           <form action=creacion.php method=post> 
            <label id=nombre>nombre: </label>
            <input type=text id=nombre name=nombre requiere>
            <br>
            <label for=opciones>Seleccionar una opción</label>
            <select id=opciones name=opciones requiere>
            <option value=Aldeanochino>Aldeano Chino</option>
            <option value=AldeanoFranco>Aldeano Franco</option>
            </select>
            <br>
            <button type=submit class=btnalde> Crear Aldeano </button>
            </form> 

            <form action=index.php method=post class=espaciadofm> 
            <input type=hidden name=cancelar value=cancelar>
            <button type=submit> Cancelar </button>
            </form>
            ";

            if($_POST['cancelar']=='cancelar'){

                $_POST['seleccion']==null;
            
            }






        }




        else {
            
            echo "
            
            <h3 class=sel>Creacion de barco</h3>
            <form action=# method=post>
            <label> Nombre del barco </label>
            <input type=text id=nombre requiere>
            <br>
            <button type=submit class=btnalde>Crear barco </button>
            </form>
            <form method=post action=index.php class=espaciadofm>
            <input type=hidden name=cancelar value=cancelar>
            <button type=submit> Cancelar </button>
            </form> 
            ";
            if($_POST['cancelar']=='cancelar'){
                
                $_POST['seleccion']==null;
                
                
            }
            
            
            
        } 
    }
 

echo '</div>';

?>

</main>

<?php require_once('complementos/footer.php');