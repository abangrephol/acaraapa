<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datakota extends CI_Controller {
    
     function __construct()
    {
        parent::__construct();
        
    }
        
    function grab_kota()
    {
        $this->load->model('data/MDatakota');
            $result = $this->MDatakota->get_kota($this->input->post('provinsi'));
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
    function grab_prov(){
        $this->load->model('data/MDatakota');
        $ambil_provinsi = $this->MDatakota->get_provinsi();
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
        return $data['list_provinsi'];
    }
}