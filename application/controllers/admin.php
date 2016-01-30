<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{

  function __construct()
  {
  	parent::__construct();
  	$this->load->model('admin_model');
  }

  function index()
  {
  	$this->load->view('footer');
  	$this->load->view('home');
  	$this->load->view('footer');

  }

  function showlist($dept)
  {
  	$data['list']=$this->admin_model->showlist($dept);
  	$this->load->view('header');
  	$this->load->view('list',$data);
  	$this->load->view('footer');
    
  }

  function change_status()
  {
  	$this->admin_model->change_status();
  	$this->index();
  }

  function fetch_complaints()
  {
    $this->load->model('admin_model');
    $this->admin_model->get_complaints();
  }

}