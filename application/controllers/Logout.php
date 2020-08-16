<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->session->sess_destroy();
		redirect('home');
	}

}

/* End of file Logout.php */
