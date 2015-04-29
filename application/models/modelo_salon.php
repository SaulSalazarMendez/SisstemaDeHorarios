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
			$cmd= 'insert into salon(num_salon,capacidad) values("';
			$cmd=$cmd.$datos['num_salon'].'",'.$datos['capacidad'].')';
			//echo $cmd;
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

 
}

 
