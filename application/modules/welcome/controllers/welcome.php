<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function index()
	{
	if (!$this->ion_auth->logged_in())
		{
		redirect("auth","refresh");
		}else{		
		$data['get']		= $this->welcome_model->get();
		$data['user']		= $this->ion_auth->user()->row();
		$data['container']	= $this->load->view("container");
		$this->load->view("welcome_view", $data);
		}
	}
	function ava()
	{
		$user = $this->ion_auth->user()->row();
		$config['upload_path'] = './assets/pics/';
		$config['allowed_types'] = 'jpg';
		$config['file_name'] = $user->username;
		$config['overwrite'] = TRUE;	
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
		redirect("/","refresh");
		}
		else
		{
		redirect("/","refresh");
		}
	}	
	function post()
	{
		$this->welcome_model->posting();
		redirect('welcome','refresh');
	}
}
