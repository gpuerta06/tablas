<!-- 
TABLA DINAMICA

1. Preparamos el formulario con su respectivo input de busqueda con el atributo onkeyup que hara el llamado a la funcion ubicada en public/js/main.js

2. Preparamos la tabla que imprime los Resultados a primera vista y en el tenemos una id importante:

 id="resultadoBusqueda" (responsable de imprimir los datos del AJAX segun el buscador y se contemplan en vista/tabla.php que es su tabla espejo)

-->

  <h1>BUSQUEDA DE JUGADORES</h1>

	<form role="form" name="srch">

    <div class="row">
      <div class="col-xs-6">
        <div class="form-group">
          <label>Buscar</label>
            <input type="text" name="buscar" id="buscar" class="form-control" onkeyup="BusquedaDinamicaAJAX(this.value);" >
        </div>
      </div>
    </div>
  </form> 
  <div class="box-header">
    <h3 class="box-title">Resultados Búsqueda:</h3>
  </div>
  <div class="box-body" id="resultadoBusqueda">
    <table border=1 class='tabla_datos'>
      <thead>
        <tr id='titulo'>
    			<td>ID</td>
    			<td>JUGADOR</td>
    			<td>CLUB NAME</td>
    			<td>RATING NACIONAL</td>
    			<td>TITULO</td>
    		</tr>
      </thead>
      <tbody>
      <?php foreach($datos['consultas'] as $jugador) : ?>
        <tr>
          <td><?=$jugador->Id_no;?></td>
    			<td><?=$jugador->Name;?></td>
    			<td><?=$jugador->ClubName;?></td>
    			<td><?=$jugador->Rtg_Nat;?></td>
    			<td><?=$jugador->Title;?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

