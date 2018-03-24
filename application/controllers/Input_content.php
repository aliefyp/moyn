<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_content extends MY_Controller {
	
	public function index(){		
		$project = $this->input->get('proj');

		switch ($project) {
			case '1':
				$data['_title']  = 'Input Realized Project';
				$data['project'] = 1;
				break;

			case '2':
				$data['_title'] = 'Input My Studio';
				$data['project'] = 2;
				break;

			case '3':
				$data['_title'] = 'Input Unbuilt Project';
				$data['project'] = 3;
				break;
			
			default:
				$data['_title'] = 'Input Realized Project';
				$data['project'] = 1;
				break;
		}

		if($this->session->has_userdata('upload')){
			if($this->session->userdata('upload'))
				$data['notif'] = array('type' => 'success', 'message' => 'Data berhasil disimpan');
			else
				$data['notif'] = array('type' => 'error', 'message' => 'Data gagal disimpan');
			$this->session->unset_userdata('upload');
		}
		$data['url_submit'] = 'input_content/submit_content';

		$this->display('admin/form_content', $data);
	}

	public function submit_content(){
		if($this->input->post()){
			$proj_name 		= $this->input->post('project_name');
			$proj_status 	= $this->input->post('project_status');
			$proj_type 		= $this->input->post('project_type');
			$proj_num 		= $this->input->post('project_num');

			/*untuk keperluan update data*/
			$proj_id = empty($this->input->post('project_id'))? '' : $this->input->post('project_id');

			if(!empty($proj_id)){
				switch ($proj_num) {
					case 1:
						$table 		= 'realized_project';
						$table_img 	= 'img_realized_project';
						$table_id	= 'id_rp';
						$data_input = array('name_rp' 	=> $proj_name,
									'type_rp'	=> $proj_type,
									'active' => $proj_status,
									'edited_at'=> date('Y-m-d H:i:s'),
									'edited_by'=> $this->session->userdata('username')
								);
						break;
	
					case 2:
						$table 		= 'my_studio';
						$table_img 	= 'img_studio';
						$table_id	= 'id_studio';
						$data_input = array('name_studio' 	=> $proj_name,
									'type_studio'	=> $proj_type,
									'active' => $proj_status,
									'edited_at'=> date('Y-m-d H:i:s'),
									'edited_by'=> $this->session->userdata('username')
								);
						break;
	
					case 3:
						$table 		= 'unbuilt_project';
						$table_img 	= 'img_unbuilt_project';
						$table_id	= 'id_up';
						$data_input = array('name_up' 	=> $proj_name,
									'type_up'	=> $proj_type,
									'active' => $proj_status,
									'edited_at'=> date('Y-m-d H:i:s'),
									'edited_by'=> $this->session->userdata('username')
								);
						break;
					
					default:
						echo('undefined table name');die();
						break;
				}
			}
			else{
				switch ($proj_num) {
					case 1:
						$table 		= 'realized_project';
						$table_img 	= 'img_realized_project';
						$data_input = array('name_rp' 	=> $proj_name,
									'type_rp'	=> $proj_type,
									'active' => $proj_status,
									'created_at'=> date('Y-m-d H:i:s'),
									'created_by'=> $this->session->userdata('username')
								);
						break;
	
					case 2:
						$table 		= 'my_studio';
						$table_img 	= 'img_studio';
						$data_input = array('name_studio' 	=> $proj_name,
									'type_studio'	=> $proj_type,
									'active' => $proj_status,
									'created_at'=> date('Y-m-d H:i:s'),
									'created_by'=> $this->session->userdata('username')
								);
						break;
	
					case 3:
						$table 		= 'unbuilt_project';
						$table_img 	= 'img_unbuilt_project';
						$data_input = array('name_up' 	=> $proj_name,
									'type_up'	=> $proj_type,
									'active' => $proj_status,
									'created_at'=> date('Y-m-d H:i:s'),
									'created_by'=> $this->session->userdata('username')
								);
						break;
					
					default:
						echo('undefined table name');die();
						break;
				}
			}
			$this->load->model('content_model', 'content');

			if(!empty($proj_id)){
				if($this->content->update_content($data_input, $table, $table_id, $proj_id)){
					$res = $this->upload_images($proj_id, $table_img, 1);
					$this->session->set_userdata('upload', $res);
					redirect('manage_content?proj='.$proj_num);
				}
			}else{
				if($this->content->save_content($data_input, $table)){
					$id = $this->db->insert_id();
					$res = $this->upload_images($id, $table_img, 0);
					$this->session->set_userdata('upload', $res);
					redirect('manage_content?proj='.$proj_num);
				}
			}
		}
		
	}

	public function upload_images($id, $table_img, $edit){
		$config['upload_path'] 		= './upload';
		$config['allowed_types']	= 'png|gif|jpg|jpeg';
		$config['max_size'] 		= '2048000';

		$this->load->library('upload', $config);

		$filesCount = count($_FILES['fotos']['name']);
		if($filesCount){
			for($i = 0; $i < $filesCount; $i++){
                $_FILES['foto']['name'] 	= $_FILES['fotos']['name'][$i];
                $_FILES['foto']['type'] 	= $_FILES['fotos']['type'][$i];
                $_FILES['foto']['tmp_name'] = $_FILES['fotos']['tmp_name'][$i];
                $_FILES['foto']['error'] 	= $_FILES['fotos']['error'][$i];
                $_FILES['foto']['size'] 	= $_FILES['fotos']['size'][$i];

                $uploadPath 				= './upload';
                $config['upload_path'] 		= $uploadPath;
                $config['allowed_types'] 	= 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if($this->upload->do_upload('foto')){
                	switch ($table_img) {
                		case 'img_realized_project':
                			$fileData 						= $this->upload->data();
		                    $uploadData[$i]['id_rp'] 		= $id;
		                    $uploadData[$i]['url_irp'] 		= 'upload/'.$fileData['file_name'];
		                    $uploadData[$i]['created_at'] 	= date('Y-m-d H:i:s');
		                    $uploadData[$i]['created_by'] 	= $this->session->userdata('username');
		                    $id_table_ctn					= 'id_rp';
                			break;

                		case 'img_studio':
                			$fileData 						= $this->upload->data();
		                    $uploadData[$i]['id_studio']	= $id;
		                    $uploadData[$i]['url_istd'] 	= 'upload/'.$fileData['file_name'];
		                    $uploadData[$i]['created_at'] 	= date('Y-m-d H:i:s');
		                    $uploadData[$i]['created_by'] 	= $this->session->userdata('username');
		                    $id_table_ctn					= 'id_studio';
                			break;

                		case 'img_unbuilt_project':
                			$fileData 						= $this->upload->data();
		                    $uploadData[$i]['id_up'] 		= $id;
		                    $uploadData[$i]['url_iup'] 		= 'upload/'.$fileData['file_name'];
		                    $uploadData[$i]['created_at'] 	= date('Y-m-d H:i:s');
		                    $uploadData[$i]['created_by'] 	= $this->session->userdata('username');
		                    $id_table_ctn					= 'id_up';
                			break;
                		
                		default:
                			echo('undefined image table name');die();
                			break;
                	}
                    
                }
            }
		}
                        
        if(!empty($uploadData)){
            //Insert file information into the database
            $this->load->model('content_model', 'content');
            /*hapus foto dulu, baru upload lagi*/
            if($edit){
            	$this->content->delete_img($table_img, $id_table_ctn, $id);
            }

            $insert = $this->content->save_image($uploadData, $table_img);
            return $insert;
        }
	}
	
}
