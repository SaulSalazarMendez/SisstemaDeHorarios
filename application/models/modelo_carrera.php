<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelo_carrera extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	//FunciÃ³n que inserta las carreras!
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
	
	//FunciÃ³n que devuelve las carreras existentes!
	function getCarrera()
	{
		$connStr = 'sqlite:db/horarios.db';
		try 
		{
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT * FROM carrera");
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
	
	
	function editCarrera($id)
	{
		$connStr = 'sqlite:db/horarios.db';
		try {
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT * FROM carrera where id=".$id);
			if ($query != false)
				foreach($query as $result){
				return   $result;
			}
			else
				return false;
			}		 
		catch( PDOException $Exception ) 
		{
			return false; 
		}
	}
	
	
	function updateCarrera($datosCarrera)
	{
		$connStr = 'sqlite:db/horarios.db';
		try 
		{
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$cmd= 'update carrera set ';
			$cmd=$cmd.'nombre="'.$datosCarrera['nombre'];
			$cmd=$cmd.'" where id='.$datosCarrera['id'];
			echo $cmd;
			$conn->query($cmd);
				
		} 
		catch( PDOException $Exception ) 
		{
			echo $Exception->getMessage() ."\n"; 
		}
	}
	
	
	//FunciÃ³n que elimina las carreras existentes!
	function deleteCarrera($datosCarrera)
	{
		$connStr = 'sqlite:db/horarios.db';
		try 
		{
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$cmd="DELETE FROM carrera WHERE id ='".$datosCarrera['id']."'";
			$conn->query($cmd);
		} 
		catch( PDOException $Exception ) 
		{
			echo $Exception->getMessage() ."\n"; 
		}
		
	}
	
	
}

?>
