<?php
class myhome extends CI_Controller {
public function __construct() {
parent::__construct();
/*$this->load->model('profile_edit_model');*/
$this->load->helper('url');
$this->load->model('myhome_model');
}
function index($message)
{
	if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
	 $data['username'] = $session_data['username'];
	 
	 $email=$session_data['username'];
	  $username = $session_data['username'];
	  $user_id = $session_data['user_id'];
	  $gender = $session_data['gender'];
	  	
	 $religion = $session_data['religion'];
	  #print_r($gender);
	 
	$this->load->database();
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
	$this->db->where_not_in('registration.user_id', $user_id);
	$this->db->where_not_in('registration.gender', $gender);
	
	
   
   $this -> db -> limit(10);
   $query = $this -> db -> get();
  
   #echo $this->db->last_query();

	  $data['query1']=$query->result();
	  #print_r($query);
  /*
   foreach ($query->result() as $row)
		{
  $data = array(
  
 'name' => $row->name
  );
/*  $this->load->database();
	$this -> db -> select('viewed_id');
   $this -> db -> from('view_status');
    $this->db->where('user_id',$user_id);
   $query1 = $this->db->get();
  
   $user=$query1->result();
   $data['user']=$query1->result();*/
  #$this->load->model('myhome_model');
  #$data['profile']=$this->myhome_model->myhome($user);

   /*$data['username'] = $session_data['username'];
  
}*/
$this->load->helper('url');
 $session_data = $this->session->userdata('logged_in');
 
 $user= $session_data['user_id'];
 $this->load->model('myhomem');
 $profile=$this->myhome_model->profile_yet($user);
$data['block']=$this->myhome_model->bolck_user($user);
$data['shortlist']=$this->myhome_model->shortlist($user);
$data['shortlisting']=$this->myhome_model->short1($user);
$data['intrested']=$this->myhome_model->intrest($user);

$data['profile']=$profile;
$data['viewed']=$this->myhome_model->viewed($user);
$data['like']=$this->myhome_model->liked($user);
$data['image_status']=$this->myhome_model->image();
if($message=="procedtohome"){
$data['message']=$message;
	
}
if($message=="succespayment"){
	$data['paysucces']=$message;
	
}
$this->load->view('myhome',$data);
   }
	
}

}