<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model', 'login');
	}
	
	public function index()
	{
		$data['title']	= 'Login';
		$data['page']	= 'pages/auth/login';

		$this->load->view('layouts/app', $data);
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('error', 'Wrong email or password.');
			$this->index();
		}else{
			$email 		= $this->input->post('email');
			$password 	= $this->input->post('password');
			$user 		= $this->login->checkEmail($email);

			// Cek email
			if(isset($user)){
				// cek password
				if(hashEncryptVerify($password, $user['password']) == TRUE){
					$this->session->set_userdata($user);
					$this->session->set_userdata('login', TRUE);

					redirect(base_url('home'));
				}else{
					// Jika password salah
					$this->session->set_flashdata('error', 'Wrong email or password.');
					redirect('login');
				}
			}else{
				// Jika email tidak sesuai
				$this->session->set_flashdata('error', 'Wrong email or password.');
				redirect('login');
			}
		}
	}

}

/* End of file Login.php */
