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
<form name="formulario" method="post" action="<?=base_url()?>index.php/main/guardaCalendario">
<input name='maestro_id' value=<?=$sigid?> >
	
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
  Horario
  </div>




	<table class='table'>
		<thead>

<?php 
		
		
	$dias=array ('Lu','Ma','Mi', 'Ju', 'Vi', 'Sa', 'Do'
	);
	$horas=array("7:00-8:00",
		"8:00-9:00",
		"9:00-10:00",
		"10:00-11:00",
		"11:00-12:00",
		"12:00-13:00",
		"13:00-14:00",
		"14:00-15:00",
		"15:00-16:00",
		"16:00-17:00",
		"17:00-18:00",
		"18:00-19:00",
		"19:00-20:00",
		"20:00-21:00" 
		);
		echo "<th>H/D</th>";
	foreach ($dias as $dia){
?>	
	<th><?=$dia?></th>
	<?php } ?>
	</thead>
	<tbody>
	<?php 
	$con=0;
	foreach ($horas as $hora){ ?>
	<tr>
	<td><?=$hora?></td>
	<?php 
	
	foreach ($dias as $dia){ ?>
		<td>
			<input type='button' id='btn<?=$dia?><?=$con?>' 
			class='btn'onclick='cambia("<?=$dia?><?=$con?>");' 
			value='N' style='background-color: orange;'/> <br>
		<input id='<?=$dia?><?=$con?>' name='<?=$dia?><?=$con?>'  value='0' hidden></td>
		
		
		<?php
		
		}?>
	</tr>	
	<?php 
	$con=$con+1;
	} ?>
	</tbody>
	</table>
 
</div> <button type='submit' class='btn btn-primary'>Guardar</button>
	 </form>
	 
	</body>
	
	<script>
		function cambia(id){
			var val=document.getElementById(id).value;
			if (val==0)
			{
				document.getElementById(id).value=1;
				document.getElementById('btn'+id).style='background-color: LightSeaGreen 									;';
				document.getElementById('btn'+id).value='S';
			}else{
				document.getElementById(id).value=0;
				document.getElementById('btn'+id).style='background-color: orange;';
				document.getElementById('btn'+id).value='N';
			}
		}
		<?php 
		if ($pila!=false){
		  foreach($pila as $kiko) {
		      echo 'cambia("'.$kiko.'");
		      ';
		  }
		  
		 
		}
		?>
	
	</script>
	
	
	
	</htm>
