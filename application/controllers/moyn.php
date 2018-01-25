<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moyn extends CI_Controller {

	public function index() {
		$this->load->model('content_model');
		
		$data['title'] = 'moyn';

		$data['studio_project'] = $this->content_model->read_project("my_studio");
		$data['unbuilt_project'] = $this->content_model->read_project("unbuilt_project");
		$data['realized_project'] = $this->content_model->read_project("realized_project");
		
    $this->load->view('home',$data);
	}

	public function project() {
		$this->load->model('content_model');

		$type = "";
		$project = [];
		if($this->input->post()) {
			$type = $this->input->post('type');

			switch ($type) {
				case 'studio_project':
					$project = $this->content_model->read_project("my_studio");
					break;

				case 'unbuilt_project':
					$project = $this->content_model->read_project("unbuilt_project");
					break;
				
				case 'realized_project':
					$project = $this->content_model->read_project("realized_project");
					break;
				
				default:
					$project = [];
					break;
			}
		}

		echo json_encode($project);
	} 
}
