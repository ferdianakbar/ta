<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
		{
		parent::__construct();
		// check_login($this->session->userdata('logged_in'));
		}
		

	public function index()
	{
		$this->load->view('access/login');
	}
}
