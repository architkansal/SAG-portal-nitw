<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Controller
{

  function __construct()
  {
  	parent::__construct();
    $this->load->helper('url');
    $this->load->library('tank_auth');
  }


  function reg_complaint()
  {
    
    $data['user_id'] = $this->tank_auth->get_user_id();
    
    $data['hostel'] =$this->input->post('hostel');
    $data['room'] =$this->input->post('room_no');
    $data['mobile'] =$this->input->post('contact');
    $data['preftime'] =$this->input->post('usr_time');
    $data['hcdid']=$_GET['hcdid'];
    $data['status']=0;
    $data['details']=$this->input->post('description');
    $data['tag_id']= $this->input->post('dropdown');
    $this->db->insert('complaint',$data);
    
   
    // $data1['hcdid']=$_GET['hcdid'];
    // $data1['details']=$this->input->post('description');

  }
  
  function group_id()
  {
    $id = $this->tank_auth->get_user_id();
    // print_r($id);
    // echo "hello";
    $this ->db-> select('user_group_id')-> where('id', $id)-> Limit(1)-> from('users');
    $grp=$this->db->get();
    $res=$grp->result_array();
    $grp1=$res[0]['user_group_id'];
    // print_r($grp1);
      /*print_r($q->result());*/
      // echo "ID is" . $id;
      return $grp1;
  }

    

  function reg_grievance($insert_data=NULL)
  {
    //$data['sname'] =$this->input->post('sname');
    // GID : AR811443-H-<1/2/3/4>
    // COunt AR811443-H%
    // cache_on*()
    // cache_off()


    $data['user_id'] = $this->tank_auth->get_user_id();
    $data['hostel'] =$this->input->post('dropdown1');
    $data['floor'] =$this->input->post('dropdown2');
    $data['tag'] =$this->input->post('dropdown3');
    $data['details']=$this->input->post('description');
    $this->db->insert('grievances',$data);
    if($insert_data!=NULL)
    {

      $gid=$this->db->insert_id();
      // $data1['hcdid']=$_GET['hcdid'];
      // $data1['details']=$this->input->post('description');
      // 'name' => $image_data['file_name'],
      $insert_data['gid']= $gid;
      $this->db->insert('imgtable', $insert_data);
    }
    
  }
  

  


 /* function savepath($insert_data)
  {

     $this->db->insert('imgtable', $insert_data);
  }
  */

}