<?php
class Forgotmodel extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in Table(students) of Database(college)
$email=$data['email'];
$err['error1']='error';
	$this->load->database();
	$this->db->select('uid');
	$this->db->from('registration');
	$this->db->where('email', $email );
	$query = $this->db->get();
	if ( $query->num_rows() > 0 )
    {
    $row = $query->row_array();
    $data['uid']=$row['uid'];

$this->db->insert('forgot', $data);
	}
	else
	{
		
		
	}

}
function form_update($forgot1){
// Inserting in Table(students) of Database(college)

$uid=$forgot1['uid'];
$tocken=$this->input->post('tocken');
$pass=$this->input->post('password');

$password=md5($pass);
$forg=array('password'=>$password);
$err['error1']='error';
	$this->load->database();
	$this->db->select('uid');
	$this->db->from('forgot');
	$this->db->where('uid', $uid );
	$this->db->where('tocken', $tocken );
	$query = $this->db->get();
	if ( $query->num_rows() > 0 )
    {
		$sql = "update registration set password='$password' WHERE 				uid=$uid";
			$this->db->query($sql);
			
			$sql1 = "DELETE FROM forgot WHERE uid=$uid";
			$this->db->query($sql1);
		#$this->db->where('uid', $uid);
		#$this->db->update('registration',$forg); 
		#$this->db->where('uid',$uid);
		#$this->db->delete('forgot');
		$this->load->view('forgotsuccess');
	}
	else
	{
		$this->load->view('forgoterror');
	}
	

}
}
?>             