<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function index()
	{
	if (!$this->ion_auth->logged_in())
		{
		redirect("auth","refresh");
		}else{
		$this->load->model("welcome_model");
		$data['get']		= $this->welcome_model->get();
		$data['user']		= $this->ion_auth->user()->row();
		$data['container']	= $this->load->view("container");
		$this->load->view("welcome_view", $data);
		}
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
	function post()
	{
		$this->load->model("welcome_model");
		$this->welcome_model->posting();
		redirect('welcome','refresh');
	}
}
