<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends CI_Controller {

	public function index() {
		$this->load->model('content_model');
		
		$id_item	= $this->input->get('id_item');
		$product 	= $this->content_model->get_product($id_item);	

		$data['title'] = 'moyn | PURCHASE';
		$data['product'] = $product;

		$data['view_purchase'] = $this->load->view('purchase-form', $data, TRUE);
    $this->load->view('home',$data);
	}

	public function save_order() {
		$fullname 	= $this->input->post('fullname');
		$email 			= $this->input->post('email');
		$quantity 	= $this->input->post('quantity');
		$phone 			= $this->input->post('phone');
		$address 		= $this->input->post('address');
		$message 		= $this->input->post('message');
		$id_item 		= $this->input->post('id_item');
		
		$this->load->model('content_model');
		$res 			= $this->content_model->save_order($fullname, $email, $quantity, $phone, $address, $message, $id_item);	
		$product 	= $this->content_model->get_product($id_item);			
		
		$data['title'] = 'moyn | PURCHASE';		
		$data['res'] 			= $res;
		$data['product'] 	= $product;
		
		$data['view_purchase'] = $this->load->view('purchase-confirmation', $data, TRUE);
		$this->load->view('home',$data);
	}
}
