<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function index()
	{
		$data['container'] = $this->load->view("container");
		$this->load->view("welcome_view", $data);
	}
}