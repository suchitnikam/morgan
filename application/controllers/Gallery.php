<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('gallary');
    }
	
	public function index()
	{
		$data['gallary'] = $this->gallary->getRows();
		// print_r($data['files']); exit;
		$this->load->view('header');
		$this->load->view('gallary',$data);
		$this->load->view('footer');
	}
}
