<?php
class myhome_model extends CI_Model{
function myhome($user) {
		$session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
	 $gender = $session_data['gender'];
	 $religion = $session_data['religion'];
$this->load->database();
	 $this -> db -> select('*');
   $this -> db -> from('registration');
   $this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	$this->db->where('registration.religion',$religion);
	$this->db->where_not_in('user_id',$user);
	/* */
	
   #$where = "email='$username' OR user_id='username' AND password='active'";
   #$this -> db -> where('email', $username);

   $query = $this -> db -> get();
/*   echo  $this->db->last_query();
*/    $this->db->last_query();
   return $query;
	
	}
	
	public function shortlist($user) {
		$this -> db -> select('*');
   $this -> db -> from('shortlisted');
    #$this->db->join ( 'block_list', 'block_list.blocked_id = registration.user_id' , 'left' );
	$this->db->where('user_id',$user);
	$query = $this -> db -> get();
/*   echo  $this->db->last_query();
   echo $this->db->last_query();*/ 
   return $query;
	}
	
public function bolck_user($user) {
		$this -> db -> select('*');
   $this -> db -> from('block_list');
    #$this->db->join ( 'block_list', 'block_list.blocked_id = registration.user_id' , 'left' );
	$this->db->where('user_id',$user);
	$query = $this -> db -> get();
/*   echo  $this->db->last_query();
   echo $this->db->last_query();*/ 
   return $query;
	}
	
	
	
	
	public function profile_yet($user) {
		$session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
	 $gender = $session_data['gender'];
	 $religion = $session_data['religion'];
	$this->load->database();
	$this -> db -> select('*');
	 $this -> db -> from('view_status');
	 $this->db->where('user_id',$user);
	 $query = $this -> db -> get();
	 foreach ($query->result() as $row)
	 {
		 /*$data = array(
  'query1'=>$query->result());*/
		 $viewed[]=$row->viewd_id;
		# $viewed[]=$user;
	 }
	 
	 	$this -> db -> select('*');
   		$this -> db -> from('registration');
   		/*$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
		$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	$this->db->where('registration.religion',$religion);
	$this->db->where_not_in('registration.user_id',$user);
	$this->db->where_not_in('registration.gender',$gender);
	if($query->num_rows()>0){
	$this->db->where_not_in('registration.user_id',$viewed);
	}
	/* */
	
   #$where = "email='$username' OR user_id='username' AND password='active'";
   #$this -> db -> where('email', $username);

   $query = $this -> db -> get();
/*    echo $this->db->last_query();*/
   $this->db->last_query();
   return $query;
	}
	
	
	public function viewed($user) {
		$session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
	 $gender = $session_data['gender'];
	  $religion = $session_data['religion'];
	$this->load->database();
	$this -> db -> select('*');
	 $this -> db -> from('view_status');
	 $this->db->where('user_id',$user);
	 $query = $this -> db -> get();
	 foreach ($query->result() as $row)
	 {
		 /*$data = array(
  'query1'=>$query->result());*/
		 $viewed[]=$row->viewd_id;
		# $viewed[]=$user;
	 }
	 
	 $this -> db -> select('*');
   $this -> db -> from('registration');
  /* $this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	$this->db->where('registration.religion',$religion);
	$this->db->where_not_in('registration.gender',$gender);
	if($query->num_rows()>0)
	{
	$this->db->where_in('registration.user_id',$viewed);
	}
	else
		{
			$this->db->where_in('registration.user_id','100000');
		}
	/* */
	
   #$where = "email='$username' OR user_id='username' AND password='active'";
   #$this -> db -> where('email', $username);

   $query = $this -> db -> get();
/*  echo $this->db->last_query();*/  
   $this->db->last_query();
   return $query;
	}
	
	
	
	public function intrest($user) {
		$session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
	 $gender = $session_data['gender'];
	$this->load->database();
	$this -> db -> select('*');
	 $this -> db -> from('intrestlist');
	 $this->db->where('user_id',$user);
	
	 $query = $this -> db -> get();
	 #echo $this->db->last_query();
	 return $query;
	}
	
	
	public function liked($user) {
		$session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
	 $gender = $session_data['gender'];
	  $religion = $session_data['religion'];
	$this->load->database();
	
	$this -> db -> select('*');
	 $this -> db -> from('like_status');
	 $this->db->where('user_id',$user);
	 	
	 $query = $this -> db -> get();#
	 #echo $this->db->last_query();
	 foreach ($query->result() as $row1)
	 {
		$like[]=$row1->liked_user;

	 }
	 
	 $this -> db -> select('*');
   $this -> db -> from('registration');
  /* $this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	$this->db->where('registration.religion',$religion);
	 $this->db->where_not_in('registration.gender',$gender);
	if($query->num_rows()>0)
	{
	$this->db->where_in('registration.user_id',$like);
	}
	else
		{
			$this->db->where_in('registration.user_id','100000');
		}
	/* */
	
   #$where = "email='$username' OR user_id='username' AND password='active'";
   #$this -> db -> where('email', $username);

   $query = $this -> db -> get();
/*    echo $this->db->last_query();*/
   $this->db->last_query();
   return $query;
	}
	
	
	
	
		public function short1($user) {
			$session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
	 $gender = $session_data['gender'];
	  $religion = $session_data['religion'];
	$this->load->database();
	$this -> db -> select('*');
	 $this -> db -> from('shortlisted');
	 $this->db->where('shortlisted_id',$user);
	 $query = $this -> db -> get();##
	 #echo $this->db->last_query();
	 foreach ($query->result() as $row1)
	 {
		 
		 /*$data = array(
  'query1'=>$query->result());*/
		 $short[]=$row1->user_id;
		# $viewed[]=$user;
	 }
	 
	 $this -> db -> select('*');
   $this -> db -> from('registration');
  /* $this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	$this->db->where('registration.religion',$religion);
	 $this->db->where_not_in('registration.gender',$gender);
	if($query->num_rows()>0){
	$this->db->where_in('registration.user_id',$short);
	}
	else
		{
			$this->db->where_in('registration.user_id','100000');
		}
	/* */
	
   #$where = "email='$username' OR user_id='username' AND password='active'";
   #$this -> db -> where('email', $username);

   $query = $this -> db -> get();
/* */   #echo $this->db->last_query();
   $this->db->last_query();
   return $query;
	}
	
	
	 function image() {
		$session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
	 $user = $session_data['user_id'];
	$this -> db -> select('*');
	    $this -> db -> where('user_id',$user);
   	$this -> db -> from('profile_photos');

	 $query = $this -> db -> get();
	return $query->result();
			
		}
}
?>