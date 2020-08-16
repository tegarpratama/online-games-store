<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_model extends CI_Model {

	public function getCart($id)
	{
		$this->db->select('cart.id, cart.subtotal,
		products.name, products.image, products.price');
		$this->db->from('cart');
		$this->db->join('products', 'cart.product_id = products.id');
		$this->db->where('cart.user_id', $id);
		return $this->db->get()->result_array();
	}

	public function total($id) 
	{
		$this->db->select_sum('subtotal');
		$this->db->from('cart');
		$this->db->where('user_id', $id);
		return $this->db->get()->row()->subtotal;;
	}

	public function insertOrder($data) 
	{
		$this->db->insert('orders', $data);
		return $this->db->insert_id();
	}

	public function getCartByIdUser($id) 
	{
		return $this->db->get_where('cart', ['user_id' => $id])->result_array();
	}

	public function insertOrdersDetail($data) 
	{
		$this->db->insert('orders_detail', $data);
	}

	public function deleteCart($id)
	{
		$this->db->delete('cart',['user_id' => $id]);
	}

}

/* End of file Checkout.php */
