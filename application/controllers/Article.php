<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function index() {
		$this->load->model('content_model');
		$id 						= $this->input->get('id');
		$news 					= $this->content_model->get_news($id);		

		$data['title'] 			= 'moyn | NEWS';
		$data['article'] 		= $news;
		$data['view_news'] 	= $this->load->view('news_page', $data, TRUE);

		// var_dump($data['article']);
    $this->load->view('home',$data);
	}
}
