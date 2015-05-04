<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Experiencias extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		
	}

	function index()
	{

		
	}
	function registroExperiencias(){
		$this->load->view('carreras/cabeza');
		$this->load->view('experiencias/contenido');
		$this->load->view('carreras/footer');
	}
	
	function bajaExperiencias(){	
		$this->load->view('carreras/cabeza');
		$this->load->view('experiencias/bajasee');
		$this->load->view('carreras/footer');
	}
	
	public function eliminar(){
		$id = $this->uri->segment(3);
		//$connStr = 'sqlite:horarios.db';
		$bd = new SQLite3('horarios.db');
	    try{
			//$conn = new PDO($connStr);
			//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//$query = $conn->query("DELETE FROM ee WHERE nrc='.$id.'");
			//$rows = $query->fetchAll();
			$bd->exec('DELETE FROM ee WHERE nrc='.$id.'');
			
		}catch( PDOException $Exception ) { 
		       echo $Exception->getMessage() ."\n"; }
	    redirect('experiencias/bajaExperiencias');
	}
	
	public function editar(){
		$id = $this->uri->segment(3);
		$connStr = 'sqlite:horarios.db';
		try{
			$conn = new PDO($connStr);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->query("SELECT nombre, creditos FROM ee WHERE nrc=$id");
			$rows = $query->fetchAll();
			//$bd->exec('DELETE FROM ee WHERE nrc='.$id.'');
			
		}catch( PDOException $Exception ) { 
		       echo $Exception->getMessage() ."\n"; }
			   
	    foreach ($rows as $row){
            $nombre = $row['nombre'];
            $creditos = $row['creditos'];			
		}
		
		//$nombre = $rows['nombre'];
		$data = array(
	           'nrc' => $id,
		       'nombre' => $nombre,
			   'creditos' => $creditos
		);
		$this->load->view('carreras/cabeza');
		$this->load->view('experiencias/editaree',$data);
		$this->load->view('carreras/footer');
					
	}
	
	public function guardarEdicion(){
		$nrc = $_POST['nrc'];
        $nombre = $_POST['nombre'];
        $carrera = $_POST['carrera'];
        $area = $_POST['area'];
        $seccion = $_POST['seccion'];
        $bloque = $_POST['bloque'];
        $creditos = $_POST['creditos'];
		
		try{
			$query = new SQLite3("horarios.db");
			$query->exec("UPDATE ee SET nrc='".$nrc."',nombre='".$nombre."',area='".$area."',creditos='".$creditos."',seccion='".$seccion."',bloque='".$bloque."',carrera_id='".$carrera."' WHERE nrc=$nrc");
		}catch( PDOException $Exception ) { 
		       echo $Exception->getMessage() ."\n"; }
	    redirect('experiencias/bajaExperiencias');
	}
	
	function guardar(){
		$nrc = $_POST['nrc'];
   $nombre = $_POST['nombre'];
   $carrera = $_POST['carrera'];
   $area = $_POST['area'];
   $seccion = $_POST['seccion'];
   $bloque = $_POST['bloque'];
   $creditos = $_POST['creditos'];
		
//$connStr = 'sqlite:horarios.db';
try{
	//$conn = new PDO($connStr);
	//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = new SQLite3("horarios.db");
	$query->exec("INSERT INTO ee VALUES('".$nrc."','".$nombre."','".$area."','".$creditos."','".$seccion."','".$bloque."','".$carrera."')");
	//$query2 = $conn->query("SELECT id, num_bloque FROM bloques");
	//$rows = $query->fetchAll();
	//$rowsb = $query2->fetchAll();
	redirect('experiencias/registroExperiencias');
}catch( PDOException $Exception ) { 
		echo $Exception->getMessage() ."\n"; }
	}
	
}