<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct()
    { 
        parent::__construct(); 
        $this->load->model('Login_model','login_model');
    }

	public function index()
	{
		if($this->session->has_userdata('username'))
		{
    		redirect('home');
		}
		$data['open_modal']   = $data['create_error'] = $data['create_class'] = $data['login_error']  = $data['login_class']  = "";
		$this->load->view('login/index', $data);
	}

	public function submit()
	{
		$data['open_modal']   = $data['create_error'] = $data['create_class'] = $data['login_error']  = $data['login_class']  = "";

		$post = $this->input->post();
		if(isset($post['create_account'])) 
		{
			$username = $post['new_user'];
			$password = $post['new_pass'];

			if (empty($post['new_user']) || empty($post['new_pass'])) {
				$data['create_error'] = '<div class="alert alert-danger"><b><i class="fa fa-exclamation-triangle"></i> Please Fill Up The Form Properly! </b></div>';
				$data['create_class'] = "has-error";
				$data['open_modal'] = '<script type="text/javascript">
    				 $(window).on("load", function() {
        			 $("#CreateModal").modal("show");
        			 });
					</script>';
			}else{
				$registered = $this->login_model->register($username,$password);
				$data['login_error'] = !empty($registered) ? 
				'<div class="alert alert-success"><b>Account Created Successfully! <i class="fa fa-check"></i></b> </div>' : 
				'<div class="alert alert-danger"><b><i class="fa fa-exclamation-triangle"></i> System Error While creating Account</b> </div>';
			}
		}
		if(isset($post['login_account'])) 
		{
			$username  = $post['login_user'];
			$password  = $post['login_pass'];

			$login_account = $this->login_model->search_user($username,$password);
			if ((empty($username) || empty($password)) || empty($login_account) ) {
				$data['login_error'] = '<div class="alert alert-danger"><b><i class="fa fa-exclamation-triangle"></i> Invalid Username/Password! </b></div>';
				$data['login_class'] = "has-error";
			}else{
				$user_info = array(
					'username' => $login_account->username, 
					'password' => $login_account->password,
					'user_id'  => $login_account->id
				);
				$this->session->set_userdata($user_info);
				redirect('home');
			}
		}
		$this->load->view('login/index', $data);
	}
	public function logout() {
    	$user_info = array('username', 'password');
    	$this->session->unset_userdata($user_info);

    	redirect('login');
  	}

}
