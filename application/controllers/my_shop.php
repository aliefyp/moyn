<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_shop extends MY_Controller {
	
	public function index(){
		$data['_title'] = 'Input My Shop Item';
		$this->add_js('jquery.priceformat.js');
		$this->add_js('jquery.priceformat.min.js');

		if($this->session->has_userdata('upload')){
			if($this->session->userdata('upload'))
				$data['notif'] = array('type' => 'success', 'message' => 'Data berhasil disimpan');
			else
				$data['notif'] = array('type' => 'success', 'message' => 'Data gagal disimpan');
			$this->session->unset_userdata('upload');
		}

		$this->display('admin/form_shop', $data);
	}

	public function submit_shop(){
		if($this->input->post()){
			$item_name 			= $this->input->post('item_name');
			$item_desc 			= $this->input->post('item_desc');
			$item_status 		= $this->input->post('item_status');
			$item_price 		= $this->input->post('item_price');

			$data_input = array('name_item' => $item_name,
								'deskripsi_item' => $item_desc,
								'active_item' => $item_status,
								'price_item' => str_replace(".", '', $item_price),
								'created_at' => date('Y-m-d H:i:s'),
								'created_by' => $this->session->userdata('username'));

			$this->load->model('content_model', 'content');

			if($this->content->save_content($data_input, 'shop_item')){
				$id = $this->db->insert_id();
				$res = $this->upload_images($id, 'img_shop_item');
				$this->session->set_userdata('upload', $res);
				redirect('my_shop');
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
            			$fileData 						= $this->upload->data();
	                    $uploadData[$i]['id_item'] 		= $id;
	                    $uploadData[$i]['url_img_item'] = 'upload/'.$fileData['file_name'];
	                    $uploadData[$i]['created_at'] 	= date('Y-m-d H:i:s');
	                    $uploadData[$i]['created_by'] 	= $this->session->userdata('username');
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

	public function shop_list(){
		$data['_title'] = 'My Shop Items List';
		$this->load->model('content_model', 'content');

		$data['content'] = $this->content->get_content('shop_item');
		$this->display('admin/shop_list', $data);
	}
}