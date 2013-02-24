<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    
    public function index(){
		$data['container'] = $this->load->view('container');
        $this->load->view('home_view', $data);
    }
    
}