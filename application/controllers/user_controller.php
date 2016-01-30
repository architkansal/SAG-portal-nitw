<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		// $this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->library('tank_auth');
	}

	function index()
	{
		if($this->tank_auth->is_logged_in())
		{
			$this->load->model('user_model');
			$group_id=$this->user_model->group_id();
			if($group_id==0)
				$this->load->view('rahul/login.html');
			else if($group_id==1)
				$this->load->view('slidemenu.html');
			else if($group_id==2)
				$this->load->view('slidemenu.html');
			else if($group_id==11)
				$this->load->view('rahul/elec-admin.html');
			else if($group_id==44)
				$this->load->view('rahul/carpenter_admin.html');
			else if($group_id==33)
				$this->load->view('rahul/lan_admin');
			else if($group_id==22)
				$this->load->view('rahul/plumber_admin.html');
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
		$this->complaint_reg_success();
	}

	function complaint_reg_success()
	{
		$this->load->view('rahul/success.html');
	}


	function show_details()
  {
  	$q=$_GET['p'];

  	if($q==1)
  	{
  		$hcdid='11';
  	    $arr['det']= $this->fetch_complaints($hcdid);
  		$this->load->view('rahul/elec-admin.html',$arr);
  	}
    
	else if($q==2)
	{
		$hcdid='22';
		$arr['det']= $this->fetch_complaints($hcdid);
		$this->load->view('rahul/plumber_admin.html',$arr);
	}
	
	else if($q==3)
	{
		$hcdid='33';
		$arr['det']= $this->fetch_complaints($hcdid);

		$this->load->view('rahul/lan_admin.html',$arr);
	}

	
	else if($q==4)
	{
		$hcdid='44';
		$arr['det']= $this->fetch_complaints($hcdid);
		$this->load->view('rahul/carpenter_admin.html',$arr);
	}
	
	else if($q==5)
	{
		$hcdid='55';
		$arr['det']= $this->fetch_complaints($hcdid);
		$this->load->view('rahul/hostelg_admin.html',$arr);
	}
	
	else if($q==6)
	{
		$hcdid='66';
		$arr['det']= $this->fetch_complaints($hcdid);
		$this->load->view('rahul/messg_admin.html',$arr);
	}
	
 
  }


  function fetch_complaints($hcdid)
  {
    $this->load->model('admin_model');
    $res=$this->admin_model->get_complaints($hcdid);
    return $res;
  }


/*  function submit_grievance()   ///complaint form submit
	{
		$this->load->model('user_model');
		$gid = $this->user_model->reg_grievance();

		$this->complaint_reg_success();
	}
*/
	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			// $error = array('error' => $this->upload->display_errors());

			// $this->load->view('upload_form', $error);

			$this->load->model('user_model');
			$this->user_model->reg_grievance();
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			// $this->load->view('upload_success', $data);
			// print_r($data);
			// echo('<h1>hii !!</h1>');
			// var_dump($data);
			// echo('<h1>hii !!</h1>');
			// print($data['upload_data']['file_name']);
			echo('<h1>done!!</h1>');
						$insert_data = array(
                    'name' => $data['upload_data']['file_name'],
                    'path' => $data['upload_data']['full_path'],
                    // 'thumb_path'=> $data['upload_data']['file_path'] . 'thumbs/'. $data['upload_data']['file_name'],
                     );
			$this->load->model('user_model');
			$this->user_model->reg_grievance($insert_data);
			// $this->load->view('upload_success', $data);
			// $this->complaint_reg_success();
		}

	}

  function show_c_details()
  {
  	$cid=$_GET['cid'];
  	//echo $cid;
  	$id=$this->tank_auth->get_user_id();
  	$this->load->model('admin_model');
  	 $data['inf']=$this->admin_model->get_c_details($cid);
  	 $data['user_grp']=$this->admin_model->get_user_grp($id);
     $this->load->view('rahul/complaint_discription.html',$data);
     $data['query']=$this->admin_model->get_report($cid);
     $this->load->view('rahul/complaint_report.html',$data);

     
  }


  function resolved()
  {
   $cid=$_GET['cid'];
   //echo $cid;
    $this->load->model('admin_model');
    $this->admin_model->status_change($cid,'1');
    //$this->load->view('rahul/message.html'); ///temperory
   // $this->load->view('rahul/complaint_discription.html',$data);

  }
  function postpone()
  {
   $cid=$_GET['cid'];
   //echo $cid;
    $this->load->model('admin_model');
    $this->admin_model->status_change($cid,'2');
    //$this->load->view('rahul/message.html'); ///temperory
   // $this->load->view('rahul/complaint_discription.html',$data);
}

function deleted()
  {
   $cid=$_GET['cid'];
   //echo $cid;
    $this->load->model('admin_model');
    $this->admin_model->status_change($cid,'-1');
    //$this->load->view('rahul/message.html'); ///temperory
   // $this->load->view('rahul/complaint_discription.html',$data);
  }


function show_my_complaints()
{
  $id=$this->tank_auth->get_user_id();
  $this->load->model('admin_model');
  $data['det']=$this->admin_model->show_my_complaints($id);
  //echo $data['no_of_c'];
  $this->load->view('rahul/my_complaints.html',$data);//temperory..... new view required here...done (Y) :)
}



}
