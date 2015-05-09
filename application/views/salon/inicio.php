	<div class="container" id="divSalon">
		<div class="row pad-botm">
            <div class="col-md-12"><br>
                <h4 class="header-line">Registro de salones</h4>
            </div>
        </div>
	
	  	 <div class="row">
	  	<div id="scrollVertical">
		<table class="table table-striped table-bordered table-hover">
		<thead id="thead">
			<th>N&uacute;mero de Salon</th>
			<th>Capacidad</th>
			<th>Editar/Eliminar</th>
			
			</thead>
		

			<?php 
			if ($consulta!=false){
				
			foreach($consulta as $row){
			?>	
				<tr>
				<td><?=$row['num_salon']?></td>
				<td><?=$row['capacidad']?></td><!--		<td><a href='<?=base_url()?>index.php/salon/editarSalon/<?=$row['id']?>' class='btn btn-warning'><i class='glyphicon glyphicon-edit'></i></a> 
		-->
				<td><a href='<?=base_url()?>index.php/salon/editarSalon/<?=$row['id']?>' class='btn btn-info'><i class='glyphicon glyphicon-edit'></i></a>
				<a href='<?=base_url()?>index.php/salon/eliminarSalon/<?=$row['id']?>' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a></td>
				</tr>
			
			<?php
			}
			}else{
					echo 'No hay salones registrados';
				}
			?>
			</table>
			</div>
			</div>
			<!-- div del panel -->
	</div>