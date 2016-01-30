<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Controller
{

  function __construct()
  {
  	parent::__construct();
    $this->load->helper('url');
    $this->load->library('tank_auth');
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
  
  function get_complaints($hcdid)
  {
    $q=0;
    $wh="'complaint.hcdid'=$hcdid AND'complaint.status'=$q,  AND 'complaint.user_id'='users.id'";
    $this->db->select('user_id','cid','username','name')
    ->from('complaint','users')
    ->where( $wh );
    $grp=$this->db->get_where();
    $res=$grp->result_array();
    print_r($res);
     return $res;

  }


}