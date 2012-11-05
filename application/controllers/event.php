<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {
    
     function __construct()
    {
        parent::__construct();
        
    }
    public function index()
        {
                // load all of our posts
                $data['posts'] = Model\Acara::all();

                // build our blog table
                $data['content'] = $this->load->view('event/event_list', $data, TRUE);

                // show the main template
                //$this->load->view('includes/template', $data);
                $data['title'] = 'View Page';
                $data['description'] ='';
                $data['keywords']='';
                $data['main_content'] = 'event/event_list';
                $this->load->view('includes/template',$data);
        }
    public function view($id = 0)
        {
            // start by trying to find a blog object
            // with our passed ID.  If no object is
            // found, GAS just returns NULL
            $data['post'] = Model\Acara::find($id);

            // check our blog is not null
            if (is_null($data['post']))
            {
                show_404();
                return;
            }

            // load the blog post table
            //$data['content'] = $this->load->view('user/view_one_post', $data, TRUE);

            // view the master template
        $this->load->view('includes/template', $data);
        }
}    