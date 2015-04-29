<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Maestros');
	}



	public function index()
	{
		$datos=array( 'consulta' => $this->Maestros->getAll() );
		$this->load->view('welcome_message',$datos);
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
