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
				$table_img_name = "img_realized_project";
				$id_project = "id_rp";
				break;

			case "unbuilt_project":
				$table_name = "unbuilt_project";
				$table_img_name = "img_unbuilt_project";
				$id_project = "id_up";		
				break;

			case "my_studio":
				$table_name = "my_studio";
				$table_img_name = "img_studio";
				$id_project = "id_studio";
				break;
				
			default:
				return false;
				break;
		}

		$data = $this->db->query("select distinct * from ".$table_name." a inner join ".$table_img_name." b on a.".$id_project."=b.".$id_project." group by a.".$id_project);

		$data = $this->db->query("select * from ".$table_name);

		return $data->result();
	}

	public function read_shop() {
		$data = $this->db->query("select distinct * from shop_item a inner join img_shop_item b on a.id_item=b.id_item group by a.id_item");
		return $data->result();	
	}

	public function get_product($id_product) {
		$this->db->distinct();
		$this->db->select('*');
		$this->db->from('shop_item');
		$this->db->join('img_shop_item', 'shop_item.id_item = img_shop_item.id_item');
		$this->db->where('shop_item.id_item', $id_product);
		$this->db->group_by('shop_item.id_item');

		$data = $this->db->get();
		return $data->first_row();	
	}
	
	public function get_content($table){
		$content = $this->db->get($table)->result_array();
		return empty($content) ?  FALSE : $content;
	}

	public function delete_content($id_proj, $table, $table_id){
		$res = $this->db->delete($table, array($table_id => $id_proj));
		return $res? true : false;
	}

	public function get_images($table, $proj_id, $table_id){
		$res = $this->db->get_where($table, array($table_id => $proj_id))->result_array();
		return empty($res)? FALSE : $res;
	}

	public function get_content_by_id($table, $table_id, $id_proj){
		$res = $this->db->get_where($table, array($table_id => $id_proj))->row_array();
		return empty($res)? FALSE : $res;
	}

	public function save_img_news($id, $data){
		$this->db->set('url_img_news', $data['file_name']);
		$this->db->where('id_news', $id);
		$res = $this->db->update('news');

		if($res){
			return true;
		}
		return false;
	}

	public function delete_img($table, $id_table, $id){
		$res = $this->db->delete($table, array($id_table => $id));
		return $res;
	}

	public function update_content($data_input, $table, $table_id, $proj_id){
		$this->db->set($data_input);
		$this->db->where($table_id, $proj_id);
		$res = $this->db->update($table);

		if($res){
			return true;
		}
		return false;
	}

	public function get_item_shop($id_item){
		$res = $this->db->get_where('shop_item', array('id_item'=>$id_item))->row_array();
		return $res;
	}

	public function get_img_item_shop($id_item){
		$res = $this->db->get_where('img_shop_item', array('id_item'=>$id_item))->result_array();
		return $res;
	}

	public function get_news($id){
		$res = $this->db->get_where('news', array('id_news'=>$id))->row_array();
		return $res;
	}
}