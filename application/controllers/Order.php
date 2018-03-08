<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends MY_Controller {
	public function index(){
		$data['_title'] = 'Orders List';
		$this->load->model('content_model', 'content');
		$data['orders'] = $this->content->get_orders();
		$this->add_datatable();

		$this->display('admin/order_list', $data);
	}
}
