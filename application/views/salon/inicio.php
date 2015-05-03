
	<div class="panel panel-defaul" id="divSalon">

		<div class="panel-heading ">
	  		Salon <a href='<?=base_url()?>index.php/salon/registrarSalon' class='btn btn-primary'>Agregar</a>
	  	</div>
		<table class='table'>
		<thead>
			<th>Número de Salon</th>
			<th>Capacidad</th>
			<th>Opciones</th>
			
			</thead>
		

			<?php 
			if ($consulta!=false){
				
			foreach($consulta as $row){
			?>	
				<tr>
				<td><?=$row['num_salon']?></td>
				<td><?=$row['capacidad']?></td><!--		<td><a href='<?=base_url()?>index.php/salon/editarSalon/<?=$row['id']?>' class='btn btn-warning'><i class='glyphicon glyphicon-edit'></i></a> 
		-->
				<td><a href='<?=base_url()?>index.php/salon/editarSalon/<?=$row['id']?>' class='btn btn-warning'><i class='glyphicon glyphicon-edit'></i></a>
				<a href='<?=base_url()?>index.php/salon/eliminarSalon/<?=$row['id']?>' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a></td>
				</tr>
			
			<?php
			}
			}else{
					echo 'No hay salones registrados';
				}
			?>
			</table>
			<!-- div del panel -->
	</div>