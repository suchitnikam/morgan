<?php  
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Contactmail extends CI_Model
{ 
    function __construct() 
	{ 
        parent::__construct();
    } 
     
    /* 
     * Fetch slider data from the database 
     * @param id returns a single record if specified, otherwise all records 
     */ 
    public function getRows()
	{ 
        $this->db->select('id,full_name,email_id,subject,message,date');
        $this->db->from('contact_mail');         
		$this->db->order_by('date','desc'); 
		$query = $this->db->get(); 
		$result = $query->result_array(); 
      
        return !empty($result)?$result:false; 
    } 
     
    /* 
     * Insert file data into the database 
     * @param array the data for inserting into the table 
     */ 
    public function insert($data = array())
	{		
        $insert = $this->db->insert('contact_mail',$data); 		
        return $insert?true:false; 
    } 
	
	public function delete($data)
	{ 
		$d['id']=$data;
		return $this->db->delete('contact_mail',$d);
		// echo $this->db->last_query(); exit;
	}
}