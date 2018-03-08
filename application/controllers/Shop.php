<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index() {
		$data['title'] = 'moyn | SHOP';
		
    $this->load->view('home',$data);
	}
	
	public function products() {
		$this->load->model('content_model');

		$products = $this->content_model->read_shop();
		echo json_encode($products);
	} 
}
