<?php
//$bd = new SQLite3( "horario.db" );
//$tabla='carrera';
//$query = "select nombre from carrera;";
//$agregar="INSERT INTO $tabla(id,nombre) VALUES ('2','informatica')";
//$bd->exec("INSERT INTO carrera (id,nombre) VALUES ('2','informatica')");
//$resultado = $bd->query('SELECT id, mobre FROM carrera');
//$bd->query($agregar);

$connStr = 'sqlite:db/horarios.db';
try{
	$conn = new PDO($connStr);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = $conn->query("SELECT nrc, nombre FROM ee");
	$query2 = $conn->query("SELECT id, nombre FROM maestro");
	$query3 = $conn->query("SELECT id, num_salon FROM salon");
	$rows = $query->fetchAll();
	$rows2 = $query2->fetchAll();
	$rows3 = $query3->fetchAll();
}catch( PDOException $Exception ) { 
		echo $Exception->getMessage() ."\n"; }
?>

 <div class="content-wrapper">
      <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Registro de Cursos</h4>
            </div>
        </div>
             
                <div class="row">
            
                    <div class="col-md-4 col-sm-3 col-xs-6">
                      
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                            <form action="<?=base_url()?>index.php/cursos/guardarEdicion" method="post" accept-charset="utf-8">
                              <div class="form-group">
							  <br>
                                <label for="nrc">ID</label>
                                <input type="number" name="id" value="<?=$id?>" id="id" maxlength="30" size="40" class="form-control" required />
                                </br>
								<label for="nrc">Fecha Inicio</label>
								<input class="form-control" name="fechai" type="date" required />
								</br>
								<label for="nrc">Fecha Fin</label>
								<input class="form-control" name="fechaf" type="date" required />
								</br>
								<label for="nrc">Nombre EE</label></br>
                                <select name="nombree" class="form-control">
                        <?php foreach ($rows as $row) {
                            echo '<option value="'.$row['nrc'].'">'.$row['nombre'].'</option>';
                        }?>
                    </select>
                                </br>
								<label for="nrc">Nombre Maestro</label></br>
                                <select name="nombrem" class="form-control">
                        <?php foreach ($rows2 as $row) {
                            echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
                        }?>
                    </select>
                                </br>
								<label for="nrc">Numero Salon</label></br>
                                <select name="nums" class="form-control">
                        <?php foreach ($rows3 as $row) {
                            echo '<option value="'.$row['num_salon'].'">'.$row['num_salon'].'</option>';
                        }?>
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
                                <label for="seccion">Secci&oacute;n</label>
								<select id="seccion" name="seccion"     class="form-control"
                                onchange="document.getElementById('seccion').value=this.options[this.selectedIndex].value">
                                   <option value="1">1</option>
                                   <option value="2">2</option>
								   <option value="3">3</option>
								   <option value="4">4</option>
								   <option value="5">5</option>
                                </select>
                                <br>
								
								<label for="nrc">Horas</label>
                                <input type="number" name="horas" value="<?=$horas?>" id="horas" maxlength="30" size="40" class="form-control" required />
                                </br>
					
                                <input type="submit" name="register" value="Registrar" class="btn btn-success" />
								 
                            </form>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-6">
             
                    </div>  
                </div>                 
             </div>
			 </br></br></br></br></br></br>

			 
 
        <!--  <fieldset style="width:480px"    >
            <legend>Experiencia Educativas</legend>
            <form action="" method="post">
                <div>
                    <select name="ee">
                        <?php foreach ($rows3 as $row) {
                            echo '<option value="'.$row['nrc'].'">'.$row['nombre'].'</option>';
                        }?>
                    </select>
                </div>
            </form>
        </fieldset>
		-->
</div>