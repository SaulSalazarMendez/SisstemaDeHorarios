 <?php
 $connStr = 'sqlite:horarios.db';
		try{
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT nrc, nombre, area, creditos, seccion, bloque, carrera_id FROM ee");
			$rows = $query->fetchAll();
			
		}catch( PDOException $Exception ) { 
		       echo $Exception->getMessage() ."\n"; }
 ?>
 <div class="content-wrapper">
      <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Baja de EE (Experiencias Educativas)</h4>
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
									echo "<a href='".base_url()."index.php/experiencias/editar/".$row['nrc']."' class='label label-info'><span class='glyphicon glyphicon-pencil'></a></span>";
									echo "&nbsp;&nbsp;";
									echo "<a href='".base_url()."index.php/experiencias/eliminar/".$row['nrc']."' class='label label-danger'>";
										echo "<span class='glyphicon glyphicon-minus'></a></span>";
								echo "</tr>";
						}	
					}
				?>
				</tbody>
			</table>	
		</div>
	</div>