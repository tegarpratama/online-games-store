<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_model extends CI_Model {

	public function getBanners()
	{
		return $this->db->get('banners')->result_array();
	}

	public function getAllGame()
	{
		return $this->db->get('products')->result_array();
	}

	public function insertBanner($data)
	{
		$this->db->insert('banners', $data);
	}

	public function getBannerById($id)
	{
		return $this->db->get_where('banners', ['id' => $id])->row_array();
	}

	public function updateBanner($id, $data) 
	{
		$this->db->update('banners', $data, ['id' => $id]);
	}

	public function deleteBanner($id)
	{
		$this->db->delete('banners', ['id' => $id]);
	}

	public function uploadImage() 
	{
		$config = [
			'upload_path'     => './images/banner',
			'encrypt_name'    => TRUE,
			'allowed_types'   => 'jpg|jpeg|png|JPG|PNG|JPEG',
			'max_size'        => 3000,
			'max_width'       => 0,
			'max_height'      => 0,
			'overwrite'       => TRUE,
			'file_ext_tolower'=> TRUE
		];
	
		 $this->load->library('upload', $config);
		 
		if($this->upload->do_upload('image')){
			return $this->upload->data('file_name');
		}else{
			$this->session->set_flashdata('image_error', 'Uploaded file types are not permitted or the file is too large.');
			return false;
		}
	}

}

/* End of file Banner_model.php */
