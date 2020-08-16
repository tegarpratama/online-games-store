<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

	public function getProfile($id) 
	{
		return $this->db->get_where('users', ['id' => $id])->row_array();
	}

	public function updateProfile($id, $data)
	{
		$this->db->update('users', $data, ['id' => $id]);
	}

	public function updatePassword($id, $data)
	{
		$this->db->update('users', $data, ['id' => $id]);
		return $this->db->affected_rows();
	}

}

/* End of file Profile_model.php */
