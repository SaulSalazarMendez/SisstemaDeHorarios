

	<div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading">
	  Salon <a href='<?=base_url()?>index.php/salon/registrarSalon' class='btn btn-primary'>Agregar</a>
	  </div>
	<table class='table'>
		<thead>
			<th>Nombre</th>
			<th>Capacidad</th>
			
			</thead>
		

	<?php 
	if ($consulta!=false){
		
	foreach($consulta as $row){
	?>	
		<tr>
		<td><?=$row['num_salon']?></td>
		<td><?=$row['capacidad']?></td>
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

	 
