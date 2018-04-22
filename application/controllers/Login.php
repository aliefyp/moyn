<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index(){
		if($this->auth_model->is_logged_in()){
			redirect('welcome');
		}
		else{
			$this->load->view('admin/login');
		}
	}

	public function do_login(){
		$username = trim($this->input->post('username'));
		$password = $this->input->post('password');

		$auth_res = $this->auth_model->authenticate($username, $password);

		if($auth_res['status'] == 200){
			$this->session->set_userdata('username', $username);
			redirect('welcome');
		}else{
			$this->load->view('admin/login', $auth_res);
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
