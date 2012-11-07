<?php 
class User_model extends CI_Model {
    
    function __construct()
    {
       parent ::__construct();       
    }
    function index(){
        
    }
    
    /*function insert_member($activationkey){
        $new_member_insert_data=array(
        'USERNAME'=>$this->input->post('username'),
        'PASSWORD'=>md5($this->input->post('password')),
        'EMAIL'=>$this->input->post('email'),
        'FULLNAME'=>$this->input->post('fullname'),
        'ACTIVATION'=>$activationkey,
        'GENDER'=>$this->input->post('gender'),
        'IDPROVINSI'=>$this->input->post('provinsi'),
        'IDKOTA'=>$this->input->post('kota')
        );
        $insert = $this->db->insert('user',$new_member_insert_data);
        session_start();
        $user=$this->input->post('username');
        session_register('user');
        return $insert;
    }*/
        
}
