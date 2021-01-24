<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
	function __construct()
    { 
        parent::__construct();
        $this->load->model('Home_model','home_model'); 
    }

	public function index()
	{
		if(!$this->session->has_userdata('username'))
		{
    		redirect('login');
		}
		$user_id = $this->session->user_id;
		$data['open_tab'] = $data['update_message'] = "";
		$data['account_id'] = $user_id;
		$data['account'] = $this->home_model->get_user($user_id);
		$data['post']    = $this->home_model->get_posts($user_id);

		$this->template('home/index', $data);
	}
	public function submit(){
		$data['open_tab'] = $data['update_message'] = $data['account_id'] = "";
		$post = $this->input->post();
		if(isset($post['update_profile'])) 
		{
			$this->home_model->update_account();
			//$data['open_tab'] = '$( document ).ready(function() { $(\'a[href="#edit"]\').click(); });';
			$data['update_message'] = '<div class="alert alert-success"><b>Account Updated Successfully! <i class="fa fa-check"></i></b> </div>';
		}
		if(isset($post['create_post'])) 
		{
			$this->home_model->create_post();
			//$data['open_tab'] = '$( document ).ready(function() { $(\'a[href="#overview"]\').click(); });';
		}
		$data['account'] = $this->home_model->get_user($this->session->user_id);
		$data['post']    = $this->home_model->get_posts($this->session->user_id);
		$this->template('home/index', $data);
	}

}
