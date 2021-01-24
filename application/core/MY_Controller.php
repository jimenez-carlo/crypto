<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

  private static $header   = array();
  private static $top_nav  = array();
  private static $side_bar = array();
  private static $footer   = array();

  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('form');
    //$this->load->model('Home_model','home_model'); 
  }

  public function header_data($key, $data)
  {
    self::$header[$key] = $data;
  }

  public function top_data($key, $data)
  {
    self::$top_nav[$key] = $data;
  }

  public function side_data($key, $data)
  {
    self::$side_bar[$key] = $data;
  }

  public function footer_data($key, $data)
  {
    self::$footer[$key] = $data;
  }

  public function access($page="")
  {
    if($this->session->has_userdata('username')) {
      $grant_access = true;

      // 			foreach ($_SESSION['page_access'] as $access) {
      // 				if($access['page']==$page && $access['position']==$_SESSION['position']) {
      // 					$grant_access = true;

      // 				}
      // 			}
      // // print_r($_SESSION['page_access']);
      // 			if(!$grant_access) {
      // 				redirect('no_access');
      // 			}
    }
    else {
      redirect('login');
    }
  }

  public function template($page, $data = array())
  {
    $this->load->view('template/header',   self::$header);
    $this->load->view('template/top-nav',  self::$top_nav);
    $this->load->view('template/side-bar', $data);
    $this->load->view($page, $data);
    $this->load->view('template/footer',   self::$footer);

  }
}
