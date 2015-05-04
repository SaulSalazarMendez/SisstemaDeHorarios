 <div class="content-wrapper">
      <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Registro de Catedráticos</h4>
            </div>
        </div> 
             
                <div class="row">
            
                    <div class="col-md-4 col-sm-3 col-xs-6">
                      
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                            <form action="#" method="post" accept-charset="utf-8">
                              <div class="form-group">
                                <br>
                                <label for="numero_de_personal">Número de personal</label>
                                <input type="number" name="numero_personal" value="" id="numero_personal" maxlength="30" size="40" class="form-control" required />
                                <br>
                                <label for="nombre">Nombre (s)</label>
                                <input type="text" name="nombre_catedratico" value="" id="nombre_catedratico" maxlength="30" size="40" class="form-control" required />
                                <br>
                                <label for="apellidos">Apellidos</label>
                                <input type="text" name="apellidos_catedratico" value="" id="apellidos_catedratico" maxlength="30" size="40" class="form-control" required />
                                <br>
                                <label for="disponibilidad">Disponibilidad de horarios</label>
                                <input type="text" name="disponibilidad_catedratico" value="" id="disponibilidad_catedratico" maxlength="30" size="40" class="form-control" required />
                                <br>
                                <div class="form-group">
                                <label for="materias_que_imparte">Materias que imparte</label>
                             
                                <select id="cmbMake" name="Make"     class="form-control"
                                onchange="document.getElementById('materias_que_imparte').value=this.options[this.selectedIndex].value">
                                   <option value="algebra">Algebra</option>
                                   <option value="administracion">Administración</option>
                                </select>
                                </div>
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

