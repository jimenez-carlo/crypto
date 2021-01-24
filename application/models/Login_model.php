<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

Class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('Logs_model','logs');
    }
    public function search_user($username = null, $password = null){
    	if (!empty($username) || !empty($password)) {
    		$result = $this->db->query("SELECT username,password,id from tbl_users where username = '$username' and password = '$password'");
    		return $result->row();  	
    	}else{
    		return false;
    	}
    }
    public function register($username = null, $password = null){
    	if (!empty($username) || !empty($password)) {
    		$insert = array(
            'username' =>  $username,
            'password' =>  $password,
            'created_date' => date('Y-m-d')
        	);
        	$this->db->insert('tbl_users', $insert);
        	$id = $this->db->insert_id();
        	$this->register_info($id);
        	return $id;
    	}else{
    		return false;
    	}	
    }
    public function register_info($id = null){
        if (!empty($id)) {
            $insert = array(
            'user_id' =>  $id
            );
            $this->db->insert('tbl_users_info', $insert);
        }else{
            return false;
        }   
    }
    
}
?>
