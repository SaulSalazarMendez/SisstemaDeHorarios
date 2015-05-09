 <?php
 $connStr = 'sqlite:db/horarios.db';
		try{
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT nrc, nombre, area, creditos, seccion, bloque, carrera_id FROM ee");
			$rows = $query->fetchAll();
			
		}catch( PDOException $Exception ) { 
		       echo $Exception->getMessage() ."\n"; }
 ?>
      <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12"><br>
                <h4 class="header-line">Registro de experiencias educativas</h4>
            </div>
        </div> 
			<div id="scrollVertical">
			<table class="table table-striped table-bordered table-hover">
				<thead id="thead">
					<tr>
						<th>NRC</th>
						<th>Nombre</th>
						<th>Area</th>
						<th>Creditos</th>
						<th>Secci&oacute;n</th>
						<th>Bloque</th>
						<th>IDCarrera</th>
						<th>Editar/Eliminar</th>
					</tr>	
				</thead>
				<tbody>
				<?php 
					if ($query != FALSE){
						foreach ($rows as $row){
							echo "<tr>";
								echo "<td>".$row['nrc']."</td>";
								echo "<td>".$row['nombre']."</td>";
								echo "<td>".$row['area']."</td>";
								echo "<td>".$row['creditos']."</td>";
								echo "<td>".$row['seccion']."</td>";
								echo "<td>".$row['bloque']."</td>";
								echo "<td>".$row['carrera_id']."</td>";
								echo "<td>";
									echo "<a href='".base_url()."index.php/experiencias/editar/".$row['nrc']."' class='btn btn-info'><span class='glyphicon glyphicon-edit'></a></span>";
									echo "&nbsp;&nbsp;";
									echo "<a href='".base_url()."index.php/experiencias/eliminar/".$row['nrc']."' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a>";
										
								echo "</tr>";
						}	
					}
				?>
				</tbody>
			</table>
		</div>
	</div>