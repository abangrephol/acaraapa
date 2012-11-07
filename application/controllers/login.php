<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
    
     function __construct()
    {
        parent::__construct();

    }
    function index($error=''){
        if($error){$data['login_error']=$error;}else{$data['login_error']=$error;}
        $data['title'] = 'Login Page';
        $data['description'] ='';
        $data['keywords']='';
        $data['main_content'] = 'login';
        $this->load->view('includes/template',$data);
    }
    function login_act(){        
        if($this->input->post('submit') == "Daftar") { 
            redirect(base_url().'register');
        } else {
           $this->load->model('user_model');
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        if($this->form_validation->run()==false){
            $this->index();
        }else{redirect('site');} // do something with direct payment
        }
        
    }
}