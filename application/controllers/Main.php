<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	function __construct()
    { 
        parent::__construct(); 
        //$this->load->model('Form_model','form_model');
        
    }

	public function attributes()
	{
		return array(
        'username' => array('placeholder' => 'Username', 'autocomplete' => 'off', 'class' => 'form-control placeholder-nofix'),
		'password' => array('placeholder' => 'Password', 'autocomplete' => 'off', 'class' => 'form-control placeholder-nofix'));
	}

}
