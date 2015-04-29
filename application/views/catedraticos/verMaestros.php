

	<div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading">
	  Maestros <a href='<?=base_url()?>index.php/catedratico/editarMaestro' class='btn btn-primary'>Agregar</a>
	  </div>
	<table class='table'>
		<thead>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Matricula</th>
			<th></th>
			</thead>
		

	<?php 
	if ($consulta!=false){
		
	foreach($consulta as $maestro){
	?>	
		<tr>
		<td><?=$maestro['nombre']?></td>
		<td><?=$maestro['apellidos']?></td>
		<td><?=$maestro['matricula']?></td>
		<td><a href='<?=base_url()?>index.php/catedratico/editarMaestro/<?=$maestro['id']?>' class='btn btn-warning'><i class='glyphicon glyphicon-edit'></i></a> 
		<a href='<?=base_url()?>index.php/catedratico/eliminarMaestro/<?=$maestro['id']?>' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a></td>
		</tr>
	
	<?php
	}
	}else{
			echo 'Sin datos';
		}
	?>
	</table>
	<!-- div del panel -->
	</div>

	 
