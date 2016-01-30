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
  
  function get_complaints($hcdid) ///must be solved
  {
    $q=1;
    // $this->db->select('username');
    // $this->db->from('users');
    // $this->db->where('id IN ');

    $this->db->select('complaint.user_id,complaint.cid,complaint.status,users.name');
    $this->db->from('complaint,users');
    $this->db->where('complaint.hcdid',$hcdid);
    $this->db->where('complaint.status',!$q);
    //$this->db->where('complaint.user_id','users.id');
    //$this->db->where('complaint.user_id'='users.id');
    $grp=$this->db->get();
    $res=$grp->result_array();
    //print_r($res);
     return $res;

  }

  function get_c_details($cid)
  {
    //echo $cid;
    $this->db->select('cid,user_id,date,hcdid,preftime,room,hostel,mobile,details')
             ->from('complaint')
             ->where('cid',$cid);
    $query=$this->db->get();
    //print_r($query->result_array());
    return($query->result_array());
  }


   function status_change($cid,$status)
   {
    $this->db->where('cid',$cid)
            ->update('complaint',array('status'=>$status));

   }
}