<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Carreras extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('modelo_carrera');	
	}

	
	function index()
	{

		
	}
	
	
	function altaCarreras()
	{
		$this->load->view('carreras/cabeza');
		$this->load->view('carreras/alta_carrera');
		$this->load->view('carreras/footer');
	}
	
	
	function bajaCarreras()
	{
		$datosCarrera['consultaCarrera'] = $this->modelo_carrera->getCarrera();
		if($datosCarrera != FALSE)
		{
			$this->load->view('carreras/baja_carrera',$datosCarrera);
		}	
	}
	
	
	function agregarCarrera()
	{
		if(isset($_POST['btnRegistrar']))
		{
			$datosCarrera = array
			(
				'nombre' => $this->input->post('txtNombreCarrera',TRUE)				
			);
			$this->modelo_carrera->setCarrera($datosCarrera);
			$this->load->view('carreras/cabeza');
			$this->load->view('carreras/alta_carrera');
			$this->load->view('carreras/footer');
		}
		
	}
	
	
	function eliminarCarrera()
	{
		if(isset($_POST['btnEliminar']))
		{
			$datosCarrera = array
			(
				'nombre' => $this->input->post('selectCarrera',TRUE)			
			);
			$this->modelo_carrera->deleteCarrera($datosCarrera);
		}
	}
	
	
}

