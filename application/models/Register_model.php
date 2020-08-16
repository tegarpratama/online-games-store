<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

	public function register($data)
	{
		$this->db->insert('users', $data);
	}

}

/* End of file Register_model.php */
