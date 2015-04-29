 <div class="content-wrapper">
      <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Registro de Aulas</h4>
            </div>
        </div>
             
                <div class="row">
            
                    <div class="col-md-4 col-sm-3 col-xs-6">
                      
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                            <form action="<?=base_url()?>index.php/salon/guardar" method="post" accept-charset="utf-8">
                              <div class="form-group">
                                <br>
                                <label for="numero_salon">Número de Salon</label>
                                <input type="text" name="numero_salon" value="" id="numero_salon" maxlength="30" size="40" class="form-control" required />
                                <br>
                                <label for="capacidad_salon">Capacidad</label>
                                <input type="number" name="capacidad_salon" value="" id="capacidad_salon" maxlength="30" size="40" class="form-control" required />
                                </div>
                                <br>
                                <input type="submit" name="register" value="Registrar" class="btn btn-success" />
                            </form>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-6">
             
                    </div>  
                </div>                 
             </div>     
</div>

