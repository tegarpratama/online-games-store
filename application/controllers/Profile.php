<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('profile_model', 'profile');
	}
	
	public function index()
	{
		$id 					= $this->session->userdata('id');
		$data['title'] 	= 'Profile';
		$data['page'] 		= 'pages/profile/index';
		$data['profile']	= $this->profile->getProfile($id);
		$this->load->view('layouts/app', $data); 
	}

	public function update()
	{
		$this->form_validation->set_rules('name', 'Name', 'required',[
			'required' => 'Name is required.'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email',[
			'required' 		=> 'Email is required.',
			'valid_email'	 => 'Email not valid.'
		]);

		if($this->form_validation->run() == FALSE){
			$id 					= $this->session->userdata('id');
			$data['title'] 	= 'Profile';
			$data['page'] 		= 'pages/profile/index';
			$data['profile']	= $this->profile->getProfile($id);
			$this->load->view('layouts/app', $data); 
		}else{
			$id = $this->session->userdata('id');

			$data = [
				'name'	=> $this->input->post('name'),
				'email' 	=> $this->input->post('email')
			];

			$this->profile->updateProfile($id, $data);
			$this->session->set_flashdata('success', 'Biodata Successfully Updated. Please log in again to update profile.');

			redirect(base_url('profile'));
		}
	}

	public function password()
	{
		$this->form_validation->set_rules('password', 'New password', 'required',[
			'required' => 'New password is required.',
		]);
		$this->form_validation->set_rules('password2', 'Password confirmation', 'required|trim|matches[password]',[
			'required' => 'Password confirmation is required.',
			'matches'  => 'Password confirmation not match.'
		]);

		if($this->form_validation->run() == FALSE){
			$data['title']		= 'Change Password';
			$data['page'] 		= 'pages/profile/password';

			$this->load->view('layouts/app', $data);
		}else{
			$id = $this->session->userdata('id');
			$data = [
				'password' => hashEncrypt($this->input->post('password')),
			];

			$this->profile->updatePassword($id, $data);
			$this->session->set_flashdata('success', 'Password successfully updated.');

			redirect(base_url('profile/password'));
		}
	}

}

/* End of file Profile.php */
