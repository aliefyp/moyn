<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$judul = "Anu";
		$data["judul"] = $judul;
		$this->load->helper('url');
		$this->load->view('template/head');
		$this->load->view('home', $data);
	}
}
