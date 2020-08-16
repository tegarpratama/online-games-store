<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {

	public function getOrders() 
	{
		return $this->db->get('orders')->result_array();
	}

	public function getOrderDetailById($id) 
	{
		return $this->db->get_where('orders', ['id' => $id])->row_array();
	}

	public function getOrderDetail($id) 
	{
		$this->db->select('orders_detail.orders_id, orders_detail.product_id, orders_detail.subtotal, products.name, products.image, products.price');
		$this->db->from('orders_detail');
		$this->db->join('products', 'orders_detail.product_id = products.id');
		$this->db->where('orders_detail.orders_id', $id);
		return $this->db->get()->result_array();
	}

	public function getOrderConfirm($id) 
	{
		return $this->db->get_where('orders_confirm', ['orders_id' => $id])->row_array();
	}

	public function updateStatus($id, $data)
	{
		$this->db->update('orders', $data, ['id' => $id]);
	}

}

/* End of file Order_model.php */
