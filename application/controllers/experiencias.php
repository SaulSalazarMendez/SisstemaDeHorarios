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
	
	function guardar(){
		$nrc = $_POST['nrc'];
   $nombre = $_POST['nombre'];
   $area = $_POST['area'];
   $seccion = $_POST['seccion'];
   $bloque_id = $_POST['bloque_id'];
   $creditos = $_POST['creditos'];
		
//$connStr = 'sqlite:horarios.db';
try{
	//$conn = new PDO($connStr);
	//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = new SQLite3("db/horarios.db");
	$query->exec("INSERT INTO ee VALUES('".$nrc."','".$nombre."','".$area."','".$creditos."','".$seccion."','".$bloque_id."')");
	//$query2 = $conn->query("SELECT id, num_bloque FROM bloques");
	//$rows = $query->fetchAll();
	//$rowsb = $query2->fetchAll();
	redirect('experiencias/registroExperiencias');
}catch( PDOException $Exception ) { 
		echo $Exception->getMessage() ."\n"; }
	}
	
}