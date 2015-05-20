<?php
class storymodel extends CI_Model{

function storyinner($sid){
// Inserting in Table(students) of Database(college)
	$this->load->database();
	$this -> db -> select('*');
	$this->db->where('success_id',$sid);
	$query = $this -> db -> get('success_story');
  	#echo $this->db->last_query();
	return $query->result();

}

function story1(){
// Inserting in Table(students) of Database(college)
	$this->load->database();
	$this -> db -> select('*');
	#$this->db->where('success_id',$sid);
	$query = $this -> db -> get('success_story');
  	#echo $this->db->last_query();
	return $query->result();

}
}
?>             