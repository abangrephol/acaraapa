<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(APPPATH.'controllers/data/datakota.php');
class Register extends Datakota {
    private static $datak;
     function __construct()
    {
        parent::__construct();      
    }    
    function index(){ 
                  
        $data['list_provinsi'] = $this->grab_prov();
        $data['list_kota'] = array('' => 'Tidak ada data');
        $data['title'] = 'Registration Page';
        $data['description'] ='';
        $data['keywords']='';
        $data['main_content'] = 'register/register';
        $this->load->view('includes/template',$data);
    } 
    function registration(){ 
          
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
        $fPro="";
        if($this->session->userdata('IDUSER')){
            //$profilData = new Model\User();
            $dPro=Model\User::find($this->session->userdata('IDUSER'));
            $fPro=$dPro->FOTO;
        }
        $data['foto'] = $fPro;
        $data['title'] = 'Profil Page';
        $data['description'] ='';
        $data['keywords']='';
        $data['main_content'] = 'register/profil';
        $this->load->view('includes/template',$data);
    }
    function favorit(){
        $dKat=Model\Kategori::all();
        $data['kategori']=$dKat;
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
        //$this->load->model('User_model');
        $this->form_validation->set_rules('username','Username','trim|required|min_length[6]|unique[user.USERNAME]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[32]');
        $this->form_validation->set_rules('password2','Password Confirmation','trim|required|matches[password]');
        $this->form_validation->set_rules('email','Email Address','trim|required|unique[user.EMAIL]');
        $this->form_validation->set_rules('fullname','Fullname','trim|required');
        
        
        if($this->form_validation->run()==false){            
            $this->index();
        }else{
            $activationkey='';
            $length=32;
            $characters = '1234567890qwertyuiopasdfghjklzxm';
            for($p=0;$p<$length;$p++){$activationkey .=$characters[mt_rand(0, strlen($characters)-1)];}
            $activationkey;            
            $this->create($activationkey);
            redirect(base_url().'register/profil');
            
            
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
    //session_start();
    //    $user=$this->input->post('username');
    //    session_register('user');
    public function create($activationkey)
        {
        // create a new blog object
        $post = new Model\User();

        /*
         * Set default blog information.  Note we set the value to 1
         * here which is a bit of a hack.  In a real application you would
         * get this value from the session or from a form using something
         * like:
         *
         * $post->title = $this->session->userdata('user_id');
         */
        $post->USERNAME = $this->input->post('username'); // This is just to get the application working
        $post->PASSWORD = md5($this->input->post('password'));
        $post->EMAIL = $this->input->post('email');
        $post->FULLNAME = $this->input->post('fullname');
        $post->ACTIVATION = $activationkey;
        $post->GENDER = $this->input->post('gender');
        $post->IDKOTA = $this->input->post('kota');
        $post->IDPROVINSI = $this->input->post('provinsi');
        // save the blog post to the database
        $post->save();
        $this->load->library('session');
        // get the last id
        $userId = Model\User::last_created();
        $newdata = array(
                   'IDUSER'  => $userId->IDUSER
                   );
        $this->session->set_userdata($newdata);
        //$this->session->set_userdata($array);
        //return $userId;
        // redirect to the edit screen
        //redirect('blog/edit/');
        }
    /*public function edit($id = 0)
    {
        $data['post'] = Model\User::find($id);

        // if we couldn't find a post, redirect
        if (is_null($data['post']))
        {
                show_404();
                return;
        }

        // check if we have posted data - i.e. hit save
        if ($_POST)
        {
                // parse the post data
                $data['post']->title = $this->input->post('title');
                $data['post']->body = $this->input->post('body');

                // try to save the record, running inbuilt validation
                if ($data['post']->save(TRUE))
                {
                        // validation successful
                        $this->session->set_flashdata('success','Successfully saved record');
                        redirect('blog/view/'.$data['post']->id);
                }
        }

        // validation unsuccessful or no data posted, show the form
        $data['content'] = $this->load->view('edit_post', $data, TRUE);
        $this->load->view('main_template', $data);
    }*/
    function add_fav(){
        $kat = new Model\Kategorifavorit();
        //echo "wa";
        $data = implode(",",$this->input->post('fav'));
        $kat->IDUSER = $this->session->userdata('IDUSER');
        $kat->FAVORIT = $data;
        $kat->save();
        redirect(base_url().'register/selesai');
    }
}