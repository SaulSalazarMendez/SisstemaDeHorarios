<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelo_carrera extends CI_Model
{
	function __construct()
	{
		
		parent::__construct();
	
	}
	
	function setCarrera($datosCarrera)
	{
		
		$connStr = 'sqlite:db/horarios.db';
		try 
		{
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$cmd= 'insert into carrera(nombre) values("';
			$cmd=$cmd.$datosCarrera['nombre'].'")';
			//echo $cmd;
			$conn->query($cmd);
				
		} 
		catch( PDOException $Exception ) 
		{
			echo $Exception->getMessage() ."\n"; 
		}
		
	}
	
}

?>
