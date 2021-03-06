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
                <h4 class="header-line">Registro de EE (Experiencias Educativas)</h4>
            </div>
        </div>
             
                <div class="row">
            
                    <div class="col-md-4 col-sm-3 col-xs-6">
                      
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                            <form action="<?=base_url()?>index.php/experiencias/guardar" method="post" accept-charset="utf-8">
                              <div class="form-group">
							  <br>
                                <label for="nrc">NRC de la Experiencia Educativa</label>
                                <input type="number" name="nrc" value="" id="nrc" maxlength="30" size="40" class="form-control" required />
                                </br>
								
								<label for="nrc">Nombre</label>
                                <input type="text" name="nombre" value="" id="nombre" maxlength="30" size="40" class="form-control" required />
                                </br>
								
								<div class="form-group">
                                <label for="area">Area</label>
								
								<select name="area">
                        <?php foreach ($rows as $row) {
                            echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
                        }?>
                    </select>
                                
                                </div>
                                 </br>
								 
								 <label for="nrc">Bloque</label>
								<select name="bloque_id">
                        <?php foreach ($rowsb as $row) {
                            echo '<option value="'.$row['id'].'">'.$row['num_bloque'].'</option>';
                        }?>
                    </select>
                                
                                </br></br>
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
								<input type="number" name="creditos" value="" id="creditos" maxlength="30" size="40" class="form-control" required />
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

			 
 
        <fieldset style="width:480px"    >
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
		 
</div>

