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

		$this->display('admin/form_content', $data);
	}

	public function submit_content(){
		if($this->input->post()){
			$proj_name 		= $this->input->post('project_name');
			$proj_status 	= $this->input->post('project_status');
			$proj_type 		= $this->input->post('project_type');
			$proj_num 		= $this->input->post('project_num');

			switch ($proj_num) {
				case 1:
					$table 		= 'realized_project';
					$table_img 	= 'img_realized_project';
					$data_input = array('name_rp' 	=> $proj_name,
								'type_rp'	=> $proj_type,
								'active_rp' => $proj_status,
								'created_at'=> date('Y-m-d H:i:s'),
								'created_by'=> $this->session->userdata('username')
							);
					break;

				case 2:
					$table 		= 'my_studio';
					$table_img 	= 'img_studio';
					$data_input = array('name_studio' 	=> $proj_name,
								'type_studio'	=> $proj_type,
								'active_studio' => $proj_status,
								'created_at'=> date('Y-m-d H:i:s'),
								'created_by'=> $this->session->userdata('username')
							);
					break;

				case 3:
					$table 		= 'unbuilt_project';
					$table_img 	= 'img_unbuilt_project';
					$data_input = array('name_up' 	=> $proj_name,
								'type_up'	=> $proj_type,
								'active_up' => $proj_status,
								'created_at'=> date('Y-m-d H:i:s'),
								'created_by'=> $this->session->userdata('username')
							);
					break;
				
				default:
					echo('undefined table name');die();
					break;
			}

			$this->load->model('content_model', 'content');

			if($this->content->save_content($data_input, $table)){
				$id = $this->db->insert_id();
				$res = $this->upload_images($id, $table_img);
				$this->session->set_userdata('upload', $res);
				redirect('input_content?proj='.$proj_num);
			}
		}
		
	}

	public function upload_images($id, $table_img){
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
                			break;

                		case 'img_studio':
                			$fileData 						= $this->upload->data();
		                    $uploadData[$i]['id_studio']	= $id;
		                    $uploadData[$i]['url_istd'] 	= 'upload/'.$fileData['file_name'];
		                    $uploadData[$i]['created_at'] 	= date('Y-m-d H:i:s');
		                    $uploadData[$i]['created_by'] 	= $this->session->userdata('username');
                			break;

                		case 'img_unbuilt_project':
                			$fileData 						= $this->upload->data();
		                    $uploadData[$i]['id_up'] 		= $id;
		                    $uploadData[$i]['url_iup'] 		= 'upload/'.$fileData['file_name'];
		                    $uploadData[$i]['created_at'] 	= date('Y-m-d H:i:s');
		                    $uploadData[$i]['created_by'] 	= $this->session->userdata('username');
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
            $insert = $this->content->save_image($uploadData, $table_img);
            return $insert;
        }
        return false;
	}
	
}