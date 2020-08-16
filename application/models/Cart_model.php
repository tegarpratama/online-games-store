<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

	public function getProductById($id) 
	{
		return $this->db->get_where('products', ['id' => $id])->row_array();
	}

	public function addToCart($data) 
	{
		$this->db->insert('cart', $data);
	}

	public function showCart($id) {
		$this->db->select('cart.*, products.name, products.price, products.image');
		$this->db->from('cart');
		$this->db->join('products', 'cart.product_id = products.id');
		$this->db->where('cart.user_id', $id);
		return $this->db->get()->result_array();
	}

	public function deleteCart($id) 
	{
		$this->db->delete('cart', ['id' => $id]);
		return $this->db->affected_rows();
	}

}

/* End of file Cart_model.php */
