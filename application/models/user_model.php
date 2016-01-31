<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Controller
{

  function __construct()
  {
  	parent::__construct();
    $this->load->helper('url');
    $this->load->library('tank_auth');
    $this->load->dbutil();
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
    
    // $data['user_id'] = $this->tank_auth->get_user_id();
    // $data['hostel'] =$this->input->post('dropdown1');
    // $data['floor'] =$this->input->post('dropdown2');
    // $data['tag'] =$this->input->post('dropdown3');
    // $data['details']=$this->input->post('description');
    // $this->db->insert('grievances',$data);
    if($insert_data!=NULL)
    {

      // $gid=$this->db->insert_id();
      // $data1['hcdid']=$_GET['hcdid'];
      // $data1['details']=$this->input->post('description');
      // 'name' => $image_data['file_name'],
      // $insert_data['gid']= $gid;


      $data['user_id'] = $this->tank_auth->get_user_id();
      $data['hostel'] =$this->input->post('dropdown1');
      $data['floor'] =$this->input->post('dropdown2');
      $data['tag'] =$this->input->post('dropdown3');
      $data['details']=$this->input->post('description');
      $data['name'] = $insert_data['name'];
      $data['path'] = $insert_data['path'];
      $this->db->insert('grievances',$data);


      // $this->db->insert('imgtable', $insert_data);
    }

    else
    {

      $data['user_id'] = $this->tank_auth->get_user_id();
      $data['hostel'] =$this->input->post('dropdown1');
      $data['floor'] =$this->input->post('dropdown2');
      $data['tag'] =$this->input->post('dropdown3');
      $data['details']=$this->input->post('description');
      $this->db->insert('grievances',$data);

    }
    
  }
  
  function get_grievances()
  {

      $this ->db-> select('*')->from('grievances')//->join('imgtable' , 'grievances.gid=imgtable.gid')
      ->where('status' , '0');
      $grp=$this->db->get();
      $res=$grp->result_array();
      $res2=$grp->result();
      // print_r($res);
      $delimiter=",";
      $newline="\r\n";
      // echo $this->dbutil->csv_from_result($grp,$delimiter,$newline);

      return $res;
  }



  function inc_upvotes($gid)
  {
    // $id = $this->tank_auth->get_user_id();
   /* echo($id);
    $this->db->select('grev_votes')
        ->from('users')
        ->where('id' , $id);
    $grp = $this->db->get();
    $delimiter=",";
      $newline="\r\n";
    $res =  $this->dbutil->csv_from_result($grp,$delimiter,$newline);
    $complaintArray = explode(',',$res);
    print_r($res);
     print_r($complaintArray);
    $i=0;
    foreach ( $complaintArray as $k ) 
    {
      if($k[$i++]==$gid)return;

    }
     
    if($grp->num_rows()==0)
    {
      $res=$gid;
    }
    else
    {
      $res = $res.",".$gid;
    }



    // array_push($complaintArray,$gid);
    // print_r($complaintArray);
    // array_filter($complaintArray);
    
    // foreach($complaintArray as $link)
    // {
    //     if($link == '')
    //     {
    //         unset($link);
    //     }
    // }
    ///echo ($id);

   //// print_r($res);
    $data['grev_votes']=$res;
    //print_r($data);
     $this->db->where('id',$id)
              ->update('users',$data);

      $this->db->select('upvotes')
              ->from('grievances')
              ->where('gid',$gid);

        $count2 =  ($this->db->get());
        $count= $count2->result_array();
        $cnt = $count[0]['upvotes'];
        $cnt+=1;
        $dat['upvotes'] = $cnt;

        $this->db->where('gid' , $gid)
                  ->update('grievances' , $dat );


*/



        $id = $this->tank_auth->get_user_id();
        $this->db->select('*')->from('upvote')
                ->where('gid',$gid)
                ->where('user_id' , $id);
          $res = $this->db->get();
          if($res->num_rows()==0)
          {
            $data2['gid'] = $gid;
            $data2['user_id']= $id;
            $this->db->insert('upvote' , $data2);
             $this->db->select('upvotes')
              ->from('grievances')
              ->where('gid',$gid);

        $count2 =  ($this->db->get());
        $count= $count2->result_array();
        $cnt = $count[0]['upvotes'];
        $cnt+=1;
        $dat['upvotes'] = $cnt;

        $this->db->where('gid' , $gid)
                  ->update('grievances' , $dat );

          }


  }

   function show_my_complaints($id)
   {
    $this->db->select('cid,date,hcdid,preftime,details,status')
             ->from('complaint')
             ->where('user_id',$id);
    $query=$this->db->get();
    $query1=$query->result_array();
  //   if(empty($query->result()))
  //   $query1['no_of_c']=0;
  // else
  //   $query1['no_of_c']=1;
    //print_r($query->result_array());
    return($query1);
   }

}