<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Controller
{

  function __construct()
  {
  	parent::__construct();
  }


  function showlist($dept)
  {
    $query=$this->db->select('user_id,room,hostel,preftime,mobile,status')
             ->from('complaint')
             ->where('hcdid',$dept);

             return($query->result());


  }

  function change_status()
  {
  	$cid=$this->input->post('cid');
  	$status=$this->input->post('status');
    $data['status']=$status;

    $this->db->insert('complaint',$data);

  }