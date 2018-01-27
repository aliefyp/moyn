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

		$this->display('admin/list_content', $data);
	}

	private function standarize_data($result, $project){
		foreach ($result as $key => $value) {
			switch ($project) {
				case '1':
					$data['content'][$key]['id'] = $value['id_rp'];
					$data['content'][$key]['name'] = $value['name_rp'];
					$data['content'][$key]['type'] = $value['type_rp'];
					$data['content'][$key]['active'] = $value['active_rp'];
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
					$data['content'][$key]['active'] = $value['active_studio'];
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
					$data['content'][$key]['active'] = $value['active_up'];
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
					$data['content'][$key]['active'] = $value['active_rp'];
					$data['content'][$key]['created_at'] = $value['created_at'];
					$data['content'][$key]['created_by'] = $value['created_by'];
					$data['content'][$key]['edited_at'] = $value['edited_at'];
					$data['content'][$key]['edited_by'] = $value['edited_by'];
					$data['content'][$key]['deleted_at'] = $value['deleted_at'];
					$data['content'][$key]['deleted_by'] = $value['deleted_at'];
					break;
			}	
		}
		return $data;
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

		$this->display('admin/list_content', $data);
	}
	
}