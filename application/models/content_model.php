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

	public function read_project($project_type) {
		switch ($project_type) {
			case "realized_project":
				$table_name = "realized_project";
				break;

			case "unbuilt_project":
				$table_name = "unbuilt_project";
				break;

			case "my_studio":
				$table_name = "my_studio";
				break;
				
			default:
				return false;
				break;
		}

		$data = $this->db->query("select * from ".$table_name);
		return $data->result();
	}
	
	public function get_content($table){
		$content = $this->db->get($table)->result_array();
		return empty($content) ?  FALSE : $content;
	}

	public function delete_content($id_proj, $table, $table_id){
		$res = $this->db->delete($table, array($table_id => $id_proj));
		return $res? true : false;
	}
}