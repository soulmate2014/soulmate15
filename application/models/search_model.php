<?php
class search_model extends CI_Model{
function get_country() {
  	$this->load->database();
	$this ->db->select('*');
	$query = $this->db->get('country');
  	#echo $this->db->last_query();
	return $query->result();
}
function get_data() {
  	$this->load->database();
	$this -> db -> select('*');
	$this -> db -> from('partners_pref');
    $query = $this -> db -> get();
  	return $query->result();
}
function get_search() {
  	$match = $this->input->post('search');
  	$this->load->database();
  	$this->db->like('user_id', $match);

  	$query = $this->db->get('registration');
  	return $query->result();
}
/*function get_search_id() {
  	$match = $this->input->post('user_id');
  	$this->load->database();
  	$this->db->where('gender', $match);
  	$query = $this->db->get('registration');
  	return $query->result();
}*/
public function printing() {
$result=$this->input->post('user_id');
return $result;
	}
public function record_count() {
	if ($this->input->post('user_id'))
{
    // use the term from POST and set it to session
    $search_term = $this->input->post('user_id');
    $this->session->set_userdata('search_term', $search_term);
}
elseif ($this->session->userdata('search_term'))
{
    // if term is not in POST use existing term from session
    	$search_term = $this->session->userdata('search_term');
}
		
		$this->db->where('user_id', $search_term);
		#$this->db->like('gender', $match);
		#$query=$this->db->get("registration");
		$this->db->from('registration');
		 $query=$this->db->count_all_results();
		
		return $query;
	}
	public function record_anonym_count() {
		
    // use the term from POST and set it to session
   			$search_term = $this->input->get('gender');
			
			#$search_term1 = $this->input->get('religion');
		
			$search_term2 = $this->input->get('age_from');
		
			$search_term3 = $this->input->get('age_to');
		
			#$search_term4 = $this->input->get('height_from');
		#$search_term5 = $this->input->get('height_to');
		$search_term6 = $this->input->get('cast');
		
			$search_term7 = $this->input->get('mother_tounge');
		
			#$search_term9 = $this->input->get('education');
		#$search_term8 = $this->input->get('country');

	
		$this->load->database();
		if($search_term){
				$this->db->where('gender', $search_term);
			}
  			if($search_term6){
			$this->db->where('cast', $search_term6); 
			}
			/*if($search_term1){
			$this->db->where('religion',$search_term1);
			}*/
			if($search_term7){
			$this->db->where('mother_tongue', $search_term7);
			}
			/*if($search_term8){
			$this->db->where('country', $search_term8);
			}*/
			if($search_term2){
			$this->db->where('age >= ',$search_term2);
			}
			if($search_term3){
			$this->db->where('age <= ',$search_term3);
			}
			/*if($search_term4){
			$this->db->where('height >= ',$search_term4);
			}
			if($search_term5){
			$this->db->where('height <= ',$search_term5);
			}
			if($search_term9){
			$this->db->where('education',$search_term9);
			}*/
		
		$this->db->from('registration');
		$query=$this->db->count_all_results();
		return $query;
	} 
 
public function record_regular_count() {
		
    // use the term from POST and set it to session
   			$search_term = $this->input->get('gender');
			
			$search_term1 = $this->input->get('religion');
		
			$search_term2 = $this->input->get('age_from');
		
			$search_term3 = $this->input->get('age_to');
		
			$search_term4 = $this->input->get('height_from');
		$search_term5 = $this->input->get('height_to');
		$search_term6 = $this->input->get('cast');
		
			$search_term7 = $this->input->get('mother_tounge');
		
			$search_term9 = $this->input->get('education');
		$search_term8 = $this->input->get('country');

	
		$this->load->database();
		if($search_term){
				$this->db->where('gender', $search_term);
			}
  			if($search_term6){
			$this->db->where('cast', $search_term6); 
			}
			if($search_term1){
			$this->db->where('religion',$search_term1);
			}
			if($search_term7){
			$this->db->where('mother_tongue', $search_term7);
			}
			if($search_term8){
			$this->db->where('country', $search_term8);
			}
			if($search_term2){
			$this->db->where('age >= ',$search_term2);
			}
			if($search_term3){
			$this->db->where('age <= ',$search_term3);
			}
			if($search_term4){
			$this->db->where('height >= ',$search_term4);
			}
			if($search_term5){
			$this->db->where('height <= ',$search_term5);
			}
			if($search_term9){
			$this->db->where('education',$search_term9);
			}
		
		$this->db->from('registration');
		$query=$this->db->count_all_results();
		return $query;
	} 
	
public function record_yettobeviewed_count($user) {
		
    // use the term from POST and set it to session
$session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
	 $gender = $session_data['gender'];
	
		$this->load->database();
$this -> db -> select('*');
   $this -> db -> from('view_status');
   $this->db->where('user_id',$user);
   $query1 = $this->db->get();
   foreach($query1->result() as $res)
   {
	   $pro[]=$res->viewd_id;
		}
		
	 $this -> db -> select('*');
   $this -> db -> from('registration');
   $this->db->where_not_in('user_id',$pro);
   $this->db->where_not_in('user_id',$user);
   $this->db->where_not_in('gender',$gender);
		$query=$this->db->count_all_results();
		return $query;
}

public function record_viewed_count($user) {
		
    // use the term from POST and set it to session

$session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
	 $gender = $session_data['gender'];
	
		$this->load->database();
$this -> db -> select('*');
   $this -> db -> from('view_status');
   $this->db->where('user_id',$user);
   $query1 = $this->db->get();
   foreach($query1->result() as $res)
   {
	   $pro[]=$res->viewd_id;
		}
		
	 $this -> db -> select('*');
   $this -> db -> from('registration');
   $this->db->where_in('user_id',$pro);
 $this->db->where_not_in('registration.gender',$gender);
		$query=$this->db->count_all_results();
		return $query;
}
	public function record_newmatches_count() {
		
    // use the term from POST and set it to session
$session_data = $this->session->userdata('logged_in');
 
 $user= $session_data['user_id'];

	 $gender = $session_data['gender'];
	
		$this->load->database();
	 $this -> db -> select('*');
   $this -> db -> from('registration');
   $this->db->where_not_in('registration.user_id',$user);
   $this->db->where_not_in('registration.gender',$gender);
		$query=$this->db->count_all_results();
		return $query;
	}	
	public function record_short_count($user) {
		
    // use the term from POST and set it to session

	
		$this->load->database();
$this -> db -> select('*');
   $this -> db -> from('shortlisted');
   $this->db->where('shortlisted_id',$user);
   $query1 = $this->db->get();
   foreach($query1->result() as $res)
   	{
	   $pro[]=$res->user_id;
	}
	$this -> db -> select('*');
   	$this -> db -> from('registration');
   	$this->db->where_in('user_id',$pro);
	$query=$this->db->count_all_results();
		return $query;
}
	
public function record_like_count($user) {
		
    // use the term from POST and set it to session

	
		$this->load->database();
$this -> db -> select('*');
   $this -> db -> from('like_status');
   $this->db->where('user_id',$user);
   $query1 = $this->db->get();
   foreach($query1->result() as $res)
   	{
	   $pro[]=$res->liked_user;
	}
	$this -> db -> select('*');
   	$this -> db -> from('registration');
   	$this->db->where_in('user_id',$pro);
	$query=$this->db->count_all_results();
		return $query;
}
		
		
		
		public function record_mutual_count($user) {
		
    // use the term from POST and set it to session
$session_data = $this->session->userdata('logged_in');
 
 #$user= $session_data['user_id'];
 $gender= $session_data['gender'];
	
		$this->load->database();
$this -> db -> select('*');
   $this -> db -> from('partners_pref');
   $this->db->where('user_id',$user);
   $query1 = $this->db->get();
   foreach($query1->result() as $res)
   	{
		
	   #$pro[]=$res->liked_user;
	}
	$this -> db -> select('*');
   	$this -> db -> from('registration');
	
	#$this->db->where_not_in('gender',gender);
$prefmother = explode(',', $res->pref_mother);
		$prefcast = explode(',', $res->pref_cast);
		$prefstar = explode(',', $res->pref_star);
		$prefedu = explode(',', $res->pref_education);
		$prefoccupation = explode(',', $res->pref_occupation);
		$prefcountry = explode(',', $res->pref_country);
		$prefstate = explode(',', $res->pref_state);
		$prefcity = explode(',', $res->pref_city);
    $this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	/*$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.state_name = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast.cast_id = registration.cast' , 'left' );
	#$this->db->where_in('user_id',$pro);
	$this->db->where('registration.age <=',$res->Pref_age_to);
	$this->db->where('registration.age >=',$res->pref_age_from);
	$this->db->where('registration.height <=',$res->pref_height_to);
	$this->db->where('registration.height >=',$res->pref_height_from);
	$this->db->where('registration.merital_status',$res->pref_status);
	$this->db->where('registration.physical_status',$res->pref_physical_status);
	$this->db->where('registration.religion',$res->pref_religion);
	$this->db->where_in('registration.mother_tongue',$prefmother);
	$this->db->where_in('registration.cast',$prefcast);
	$this->db->where_in('registration.star',$prefstar);
	$this->db->where('registration.food',$res->pref_eating_habbit);
	$this->db->where('registration.smoking',$res->pref_smoking);
	$this->db->where('registration.drinking',$res->pref_drinking);
	$this->db->where_in('registration.country',$prefcountry);
	$this->db->where_in('registration.education',$prefedu);
	$this->db->where_in('registration.occupation',$prefoccupation);
	$this->db->where('registration.income >=',$res->pref_income);
	$this->db->where('registration.inc_currency',$res->pref_income_currency);
	$this->db->where_in('registration.state',$prefstate);
	
	$this->db->where_in('registration.city',$prefcity);
	$this->db->where_not_in('registration.gender',$gender);
	/*
   	$this->db->where_in('user_id',$pro);*/
	$query=$this->db->count_all_results();
	 #echo $this->db->last_query();
		return $query;
}
		
		
public function record_advanced_count() {
		
    // use the term from POST and set it to session
   			$search_term = $this->input->get('gender');
			
			$search_term1 = $this->input->get('religion');
		
			$search_term2 = $this->input->get('age_from');
		
			$search_term3 = $this->input->get('age_to');
		
			$search_term4 = $this->input->get('height_from');
		$search_term5 = $this->input->get('height_to');
		$search_term6 = $this->input->get('cast');
		
			$search_term7 = $this->input->get('mother_tounge');
		
			$search_term9 = $this->input->get('education');
		$search_term8 = $this->input->get('country');
		$search_term10 = $this->input->get('occupation');
		$search_term11 = $this->input->get('income');
		$search_term12 = $this->input->get('star');
	
		$this->load->database();
		if($search_term){
				$this->db->where('gender', $search_term);
			}
  			if($search_term6){
			$this->db->where('cast', $search_term6); 
			}
			if($search_term1){
			$this->db->where('religion',$search_term1);
			}
			if($search_term7){
			$this->db->where('mother_tongue', $search_term7);
			}
			if($search_term8){
			$this->db->where('country', $search_term8);
			}
			if($search_term2){
			$this->db->where('age >= ',$search_term2);
			}
			if($search_term3){
			$this->db->where('age <= ',$search_term3);
			}
			if($search_term4){
			$this->db->where('height >= ',$search_term4);
			}
			if($search_term5){
			$this->db->where('height <= ',$search_term5);
			}
			if($search_term9){
			$this->db->where('education',$search_term9);
			}
			if($search_term10){
			$this->db->where('occupation',$search_term10);
			}
			if($search_term11){
			$this->db->where('income',$search_term11);
			}
			if($search_term12){
			$this->db->where('star',$search_term12);
			}
		$this->db->from('registration');
		$query=$this->db->count_all_results();
		return $query;
	}
public function get_countries($limit, $start) {
		if ($this->input->post('user_id'))
{
    // use the term from POST and set it to session
    	$search_term = $this->input->post('user_id');
    	$this->session->set_userdata('search_term', $search_term);
}
		elseif ($this->session->userdata('search_term'))
{
    // if term is not in POST use existing term from session
    	$search_term = $this->session->userdata('search_term');
}
  		$this->load->database();
		$this -> db -> select('*');
   $this -> db -> from('registration');
    $this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	/*$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
  		$this->db->where('user_id', $search_term);
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		#echo $this->db->last_query();
 
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				
				$data[] = $row;
			}
			return $data;
		}
		return false;
   }
   public function get_regular_search($limit, $start) {
			$search_term = $this->input->get('gender');
			
			$search_term1 = $this->input->get('religion');
		
			$search_term2 = $this->input->get('age_from');
		
			$search_term3 = $this->input->get('age_to');
		
			$search_term4 = $this->input->get('height_from');
			$search_term5 = $this->input->get('height_to');
			$search_term6 = $this->input->get('cast');
		
			$search_term7 = $this->input->get('mother_tounge');
			$search_term9 = $this->input->get('education');
			$search_term8 = $this->input->get('country');
		
  			$this->load->database();
				if($search_term){
				$this->db->where('gender', $search_term);
			}
  			if($search_term6){
			$this->db->where('cast', $search_term6); 
			}
			if($search_term1){
			$this->db->where('religion',$search_term1);
			}
			if($search_term7){
			$this->db->where('mother_tongue', $search_term7);
			}
			if($search_term8){
			$this->db->where('country', $search_term8);
			}
			if($search_term2){
			$this->db->where('age >= ',$search_term2);
			}
			if($search_term3){
			$this->db->where('age <= ',$search_term3);
			}
			if($search_term4){
			$this->db->where('height >= ',$search_term4);
			}
			if($search_term5){
			$this->db->where('height <= ',$search_term5);
			}
			if($search_term9){
			$this->db->where('education',$search_term9);
			}
			$this -> db -> select('*');
   $this -> db -> from('registration');
    $this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
		$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	/*$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
			$this->db->limit($limit, $start);
			$query = $this->db->get();
	#print_r($search_term);
		#echo $this->db->last_query();
 
		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return false;
		
   }
   public function get_anonym_search($limit, $start) {
		$search_term = $this->input->get('gender');
			
			#$search_term1 = $this->input->get('religion');
		
			$search_term2 = $this->input->get('age_from');
		
			$search_term3 = $this->input->get('age_to');
		
			/*$search_term4 = $this->input->get('height_from');
		$search_term5 = $this->input->get('height_to');*/
			$search_term6 = $this->input->get('cast');
		
			$search_term7 = $this->input->get('mother_tounge');
			/*$search_term9 = $this->input->get('education');
			$search_term8 = $this->input->get('country');
			$search_term10 = $this->input->get('occupation');
		$search_term11 = $this->input->get('income');
		$search_term12 = $this->input->get('star');*/
		
  			$this->load->database();
				if($search_term){
				$this->db->where('gender', $search_term);
			}
  			if($search_term6){
			$this->db->where('cast', $search_term6); 
			}
			/*if($search_term1){
			$this->db->where('religion',$search_term1);
			}*/
			if($search_term7){
			$this->db->where('mother_tongue', $search_term7);
			}
			/*if($search_term8){
			$this->db->where('country', $search_term8);
			}*/
			if($search_term2){
			$this->db->where('age >= ',$search_term2);
			}
			if($search_term3){
			$this->db->where('age <= ',$search_term3);
			}
			/*if($search_term4){
			$this->db->where('height >= ',$search_term4);
			}
			if($search_term5){
			$this->db->where('height <= ',$search_term5);
			}
			if($search_term9){
			$this->db->where('education',$search_term9);
			}
			if($search_term10){
			$this->db->where('occupation',$search_term10);
			}
			if($search_term11){
			$this->db->where('income',$search_term11);
			}
			if($search_term12){
			$this->db->where('star',$search_term12);
			}*/
			$this -> db -> select('*');
   $this -> db -> from('registration');
    $this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
		$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	/*$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
			$this->db->limit($limit, $start);
			$query = $this->db->get();
	#print_r($search_term);
		#echo $this->db->last_query();
 
		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return false;
		
   }
   
   
   
   
     public function get_advanced_search($limit, $start) {
		$search_term = $this->input->get('gender');
			
			$search_term1 = $this->input->get('religion');
		
			$search_term2 = $this->input->get('age_from');
		
			$search_term3 = $this->input->get('age_to');
		
			$search_term4 = $this->input->get('height_from');
		$search_term5 = $this->input->get('height_to');
			$search_term6 = $this->input->get('cast');
		
			$search_term7 = $this->input->get('mother_tounge');
			$search_term9 = $this->input->get('education');
			$search_term8 = $this->input->get('country');
			$search_term10 = $this->input->get('occupation');
		$search_term11 = $this->input->get('income');
		$search_term12 = $this->input->get('star');
		
  			$this->load->database();
				if($search_term){
				$this->db->where('gender', $search_term);
			}
  			if($search_term6){
			$this->db->where('cast', $search_term6); 
			}
			if($search_term1){
			$this->db->where('religion',$search_term1);
			}
			if($search_term7){
			$this->db->where('mother_tongue', $search_term7);
			}
			if($search_term8){
			$this->db->where('country', $search_term8);
			}
			if($search_term2){
			$this->db->where('age >= ',$search_term2);
			}
			if($search_term3){
			$this->db->where('age <= ',$search_term3);
			}
			if($search_term4){
			$this->db->where('height >= ',$search_term4);
			}
			if($search_term5){
			$this->db->where('height <= ',$search_term5);
			}
			if($search_term9){
			$this->db->where('education',$search_term9);
			}
			if($search_term10){
			$this->db->where('occupation',$search_term10);
			}
			if($search_term11){
			$this->db->where('income',$search_term11);
			}
			if($search_term12){
			$this->db->where('star',$search_term12);
			}
			$this -> db -> select('*');
   $this -> db -> from('registration');
    $this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
		$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	/*$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
			$this->db->limit($limit, $start);
			$query = $this->db->get();
	#print_r($search_term);
		#echo $this->db->last_query();
 
		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return false;
		
   }
   
   
    public function get_newmatches_all($limit, $start) {
		$session_data = $this->session->userdata('logged_in');
 
 $user= $session_data['user_id'];
 $gender= $session_data['gender'];
		$religion = $session_data['religion'];
  			$this->load->database();
			
			$this -> db -> select('*');
   $this -> db -> from('registration');
    $this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
		$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	/*$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
		$this->db->where('registration.religion',$religion);
	$this->db->where_not_in('registration.user_id',$user);
	$this->db->where_not_in('registration.gender',$gender);
			$this->db->limit($limit, $start);
			$query = $this->db->get();
	#print_r($search_term);
		#echo $this->db->last_query();
 
		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return false;
		
   }
   
   

   public function get_yettobeviewed($limit, $start) {
  			$this->load->database();
			$session_data = $this->session->userdata('logged_in');
 
 $user= $session_data['user_id'];
 $gender= $session_data['gender'];
 $religion = $session_data['religion'];
			$this -> db -> select('*');
   $this -> db -> from('view_status');
   $this->db->where('user_id',$user);
   $query1 = $this->db->get();
   foreach($query1->result() as $res)
   {
	   $pro[]=$res->viewd_id;
		}
		
			
			$this -> db -> select('*');
   $this -> db -> from('registration');
    $this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
		$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	/*$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->where('registration.religion',$religion);
	$this->db->where_not_in('user_id',$pro);
	$this->db->where_not_in('user_id',$user);
	$this->db->where_not_in('registration.gender',$gender);
			$this->db->limit($limit, $start);
			$query = $this->db->get();
	#print_r($search_term);
		#echo $this->db->last_query();
 
		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return false;
		
   }
   
    public function get_viewed($limit, $start) {
  			$this->load->database();
			$session_data = $this->session->userdata('logged_in');
 
 $user= $session_data['user_id'];
 $gender= $session_data['gender'];
  $religion = $session_data['religion'];
			$this -> db -> select('*');
   $this -> db -> from('view_status');
   $this->db->where('user_id',$user);
   $query1 = $this->db->get();
   foreach($query1->result() as $res)
   {
	   $pro[]=$res->viewd_id;
		}
		
			
			$this -> db -> select('*');
   $this -> db -> from('registration');
    $this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
		$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	/*$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->where('registration.religion',$religion);
	$this->db->where_in('user_id',$pro);
	$this->db->where_not_in('registration.gender',$gender);
	
			$this->db->limit($limit, $start);
			$query = $this->db->get();
	#print_r($search_term);
		#echo $this->db->last_query();
 
		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return false;
		
   }
   
   
   
   
       public function get_mutual($limit, $start) {
  			
			$session_data = $this->session->userdata('logged_in');
 
 $user= $session_data['user_id'];
 $gender= $session_data['gender'];

			
			$this->load->database();
$this -> db -> select('*');
   $this -> db -> from('partners_pref');
   $this->db->where('user_id',$user);
   $query1 = $this->db->get();
   foreach($query1->result() as $res)
   	{
		
	   #$pro[]=$res->liked_user;
	}
	$this -> db -> select('*');
   	$this -> db -> from('registration');
	
	#$this->db->where_not_in('gender',gender);
$prefmother = explode(',', $res->pref_mother);
		$prefcast = explode(',', $res->pref_cast);
		$prefstar = explode(',', $res->pref_star);
		$prefedu = explode(',', $res->pref_education);
		$prefoccupation = explode(',', $res->pref_occupation);
		$prefcountry = explode(',', $res->pref_country);
		$prefstate = explode(',', $res->pref_state);
		$prefcity = explode(',', $res->pref_city);
    $this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	/*$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.state_name = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast.cast_id = registration.cast' , 'left' );
	#$this->db->where_in('user_id',$pro);
	$this->db->where('registration.age <=',$res->Pref_age_to);
	$this->db->where('registration.age >=',$res->pref_age_from);
	$this->db->where('registration.height <=',$res->pref_height_to);
	$this->db->where('registration.height >=',$res->pref_height_from);
	$this->db->where('registration.merital_status',$res->pref_status);
	$this->db->where('registration.physical_status',$res->pref_physical_status);
	$this->db->where('registration.religion',$res->pref_religion);
	$this->db->where_in('registration.mother_tongue',$prefmother);
	$this->db->where_in('registration.cast',$prefcast);
	$this->db->where_in('registration.star',$prefstar);
	$this->db->where('registration.food',$res->pref_eating_habbit);
	$this->db->where('registration.smoking',$res->pref_smoking);
	$this->db->where('registration.drinking',$res->pref_drinking);
	$this->db->where_in('registration.country',$prefcountry);
	$this->db->where_in('registration.education',$prefedu);
	$this->db->where_in('registration.occupation',$prefoccupation);
	$this->db->where('registration.income >=',$res->pref_income);
	$this->db->where('registration.inc_currency',$res->pref_income_currency);
	$this->db->where_in('registration.state',$prefstate);
	
	$this->db->where_in('registration.city',$prefcity);
	$this->db->where_not_in('registration.gender',$gender);
	
			$this->db->limit($limit, $start);
			$query = $this->db->get();
	#print_r($search_term);
		#echo $this->db->last_query();
 
		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return false;
		
   }
   
       public function get_short($limit, $start) {
  			$this->load->database();
			$session_data = $this->session->userdata('logged_in');
 
 $user= $session_data['user_id'];
	$this -> db -> select('*');
   $this -> db -> from('shortlisted');
   $this->db->where('shortlisted_id',$user);
   $query1 = $this->db->get();
   foreach($query1->result() as $res)
   {
	   $pro[]=$res->user_id;
		}
		
			
			$this -> db -> select('*');
   $this -> db -> from('registration');
    $this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
		$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	/*$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->where_in('user_id',$pro);
	
			$this->db->limit($limit, $start);
			$query = $this->db->get();
	#print_r($search_term);
		#echo $this->db->last_query();
 
		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return false;
		
   }
   
   
      public function get_like($limit, $start) {
  			$this->load->database();
			$session_data = $this->session->userdata('logged_in');
 
 $user= $session_data['user_id'];
	$this -> db -> select('*');
   $this -> db -> from('like_status');
   $this->db->where('user_id',$user);
   $query1 = $this->db->get();
   foreach($query1->result() as $res)
   {
	   $pro[]=$res->liked_user;
		}
		
			
			$this -> db -> select('*');
   $this -> db -> from('registration');
    $this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
		$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	/*$this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );*/
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->where_in('user_id',$pro);
	
			$this->db->limit($limit, $start);
			$query = $this->db->get();
	#print_r($search_term);
		#echo $this->db->last_query();
 
		if ($query->num_rows() > 0) 
		{
			foreach ($query->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}
		return false;
		
   }
   
   
   	function getCountry()
		{
			$this->db->select('religion_id,religion_name');
			$this->db->from('religions');
			$this->db->order_by('religion_name', 'asc'); 
			$query=$this->db->get();
			return $query; 
		}

	function getData($loadType,$loadId)
		{
			if($loadType=="state"){
			$fieldList='cast_id,cast_name';
			$table='cast';
			$fieldName='religion_id';
			$orderByField='cast_name';						
		}
		
			$this->db->select($fieldList);
			$this->db->from($table);
			$this->db->where($fieldName, $loadId);
			$this->db->order_by($orderByField, 'asc');
			$query=$this->db->get();
			return $query; 
	}
	
	function package()
	
	{
		$this->load->database();
		$this->db->select('*');
		
		
	}
	
}
?>