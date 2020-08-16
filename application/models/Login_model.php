<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function checkEmail($email)
	{
		return $this->db->get_where('users', ['email' => $email])->row_array();
	}

}

/* End of file Login_model.php */
