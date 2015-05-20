<?php
class status_model extends CI_Model{
	
	
	
function like_status($data) {
	$this->load->database();
	$this->db->insert('like_status', $data); 
}
function dislike_status($data) {
	$this->load->database();
$this->db->where($data);
$this->db->delete('like_status');
}


function block_status($data2) {
	$this->load->database();
$this->db->insert('block_list', $data2); 
}
function unblock_status($data2) {
	$this->load->database();
	$this->db->where($data2);
$this->db->delete('block_list'); 
}


function shortlisted($data2) {
	$this->load->database();
	$this->db->where($data2);
$this->db->delete('shortlisted'); 
}

public function shotrlist($data2) {
	$this->load->database();
$this->db->insert('shortlisted', $data2); 
}
}
?>