<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Controller
{

  function __construct()
  {
  	parent::__construct();
  }


  function reg_complaint()
  {
    //$data['sname'] =$this->input->post('sname');
    $data['userid']='811443';
    $data['hostel'] =$this->input->post('hostel');
    $data['room'] =$this->input->post('room_no');
    $data['mobile'] =$this->input->post('contact');
    $data['preftime'] =$this->input->post('usr_time');
    $data['hcdid']=$_GET['hcdid'];
    $data['status']=0;
    $this->db->insert('complaint',$data);
    
    $data1['details']=$this->input->post('description');
    $data1['hcdid']=$_GET['hcdid'];
    $data1['details']=$this->input->post('description');

  }

}