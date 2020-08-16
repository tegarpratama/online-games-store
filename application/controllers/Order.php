<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('order_model', 'order');
	}
	
	public function index()
	{
		$data['title']	= 'Orders';
		$data['page']	= 'pages/order/index';
		$data['orders']= $this->order->getOrders();
		$this->load->view('layouts/app', $data);
	}

	public function detail($id)
	{
		$data['title']				= 'Order Detail';
		$data['page']				= 'pages/order/detail';
		$data['order'] 			= $this->order->getOrderDetailById($id);
		$data['order_detail'] 	= $this->order->getOrderDetail($id);

		if($data['order']['status'] != 'waiting') {
			$data['order_confirm'] = $this->order->getOrderConfirm($data['order']['id']);
		}
		$this->load->view('layouts/app', $data);
	}

	public function update($id)
	{
		$data['status'] = $this->input->post('status');
		$this->order->updateStatus($id, $data);
		$this->session->set_flashdata('success', 'Data updated successfully.');

		redirect(base_url("order/detail/$id"));
	}

}

/* End of file Order.php */
