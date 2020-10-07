<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
 
class Upload_Files extends CI_Controller { 
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
			$this->load->model('gallary'); 		
        }
        
    }
    
    public function index()
    {
        $data = $this->data;
		
		// $data = array(); 
        $errorUploadType = $statusMsg = ''; 
         
        // If file upload form submitted 
        if($this->input->post('fileSubmit')){ 
        
            // If files are selected to upload 
            if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){ 
                $filesCount = count($_FILES['files']['name']); 
                for($i = 0; $i < $filesCount; $i++){ 
                    $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                     
                    // File upload configuration 
                    $uploadPath = 'uploads/files/gallary'; 
                    $config['upload_path'] = $uploadPath; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    //$config['max_size']    = '100'; 
                    //$config['max_width'] = '1024'; 
                    //$config['max_height'] = '768'; 
                     
                    // Load and initialize upload library 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                     
                    // Upload file to server 
                    if($this->upload->do_upload('file')){ 
                        // Uploaded file data 
                        $fileData = $this->upload->data(); 
                        $uploadData[$i]['file_name'] = $fileData['file_name']; 
                        $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s"); 
                    }else{  
                        $errorUploadType .= $_FILES['file']['name'].' | ';  
                    } 
                } 
                 
                $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 
                if(!empty($uploadData)){ 
                    // Insert files data into the database 
                    $insert = $this->gallary->insert($uploadData); 
                     
                    // Upload status message 
					if($insert)
					{
						$this->session->set_flashdata('flagSuccess', "Files uploaded successfully!");
					}
					else
					{
						$errorUploadType='Some problem occurred, please try again.';
					}
					
					if($errorUploadType)
					{
						$this->session->set_flashdata('flagError', $errorUploadType);
					}
                    
					
                }else{ 
                    $statusMsg = "Sorry, there was an error uploading your file.".$errorUploadType; 
                } 
            }else{ 
                $statusMsg = 'Please select image files to upload.'; 
            } 
        } 
        if($statusMsg)
		{
			$this->session->set_flashdata('flagError', $statusMsg);
		}
        // Get files data from the database 
        $data['files'] = $this->gallary->getRows(); 
         
        // Pass the files data to view 
        // $data['statusMsg'] = $statusMsg;
				
        // $this->load->view('upload_files', $data); 
		
        
        $data['activetab'] = 'gallary_image';
        $data['mainLayout'] = $this->load->view('admin/upload_files',$data,true);
        $this->load->view('admin/layout',$data);
    } 
	
	public function delete()
	{		
		$params = getParam();		
		if($params['id'])
		{
			$uploadPath = 'uploads/files/gallary'.$params['imgname'].''; 		
			$delet_succ = $this->gallary->delete($params['id']);
			
			if($delet_succ > 0)
			{
				unlink($uploadPath); 
				$this->session->set_flashdata('flagSuccess', "Image Delete successfully.");
				
				$url = 'admin/upload_files/index';
				echo '
				<script>
				window.location.href = "'.base_url().'index.php?/'.$url.'";
				</script>
				';
			}			
		}
	}
 
}