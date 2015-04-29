<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Carreras extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		
	}

	function index()
	{

		
	}
	function altaCarreras(){
		$this->load->view('carreras/cabeza');
		$this->load->view('carreras/contenido');
		$this->load->view('carreras/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
