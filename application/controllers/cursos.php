<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

	}

	function index()
	{
		
	}
	
	function registroCursos()
	{
		$this->load->view('carreras/cabeza');
		$this->load->view('cursos/contenido');
		$this->load->view('carreras/footer');
	}
	
	function mostrarCursos()
	{	
		$this->load->view('carreras/cabeza');
		$this->load->view('cursos/mostrar');
		$this->load->view('carreras/footer');
	}
	
	public function eliminar(){
		$id = $this->uri->segment(3);
		//$connStr = 'sqlite:horarios.db';
		$bd = new SQLite3('db/horarios.db');
	    try{
			//$conn = new PDO($connStr);
			//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//$query = $conn->query("DELETE FROM ee WHERE nrc='.$id.'");
			//$rows = $query->fetchAll();
			$bd->exec('DELETE FROM curso WHERE id='.$id.'');
			
		}catch( PDOException $Exception ) { 
		       echo $Exception->getMessage() ."\n"; }
	    redirect('cursos/mostrarCursos');
	}
	
	public function editar(){
		$id = $this->uri->segment(3);
		$connStr = 'sqlite:db/horarios.db';
		try{
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT fecha_inicio, fecha_fin, horas FROM curso WHERE id=$id");
			$rows = $query->fetchAll();
			//$bd->exec('DELETE FROM ee WHERE nrc='.$id.'');
			
		}catch( PDOException $Exception ) { 
		       echo $Exception->getMessage() ."\n"; }
			   
	    foreach ($rows as $row){
            $fecha_inicio = $row['fecha_inicio'];
            $fecha_fin = $row['fecha_fin'];
			$horas = $row['horas'];	
		}
		
		//$nombre = $rows['nombre'];
		$data = array(
	           'id' => $id,
		       'fecha_inicio' => $fecha_inicio,
			   'fecha_fin' => $fecha_fin,
			   'horas' => $horas
		);
		$this->load->view('carreras/cabeza');
		$this->load->view('cursos/editar',$data);
		$this->load->view('carreras/footer');
					
	}
	
	public function guardarEdicion(){
		$id = $_POST['id'];
   $fecha_inicio = $_POST['fechai'];
   $fecha_fin = $_POST['fechaf'];
   $ee_id = $_POST['nombree'];
   $maestro_id = $_POST['nombrem'];
   $num_salon = $_POST['nums'];
   $horas = $_POST['horas'];
   $bloque = $_POST['bloque'];
   $seccion = $_POST['seccion'];
		
		try{
			$query = new SQLite3("db/horarios.db");
			$query->exec("UPDATE curso SET id='".$id."',fecha_inicio='".$fecha_inicio."',fecha_fin='".$fecha_fin."',ee_id='".$ee_id."',maestro_id='".$maestro_id."',num_salon='".$num_salon."',horas='".$horas."',bloque='".$bloque."',seccion='".$seccion."' WHERE id=$id");
		}catch( PDOException $Exception ) { 
		       echo $Exception->getMessage() ."\n"; }
	    redirect('cursos/mostrarCursos');
	}
	
	function guardar(){
   $id = $_POST['id'];
   $fecha_inicio = $_POST['fechai'];
   $fecha_fin = $_POST['fechaf'];
   $ee_id = $_POST['nombree'];
   $maestro_id = $_POST['nombrem'];
   $num_salon = $_POST['nums'];
   $horas = $_POST['horas'];
   $bloque = $_POST['bloque'];
   $seccion = $_POST['seccion'];
		
//$connStr = 'sqlite:horarios.db';
try{
	//$conn = new PDO($connStr);
	//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = new SQLite3("db/horarios.db");
	$query->exec("INSERT INTO curso VALUES('".$id."','".$maestro_id."','".$ee_id."','".$fecha_inicio."','".$fecha_fin."','".$num_salon."','".$horas."','".$bloque."','".$seccion."')");
	//$query2 = $conn->query("SELECT id, num_bloque FROM bloques");
	//$rows = $query->fetchAll();
	//$rowsb = $query2->fetchAll();
	redirect('cursos/registroCursos');
}catch( PDOException $Exception ) { 
		echo $Exception->getMessage() ."\n"; }
	}
	
}