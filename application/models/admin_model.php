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
    $q=1;
    
    $this->db->select('complaint.user_id,complaint.cid,complaint.status,users.name,users.contact');
    $this->db->from('complaint');
    $this->db->join('users','users.id=complaint.user_id');
    $this->db->where('complaint.hcdid',$hcdid);
    $this->db->where('complaint.status',!$q);
    $grp=$this->db->get();
    $res=$grp->result_array();
    //print_r($res);
     return $res;

  }

  function get_c_details($cid)
  {
    //echo $cid;
    $this->db->select('cid,user_id,date,hcdid,preftime,room,hostel,mobile,details,status')
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
            $data['cid']=$cid;
             
    if($status==0)
    {
        $data['ts_details']="The complaint is updated as pending";
    }
    elseif($status==1)
    {
        $data['ts_details']="The complaint is updated as resolved";
    }
    elseif($status==-1)
    {
        $data['ts_details']="The complaint is updated as false";
    }
     elseif($status==2)
    {
        $data['ts_details']="The complaint is updated as postponed";
    }
     
      
    $this->db->insert('cupdates',$data);
   }

   function get_report($cid)
   {
    $this->db->select('time_stamp,ts_details')
             ->from('cupdates')
             ->where('cid',$cid);
             
    $query=$this->db->get();
    return($query->result_array());
   }
}