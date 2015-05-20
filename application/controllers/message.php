<?php
class message extends CI_Controller {
public function __construct() {
parent::__construct();
/*$this->load->model('profile_edit_model');*/
$this->load->helper('url');

}
function index()
{
	
	/*if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
	 $data['username'] = $session_data['username'];
	 $data['user_id'] = $session_data['user_id'];
	 $email=$session_data['username'];
	  $username = $session_data['username'];
	  $user_id = $session_data['user_id'];
	  
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
	$this->db->where_not_in('registration.user_id', $user_id);
	
	
   #$where = "email='$username' OR user_id='username' AND password='active'";
   #$this -> db -> where('email', $data['username']);
   $this -> db -> limit(10);
   $query = $this -> db -> get();
   foreach ($query->result() as $row)
		{
  $data = array(
  'query1'=>$query->result(),
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
  #$data*/['profile']=$this->myhome_model->myhome($user);
  
  
  
/*}
   }*/
   	$this->load->model('message_model');
   	$data['intrest_msg']=$this->message_model->intrest();
	$data['new_message']=$this->message_model->new_msg();
	$data['rejected']=$this->message_model->reject();
	$data['accept']=$this->message_model->accept();
	$data['replaid']=$this->message_model->replaid();
	$data['notreplaid']=$this->message_model->notreplaid();
	$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
	$this->load->view('message',$data);
}
function request_video()
{
	$status=$this->input->post('status');
	$user=$this->input->post('user_id');
	$this->load->database();
	$data['video_request']=$status;
	$this->db->where('user_id',$user);
	$this->db->update('prof_video',$data);
  # echo $this->db->last_query();
   #redirect('message');
}


function reject_intrest($reject_id)
{
	$this->load->model('message_model');
	 #$data1['intrest_msg']=$this->message_model->intrest();
   	$data['not_intrest']=$this->message_model->not_intrest($reject_id);
   
   redirect('message');
}

function intrest_accept($reject_id)
{
	$this->load->model('message_model');
	 #$data1['intrest_msg']=$this->message_model->intrest();
   	$data['intrest_accept']=$this->message_model->intrest_accept($reject_id);
   
   	redirect('message');
}
function sent()
{
	
	/*if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
	 $data['username'] = $session_data['username'];
	 $data['user_id'] = $session_data['user_id'];
	 $email=$session_data['username'];
	  $username = $session_data['username'];
	  $user_id = $session_data['user_id'];
	  
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
	$this->db->where_not_in('registration.user_id', $user_id);
	
	
   #$where = "email='$username' OR user_id='username' AND password='active'";
   #$this -> db -> where('email', $data['username']);
   $this -> db -> limit(10);
   $query = $this -> db -> get();
   foreach ($query->result() as $row)
		{
  $data = array(
  'query1'=>$query->result(),
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
  #$data*/['profile']=$this->myhome_model->myhome($user);
  
  
  
/*}
   }*/
   	$this->load->model('message_model');
   	$data['intrest_msg']=$this->message_model->intrest();
	$data['read_status']=$this->message_model->read_status();
	$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
	$this->load->view('message_sent',$data);

}
public function read_int($sta)
{
	$session_data = $this->session->userdata('logged_in');
	$username = $session_data['username'];
	$user_id = $session_data['user_id'];
	$this->load->database();
	$data['read_intrest']=$sta;
	$this->db->where('intrested_id',$user_id);
	$this->db->update('intrestlist',$data);
	echo $this->db->last_query();
}
}