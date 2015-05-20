<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); we need to call PHP's session object to access it through CI
class individual extends CI_Controller {

function index()
{
$this->load->view('individual');
}

function profile($user_id)
{
	$session_data = $this->session->userdata('logged_in');
$gender=$session_data['gender'];
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
	
	
   #$where = "email='$username' OR user_id='username' AND password='active'";
   $this -> db -> where('registration.user_id', $user_id);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
	foreach ($query->result() as $row)
		{
  $data = array(
  'query1'=>$query->result(),
  'gend'=>$row->gender
       );
		}
	$session_data = $this->session->userdata('logged_in');
 	$email=$session_data['username'];
 	$this->load->model('individual_model');
 
 	$data['user_id']=$user_id;
   	$data['like']=$this->individual_model->like($user_id);
	$user=$user_id;
	#echo $user;
	$this->load->model('individual_model');
	$this->individual_model->view_status($user);
  	#echo $user_id;
 	$data['you']=$this->individual_model->profile($email);
 	$this->load->model('user');
	$data['list']=$this->user->getCountry();
	$data['mother']=$this->user->mother();
	$data['mother1']=$this->user->mother1();
	$data['star']=$this->user->star();
	$data['star1']=$this->user->star1();
	$data['education']=$this->user->education();
	$data['occupation']=$this->user->occupation();
	$data['currency']=$this->user->currency();
	$this->load->model('search_model');
	$data['list1']=$this->search_model->getCountry();
	#$data['list2']=$this->search_model->getCountry2();
	$data['result1']=$this->search_model->get_country();
	$values = explode(',', $row->pref_mother);
	$prefcast = explode(',', $row->pref_cast);
	$prefstar = explode(',', $row->pref_star);
	$prefedu = explode(',', $row->pref_education);
	$prefoccupation = explode(',', $row->pref_occupation);
	$prefcountry = explode(',', $row->pref_country);
	$prefstate = explode(',', $row->pref_state);
	$prefcity = explode(',', $row->pref_city);
	#$prefcountry = explode(',', $row->pref_country);
	#$prefstate = explode(',', $row->pref_state);
	$data['value']=$this->user->prefvalue($values);
	$data['prefstar']=$this->user->prefstar($prefstar);
	$data['prefcast']=$this->user->prefcast($prefcast);
	$data['prefedu']=$this->user->prefedu($prefedu);
	$data['prefoccupation']=$this->user->prefoccupation($prefoccupation);
	$data['prefcountry']=$this->user->prefcountry($prefcountry);
	$data['prefstate']=$this->user->prefstate($prefstate);
	$data['prefcity']=$this->user->prefcity($prefcity);
	$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
	if($data['gend']==$gender)
	{
		$this->load->view('individual_same',$data);
	}
	else
	{
		
	$this->load->view('individual',$data);
	}

}
}