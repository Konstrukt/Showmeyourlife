<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	
	function index()
	{
		$data['container'] = $this->load->view("container");
		$this->load->view("welcome_view", $data);
	}
	
	function ava()
	{
		$config['upload_path'] = './assets/pics/';
		$config['allowed_types'] = 'jpg';
		$config['file_name'] = 'ava';
		$config['overwrite'] = TRUE;
		
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
		redirect("welcome","refresh");
		}
		else
		{
		redirect("welcome","refresh");
		}
	}
}
