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
    function registration(){
        $data['title'] = 'Registration Page';
        $data['description'] ='';
        $data['keywords']='';
        $data['main_content'] = 'user/registration';
        $this->load->view('includes/template',$data);
    }
    function create_member(){
        $this->form_validation->set_rules('username','Username','trim|required|min_length[6]|unique[user.username]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[32]');
        $this->form_validation->set_rules('password2','Password Confirmation','trim|required|matches[password]');
        $this->form_validation->set_rules('email','Email Address','trim|required|valid_email|unique[user.email]');
        $this->form_validation->set_rules('fullname','Fullname','trim|required');
        
        if($this->form_validation->run()==false){
            $this->registration();
        }else{
            $activationkey='';
            $length=32;
            $character = '1234567890qwertyuiopasdfghjklzxcvbnm';
            for($p=0;$p<$length;$p++){$activationkey .=$character[mt_rand(0, strlen($character))];}
            $to = $this->input->post('email');
            $from='no_reply@noobonline.com';
            $name=$this->input->post('fullname');
            $subject='registration noobonline';
            $message='test a link';
            $mail_sent=$this->User_model->email_send($to,$from,$name,$subject,$message);
            if($mail_sent){
                $this->User_model->create_member($activationkey);
                $this->signup_success($to);
            }else{echo 'mail error';}
        }
    }
    
}