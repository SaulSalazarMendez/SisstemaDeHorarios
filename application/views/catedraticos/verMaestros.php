

	<div class="container">
	<div class="row pad-botm">
            <div class="col-md-12"><br>
                <h4 class="header-line">Registro de catedr&aacute;ticos</h4>
            </div>
        </div>
	  <!-- Default panel contents -->
	  
	<div class="row">
	<div id="scrollVertical"> 
	<table class="table table-striped table-bordered table-hover">
		<thead id="thead">
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Matricula</th>
			<th>Editar/Eliminar</th>
			</thead>
	<?php 
	if ($consulta!=false){
		
	foreach($consulta as $maestro){
	?>	
		<tr>
		<td><?=$maestro['nombre']?></td>
		<td><?=$maestro['apellidos']?></td>
		<td><?=$maestro['matricula']?></td>
		<td><a href='<?=base_url()?>index.php/catedratico/editarMaestro/<?=$maestro['id']?>' class='btn btn-info'><i class='glyphicon glyphicon-edit'></i></a> 
		<a href='<?=base_url()?>index.php/catedratico/eliminarMaestro/<?=$maestro['id']?>' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a></td>
		</tr>
	
	<?php
	}
	}else{
			echo 'Sin datos';
		}
	?>
	</table>
	</div>
	</div>
	<!-- div del panel -->
	</div><br><br>

	 
