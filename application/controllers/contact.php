<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index() {
		$data['title'] = 'moyn | CONTACT';
		
    $this->load->view('home',$data);
	}
}
