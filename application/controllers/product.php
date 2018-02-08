<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index() {
		$data['title'] = 'moyn | PRODUCT';

		$this->load->model('content_model');
		$id = $this->input->get('id');
		$product = $this->content_model->get_product($id);		
		$data['product'] = $product;

    $this->load->view('home',$data);
	}
}
