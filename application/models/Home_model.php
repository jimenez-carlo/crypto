<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

Class Home_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('Logs_model','logs');
    }
    public function get_user($id = null){
    	if (!empty($id) || !empty($password)) {
    		$result = $this->db->query("SELECT * from tbl_users_info where user_id = '$id'");
    		return $result->row();  	
    	}else{
    		return false;
    	}
    }
    public function update_account()
    {
    	$post = $this->input->post();
    	$data = array(
                    'first_name'  => $post['first_name'],
                    'last_name'   => $post['last_name'],
                    'tag'         => $post['tag_line'],
                    'email'       => $post['email'],
                    'phone'       => $post['phone'],
                    'address'     => $post['address']
        );
        $this->db->where('user_id', $this->session->user_id);
        $this->db->update('tbl_users_info', $data);
    }
    public function get_posts($id){
        $result = $this->db->query("SELECT * from tbl_posts a inner join tbl_users_info b on b.user_id = a.posted_by_id where a.account_id = '$id' order by  a.created_date desc");
        return $result->result_array(); 
    }
    public function create_post(){
        $post = $this->input->post();
        if (!empty($post['post_text'])) {
            $insert = array(
            'post'         =>  $post['post_text'],
            'posted_by_id' =>  $this->session->user_id,
            'account_id'   =>  $this->session->user_id,
            'created_date' =>  date('Y-m-d H:i:s')
            );
            $this->db->insert('tbl_posts', $insert);
        }
    }
}
?>
