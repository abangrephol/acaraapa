<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    
     function __construct()
    {
        parent::__construct();
        
    }
    
    function index(){
        if($this->session->userdata('IDUSER')){
            //$profilData = new Model\User();
            $dPro=Model\User::find($this->session->userdata('IDUSER'));           
            $data['thumb']= base_url()."duser/images-s/".$dPro->FOTO.".jpg";
            $data['username'] = $dPro->FULLNAME;
        }
        $data['title'] = 'Registration Page';
        $data['description'] ='';
        $data['keywords']='';
        $data['main_content'] = 'user/index';
        $this->load->view('includes/template',$data);
    }
    
    
}