<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index() {

		$this->load->model('content_model');
		$data['title']		= 'moyn | NEWS';
		// $data['articles']	= $this->content_model->read_news();

		$this->load->view('home',$data);
		
	}

	public function times() {
		$this->load->model('content_model');
		$times	= $this->content_model->get_time_of_news();
		echo json_encode($times);		
	}

	public function articles() {
		$year	= $this->input->post("year");
		$month	= $this->input->post("month");

		$this->load->model('content_model');
		$articles	= $this->content_model->get_all_article($year, $month);

		echo json_encode($articles);		
	}
}
