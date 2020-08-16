<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		is_admin();
		$this->load->model('banner_model', 'banner');
	}
	
	public function index()
	{
		$data['title'] 	= 'Banner';
		$data['banners']	= $this->banner->getBanners();
		$data['page'] 		= 'pages/banner/index';
		$this->load->view('layouts/app', $data);
	}

	public function add()
	{
		$this->form_validation->set_rules('head', 'Head banner', 'required',[
			'required' => 'Head banner is required.',
		]);
		$this->form_validation->set_rules('content', 'Content banner', 'required',[
			'required' => 'Content banner is required.',
		]);

		if($this->form_validation->run() == false) {
			$data['title']		= 'Add Banner';
			$data['page']		= 'pages/banner/add';
			$data['games']		= $this->banner->getAllGame();
			$this->load->view('layouts/app', $data);
		}else {
			$data = [
				'product_id'	=> $this->input->post('product_id'),
				'head'			=> $this->input->post('head'),
				'content'		=> $this->input->post('content'),
				'text_color'	=> $this->input->post('text_color'),
			];

			if(!empty($_FILES['image']['name'])){
				$upload = $this->banner->uploadImage();	
				$data['image'] = $upload;
			}

			$this->banner->insertBanner($data);
			$this->session->set_flashdata('success', 'Banner succesfully added.');

			redirect(base_url('banner'));
		}
	}

	public function edit($id) {
		$this->form_validation->set_rules('head', 'Head banner', 'required',[
			'required' => 'Head banner is required.',
		]);
		$this->form_validation->set_rules('content', 'Content banner', 'required',[
			'required' => 'Content banner is required.',
		]);

		if($this->form_validation->run() == false) {
			$data['title']		= 'Update Banner';
			$data['page']		= 'pages/banner/edit';
			$data['games']		= 	$this->banner->getAllGame();	
			$data['banner']	= $this->banner->getBannerById($id);
			$this->load->view('layouts/app', $data);
		}else {
			$id = $this->input->post('id');
			$data = [
				'product_id'	=> $this->input->post('product_id'),
				'head'			=> $this->input->post('head'),
				'content'		=> $this->input->post('content'),
				'text_color'	=> $this->input->post('text_color'),
			];

			if(!empty($_FILES['image']['name'])){
				$upload 	 = $this->banner->uploadImage();
				if($upload){
					$banner = $this->banner->getBannerById($id);
					if(file_exists('images/banner/' . $banner['image']) && $banner['image']){
						unlink('images/banner/' . $banner['image']);
					}
					
					$data['image'] = $upload;
				}else{
					redirect(base_url('banner/edit'));
				}
			}

			$this->banner->updateBanner($id, $data);
			$this->session->set_flashdata('success', 'Banner succesfully updated.');

			redirect(base_url('banner'));
		}
	}

	public function delete($id) {
		$banner = $this->banner->getBannerById(($id));
		unlink('images/banner/' . $banner['image']);
		$this->banner->deleteBanner($id);
		$this->session->set_flashdata('success', 'Banner succesfully deleted.');

		redirect(base_url('banner'));
	}

}

/* End of file Banner.php */
