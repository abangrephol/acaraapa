<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MDatakota extends CI_Model {
    
    function __construct()
    {
       parent ::__construct();       
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
}