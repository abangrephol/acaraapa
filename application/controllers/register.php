<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(APPPATH.'controllers/data/datakota.php');
class Register extends CI_Controller {
    
     function __construct()
    {
        parent::__construct();
             
    }
    function index(){    
        $ext_class = new Datakota();    
        $data['list_provinsi'] = $ext_class->grab_prov();
        $data['list_kota'] = array('' => 'Tidak ada data');
        $data['title'] = 'Registration Page';
        $data['description'] ='';
        $data['keywords']='';
        $data['main_content'] = 'register/register';
        $this->load->view('includes/template',$data);
    } 
    function profil(){
        $data['title'] = 'Profil Page';
        $data['description'] ='';
        $data['keywords']='';
        $data['main_content'] = 'register/profil';
        $this->load->view('includes/template',$data);
    }
    function favorit(){
        $data['title'] = 'favorit Page';
        $data['description'] ='';
        $data['keywords']='';
        $data['main_content'] = 'register/favorit';
        $this->load->view('includes/template',$data);
    }
    function selesai(){
        $data['title'] = 'selesai Page';
        $data['description'] ='';
        $data['keywords']='';
        $data['main_content'] = 'register/selesai';
        $this->load->view('includes/template',$data);
    }    
    function create_member(){
        $this->load->model('User_model');
        $this->form_validation->set_rules('username','Username','trim|required|min_length[6]|unique[user.username]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[32]');
        $this->form_validation->set_rules('password2','Password Confirmation','trim|required|matches[password]');
        $this->form_validation->set_rules('email','Email Address','trim|required|unique[user.email]');
        $this->form_validation->set_rules('fullname','Fullname','trim|required');
        
        if($this->form_validation->run()==false){
            $this->registration();
        }else{
            $activationkey='';
            $length=32;
            $characters = '1234567890qwertyuiopasdfghjklzxm';
            for($p=0;$p<$length;$p++){$activationkey .=$characters[mt_rand(0, strlen($characters)-1)];}
            $activationkey;            
            $this->User_model->insert_member($activationkey);
            redirect('echo base_url();login');
           /*
            $to = $this->input->post('email');
            $from='no_reply@noobonline.com';
            $name=$this->input->post('fullname');
            $subject='registration noobonline';
            $message='test a link';
            $mail_sent=$this->User_model->email_send($to,$from,$name,$subject,$message);
            if($mail_sent){
                $this->User_model->create_member($activationkey);
                $this->signup_success($to);
            }else{echo 'mail error';}*/
        }
    }
    
}