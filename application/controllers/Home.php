<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();        
        $this->load->model('file');
		$this->load->model('gallary');
    }
	
	public function index()
	{
		
		$data['files'] = $this->file->getRows(); 
		$data['gallary'] = $this->gallary->getRows();
		// print_r($data['files']); exit;
		$this->load->view('header');
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
}
