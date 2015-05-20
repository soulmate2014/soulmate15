<?php
class File_model extends CI_Model{
	
	
function form1_select(){	
$session_data = $this->session->userdata('logged_in');

$user_id= $session_data['user_id'];

$this->load->database();
$this->db->select('*');
$this->db->from('profile_photos');
$this->db->where('user_id',$user_id);
$query=$this->db->get();
return $query->result();

}
	
function form1_insert($file_name){
$session_data = $this->session->userdata('logged_in');
$user_id= $session_data['user_id'];
// Inserting in Table(students) of Database(college)
$newdb['file_name'] = $file_name;
			$newdb1['prof_pic'] = $file_name;


$this->db->where('user_id',$user_id);
$qur=$this->db->update('profile_photos', $newdb1);
$this->db->where('user_id',$user_id);
$qur1=$this->db->update('registration', $newdb);
#echo $this->db->last_query();
return $qur;

}
function horo_insert($newdb){
$session_data = $this->session->userdata('logged_in');
$user_id= $session_data['user_id'];
// Inserting in Table(students) of Database(college)




$this->db->where('user_id',$user_id);
$qur1=$this->db->update('registration', $newdb);
#echo $this->db->last_query();


}
function horo_edit($newdb){
$session_data = $this->session->userdata('logged_in');
$user_id= $session_data['user_id'];
// Inserting in Table(students) of Database(college)




$this->db->where('user_id',$user_id);
$qur1=$this->db->update('registration', $newdb);
#echo $this->db->last_query();


}


function form1_insert1($file_name){
$session_data = $this->session->userdata('logged_in');
$user_id= $session_data['user_id'];
// Inserting in Table(students) of Database(college)
$newdb['file_name'] = $file_name;
			$newdb1['image1'] = $file_name;


$this->db->where('user_id',$user_id);
$qur=$this->db->update('profile_photos', $newdb1);
/*$this->db->where('user_id',$user_id);
$qur1=$this->db->update('registration', $newdb);*/
#echo $this->db->last_query();
return $qur;

}



function form1_insert2($file_name){
$session_data = $this->session->userdata('logged_in');
$user_id= $session_data['user_id'];
// Inserting in Table(students) of Database(college)
$newdb['file_name'] = $file_name;
$newdb1['image2'] = $file_name;
$this->db->where('user_id',$user_id);
$qur=$this->db->update('profile_photos', $newdb1);
/*$this->db->where('user_id',$user_id);
$qur1=$this->db->update('registration', $newdb);*/
#echo $this->db->last_query();
return $qur;

}


function form1_insert3($file_name){
$session_data = $this->session->userdata('logged_in');
$user_id= $session_data['user_id'];
// Inserting in Table(students) of Database(college)
$newdb['file_name'] = $file_name;
$newdb1['image3'] = $file_name;
$this->db->where('user_id',$user_id);
$qur=$this->db->update('profile_photos', $newdb1);
/*$this->db->where('user_id',$user_id);
$qur1=$this->db->update('registration', $newdb);*/
#echo $this->db->last_query();
return $qur;

}
function getall($user_id)
		{
			$this->db->select('*');
			$this->db->from('registration');
			$this->db->where('user_id', $user_id); 
			$query=$this->db->get();
			return $query->result(); 
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
#echo $this->db->last_query();
return $qur;
}
}
?>