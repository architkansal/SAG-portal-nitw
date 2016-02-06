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

    if(!$this->tank_auth->is_logged_in())
        redirect('/auth/login/');
  	$this->load->view('templates/header');
  	$this->load->view('admin/home');
  	$this->load->view('templates/footer');

  }

  function showlist($dept)
  {
  	$data['list']=$this->admin_model->showlist($dept);
  	$this->load->view('templates/header');
  	$this->load->view('list',$data);
  	$this->load->view('templates/footer');
    
  }

  function change_status()
  {
  	$this->admin_model->change_status();
  	$this->index();
  }

  // function fetch_complaints()
  // {
  //   $this->load->model('admin_model');
  //   $this->admin_model->get_complaints();
  // }

}