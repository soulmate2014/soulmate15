<?php class individual_model extends CI_Model{

public function profile($email) 
{
	$this->load->database();
	 $this -> db -> select('*');
   $this -> db -> from('registration');
$this -> db -> where('email', $email);
   $query = $this -> db -> get();
   return $query;
   
   
}

public function like($user_id) 
{
	#echo $user_id;
	$this->load->database();
	$this -> db -> select('*');
	$session_data = $this->session->userdata('logged_in');
	$user = $session_data['user_id'];
   	$this -> db -> from('like_status');
	$this -> db -> where('liked_user', $user_id);
	$this -> db -> where('user_id', $user);
   	$query = $this -> db -> get();
    #echo $this->db->last_query();
   	return $query;

}


public function view_status($user) 
{
	$this->load->database();
	$session_data = $this->session->userdata('logged_in');
	$user_id = $session_data['user_id'];
	$this -> db -> select('*');
   	$this -> db -> from('view_status');
	$this -> db -> where('viewd_id', $user);
	$this -> db -> where('user_id', $user_id);
   	$query = $this -> db -> get();
	if($query->num_rows()==0)
	{
	$session_data = $this->session->userdata('logged_in');
	$data2['user_id'] = $session_data['user_id'];
	$data2['viewd_id']=$user;

	$this->load->database();
	$this->db->insert('view_status', $data2); 
	#echo $this->db->last_query();
   return TRUE;
	}

}
}