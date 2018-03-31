<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_list extends MY_Controller {
	
	public function index(){
		$data['_title'] = 'My Shop Items List';
		$this->load->model('content_model', 'content');

		$data['content'] = $this->content->get_content('shop_item');
		$this->add_datatable();
		$this->add_css('lightbox/css/lightbox.css');
		$this->add_js('lightbox/js/lightbox.js');
		$this->display('admin/shop_list', $data);
	}

}
