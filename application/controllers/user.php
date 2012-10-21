<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    
    function index($error=''){
        if($error){$data['login_error']=$error;}else{$data['login_error']=$error;}
        $data['title'] = 'User Page';
        $data['description'] ='';
        $data['keywords']='';
        $data['main_content'] = 'user/login';
        $this->load->view('includes/template',$data);
    }
    function login_act(){
        $this->load->model('user_model');
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        if($this->form_validation->run()==false){
            $this->index();
        }else{redirect('site/index');}
          
    }
}