<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('cart_model', 'cart');
	}

	public function index()
	{
		$id 					= $this->session->userdata('id');
		$data['title'] 	= 'Your Cart';
		$data['product']	= $this->cart->showCart($id);
		$data['page'] 		= 'pages/cart/index';
		$this->load->view('layouts/app', $data);
	}
	
	public function add()
	{
		$product_id = $this->input->post('product_id');
		$product 	= $this->cart->getProductById($product_id);

		$data = [
			'user_id'  	 => $this->session->userdata('id'),
			'product_id' => $product_id,
			'subtotal'   => $product['price']
		];
	
		$this->cart->addToCart($data);
		$this->session->set_flashdata('success', 'Successfully added to your cart.');
		redirect(base_url('home/detail/' . $product_id));
	}

	public function delete($id) 
	{		
		$this->cart->deleteCart($id);
		$this->session->set_flashdata('success', 'Successfully deleted product in your cart.');
		redirect(base_url('cart'));
	}

}

/* End of file Cart.php */
