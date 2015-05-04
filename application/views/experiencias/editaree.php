<?php
$connStr = 'sqlite:horarios.db';
try{
	$conn = new PDO($connStr);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = $conn->query("SELECT id, nombre FROM carrera");
	$query2 = $conn->query("SELECT id, num_bloque FROM bloques");
	$query3 = $conn->query("SELECT nrc, nombre FROM ee");
	$rows = $query->fetchAll();
	$rowsb = $query2->fetchAll();
	$rows3 = $query3->fetchAll();
}catch( PDOException $Exception ) { 
		echo $Exception->getMessage() ."\n"; }
?>
<div class="content-wrapper">
      <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Edición de EE (Experiencias Educativas)</h4>
            </div>
        </div>
<div class="container">
		<div class="col-md-12">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>NRC</th>
						<th>Nombre</th>
						<th>Area</th>
						<th>Creditos</th>
						<th>Sección</th>
						<th>Bloque</th>
						<th>IDCarrera</th>
					</tr>	
				</thead>
			</table>	
		</div>
	</div>
<div class="row">
            
                    <div class="col-md-4 col-sm-3 col-xs-6">
                      
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                            <form action="<?=base_url()?>index.php/experiencias/guardarEdicion" method="post" accept-charset="utf-8">
                              <div class="form-group">
							  <br>
                                <label for="nrc">NRC de la Experiencia Educativa</label>
                                <input type="number" name="nrc" value="<?=$nrc?>" id="nrc" maxlength="30" size="40" class="form-control" required />
                                </br>
								
								<label for="nombre">Nombre</label>
                                <input type="text" name="nombre" value="<?=$nombre?>" id="nombre" maxlength="50" size="40" class="form-control" required />
                                </br>
								
								<div class="form-group">
                                <label for="carrera">Carrera</label>
								
								<select name="carrera">
                        <?php foreach ($rows as $row) {
                            echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
                        }?>
                    </select>
                                
                                </div>
                                 </br>
								 
								 <label for="area">Area</label>
								<select id="area" name="area"     class="form-control"
                                onchange="document.getElementById('seccion').value=this.options[this.selectedIndex].value">
                                   <option value="Basica de iniciacion disciplinaria">Basica de iniciacion disciplinaria</option>
                                   <option value="Disciplinaria">Disciplinaria</option>
								   <option value="Terminal">Terminal</option>
								   <option value="Optativa">Optativa</option>
                                </select>
								 </br>
								 <label for="bloque">Bloque</label>
								<select id="bloque" name="bloque"     class="form-control"
                                onchange="document.getElementById('seccion').value=this.options[this.selectedIndex].value">
                                   <option value="1">1</option>
                                   <option value="2">2</option>
								   <option value="3">3</option>
								   <option value="4">4</option>
								   <option value="5">5</option>
                                   <option value="6">6</option>
								   <option value="7">7</option>
								   <option value="8">8</option>
								   <option value="9">9</option>
								   <option value="10">10</option>
                                </select>
                                
                                </br>
                                <label for="seccion">Sección</label>
								<select id="seccion" name="seccion"     class="form-control"
                                onchange="document.getElementById('seccion').value=this.options[this.selectedIndex].value">
                                   <option value="1">1</option>
                                   <option value="2">2</option>
								   <option value="3">3</option>
								   <option value="4">4</option>
								   <option value="5">5</option>
                                </select>
                                <br>
                                <label for="creditos">Créditos</label>
								<input type="number" name="creditos" value="<?=$creditos?>" id="creditos" maxlength="30" size="40" class="form-control" required />
							  </div>
                                <br>
                                <input type="submit" name="Editar" value="Editar" class="btn btn-success" />
								 
                            </form>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-6">
             
                    </div>  
                </div>                 
             </div>