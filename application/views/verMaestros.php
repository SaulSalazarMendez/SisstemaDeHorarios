<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="es-mx">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Saúl Salazar Méndez">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Horario</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" />
	
	</head>
	
	
	
<body>

	<div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading">
	  Maestros <a href='<?=base_url()?>index.php/main/verMaestro' class='btn btn-primary'>Agregar</a>
	  </div>
	<table class='table'>
		<thead>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Matricula</th>
			<th></th>
			</thead>
		

	<?php 
	if ($consulta!=false){
		
	foreach($consulta as $maestro){
	?>	
		<tr>
		<td><?=$maestro['nombre']?></td>
		<td><?=$maestro['apellidos']?></td>
		<td><?=$maestro['matricula']?></td>
		<td><a href='<?=base_url()?>index.php/main/verMaestro/<?=$maestro['id']?>' class='btn btn-warning'><i class='glyphicon glyphicon-edit'></i></a> 
		<a href='<?=base_url()?>index.php/main/eliminarMaestro/<?=$maestro['id']?>' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a></td>
		</tr>
	
	<?php
	}
	}else{
			echo 'Sin datos';
		}
	?>
	</table>
	<!-- div del panel -->
	</div>

	 
</body>
	

	
	
	
	</htm>
