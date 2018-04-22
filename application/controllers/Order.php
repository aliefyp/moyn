<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends MY_Controller {
	public function index(){
		$data['_title'] = 'Orders List';
		$this->load->model('content_model', 'content');
		$data['orders'] = $this->content->get_orders();
		$this->add_datatable();

		if($this->session->has_userdata('confirmation')){
			if($this->session->userdata('confirmation'))
				$data['notif'] = array('type' => 'success', 'message' => 'Data berhasil disimpan');
			else
				$data['notif'] = array('type' => 'error', 'message' => 'Data gagal disimpan');
			$this->session->unset_userdata('confirmation');
		}

		$this->display('admin/order_list', $data);
	}

	public function confirm_order(){
		$order_id = $this->input->get_post('order_id');

		$this->load->model('content_model', 'content');
		$res = $this->content->confirm_order($order_id);

		if(isset($res)){
			if($res){
				$this->session->set_userdata('confirmation', 1);
			}else{
				$this->session->set_userdata('confirmation', 0);
			}
		}

		redirect('order');
	}
}
