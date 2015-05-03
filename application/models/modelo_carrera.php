<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelo_carrera extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	//Función que inserta las carreras!
	function setCarrera($datosCarrera)
	{
		
		$connStr = 'sqlite:db/horarios.db';
		try 
		{
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$cmd= 'insert into carrera(nombre) values("';
			$cmd=$cmd.$datosCarrera['nombre'].'")';
			$conn->query($cmd);
				
		} 
		catch( PDOException $Exception ) 
		{
			echo $Exception->getMessage() ."\n"; 
		}
		
	}
	
	//Función que devuelve las carreras existentes!
	function getCarrera()
	{
		$connStr = 'sqlite:db/horarios.db';
		try 
		{
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT nombre FROM carrera");
			if ($query != false)
			{
					return $query;
			}
			else
				return false;	
		} 
		catch( PDOException $Exception ) 
		{
			return false; 
		}
	}
	
	//Función que elimina las carreras existentes!
	function deleteCarrera($datosCarrera)
	{
		$connStr = 'sqlite:db/horarios.db';
		try 
		{
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$cmd="DELETE FROM carrera WHERE nombre ='".$datosCarrera['nombre']."'";
			$conn->query($cmd);
		} 
		catch( PDOException $Exception ) 
		{
			echo $Exception->getMessage() ."\n"; 
		}
		redirect('carreras/bajaCarreras');
	}
	
	
}

?>
