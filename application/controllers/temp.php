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
		
		$this->load->view('upvote.html');
	}

}