<?php
 $connStr = 'sqlite:db/horarios.db';
		try{
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT id, maestro_id, ee_nrc, fecha_ini, fecha_fin, bloque, seccion, horas, horas_dadas FROM curso");
			$rows = $query->fetchAll();
			
		}catch( PDOException $Exception ) { 
		       echo $Exception->getMessage() ."\n"; }
 ?>
      <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12"><br>
                <h4 class="header-line">Registro de Cursos</h4>
            </div>
        </div> 
			<div id="scrollVertical">
			<table class="table table-striped table-bordered table-hover">
				<thead id="thead">
					<tr>
						<th>ID</th>
						<th>Maestro</th>
						<th>EE</th>
						<th>FechaInicion</th>
						<th>FechaFin</th>
						<th>Bloque</th>
						<th>Seccion</th>
						<th>Horas</th>
						<th>HorasDadas</th>
						<th>Editar / Eliminar</th>
					</tr>	
				</thead>
				<tbody>
				<?php 
					if ($query != FALSE){
						foreach ($rows as $row){
							echo "<tr>";
								echo "<td>".$row['id']."</td>";
								echo "<td>".$row['maestro_id']."</td>";
								echo "<td>".$row['ee_nrc']."</td>";
								echo "<td>".$row['fecha_ini']."</td>";
								echo "<td>".$row['fecha_fin']."</td>";
								echo "<td>".$row['bloque']."</td>";
								echo "<td>".$row['seccion']."</td>";
								echo "<td>".$row['horas']."</td>";
								echo "<td>".$row['horas_dadas']."</td>";
								echo "<td>";
									echo "<a href='".base_url()."index.php/cursos/editar/".$row['id']."' class='btn btn-info'><span class='glyphicon glyphicon-edit'></a></span>";
									echo "&nbsp;&nbsp;&nbsp;&nbsp;";
									echo "<a href='".base_url()."index.php/cursos/eliminar/".$row['id']."' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a>";
										
								echo "</tr>";
						}	
					}
				?>
				</tbody>
			</table>
		</div>
	</div>