<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('user_model');
    }
    
    public function index()
    {
        $postedValues = getCleanValue($this->input->post());
		if(!empty($postedValues))
		{
			$this->load->library('form_validation');
            $this->form_validation->set_rules('user_name', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
			if($this->form_validation->run())
            {
				$fetchUserLogindetails = $this->user_model->fetchUserLogindetails($postedValues);

                if(count($fetchUserLogindetails) > 0)
                {
			
                    $logInFlag = true;
                    $sessionArr = array(
                                    'userid' => $fetchUserLogindetails->id,
                                    'username' => $fetchUserLogindetails->user_name,
                               );
                    $this->session->set_userdata($sessionArr);
					
                    redirect('admin/admin_home');
                    exit;					
                }
                else
                {
                    $data['invalidmsg'] = 'Incorrect user name or password.';
                }
				
			}
			// print_r($postedValues); exit;
		}
		
        
        $data['postedValues'] = $postedValues;
        $this->load->view('login',$data);
    }
    
    public function forgotpassword()
    {
        $postedValues = getCleanValue($this->input->post());
        
        if($postedValues > 0)
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email_id', 'Email ID', 'trim|required');
            
            if($this->form_validation->run())
            {
                $this->load->model('user_model');
                $fetchUserByEmail = $this->user_model->fetchUserByEmail($postedValues);
                
                if(count($fetchUserByEmail) > 0)
                {
                    if($fetchUserByEmail->forgot_password_flag == 'N')
                    {
                        if($fetchUserByEmail->forgot_password_key == NULL)
                        {
                            $postedValues['forgot_password_key'] = md5(($fetchUserByEmail->userid).date('YmdHis'));
                            $postedValues['userid'] = $fetchUserByEmail->userid;
                            $this->user_model->updateUniqueId($postedValues);
                        }
                        elseif($fetchUserByEmail->forgot_password_key)
                        {
                            $postedValues['forgot_password_key'] = $fetchUserByEmail->forgot_password_key;
                        }
                    }
                    elseif($fetchUserByEmail->forgot_password_flag == 'Y')
                    {
                        $postedValues['forgot_password_key'] = md5(($fetchUserByEmail->userid).date('YmdHis'));
                        $postedValues['userid'] = $fetchUserByEmail->userid;
                        $this->user_model->updateUniqueId($postedValues);
                        $postedValues['forgot_password_flag'] = 'N';
                        $this->user_model->updateForgotFlagByUserId($postedValues);
                    }
                    
                    //send mail to user to create password
                    $postedValues['name'] = ucwords($fetchUserByEmail->first_name." ".$fetchUserByEmail->last_name);
                    $postedValues['username'] = $fetchUserByEmail->user_name;
                    $params['params'] = $postedValues;
                    $this->load->library('email');
                    $config = array(
                                       'charset'=>'utf-8',
                                       'wordwrap'=> TRUE,
                                       'mailtype' => 'html'
                                   );

                    $this->email->initialize($config);
                    $this->email->from('lokesh.singh@alchemists-ark.com', 'Mahindra Rise');
                    $this->email->to($postedValues['email_id']);

                    $this->email->subject('Mahindra Rise Password Support');
                    $message = $this->load->view('email/forgotpassword',$params,TRUE);
                    $this->email->message($message);
                    $this->email->send();
                    $data['successmsg'] = 'success';
                }
                else
                {
                    $data['errormsg'] = 'Email address provided by you is not registered.';
                }
            }            
        }
        $this->load->view('/forgotpassword',$data);
    }
    
    public function resetpassword()
    {
        $postedValues = getCleanValue($this->input->post());
        $params['uid'] = (($postedValues['uid'])?$postedValues['uid']:$this->uri->segment(4));
        
        if($params['uid'])
        {
            $data['postedValues'] = $params;
            $this->load->model('user_model');
            $fetchUserByUniqueId = $this->user_model->fetchUserByUniqueId($params);
        }
        if(count($fetchUserByUniqueId) > 0)
        {
            if($fetchUserByUniqueId->forgot_password_flag == 'N')
            {
                if($postedValues)
                {
                    $this->load->library('form_validation');
                    $this->form_validation->set_rules('password', 'Password', 'trim|required|not_zero|min_length[6]|max_length[14]|chk_num_alpha|'.(($postedValues['cnfpassword'])?'matchpwd['.$postedValues['cnfpassword'].']':''));
                    $this->form_validation->set_rules('cnfpassword', 'Confirm Password', 'trim|required|not_zero');
                    if($this->form_validation->run())
                    {
                        $postedValues['userid'] = $fetchUserByUniqueId->userid;
                        $this->user_model->updatePasswordByUserId($postedValues);
                        $postedValues['forgot_password_flag'] = 'Y';
                        $this->user_model->updateForgotFlagByUserId($postedValues);
                        $data['successflag'] = true;
                    }
                }
            }
            elseif($fetchUserByUniqueId->forgot_password_flag == 'Y')
            {
                $data['linkexpired'] = true;
            }
        }
        else
        {
            $data['linkexpired'] = true;
        }
        $this->load->view('/createpassword',$data);
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/login');
        exit;
    }
}