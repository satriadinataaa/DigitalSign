<?php 

class Logout extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->session->sess_destroy();
		redirect('Auth/login');
	}

	public function index() {}
}