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
			redirect('carreras/mostrarCarrera');
	}
	
	
	function altaCarreras()
	{
		$this->load->view('carreras/cabeza');
		$this->load->view('carreras/alta_carrera');
		$this->load->view('carreras/footer');
	}
	
	
	function mostrarCarrera()
	{
		$datosCarrera['consultaCarrera'] = $this->modelo_carrera->getCarrera();
		if($datosCarrera != FALSE)
		{
			$this->load->view('carreras/mostrar_carrera',$datosCarrera);
		}	
	}
	
	
	function editarCarrera()
	{
		$id = $this->uri->segment(3);
		$datosCarrera['consulta']=$this->modelo_carrera->editCarrera($id);
		$this->load->view('carreras/editar_carrera',$datosCarrera);
	}
	
	
	function almacenarEdicion()
	{
		print_r($_POST);
		$datosCarrera=array
		(
				'id' => $this->input->post('id',TRUE),
				'nombre' => $this->input->post('txtNombreCarrera',TRUE)
		);
		$this->modelo_carrera->updateCarrera($datosCarrera);
		redirect('carreras/mostrarCarrera');
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
		$id = $this->uri->segment(3);
		$datosCarrera = array
		(
			'id' => $id	
		);
		$this->modelo_carrera->deleteCarrera($datosCarrera);
		redirect('carreras/mostrarCarrera');
	}
	
	
}

