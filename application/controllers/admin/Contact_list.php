<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
 
class Contact_list extends CI_Controller 
{ 
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
			$this->load->model('Contactmail');		
        }
        
    }
    
    public function index()
    {
        $data = $this->data;
         
        
        $data['contact_list'] = $this->Contactmail->getRows(); 
        
        $data['activetab'] = 'contact_list';
        $data['mainLayout'] = $this->load->view('admin/contact_list',$data,true);
        $this->load->view('admin/layout',$data);
    } 
	
	public function delete()
	{		
		$params = getParam();		
		if($params['id'])
		{
			$delet_succ = $this->Contactmail->delete($params['id']);
			
			if($delet_succ > 0)
			{
				unlink($uploadPath); 
				$this->session->set_flashdata('contact_listflagSuccess', "Contact Delete successfully.");
				
				$url = 'admin/contact_list/index';
				echo '
				<script>
				window.location.href = "'.base_url().'index.php?/'.$url.'";
				</script>
				';
			}			
		}
	}
 
}