 <?php $this->load->view('carreras/cabeza');?>
 <!--  <div class="content-wrapper">	-->
      <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12"><br>
                <h4 class="header-line">Registro de licenciaturas</h4>
            </div>
        </div>
             
                <div class="row">
            
                    
                    	<div id="scrollVertical">
                    	<table class="table table-striped table-bordered table-hover">	<!--Inicia tabla!-->
                    		<thead id="thead">
								<th>N&uacute;mero de carrera</th>
								<th>Nombre</th>
								<th>Editar / Eliminar / Horarios</th>
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
        								<td>
        									<a href='<?=base_url()?>index.php/carreras/editarCarrera/<?=$consulta['id']?>' class='btn btn-info'><i class='glyphicon glyphicon-edit'></i></a>
        									&nbsp;&nbsp;&nbsp;&nbsp;<a href='<?=base_url()?>index.php/carreras/eliminarCarrera/<?=$consulta['id']?>' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
        					       			&nbsp;&nbsp;&nbsp;&nbsp;<a href='<?=base_url()?>index.php/pdfs/generarBloques/<?=$consulta['id']?>' class='btn btn-success' target="_blank"><i class='glyphicon glyphicon-list-alt'></i></a>
        					       		</td>
        								</tr>
        					<?php			
									}
								}
							?>
                    	</table>				<!--Fin de tabla! -->
                    	</div>
                </div>                 
             </div>     
<!--  </div>	-->
<?php $this->load->view('carreras/footer');?>

