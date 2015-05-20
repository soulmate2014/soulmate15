<?php
class mobile_model extends CI_Model {

function index()
{
	$this->load->view('mobile_varification');
}
function varification($data)
{
	$this->load->database();
	 $this -> db -> select('*');
   $this -> db -> from('smsotp');
   $this -> db -> where($data);
   $query = $this->db->get();
   return $query;
   $this->db->where($data);
$this->db->delete('smsotp'); 
}
function deleteotp($data)
{
	$this->load->database();
	
   $this->db->where($data);
	$this->db->delete('smsotp'); 
}

function updateotp()
{
	$this->load->database();
	$user_id=$this->input->post('user_id');
	$data['mobile_varification']='1';
  $this->db->where('user_id', $user_id);
$this->db->update('registration', $data);
}
}
?>