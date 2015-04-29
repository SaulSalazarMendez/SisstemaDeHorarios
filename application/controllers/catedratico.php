<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Catedratico extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Maestros');

		
	}

	function index()
	{
		$datos=array(  'consulta' => $this->Maestros->getAll() );
		$this->load->view('cabeza');
		$this->load->view('catedraticos/verMaestros',$datos);
		$this->load->view('pie');
		
	}
	public function nuevoMaestro(){
		$id = $this->uri->segment(3);
		
		$datos['consulta']=false;
		
		$this->load->view('cabeza');
		$this->load->view('catedraticos/verMaestro',$datos);
		$this->load->view('pie');
		
	}
	public function editarMaestro(){
		$id = $this->uri->segment(3);
		if ($id==''){
			$datos['consulta']=false;
			//echo "id:<".$id.">";
		}
		else{
			$datos['consulta']=$this->Maestros->getTeacher($id);
			
		}
		
		$this->load->view('cabeza');
		$this->load->view('catedraticos/verMaestro',$datos);
		$this->load->view('pie');
		
	}
	public function horarioMaestro(){
	        $id = $this->uri->segment(3);
		if ($id==''){
			$con=$this->Maestros->lastTeacherId();
			$sigid=$con+1;	
			$datos=array('sigid' => $sigid, 'pila' => false);
			//echo $sigid;
			$this->load->view('catedraticos/horario',$datos);
		}
		else{
			
			$consulta= $this->Maestros->getHorario($id);
			//echo "1";
			
			//print_r($datos);
			$con =0;
			$pila = array();
			foreach($consulta as $row){
			  $num= $row['hora']/100 -7;
			  $cad=$row['dia'].$num;
			  array_push($pila, $cad);
			}
			//$datos=array('sigid' => $id,'consulta' => );		
			//echo $con;
			//print_r($pila);
			//print_r($pila);
			//echo "<br>";
			$datos=array('sigid' => $id, 'pila' => $pila);
			$this->load->view('catedraticos/horario',$datos);
		}
		
		
		//redirect('main/verMaestros');
	}
	
	function guardaCalendario(){
	    echo "horas:<br>";
	    $id = $this->input->post('maestro_id',TRUE);
	    
	    $this->Maestros->deleteHorario($id);
	    $dias=array ('Lu','Ma','Mi', 'Ju', 'Vi', 'Sa', 'Do');
	    $horas=array("700",
		"800",
		"900",
		"1000",
		"1100",
		"1200",
		"1300",
		"1400",
		"1500",
		"1600",
		"1700",
		"1800",
		"1900",
		"2000" 
		);
	    $con = 0;
	    foreach($horas as $hora) {
		
	    	foreach($dias as $dia) {
		    $cad=$dia.$con;
		    if ($_POST[$cad]!=0){
		      echo $cad."<br>";
		      $datos = array('maestro_id'=>$id,'dia'=>$dia, 'hora' => $hora);
		      $this->Maestros->saveHour($datos);
		    }
	    	}
	    	$con=$con+1;
	    }
	    
	    $consulta= $this->Maestros->getHorario($id);
	   
	    
	    
	    $con =0;
	    $pila = array();
	    foreach($consulta as $row){
	      $num= $row['hora']/100 -7;
	      $cad=$row['dia'].$num;
	      array_push($pila, $cad);
	    }
	    $datos=array('sigid' => $id, 'pila' => $pila);
	    
	    redirect('catedratico/horarioMaestro/'.$id);
	    
	 
	}
	/*
	* Guarda al mestro del formulario.
	* Nota: el calendario se guarda en formulario de horario.
	* al finalizar redireciona al controlador catedratico.
	*/
	public function guardaMaestro(){
		if ($this->input->post('operacion',TRUE)=='save'){
			$datos=array(
				'nombre' => $this->input->post('nombre',TRUE),
				'apellidos' => $this->input->post('apellidos',TRUE),
				'matricula' => $this->input->post('matricula',TRUE)
				
			);
			
			$this->Maestros->saveTeacher($datos);
		}else{
			print_r($_POST);
			$datos=array(
				'nombre' => $this->input->post('nombre',TRUE),
				'apellidos' =>$this->input->post('apellidos',TRUE),
				'matricula' =>$this->input->post('matricula',TRUE),
				'id' => $this->input->post('id',TRUE)
			);
			$this->Maestros->updateTeacher($datos);
			
		}
		redirect('catedratico/');
		
		
		
	}
}