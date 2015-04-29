<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#Estas clases las utilizamos para manejar las tablas de la base de datos que estamos utlizando



class Maestros extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	/*
	 * Obyenemos todos los maestros de la tabla maestros
	 * 
	 */ 
	function getAll(){
		$connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT * FROM maestro");
			if ($query != false)
				return $query;  
			else 
				return false;
			
			
			
		} catch( PDOException $Exception ) { 
			return false; } 
	}
	
	function getTeacher($id){
		$connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT * FROM maestro where id=".$id);
			if ($query != false)
				foreach($query as $r){
				return   $r;
				}
			else 
				return false;
			
			
			
		} catch( PDOException $Exception ) { 
			return false; } 
	}
	
	function saveTeacher($datos){
		
		$connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$cmd= 'insert into maestro(nombre, apellidos, matricula) values("';
			$cmd=$cmd.$datos['nombre'].'","'.$datos['apellidos'];
			$cmd=$cmd.'","'.$datos['matricula'];
			$cmd=$cmd.'")';
			echo $cmd;
			$conn->query($cmd);
			
		} catch( PDOException $Exception ) { 
			echo $Exception->getMessage() ."\n"; }	
	}
	
	function updateTeacher($datos)
	{
		$connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$cmd= 'update maestro set ';
			$cmd=$cmd.'nombre="'.$datos['nombre'].'", apellidos="'.$datos['apellidos'];
			$cmd=$cmd.'",matricula="'.$datos['matricula'];
			$cmd=$cmd.'" where id='.$datos['id'];
			echo $cmd;
			$conn->query($cmd);
			
		} catch( PDOException $Exception ) { 
			echo $Exception->getMessage() ."\n"; }	
	}
	
	function deleteTeacher($id){
		$connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$cmd= 'DELETE from  maestro ';
			$cmd=$cmd.'where id='.$id;
			echo $cmd;
			$conn->query($cmd);
			$cmd= 'DELETE from  horario_maestro ';
			$cmd=$cmd.'where maestro_id='.$id;
			echo $cmd;
			$conn->query($cmd);
			
		} catch( PDOException $Exception ) { 
			echo $Exception->getMessage() ."\n"; }	
	}

	
	function lastTeacherId(){
	      $connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT max(id) as max FROM maestro");
			if ($query != false)
				foreach($query as $r){
				return   $r['max'];
				}
			else 
				return false;
			
			
			
		} catch( PDOException $Exception ) { 
			return false; } 
	}
	function lastTeacherHorario(){
	      $connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT max(id) as max FROM horario_maestro");
			if ($query != false)
				foreach($query as $r){
				return   $r['max'];
				}
			else 
				return false;
			
			
			
		} catch( PDOException $Exception ) { 
			return false; } 
	}
	
	function deleteHorario($id){
		$connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$cmd= 'DELETE from  horario_maestro ';
			$cmd=$cmd.'where maestro_id='.$id;
			echo $cmd;
			$conn->query($cmd);
			
		} catch( PDOException $Exception ) { 
			echo $Exception->getMessage() ."\n"; }	
	
	}
	
	function saveHour($datos){
	      $connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$id = $this->lastTeacherHorario()+1;
			$cmd= 'insert into horario_maestro values('.$id.', '.$datos['maestro_id'].', "';
			$cmd=$cmd.$datos['dia'].'","'.$datos['hora'];
			$cmd=$cmd.'")';
			echo $cmd;
			$conn->query($cmd);
			
		} catch( PDOException $Exception ) { 
			echo $Exception->getMessage() ."\n"; }	
	  
	}
	/*
	* Regresa el horario del maestro dado
	* @param $idmaestro el id del maestro
	*/
	function getHorario($idmaestro){
		$connStr = 'sqlite:db/horarios.db'; 
		try { 
			$conn = new PDO($connStr); 
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT * FROM horario_maestro where maestro_id=".$idmaestro.";");
			if ($query != false)
				return $query;  
			else 
				return false;
			
			
			
		} catch( PDOException $Exception ) { 
			return false; } 
	}
	
	
	

 
}

 
