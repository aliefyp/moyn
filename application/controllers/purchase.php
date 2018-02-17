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
		
		if ($res == true) {
			$this->send_email($fullname, $email, $quantity, $address, $message, $product);
		}
		
		$data['title'] = 'moyn | PURCHASE';		
		$data['res'] 			= $res;
		$data['product'] 	= $product;
		
		$data['view_purchase'] = $this->load->view('purchase-confirmation', $data, TRUE);
		$this->load->view('home',$data);
	}

	public function send_email($fullname, $email, $quantity, $address, $message, $product) {
		// email data
		$data['fullname']		= $fullname;
		$data['item_name']	= $product['name_item'];
		$data['quantity']		= $quantity;
		$data['address']		= $address;
		$data['message']		= $message;

		// load email template
		$email_content 			= $this->load->view('email-template', $data, TRUE);

		// setup email
		$config = Array(
			"protocol" 	=> "smtp",
			"smtp_host" => "ssl://smtp.googlemail.com",
			"smtp_port" => 465,
			"smtp_user" => "aliefyp@gmail.com",
			"smtp_pass" => "Aliefyp94",
			"mailtype"  => "html", 
			"charset"   => "iso-8859-1",
			"newline"		=> "\r\n"
		);

		$this->load->library('email', $config);

		$this->email->from('aliefyp@gmail.com', 'Alief Priyanto');
		$this->email->to('alief.priyanto@tokopedia.com');

		$this->email->subject('Email Test Moyn');
		$this->email->message($email_content);
		
		if ($this->email->send()) {
			return;
		} else {
			show_error($this->email->print_debugger());
		}
	}
}
