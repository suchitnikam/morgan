<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        if(!$this->session->userdata['userid'])
        {
            $this->load->view('access_denied');
            exit;
        }
        else
        {
            $this->data['name'] = $this->session->userdata['username'];
        }
        
    }
    
    public function index()
    {
        $data = $this->data;
		
        $data['title'] = 'Welcome';
        $data['activetab'] = '';
        $data['mainLayout'] = $this->load->view('admin/admin_home',$data,true);
        $this->load->view('admin/layout',$data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */