<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#Estas clases las utilizamos para manejar las tablas de la base de datos que estamos utlizando



class Modelo_salon extends CI_Model {
	function __construct() {
		parent::__construct();
	}	
	
	function save($datos){
		
		$connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$cmd= 'insert into salon("num_salon","capacidad") values("';
			$cmd=$cmd.$datos['num_salon'].'",'.$datos['capacidad'].')';
			echo $cmd;
			$conn->query($cmd);
			
		} catch( PDOException $Exception ) { 
			echo $Exception->getMessage() ."\n"; }	
	}
	function getAll(){
		$connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT * FROM salon");
			if ($query != false)
				return $query;  
			else 
				return false;
			
			
			
		} catch( PDOException $Exception ) { 
			return false; } 
	}
	function getSalonUnico($id){
		$connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT * FROM salon where id=".$id);
			if ($query != false)
				foreach($query as $r){
				return   $r;
				}
			else 
				return false;
			
			
		} catch( PDOException $Exception ) { 
			return false; } 
	}
	function updateSalon($datos){
		$connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$cmd= 'update salon set ';
			$cmd=$cmd.'num_salon="'.$datos['num_salon'].'", capacidad="'.$datos['capacidad'];
			$cmd=$cmd.'" where id='.$datos['id'];
			echo $cmd;
			$conn->query($cmd);
			
		} catch( PDOException $Exception ) { 
			echo $Exception->getMessage() ."\n"; }
	}

	function eliminarSalon($idEliminar){
		$connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$cmd= 'DELETE from  salon ';
			$cmd=$cmd.'where id='.$idEliminar;
			echo $cmd;
			$conn->query($cmd);
			
		} catch( PDOException $Exception ) { 
			echo $Exception->getMessage() ."\n"; }
	}
 
}

 
