<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

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
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			// $this->load->view('upload_success', $data);


			$insert_data = array(
                    'name' => $image_data['file_name'],
                    'path' => $image_data['full_path'],
                    'thumb_path'=> $image_data['file_path'] . 'thumbs/'. $image_data['file_name'],
                     );
			$this->load->model('user_model');
			$this->user_model->savepath($inert_data);
			$this->load->view('upload_success', $data);
		}

	}
}
?>