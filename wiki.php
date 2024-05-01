<?php 


require_once('complementos/nav.php');
require_once('objetos/aldeano.php');
require_once('objetos/bancodepesca.php');
require_once('objetos/arbusto.php');
require_once('objetos/pesquero.php');
require_once('objetos/herencia.php');

$aldeanoc = new AldeanoChino("Aldeano Chino");
$aldeanoc -> setVelocidadRecoleccion(18);
$aldeanof = new AldeanoFranco("Aldeano Franco");
$aldeanof -> setVelocidadRecoleccion(18);
$arbusto3 = new Arbusto();
$arbusto4 = new Arbusto();
$pescador01 = new pesquero();
$bancodepesca4 = new BancoDePesca();
?>
    <main>

    <div class="container-fluid">

    <h2 class="espaciado2">Wiki de Aldeanos y pesquero.</h2>

    
    
<section>
    <h3 class="hwik"> Aldeanos </h3>
    <div class="centrw">
    <div class="table-responsive">
<table>
<caption>Aldeanos</caption>
<thead>
<th>Imagen</th>
<th>Nombre</th>
<th>Bonus</th>
<th>Velocidad de recoleccion</th>
</thead>
<tbody>
  <tr>

  <td><img src="https://fakeimg.pl/70x70/?text=1" alt="foto 1" width="70" height="70" class="rounded img-fluid d-md-block"></td>
  <td><?php echo $aldeanoc->getNombre();?></td>
  <td><?php echo $aldeanoc->getBonus().'%';?></td>
  <td><?php echo $aldeanoc->recolectar($arbusto3);?></td>
    
 </tr>
    <tr>
    <td><img src="https://fakeimg.pl/70x70/?text=1" alt="foto 1" width="70" height="70" class="rounded img-fluid d-md-block"></td>
    <td><?php echo $aldeanof->getNombre();?></td>
    <td><?php echo $aldeanof->getBonus().'%';?></td>
    <td><?php echo $aldeanof->recolectar($arbusto4);?></td>
</tr>
</tbody>
<tfoot >
    <tr><td colspan="4">Aldea y Mar</td></tr>
</tfoot>
</table>
</div>
</div>
</section>

<section>
    <h3 class="hwik">Recolectables</h3>
    <div class="centrw">
    <div class="table-responsive">
<table>
    <caption>Arbusto y banco de pesca.</caption>
<thead>
   <th>imagen</th> 
<th>Nombre:</th>
<th>Cantidad de alimento:</th>
</thead>
<tbody>
<tr>
    <td><img src="https://fakeimg.pl/70x70/?text=1" alt="foto 1" width="70" height="70" class="rounded img-fluid d-md-block"></td>
    <td>Arbusto</td>
    <td><?php echo $arbusto3->getAlimento();?></td>
</tr>
<tr>
    <td><img src="https://fakeimg.pl/70x70/?text=1" alt="foto 1" width="70" height="70" class="rounded img-fluid d-md-block"></td>
    <td>Banco de pesca</td>
    <td><?php echo $bancodepesca4->getAlimento();?></td>
</tr>
</tbody>
<tfoot><tr><td colspan="3">Aldea y Mar</td></tr></tfoot>
</table>
</div>
</div>
</section>

<section>
    <h3 class="hwik"> Pesquero </h3>
    <div class="centrw">
    <div class="table-responsive">
    <table class="pezt">
        <caption>pesqueros</caption>
    <thead>
    <th>Imagen</th>
    <th>Nombre</th>
    <th>Velocidad de recoleccion</th>
    </thead>
    <tbody>
    <tr>
    <td><img src="https://fakeimg.pl/70x70/?text=1" alt="foto 1" width="70" height="70" class="rounded img-fluid d-md-block"></td>
    <td><?php echo $pescador01-> getNombrePesquero();?></td>
    <td><?php echo $pescador01-> recolectar($bancodepesca4);?></td>
    </tr>
    </tbody>
    <tfoot><tr><td colspan="3">Aldea y Mar</td></tr></tfoot>
    </table>
</div>
</div>

</div>

</main>

<p class="acl"> El aldeano y el pesquero cuentan con una velocidad de recoleccion base de 18 unidades por minuto.</p>

<?php require_once('complementos/footer.php');

?>
