<?php
class message_model extends CI_Model{
function intrest() {
	if($this->session->userdata('logged_in'))
   {
    $session_data = $this->session->userdata('logged_in');
	$data['loged'] = $this->session->userdata('logged_in');
	 /*$data['username'] = $session_data['username'];
	 $data['user_id'] = $session_data['user_id'];
	 $email=$session_data['username'];*/
	$username = $session_data['username'];
	$user_id = $session_data['user_id'];
   }
 $this->load->database();
	$this -> db -> select('*');
	$this -> db -> from('intrestlist');
	$this->db->where('intrested_id',$user_id);
	$query = $this -> db -> get();
	#echo $this->db->last_query();  
	foreach ($query->result() as $row)
	 {
		 /*$data = array(
  'query1'=>$query->result());*/
	$viewed[]=$row->user_id;
		#print_r($viewed);
	 }
	$this -> db -> select('*');
   	$this -> db -> from('registration');
   	$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );
   	$this->db->join ( 'intrestlist', 'intrestlist.user_id = registration.user_id' , 'left' );
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	if($query->num_rows()>0)
	{
	$this->db->where_in('registration.user_id',$viewed);
	}
	else
		{
	$this->db->where_in('registration.user_id','100000');
		}
	$query = $this -> db -> get();
	#echo $this->db->last_query();  
   	$this->db->last_query();
   	return $query;
	
	
}


function not_intrest($reject_id) {
	if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
	 #$data['loged'] = $this->session->userdata('logged_in');
	 /*$data['username'] = $session_data['username'];
	 $data['user_id'] = $session_data['user_id'];
	 $email=$session_data['username'];*/
	 $username = $session_data['username'];
	 $user_id = $session_data['user_id'];
   }
	$this->load->database();
 	$data['user_id']=$user_id;
 	$data['intrested_id']=$reject_id;
 	$data1['intrest_status']='1';
	$data1['replay_status']='1';
 	$this->db->where('intrested_id',$user_id);
	$this->db->where('user_id',$reject_id);
	$this->db->update('intrestlist',$data1);
	echo $this->db->last_query();  
}



function reject() {
	if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
	 #$data['loged'] = $this->session->userdata('logged_in');
	 /*$data['username'] = $session_data['username'];
	 $data['user_id'] = $session_data['user_id'];
	 $email=$session_data['username'];*/
	  $username = $session_data['username'];
	  $user_id = $session_data['user_id'];
   }

 
 $this->load->database();
	$this -> db -> select('*');
	$this -> db -> from('intrestlist');
	
	$this->db->where('user_id',$user_id);
	$this->db->where('interest_status',1);
	
	$query = $this -> db -> get();
	#echo $this->db->last_query();
	foreach ($query->result() as $row)
	 {
		 $viewed[]=$row->intrested_id;
		 $lastlogin=0;
		#print_r($intrest_time[0]);
		 

	 }
	 
	 
	$this -> db -> select('*');
	$this -> db -> from('registration');
	$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );
	$this->db->join ( 'intrestlist', 'intrestlist.intrested_id = registration.user_id' , 'left' );
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	
	if($query->num_rows()>0)
	{
		$this->db->where_in('registration.user_id',$viewed);
		$this->db->where('intrestlist.user_id',$user_id);
		$this->db->where('intrestlist.read_intrest',1);
	}
	else
	{
		$this->db->where_in('registration.user_id','100000');
	}
	
	$query = $this -> db -> get();
	#echo $this->db->last_query();  
   	$this->db->last_query();
   	return $query->result();

	
}
function intrest_accept($reject_id) {
	if($this->session->userdata('logged_in'))
	{
		$session_data = $this->session->userdata('logged_in');
	 #$data['loged'] = $this->session->userdata('logged_in');
	 /*$data['username'] = $session_data['username'];
	 $data['user_id'] = $session_data['user_id'];
	 $email=$session_data['username'];*/
		$username = $session_data['username'];
		$user_id = $session_data['user_id'];
   }
	$this->load->database();
 	$data['user_id']=$user_id;
 	$data['intrested_id']=$reject_id;
 	$data1['intrest_status']='2';
	$data1['replay_status']='1';
 	$this->db->where('intrested_id',$user_id);
	$this->db->where('user_id',$reject_id);
	$this->db->update('intrestlist',$data1);
	echo $this->db->last_query();


	
}

function new_msg() {
	if($this->session->userdata('logged_in'))
   {
	$session_data = $this->session->userdata('logged_in');
	$username = $session_data['username'];
	$user_id = $session_data['user_id'];
   }
 	$this->load->database();
	$this -> db -> select('*');
	$this -> db -> from('intrestlist');
	
	$this->db->where('intrested_id',$user_id);
	$query = $this -> db -> get();
	foreach ($query->result() as $row)
	 {
		 $viewed[]=$row->user_id;
		 $lastlogin=0;
		#print_r($intrest_time[0]);
		 

	 }
	 
	
	$this -> db -> select('*');
	$this -> db -> from('registration');
	$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );
	$this->db->join ( 'intrestlist', 'intrestlist.user_id = registration.user_id' , 'left' );
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );

	if($query->num_rows()>0)
	{
		$this->db->where_in('registration.user_id',$viewed);
		$this->db->where('intrestlist.read_intrest',0);
	}
	else
	{
		$this->db->where_in('registration.user_id','100000');
	}
	$query = $this -> db -> get();
	#echo $this->db->last_query();  
   	$this->db->last_query();
   	return $query;

}


function accept() {
	if($this->session->userdata('logged_in'))
   {
	$session_data = $this->session->userdata('logged_in');
	$username = $session_data['username'];
	$user_id = $session_data['user_id'];
   }
 	$this->load->database();
	$this -> db -> select('*');
	$this -> db -> from('intrestlist');
	
	$this->db->where('intrested_id',$user_id);
	$this->db->where('intrest_status','2');
	$query = $this -> db -> get();
	
	foreach ($query->result() as $row)
	 {
		 $viewed[]=$row->user_id;
		 $lastlogin=0;
		#print_r($intrest_time[0]);
		 

	 }
	 
	
	$this -> db -> select('*');
	$this -> db -> from('registration');
	$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );
	$this->db->join ( 'intrestlist', 'intrestlist.user_id = registration.user_id' , 'left' );
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );

	if($query->num_rows()>0)
	{
		$this->db->where_in('registration.user_id',$viewed);
		#$this->db->where('intrestlist.read_intrest',0);
	}
	else
	{
		$this->db->where_in('registration.user_id','100000');
	}
	$query = $this -> db -> get();
	#echo $this->db->last_query();  
   	$this->db->last_query();
   	return $query;

}



function replaid() {
	if($this->session->userdata('logged_in'))
   {
	$session_data = $this->session->userdata('logged_in');
	$username = $session_data['username'];
	$user_id = $session_data['user_id'];
   }
 	$this->load->database();
	$this -> db -> select('*');
	$this -> db -> from('intrestlist');
	
	$this->db->where('intrested_id',$user_id);
	$this->db->where('replay_status','1');
	$query = $this -> db -> get();
	
	foreach ($query->result() as $row)
	 {
		 $viewed[]=$row->user_id;
		 $lastlogin=0;
		#print_r($intrest_time[0]);
		 

	 }
	 
	
	$this -> db -> select('*');
	$this -> db -> from('registration');
	$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );
	$this->db->join ( 'intrestlist', 'intrestlist.user_id = registration.user_id' , 'left' );
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );

	if($query->num_rows()>0)
	{
		$this->db->where_in('registration.user_id',$viewed);
		#$this->db->where('intrestlist.read_intrest',0);
	}
	else
	{
		$this->db->where_in('registration.user_id','100000');
	}
	$query = $this -> db -> get();
	#echo $this->db->last_query();  
   	$this->db->last_query();
   	return $query;

}


function notreplaid() {
	if($this->session->userdata('logged_in'))
   {
	$session_data = $this->session->userdata('logged_in');
	$username = $session_data['username'];
	$user_id = $session_data['user_id'];
   }
 	$this->load->database();
	$this -> db -> select('*');
	$this -> db -> from('intrestlist');
	
	$this->db->where('intrested_id',$user_id);
	$this->db->where('replay_status','0');
	$this->db->where('read_intrest','1');
	$query = $this -> db -> get();
	
	foreach ($query->result() as $row)
	 {
		 $viewed[]=$row->user_id;
		 $lastlogin=0;
		#print_r($intrest_time[0]);
		 

	 }
	 
	
	$this -> db -> select('*');
	$this -> db -> from('registration');
	$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );
	$this->db->join ( 'intrestlist', 'intrestlist.user_id = registration.user_id' , 'left' );
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );

	if($query->num_rows()>0)
	{
		$this->db->where_in('registration.user_id',$viewed);
		#$this->db->where('intrestlist.read_intrest',0);
	}
	else
	{
		$this->db->where_in('registration.user_id','100000');
	}
	$query = $this -> db -> get();
	#echo $this->db->last_query();  
   	$this->db->last_query();
   	return $query;

}

function read_status() {
	if($this->session->userdata('logged_in'))
   {
	$session_data = $this->session->userdata('logged_in');
	$username = $session_data['username'];
	$user_id = $session_data['user_id'];
   }
 	$this->load->database();
	$this -> db -> select('*');
	$this -> db -> from('intrestlist');
	
	$this->db->where('user_id',$user_id);
	$this->db->where('replay_status','0');
	$this->db->where('read_intrest','0');
	$query = $this -> db -> get();
	
	foreach ($query->result() as $row)
	 {
		 $viewed[]=$row->intrested_id;
		 $lastlogin=0;
		#print_r($intrest_time[0]);
		 

	 }
	 
	
	$this -> db -> select('*');
	$this -> db -> from('registration');
	$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );
	$this->db->join ( 'intrestlist', 'intrestlist.user_id = registration.user_id' , 'left' );
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );

	if($query->num_rows()>0)
	{
		$this->db->where_in('registration.user_id',$viewed);
		#$this->db->where('intrestlist.read_intrest',0);
	}
	else
	{
		$this->db->where_in('registration.user_id','100000');
	}
	$query = $this -> db -> get();
	#echo $this->db->last_query();  
   	$this->db->last_query();
   	return $query;

}

}