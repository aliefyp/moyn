<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_content extends MY_Controller {
	
	public function index(){		
		$project = $this->input->get('proj');

		switch ($project) {
			case '1':
				$data['_title'] = 'Input Realized Project';
				break;

			case '2':
				$data['_title'] = 'Input My Studio';
				break;

			case '3':
				$data['_title'] = 'Input Unbuilt Project';
				break;
			
			default:
				$data['_title'] = 'Input Project';
				break;
		}

		$this->display('admin/form_content', $data);
	}
	
}