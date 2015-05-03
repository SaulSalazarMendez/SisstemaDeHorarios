 <?php $this->load->view('carreras/cabeza');?>
 <div class="content-wrapper">
      <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Baja de Licenciaturas</h4>
            </div>
        </div>
             
                <div class="row">
            
                    <div class="col-md-4 col-sm-3 col-xs-6">
                      
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                            <form action="<?=base_url()?>index.php/carreras/eliminarCarrera" method="post" accept-charset="utf-8">
                              <div class="form-group">
                                <br>
                                <label for="licenciatura">Selecciona la licenciatura</label><br><br>
                                <?php 
                                	if($consultaCarrera != FALSE)
                                	{
                                		echo "<select name='selectCarrera' id='selectCarrera' class='form-control'>";
                                		foreach($consultaCarrera as $fila)
                                		{
                                			echo "<option value='".$fila['nombre']."'>".$fila['nombre']."</option>";
                                		}
                                		echo "</select>";
                                	}
                                ?>
                              </div>
                                <br>
                                <input type="submit" name="btnEliminar" id="btnEliminar" value="Eliminar" class="btn btn-success" />
                            </form>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-6">
             
                    </div>  
                </div>                 
             </div>     
</div>
<?php $this->load->view('carreras/footer');?>

