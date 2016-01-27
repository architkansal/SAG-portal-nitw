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
		if($this->tank_auth->is_logged_in())
		{
			$this->load->model('user_model');
			$group_id=$this->user_model->group_id();
			// echo $group_id;
			if($group_id==0)
				$this->load->view('rahul/login.html');
			else if($group_id==1)
				$this->load->view('rahul/admin.html');
		}
		else
	 	{
			redirect('/auth/login/');
		}
	
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
		$this->load->view('rahul/message.html');
		
	}

}
