<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_news extends MY_Controller {
	
	public function index(){
		$data['_title'] = 'Input News';

		$this->display('admin/form_news', $data);
	}

	public function submit_news(){
		$this->load->model('content_model', 'content');
		$judul = $this->input->post('news_title');
		$desc = $this->input->post('news_desc');

		$id_news = $this->input->post('id_news');

		if($this->input->post()){

		if(!empty($id_news)){
			$arr = array('judul_news'			=> $judul,
							'deskripsi_news'	=> $desc,
							'edited_at'			=> date('Y-m-d H:i:s'),
							'edited_by'			=> $this->session->userdata('username')
						);
			$updt = $this->content->update_content($arr,'news', 'id_news', $id_news);

			if($updt){
				$upl_res = $this->upload_images($id_news,1);
				if($upl_res){
					$data['notif'] = array('type' => 'success', 'message' => 'Data berhasil disimpan');
					$data['_title'] = 'Input News';
					redirect('input_news/news_list');
				}
			}else{
				$data['notif'] = array('type' => 'error', 'message' => 'Data gagal disimpan');
				$data['_title'] = 'Input News';
				redirect('input_news/news_list');
			}
		}else{
			$arr = array('judul_news'			=> $judul,
							'deskripsi_news'	=> $desc,
							'bulan_news'		=> date("F"),
							'tahun_news'		=> date("Y"),
							'created_at'		=> date('Y-m-d H:i:s'),
							'created_by'		=> $this->session->userdata('username')
						);
			$res = $this->content->save_content($arr,'news');

			if($res){
				$id = $this->db->insert_id();
				$upl_res = $this->upload_images($id,0);
				if($upl_res){
					$data['notif'] = array('type' => 'success', 'message' => 'Data berhasil disimpan');
					$data['_title'] = 'Input News';
					$this->display('admin/form_news', $data);
				}
			}else{
				$data['notif'] = array('type' => 'error', 'message' => 'Data gagal disimpan');
				$data['_title'] = 'Input News';
				$this->display('admin/form_news', $data);
			}
		}

			
		}
	}

	public function upload_images($id, $edit){
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
        			$fileData = $this->upload->data();
                }
            }
		}
                        
        if(!empty($fileData)){
            //Insert file information into the database
            $this->load->model('content_model', 'content');
            
            $insert = $this->content->save_img_news($id, $fileData);
            return $insert;
        }
        return false;
	}

	public function news_list(){
		$this->load->model('content_model', 'content');
		$data['news'] = $this->content->get_content('news');
		$data['_title'] = 'News List';
		$this->add_datatable();

		$this->display('admin/news_list', $data);
	}

	public function edit_news(){
		$this->load->model('content_model', 'content');
		$id_news = $this->input->get('id_news');
		$data['news'] = $this->content->get_news($id_news);
		$data['_title'] = 'Edit News';

		$this->display('admin/form_news', $data);
	}

	public function get_img_news(){
		$id_news = $this->input->post('id_news');
		$this->load->model('content_model', 'content');
		$res = $this->content->get_news($id_news);

		echo json_encode($res);
	}

	public function hapus_news(){
		$this->load->model('content_model', 'content');
		$id_news = $this->input->get('id_news');
		$res = $this->content->delete_news($id_news);
		$data['_title'] = 'News List';

		redirect('input_news/news_list');

	}
}