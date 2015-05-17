
<!--  <div class="content-wrapper">		-->
      <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12"><br>
                <h4 class="header-line">Registro de Licenciaturas</h4>
            </div>
        </div>
             
                <div class="row">            
                    <div class="col-md-4 col-sm-3 col-xs-6"></div>
                    	<div class="col-md-4">
                      <div class="alert alert-success back-widget-set text-center">
                            <form action="<?=base_url()?>index.php/carreras/agregarCarrera" method="post" accept-charset="utf-8" >
                              <div class="form-group">
                                <br>
                                <label for="licenciatura">Nombre de la licenciatura</label><br><br>
                                <input type="text" name="txtNombreCarrera" value="" id="txtNombreCarrera" maxlength="30" size="40" class="form-control"  onkeypress="letras()" />
                              </div>
                                <br>
                                <input type="submit" name="btnRegistrar" id="btnRegistrar" value="Registrar" class="btn btn-success" />
                            </form>
                      
                      </div>
                      <div class="col-md-4"></div>
                   </div>
                </div>                 
       </div><br><br><br><br>     
<!--  </div>	-->