
<br>
<div class="row">
<div class="col-md-4 col-sm-3 col-xs-6"></div>

<div class="col-md-4 col-sm-3 col-xs-6">

<form name="formulario" method="post" action="<?=base_url()?>index.php/catedratico/guardaMaestro">

	<div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading">
	  Formulario
	  </div>
		

	<?php 
	if ($consulta!=false){
		
	?>	
	<input name='operacion' value='edit' hidden>
	<div class="control-group">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name='nombre' class="form-control" placeholder="Nombre" aria-describedby="sizing-addon1" value='<?=$consulta['nombre']?>' required>
		</div>
		<div class="form-group">
			<label>Apellidos</label>
			<input type="text" name='apellidos' class="form-control" placeholder="Apellido" aria-describedby="sizing-addon1" value='<?=$consulta['apellidos']?>' required>
		</div>
		<div class="form-group">
			<label>Matricula</label>
			<input type="text" name='matricula' class="form-control" placeholder="Matricula" aria-describedby="sizing-addon1" value='<?=$consulta['matricula']?>' required>
		</div>
		<div class="form-group">
			<label>Modificar Calendario</label>
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
			  Calendario
			</button>
		</div>
		<input name='id' value='<?=$consulta['id']?>' hidden>
	</div>	
		
	
	<?php
	
	}else{ ?>
		<input name='operacion' value='save' hidden>
	<div class="control-group">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name='nombre' class="form-control" placeholder="Nombre" aria-describedby="sizing-addon1" value='' required>
		</div>
		<div class="form-group">
			<label>Apellido</label>
			<input type="text" name='apellidos' class="form-control" placeholder="Apellido" aria-describedby="sizing-addon1" value='' required>
		</div>
		<div class="form-group">
			<label>Matricula</label>
			<input type="text" name='matricula' class="form-control" placeholder="Matricula" aria-describedby="sizing-addon1" value='' required>
		</div>
		<div class="form-group">
			<label>Modificar</label>
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
			  Calendario
			</button>
		</div>
	</div>
		<?php
		}
	?>
	<button type='submit' class='btn btn-primary'>Guardar</button>
	
	<!-- div del panel -->
	</div>

	 </form>
<!--row-->	 
</div>
<!--row-->	
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  <center>
	  <h2><font color=white><i class='glyphicon glyphicon-calendar' ></i>Calendario</font></h2>
	  <iframe src="<?=base_url()?>index.php/catedratico/horarioMaestro/<?=$consulta['id']?>" width='80%' height='300px'></iframe><br>
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
  <!--<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
		  
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  -->
</div>
