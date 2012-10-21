<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    
    function index($error=''){
        $data['title'] = 'User Page';
        $data['description'] ='';
        $data['keywords']='';
        $data['main_content'] = 'user/login';
        $this->load->view('includes/template',$data);
    }
}