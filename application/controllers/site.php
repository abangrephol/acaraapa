<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
    
    function index($error=''){
        $data['title'] = 'Home Page';
        $data['description'] ='';
        $data['keywords']='';
        $data['main_content'] = 'site/index';
        $this->load->view('includes/template',$data);
    }
    
}