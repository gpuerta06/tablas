<!--
Tabla espejo que permite imprimir la busqueda por AJAX
 -->
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
    <?php foreach($datos['consulta'] as $datos) : ?>
      <tr>
        <td><?=$datos->Id_no;?></td>
        <td><?=$datos->Name;?></td>
        <td><?=$datos->ClubName;?></td>
        <td><?=$datos->Rtg_Nat;?></td>
        <td><?=$datos->Title;?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
           