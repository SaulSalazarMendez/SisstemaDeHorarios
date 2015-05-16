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
			$query = $conn->query("SELECT fecha_ini, fecha_fin, horas FROM curso WHERE id=$id");
			$rows = $query->fetchAll();
			//$bd->exec('DELETE FROM ee WHERE nrc='.$id.'');
			
		}catch( PDOException $Exception ) { 
		       echo $Exception->getMessage() ."\n"; }
			   
	    foreach ($rows as $row){
            $fecha_ini = $row['fecha_ini'];
            $fecha_fin = $row['fecha_fin'];
			$horas = $row['horas'];	
		}
		
		//$nombre = $rows['nombre'];
		$data = array(
	           'id' => $id,
		       'fecha_ini' => $fecha_ini,
			   'fecha_fin' => $fecha_fin,
			   'horas' => $horas
		);
		$this->load->view('carreras/cabeza');
		$this->load->view('cursos/editar',$data);
		$this->load->view('carreras/footer');
					
	}
	
	public function guardarEdicion(){
	$id = $id = $_POST['id'];//$this->uri->segment(3);
   $fecha_ini = $_POST['fechai'];
   $fecha_fin = $_POST['fechaf'];
   $ee_nrc = $_POST['nombree'];
   $maestro_id = $_POST['nombrem'];
   $horas = $_POST['horas'];
   $bloque = $_POST['bloque'];
   $seccion = $_POST['seccion'];
   $horas_dadas = '0';
		
		try{
			$query = new SQLite3("db/horarios.db");
			$query->exec("UPDATE curso SET maestro_id='".$maestro_id."',ee_nrc='".$ee_nrc."',fecha_ini='".$fecha_ini."',bloque='".$bloque."',seccion='".$seccion."',horas='".$horas."',horas_dadas='".$horas_dadas."' WHERE id=$id");
		}catch( PDOException $Exception ) { 
		       echo $Exception->getMessage() ."\n"; }
	    redirect('cursos/mostrarCursos');
	}
	
	function guardar(){
   $id = "";//$_POST['id'];
   $fecha_ini = $_POST['fechai'];
   $fecha_fin = $_POST['fechaf'];
   $ee_nrc = $_POST['nombree'];
   $maestro_id = $_POST['nombrem'];
   $horas = $_POST['horas'];
   $bloque = $_POST['bloque'];
   $seccion = $_POST['seccion'];
   $horas_dadas = '0';
		
//$connStr = 'sqlite:horarios.db';
try{
	//$conn = new PDO($connStr);
	//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = new SQLite3("db/horarios.db");
	$query->exec("INSERT INTO curso(maestro_id, ee_nrc, fecha_ini, fecha_fin, bloque, seccion, horas, horas_dadas) VALUES('".$maestro_id."','".$ee_nrc."','".$fecha_ini."','".$fecha_fin."','".$bloque."','".$seccion."','".$horas."','".$horas_dadas."')");
	//echo "INSERT INTO curso (id, maestro_id, ee_nrc, fecha_ini, fecha_fin, bloque, seccion, horas, horas_dadas)VALUES('".$maestro_id."','".$ee_nrc."','".$fecha_ini."','".$fecha_fin."','".$bloque."','".$seccion."','".$horas."','".$horas_dadas."')";
	//$query2 = $conn->query("SELECT id, num_bloque FROM bloques");
	//$rows = $query->fetchAll();
	//$rowsb = $query2->fetchAll();
	redirect('cursos/registroCursos');
}catch( PDOException $Exception ) { 
		echo $Exception->getMessage() ."\n"; }
	}
	
}