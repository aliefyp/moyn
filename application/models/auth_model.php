<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function is_logged_in(){
		if($this->session->userdata('username')){
			return TRUE;
		}
		return FALSE;
	}

	public function authenticate($username, $password){
		$salt = 'moynS3cr3t!';
		$password = md5($salt.$password);
		$res = $this->db->get_where('user', array('username' => $username, 'password' => $password))->result();
		
		if($res){
			return array ('status' => 200,
							'message' => 'success');
		}else{
			return array ('status' => 400,
							'message' => 'failed');
		}
	}
}