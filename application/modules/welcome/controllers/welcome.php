<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
		function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url');
}
	function index()
	{
		$data['user'] = $this->ion_auth->user()->row();
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
