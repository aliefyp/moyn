<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function save_content($data = array(), $table){
		if($this->db->insert($table, $data)){
			return TRUE;
		}
		return FALSE;
	}

	public function save_image($upload_data, $table_img){
		$insert = $this->db->insert_batch($table_img,$upload_data);
        return $insert?true:false;
	}
}