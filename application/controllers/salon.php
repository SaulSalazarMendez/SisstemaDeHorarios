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
		$this->load->view('carreras/footer');
		
	}
	function registrarSalon(){
		$this->load->view('carreras/cabeza');
		$this->load->view('salon/registrar');
		$this->load->view('carreras/footer');
	}
	
	function guardar(){
	    $datos=array('num_salon' => $this->input->post('numero_salon'), 'capacidad' =>$this->input->post('capacidad_salon') );
	    print_r($datos);
	    $this->Modelo_salon->save($datos);
	    redirect('salon/');
	}
	
	
}