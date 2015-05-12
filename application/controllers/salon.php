<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Salon extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Modelo_salon');
		
	}

	function index()
	{
	    
	    $datos=array('consulta' =>$this->Modelo_salon->getAll());
	    $this->load->view('carreras/cabeza');
		$this->load->view('salon/inicio',$datos);
		$this->load->view('pie');
		
	}
	function registrarSalon(){
		$this->load->view('carreras/cabeza');
		$this->load->view('salon/registrar');
		$this->load->view('pie');
	}
	
	function guardar(){
	    $datos=array('num_salon' => $this->input->post('numero_salon'), 'capacidad' =>$this->input->post('capacidad_salon') );
	    print_r($datos);
	    $this->Modelo_salon->save($datos);
	    redirect('salon/');
	}

	function editarSalon(){
		$id = $this->uri->segment(3);
		if ($id==''){
			$datos['consulta']=false;
			//echo "id:<".$id.">";
		}else{
		$datos['consulta']=$this->Modelo_salon->getSalonUnico($id);
		}
		//$this->load->view('carreras/cabeza');
		$this->load->view('salon/editando_salon',$datos);
		//$this->load->view('pie');
	}
	function guardaActualizacion(){
			print_r($_POST);
			$datos=array(
				'num_salon' => $this->input->post('numero_salon',TRUE),
				'capacidad' =>$this->input->post('capacidad_salon',TRUE),
				'id' => $this->input->post('id',TRUE)
			);
			$this->Modelo_salon->updateSalon($datos);
			redirect('salon/');
	}

	function eliminarSalon(){
		$id = $this->uri->segment(3);
		$this->Modelo_salon->eliminarSalon($id);
		redirect('salon/');
	}
	function detalleEE(){
		$this->load->view('carreras/cabeza');
		$this->load->view('horarios/detalleExperiencia');
		$this->load->view('pie');
	}
	function generarHorario(){
		$this->load->view('carreras/cabeza');
		$this->load->view('horarios/generar');
		$this->load->view('pie');
	}
	
	
}