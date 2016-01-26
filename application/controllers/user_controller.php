<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{
		// $data['user_id'] = $this->tank_auth->get_user_id();
		$this->load->view('rahul/login.html');

	}

	function electrician()
	{
		$this->load->view('rahul/electrician.html');
	}

	function carpenter()
	{
		$this->load->view('rahul/carpenter.html');
	}

	function plumber()
	{
		$this->load->view('rahul/plumber.html');
	}

	function lan()
	{
		$this->load->view('rahul/lan.html');
	}

	function hostelg()
	{
		$this->load->view('rahul/hostelg.html');
	}

	function messg()
	{
		$this->load->view('rahul/messg.html');
	}

	function submit_complaint()   ///complaint form submit
	{
		$this->load->model('user_model');
		$this->user_model->reg_complaint();
		
	}

}
