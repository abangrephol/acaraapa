<?php 
class User_model extends CI_Model {
    
    function __construct()
    {
       parent ::__construct();       
    }
    function index(){
        
    }
    function get_provinsi()
    {
        $this->db->order_by("NAMAPROVINSI", "asc");
        $query = $this->db->get('provinsi');
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    }
 
    // function untuk mendapatkan data untuk dropdown kota, sesuai $id provinsi
    function get_kota($id)
    {

        $this->db->select('*');
        $this->db->order_by("NAMAKOTA", "asc");
        $this->db->from('kota');
       
        $this->db->where('kota.IDPROVINSI', $id);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    }
    function insert_member($activationkey){
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
        return $insert;
    }
        
}
