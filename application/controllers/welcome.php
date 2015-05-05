<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
		parent::__construct();
	}



	public function index()
	{
		$this->load->view('carreras/cabeza');
		
		$this->load->view('pie');		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
