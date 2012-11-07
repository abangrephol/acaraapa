<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//$this->load->helper(array('form', 'url'));
        $this->load->helper('date');
	}

	function index()
	{
		$this->load->view('register/profil', array('error' => ' ' ));
        $data['title'] = 'Upload Page';
        $data['description'] ='';
        $data['keywords']='';
        $data['main_content'] = 'register/profil';
        $this->load->view('includes/template',$data);
	}

	function do_upload()
    {
        
        
		$config['upload_path'] = './duser/images/';        
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
        $config['file_name'] = 'foto'.now();
		$this->load->library('upload', $config);
        
        

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('register/profil', $error);
		}
		else
		{
            $user = Model\User::find($this->session->userdata('IDUSER'));
            if($user->FOTO!=null){
                    unlink('./duser/images-s/'.$user->FOTO.".jpg");
                    unlink('./duser/images/'.$user->FOTO.".jpg");
            }
			$data = array('upload_data' => $this->upload->data());
            $uploaddata = $this->upload->data();
            
            
            // clear config array
            $config = array();
            
            // create resized image
            $newimagename = 'foto'.now();
            
            $config['image_library'] = 'GD2';
            $config['source_image']	= $uploaddata['full_path'];
            $config['new_image'] = './duser/images-s/';
            $config['file_name'] = $newimagename;
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = true;
            $config['width'] = '75' ;
            $config['height'] = '75' ;
            
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            
            $this->upload->data();
            $user = Model\User::find($this->session->userdata('IDUSER'));
            //echo $config['source_image']	= $uploaddata['full_path'];
            $user->FOTO = $newimagename;
            $user->save(true);
            
            //rename($uploaddata['full_path'],'./duser/images-s/'.$newimagename);
            //$this->load->view('upload_success', $data);
		}
        
        redirect(base_url().'register/profil');
	}
}
?>