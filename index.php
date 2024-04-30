<?php require_once('complementos/navindex.php');?>
<!-- Creacion de un formulario posiblemente para crear los objetos.-->




<main class="espac">
    
    
<div class="test">
    
<h1 id="inicio">Formulario</h1>

<?php

$val = "formajs";

//error_reporting(0);


echo '<div class=fnds>';





    echo'<section id=sec>';


if (!isset($_POST['seleccion'])) {

    echo '<h3 class=sel> Seleccionar </h3>';
                                                            // primero va el aldeano y luego el pesquero.
    echo "
    <form action=# method=post>
    
    <input type = radio id=aldeano name=seleccion value=aldeano>
    <label for=aldeano> <img src=https://fakeimg.pl/200x70/?text=1 alt=foto 1 width=200 height=50 class=rounded img-fluid d-md-block></label> <br>
    <input type=radio id=barco name=seleccion value=barco>
    <label for=barco id=esp1><img src=https://fakeimg.pl/200x70/?text=1 alt=foto 1 width=200 height=50 class=rounded img-fluid d-md-block></label><br>
    <button type=submit id=botonins>Seleccionar</button>
    
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
            <input type=text id=nombre name=nombre required>
            <br>
            <label for=opciones>Seleccionar</label>
            <select id=opciones name=opciones required>
            <option value=Aldeanochino>Aldeano Chino</option>
            <option value=AldeanoFranco>Aldeano Franco</option>
            </select>
            <br>
            <button type=submit class=btnalde> Crear Aldeano </button>
            </form> 
            <form action=index.php method=post class=espaciadofm> 
            <input type=hidden name=cancelar value=cancelar>
            <button type=submit> Cancelar </button>
            </form>";

            






        }




        else {
            
            echo "
            
            <h3 class=sel>Creacion de barco</h3>
            <form action=creacion.php method=post>
            <label> Nombre del barco </label>
            <input type=text id=nombre name=nombre required>
            <br>
            <input type=hidden name=opciones value=pesquero>
            <button type=submit class=btnalde>Crear barco </button>
            </form>

            <form action=index.php method=post class=espaciadofm> 
            <input type=hidden name=cancelar value=cancelar>
            <button type=submit id=ter> Cancelar </button>
            </form>

            ";
            
            
            
        } 
    }
 

echo '</div>';

?>

</div>

</main>

<?php require_once('complementos/footer.php'); ?>