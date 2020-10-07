<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();   
		$this->load->library('form_validation');
		$this->load->model('Contactmail'); 	
    }
	
	public function index()
	{
		$postedValues = getCleanValue($this->input->post());
		// print_r($postedValues);
		if($postedValues)
		{
			// Form field validation rules
            $this->form_validation->set_rules('first_name', 'first_name', 'required');
			$this->form_validation->set_rules('last_name', 'last_name', 'required');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('subject', 'subject', 'required');
            $this->form_validation->set_rules('message', 'message', 'required');
            
            // Validate submitted form data
            if($this->form_validation->run() == true)
			{
				$full_name = $postedValues['first_name'].' '.$postedValues['last_name'];
				 // Define email data
                $mailData = array(
                    'full_name' => $full_name,
                    'email_id' => $postedValues['email'],
                    'subject' => $postedValues['subject'],
                    'message' => $postedValues['message'],
					'date' => date("Y-m-d H:i:s")
                );
				// Insert contact mail data into the database 
				$insert = $this->Contactmail->insert($mailData); 
				if($insert)
				{
					
					$to = 'suchitnikam.shiv@gmail.com';
					$subject = 'Contact Request Submitted by '.$mailData['full_name'].' Subject:'.$mailData['subject'];
					$message = $mailData['message']; 
					$headers = 'From:'.$mailData['email_id'];
					$mail = mail($to,$subject,$message,$headers);
					
					$this->session->set_flashdata('flagSuccessContact', "Your contact request has been submitted successfully.!");
					
					// Check email sending status
					if($mail)
					{
						$this->session->set_flashdata('flagSuccessContact', "Your contact request has been submitted successfully.!");                   
					}
					else
					{
						$this->session->set_flashdata('flagErrorContact', "Some problems occured, please try again.");
					}
				}
				else
				{
					$this->session->set_flashdata('flagErrorContact', "Some problems occured, please try again.");
				}
				
			}
		}
		
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}	
}
