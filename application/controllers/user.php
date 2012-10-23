<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    
     function __construct()
    {
        parent::__construct();
        
    }
    
    function login($error=''){
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
        $this->load->model('User_model');
        $ambil_provinsi = $this->User_model->get_provinsi();
        if(is_array($ambil_provinsi))
        {
            
            foreach ($ambil_provinsi as $barisprovinsi)
            {
                $list_provinsi[$barisprovinsi->IDPROVINSI]= $barisprovinsi->NAMAPROVINSI;
            }

            $data['list_provinsi'] = $list_provinsi;
        }
        else
        {
            $data['list_provinsi'] = array('' => 'Tidak ada data');
        }
        //echo $data['list_provinsi'];
        
        $data['list_kota'] = array('' => 'Tidak ada data');
        $data['title'] = 'Registration Page';
        $data['description'] ='';
        $data['keywords']='';
        $data['main_content'] = 'user/registration';
        $this->load->view('includes/template',$data);
    }
    function grab_kota()
    {
        $this->load->model('User_model');
            $result = $this->User_model->get_kota($this->input->post('provinsi'));
            if(is_array($result))
            {
                // jika hasil query array maka looping hasil query
                echo $result;
                foreach ($result as $row)
                {
                    echo '<option value="'.$row->IDKOTA.'">'.$row->NAMAKOTA.'</option>';
                }
            }
            else
            {
                // tampilkan jika data hasil query kosong
                echo '<option value="">Tidak ada data</option>';
            }
        
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
            redirect('echo base_url();user/login');
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