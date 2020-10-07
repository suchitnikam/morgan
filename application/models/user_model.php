<?php
class User_model extends CI_Model 
{ 
    public function __construct()
    {
        $this->load->database();
    }
	
	/**
     * @param <type> $data
     * @return <type> obj
     * @author Suchit
     * Fetch user data by username and password
     */
    function fetchUserLogindetails($data = array())
    {
        $this->db->select('id, user_name');        
        $this->db->where('user_name', $data['user_name']);
        $this->db->where('password ', $data['password']);
        $this->db->where('active', 'Y');        
        $query = $this->db->get('user');
        // print_r($this->db->last_query()); exit;
        if($query->num_rows() > 0)
        {
            return $query->row();
        }
    }
    
}