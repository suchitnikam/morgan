<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();   
		$this->load->library('form_validation');
		$this->load->model('Contactmail'); 	
    }
	
	public function index()
	{		
		$this->load->view('header');
		$this->load->view('about_us');
		$this->load->view('footer');
	}	
}
