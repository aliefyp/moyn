<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_content extends MY_Controller {
	
	public function index(){
		$project = $this->input->get('proj');
		$this->load->model('content_model', 'content');

		switch ($project) {
			case '1':
				$data['_title']  = 'Manage Realized Project';
				$data['project'] = 1;
				$table 			 = 'realized_project';
				break;

			case '2':
				$data['_title']  = 'Manage My Studio';
				$data['project'] = 2;
				$table 			 = 'my_studio';
				break;

			case '3':
				$data['_title']  = 'Manage Unbuilt Project';
				$data['project'] = 3;
				$table 			 = 'unbuilt_project';
				break;
			
			default:
				$data['_title']  = 'Manage Realized Project';
				$data['project'] = 1;
				$table 			 = 'realized_project';
				break;
		}

		$result = $this->content->get_content($table);
		$std_data = $this->standarize_data($result, $project);
		$data = array_merge($data, $std_data);
		$this->add_datatable();

		if($this->session->has_userdata('upload')){
			if($this->session->userdata('upload'))
				$data['notif'] = array('type' => 'success', 'message' => 'Data berhasil disimpan');
			else
				$data['notif'] = array('type' => 'error', 'message' => 'Data gagal disimpan');
			$this->session->unset_userdata('upload');
		}
		$this->add_css('lightbox/css/lightbox.css');
		$this->add_js('lightbox/js/lightbox.js');

		$this->display('admin/list_content', $data);
	}

	private function standarize_data($result, $project){
		if(sizeof($result) > 0){
			foreach ($result as $key => $value) {
				switch ($project) {
					case '1':
						$data['content'][$key]['id'] = $value['id_rp'];
						$data['content'][$key]['name'] = $value['name_rp'];
						$data['content'][$key]['type'] = $value['type_rp'];
						$data['content'][$key]['active'] = $value['active'];
						$data['content'][$key]['created_at'] = $value['created_at'];
						$data['content'][$key]['created_by'] = $value['created_by'];
						$data['content'][$key]['edited_at'] = $value['edited_at'];
						$data['content'][$key]['edited_by'] = $value['edited_by'];
						$data['content'][$key]['deleted_at'] = $value['deleted_at'];
						$data['content'][$key]['deleted_by'] = $value['deleted_at'];
						break;

					case '2':
						$data['content'][$key]['id'] = $value['id_studio'];
						$data['content'][$key]['name'] = $value['name_studio'];
						$data['content'][$key]['type'] = $value['type_studio'];
						$data['content'][$key]['active'] = $value['active'];
						$data['content'][$key]['created_at'] = $value['created_at'];
						$data['content'][$key]['created_by'] = $value['created_by'];
						$data['content'][$key]['edited_at'] = $value['edited_at'];
						$data['content'][$key]['edited_by'] = $value['edited_by'];
						$data['content'][$key]['deleted_at'] = $value['deleted_at'];
						$data['content'][$key]['deleted_by'] = $value['deleted_at'];
						break;

					case '3':
						$data['content'][$key]['id'] = $value['id_up'];
						$data['content'][$key]['name'] = $value['name_up'];
						$data['content'][$key]['type'] = $value['type_up'];
						$data['content'][$key]['active'] = $value['active'];
						$data['content'][$key]['created_at'] = $value['created_at'];
						$data['content'][$key]['created_by'] = $value['created_by'];
						$data['content'][$key]['edited_at'] = $value['edited_at'];
						$data['content'][$key]['edited_by'] = $value['edited_by'];
						$data['content'][$key]['deleted_at'] = $value['deleted_at'];
						$data['content'][$key]['deleted_by'] = $value['deleted_at'];
						break;
				
				default:
					$data['content'][$key]['id'] = $value['id_rp'];
					$data['content'][$key]['name'] = $value['name_rp'];
					$data['content'][$key]['type'] = $value['type_rp'];
					$data['content'][$key]['active'] = $value['active'];
					$data['content'][$key]['created_at'] = $value['created_at'];
					$data['content'][$key]['created_by'] = $value['created_by'];
					$data['content'][$key]['edited_at'] = $value['edited_at'];
					$data['content'][$key]['edited_by'] = $value['edited_by'];
					$data['content'][$key]['deleted_at'] = $value['deleted_at'];
					$data['content'][$key]['deleted_by'] = $value['deleted_at'];
					break;
			}	
		}
	}
		
		return $data;
	}

	private function standarize_data_row($result, $project){
		if(sizeof($result)){
			switch ($project) {
					case '1':
						$data['content']['id'] = $result['id_rp'];
						$data['content']['name'] = $result['name_rp'];
						$data['content']['type'] = $result['type_rp'];
						$data['content']['active'] = $result['active'];
						$data['content']['created_at'] = $result['created_at'];
						$data['content']['created_by'] = $result['created_by'];
						$data['content']['edited_at'] = $result['edited_at'];
						$data['content']['edited_by'] = $result['edited_by'];
						$data['content']['deleted_at'] = $result['deleted_at'];
						$data['content']['deleted_by'] = $result['deleted_at'];
						break;

					case '2':
						$data['content']['id'] = $result['id_studio'];
						$data['content']['name'] = $result['name_studio'];
						$data['content']['type'] = $result['type_studio'];
						$data['content']['active'] = $result['active'];
						$data['content']['created_at'] = $result['created_at'];
						$data['content']['created_by'] = $result['created_by'];
						$data['content']['edited_at'] = $result['edited_at'];
						$data['content']['edited_by'] = $result['edited_by'];
						$data['content']['deleted_at'] = $result['deleted_at'];
						$data['content']['deleted_by'] = $result['deleted_at'];
						break;

					case '3':
						$data['content']['id'] = $result['id_up'];
						$data['content']['name'] = $result['name_up'];
						$data['content']['type'] = $result['type_up'];
						$data['content']['active'] = $result['active'];
						$data['content']['created_at'] = $result['created_at'];
						$data['content']['created_by'] = $result['created_by'];
						$data['content']['edited_at'] = $result['edited_at'];
						$data['content']['edited_by'] = $result['edited_by'];
						$data['content']['deleted_at'] = $result['deleted_at'];
						$data['content']['deleted_by'] = $result['deleted_at'];
						break;
				
					default:
						$data['content']['id'] = $result['id_rp'];
						$data['content']['name'] = $result['name_rp'];
						$data['content']['type'] = $result['type_rp'];
						$data['content']['active'] = $result['active'];
						$data['content']['created_at'] = $result['created_at'];
						$data['content']['created_by'] = $result['created_by'];
						$data['content']['edited_at'] = $result['edited_at'];
						$data['content']['edited_by'] = $result['edited_by'];
						$data['content']['deleted_at'] = $result['deleted_at'];
						$data['content']['deleted_by'] = $result['deleted_at'];
						break;
			}
			return $data;
		}
		
		return false;
	}

	public function delete_content(){
		$type_proj = $this->input->get('type_proj');
		$id_proj = $this->input->get('id_proj');		

		switch ($type_proj) {
			case '1':
				$data['_title']  = 'Manage Realized Project';
				$data['project'] = 1;
				$table 			 = 'realized_project';
				$id_name 			 = 'id_rp';
				break;

			case '2':
				$data['_title']  = 'Manage My Studio';
				$data['project'] = 2;
				$table 			 = 'my_studio';
				$id_name 		 = 'id_studio';
				break;

			case '3':
				$data['_title']  = 'Manage Unbuilt Project';
				$data['project'] = 3;
				$table 			 = 'unbuilt_project';
				$id_name 		 = 'id_up';
				break;
			
			default:
				$data['_title']  = 'Manage Realized Project';
				$data['project'] = 1;
				$table 			 = 'realized_project';
				$id_name 		 = 'id_rp';
				break;
		}

		if(!empty($id_proj) && !empty($type_proj)){
			$this->load->model('content_model', 'content');
			$res = $this->content->delete_content($id_proj, $table, $id_name);

			if($res)
				$data['notif'] = array('type' => 'success', 'message' => 'Data berhasil dihapus');
			else
				$data['notif'] = array('type' => 'error', 'message' => 'Data gagal dihapus');
		}

		$result = $this->content->get_content($table);
		$std_data = $this->standarize_data($result, $type_proj);
		$data = array_merge($data, $std_data);
		$this->add_datatable();
		
		$this->add_css('lightbox/css/lightbox.css');
		$this->add_css('lightbox/js/lightbox.js');

		$this->display('admin/list_content', $data);
	}

	public function get_images(){
		$type_proj = $this->input->get('type_proj');
		$id_proj = $this->input->get('id_proj');
		$this->load->model('content_model', 'content');

		switch ($type_proj) {
			case '1':
				$data['_title']  = 'Manage Realized Project';
				$data['project'] = 1;
				$table 			 = 'img_realized_project';
				$id_name 		 = 'id_rp';
				break;

			case '2':
				$data['_title']  = 'Manage My Studio';
				$data['project'] = 2;
				$table 			 = 'img_studio';
				$id_name 		 = 'id_studio';
				break;

			case '3':
				$data['_title']  = 'Manage Unbuilt Project';
				$data['project'] = 3;
				$table 			 = 'img_unbuilt_project';
				$id_name 		 = 'id_up';
				break;

			case '4':
				$data['_title']  = 'Manage My Shop';
				$data['project'] = 4;
				$table 			 = 'img_shop_item';
				$id_name 		 = 'id_item';
				break;
			
			default:
				$data['_title']  = 'Manage Realized Project';
				$data['project'] = 1;
				$table 			 = 'img_realized_project';
				$id_name 		 = 'id_rp';
				break;
		}

		$res = $this->content->get_images($table, $id_proj, $id_name);
		if($this->input->get('json')){
			echo json_encode($res);
			exit();
		}

		return $res;
	}

	public function edit_content(){
		$type_proj = $this->input->get('type_proj');
		$id_proj = $this->input->get('id_proj');

		switch ($type_proj) {
			case '1':
				$data['_title']  = 'Edit Realized Project';
				$data['project'] = 1;
				$table 			 = 'realized_project';
				$table_id 		 = 'id_rp';
				$img_table 		 = 'img_realized_project';
				$img_table_id 	 = 'id_irp';
				break;

			case '2':
				$data['_title']  = 'Edit My Studio';
				$data['project'] = 2;
				$table 			 = 'my_studio';
				$table_id 		 = 'id_studio';
				$img_table 		 = 'img_studio';
				$img_table_id 	 = 'id_istudio';
				break;

			case '3':
				$data['_title']  = 'Edit Unbuilt Project';
				$data['project'] = 3;
				$table 			 = 'unbuilt_project';
				$table_id 		 = 'id_up';
				$img_table 		 = 'img_unbuilt_project';
				$img_table_id 	 = 'id_iup';
				break;
			
			default:
				$data['_title']  = 'Edit Realized Project';
				$data['project'] = 1;
				$table 			 = 'realized_project';
				$table_id 		 = 'id_rp';
				$img_table 		 = 'img_realized_project';
				$img_table_id 	 = 'id_irp';
				break;
		}

		$this->load->model('content_model', 'content');
		$query = $this->content->get_content_by_id($table, $table_id, $id_proj);
		
		$data['result'] = $this->standarize_data_row($query, $type_proj);
		$res = $this->content->get_images($img_table, $id_proj, $table_id);

		$img_res = '';
		
		if($res){
		foreach ($res as $key => $value) {
						switch ($type_proj) {
						case '1':
							$img_res[$key]['id_img']	= $value['id_irp'];
							$img_res[$key]['id_pro']	= $value['id_rp'];
							$img_res[$key]['deskripsi']	= $value['deskripsi_irp'];
							$img_res[$key]['url']		= $value['url_irp'];
							$img_res[$key]['active']	= $value['active_irp'];
							break;
		
						case '2':
							$img_res[$key]['id_img']	= $value['id_istd'];
							$img_res[$key]['id_pro']	= $value['id_studio'];
							$img_res[$key]['deskripsi']	= $value['deskripsi_istd'];
							$img_res[$key]['url']		= $value['url_istd'];
							$img_res[$key]['active']	= $value['active_istd'];
							break;
		
						case '3':
							$img_res[$key]['id_img']	= $value['id_iup'];
							$img_res[$key]['id_pro']	= $value['id_up'];
							$img_res[$key]['deskripsi']	= $value['deskripsi_iup'];
							$img_res[$key]['url']		= $value['url_iup'];
							$img_res[$key]['active']	= $value['active_iup'];
							break;
						
						default:
							$img_res[$key]['id_img']	= $value['id_irp'];
							$img_res[$key]['id_pro']	= $value['id_rp'];
							$img_res[$key]['deskripsi']	= $value['deskripsi_irp'];
							$img_res[$key]['url']		= $value['url_irp'];
							$img_res[$key]['active']	= $value['active_irp'];
							break;
					}
				}
			}

		$data['images']  = $img_res;
		$data['id_project'] = $id_proj;
		$data['url_submit'] = 'input_content/submit_content';
		$this->display('admin/form_content', $data);

	}
	
}
