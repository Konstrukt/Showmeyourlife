<?php
class Welcome_model extends CI_Model
{
	function posting()
	{
	$user = $this->ion_auth->user()->row();
	$data['name'] = $user->username;
	$data['post'] = $this->input->post('posting');
	$this->db->insert('posts', $data);
	}
	
	function get()
	{
	$query = $this->db->get('posts');
	if($query->num_rows() > 0)
	{
	$data = $query->result();
	return $data;
	}
	}
}