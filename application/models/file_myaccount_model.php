<?php
class file_myaccount_model extends CI_Model{
function form1_insert($newdb){
// Inserting in Table(students) of Database(college)
$session_data = $this->session->userdata('logged_in');

$user_id= $session_data['user_id'];
$this->load->database();
$this->db->where('user_id',$user_id);
$qur=$this->db->update('registration', $newdb);
echo $this->db->last_query();
return $qur;

}

function getreligion()
		{
			$this->db->select('religion_id,religion_name');
			$this->db->from('religions');
			$this->db->order_by('religion_name', 'asc'); 
			$query=$this->db->get();
			return $query; 
		}
		
		
		function form2_insert($newdb){
// Inserting in Table(students) of Database(college)
$session_data = $this->session->userdata('logged_in');

$user_id= $session_data['user_id'];
$this->load->database();
$this->db->where('user_id',$user_id);
$qur=$this->db->update('registration', $newdb);
echo $this->db->last_query();
return $qur;

}

}
?>