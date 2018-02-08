<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function index() {
		$data['title'] = 'moyn | PROJECTS';

    $this->load->view('home',$data);
	}

	public function studio() {
		$this->load->model('content_model');

		$project = $this->content_model->read_project("my_studio");
		echo json_encode($project);
	} 


	public function realized() {
		$this->load->model('content_model');

		$project = $this->content_model->read_project("realized_project");
		echo json_encode($project);
	} 


	public function unbuilt() {
		$this->load->model('content_model');

		$project = $this->content_model->read_project("unbuilt_project");
		echo json_encode($project);
	} 

	public function slider() {
		$this->load->model('content_model');
		$table = $this->input->post('table');
		$proj_id = $this->input->post('proj_id');
		$table_id = $this->input->post('table_id');


		$images = $this->content_model->get_images($table, $proj_id, $table_id);
		echo json_encode($images);
	} 
}
