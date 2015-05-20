<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class homemodel extends CI_Model {
	
	function profile() {
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
	$this->db->where ( 'registration.profile_highlite' , '1' );
	$this->db->where ( 'registration.celibrity_status' , '0' );
	$this->db->limit(15);
    $query = $this -> db -> get();
	return $query->result();
}

function prime() {
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
	$this->db->join ( 'payment', 'payment.user_id = registration.user_id' , 'left' );
	$this->db->where ( 'payment.package' , 'prime' );
	
	$this->db->limit(15);
    $query = $this -> db -> get();
	return $query->result();
}
	
	function mother_tongue() {
  	$this->load->database();
	$this -> db -> select('*');
	$this -> db -> from('mother_tongue');
    $query = $this -> db -> get();
  	return $query->result();
}


function cast() {
  	$this->load->database();
	$this -> db -> select('cast_name');
	$this -> db -> from('cast');
	$this->db->distinct();
    $query = $this -> db -> get();
  	return $query->result();
}

function success() {
  	$this->load->database();
	$this -> db -> select('*');
	$this -> db -> from('success_story');
	$this->db->where('submit','1');
	$this->db->distinct();
    $query = $this -> db -> get();
  	return $query->result();
}
}