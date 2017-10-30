<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->helper(array('url', 'html'));
		// $this->load->library('session');
	}

	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('login_page');
  		//$this->loginPage();
  		//redirect('login');
  		// $data['header_title'] = "Exercise 1: Log In";
		$this->load->view('login_page');
	}

	public function signupPage()
	{
		// $data['header_title'] = "Exercise 1: Sign Up";
		$this->load->view('signup_page');
	}

	public function loginPage()
	{
		// $data['header_title'] = "Exercise 1: Log In";
		$this->load->view('login_page');
	}

	public function logoutPage(){
		$data = array('login' => '', 'uname' => '', 'uid' => ''); //no need
       	$this->session->unset_userdata($data); //no need
        $this->session->sess_destroy();
  		redirect('Welcome/index');
	}
}
