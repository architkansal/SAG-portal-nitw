<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		// $this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->library('tank_auth');
		$this->load->dbutil();
	}

	function index()
	{
		if($this->tank_auth->is_logged_in())
		{
			echo('skjDFCGYF ');
			
			$this->load->view('FORMS/electrician.html');
		}
		else
	 	{
	 		echo('skjDFCGYF ');
			redirect('/auth/login/');
		}
	}

}