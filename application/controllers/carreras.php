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
		$this->load->view('carreras/contenido');
		$this->load->view('carreras/footer');
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
			$this->load->view('carreras/contenido');
			$this->load->view('carreras/footer');
		}
		
	}
	
	function eliminarCarrera()
	{
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
