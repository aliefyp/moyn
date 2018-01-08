<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_content extends MY_Controller {
	
	public function index(){
		$data['_title'] = 'Manage Content';
		$this->display('admin/form_content', $data);
	}
	
}