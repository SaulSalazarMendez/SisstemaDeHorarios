 <?php $this->load->view('carreras/cabeza');?>
 <div class="content-wrapper">
      <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Registro de licenciaturas</h4>
            </div>
        </div>
             
                <div class="row">
            
                    <div class="col-md-4 col-sm-3 col-xs-6">
                      
                    </div>
                    	<table class="table table-bordered">	<!--Inicia tabla!-->
                    		<thead>
								<th>N&uacute;mero de carrera</th>
								<th>Nombre</th>
								<th>Opciones</th>
							</thead>
							<?php 
								if($consultaCarrera != false)
								{
									foreach($consultaCarrera as $consulta)
									{
							?>
										<tr>
        								<td><?= $consulta['id']?></td>
        								<td><?= $consulta['nombre'];?></td>
        								<td><a href='<?=base_url()?>index.php/carreras/editarCarrera/<?=$consulta['id']?>' class='btn btn-warning'><i class='glyphicon glyphicon-edit'></i></a>
        								<a href='<?=base_url()?>index.php/carreras/eliminarCarrera/<?=$consulta['id']?>' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a></td>
        					       
        								</tr>
        					<?php			
									}
								}
							?>
                    	</table>				<!--Fin de tabla! -->
                </div>                 
             </div>     
</div>
<?php $this->load->view('carreras/footer');?>

