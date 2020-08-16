<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_admin();
		$this->load->model('user_model', 'user');
	}

	public function index()
	{
		$data['title']	= 'Users Data';
		$data['page']	= 'pages/users/index';
		$data['users']	= $this->user->getUsers();	
		$this->load->view('layouts/app', $data);
	}

	public function delete($id) 
	{
		$this->user->deleteUser($id);
		$this->session->set_flashdata('success', 'User succesfully deleted.');
		redirect(base_url('user'));
	}

}

/* End of file User.php */
