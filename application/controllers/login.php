<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->helper('date');
 }

 function index()
 {  
  $this->load->helper('date');
   if($this->session->userdata('logged_in'))
   {
	
     $session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
$this->load->model('user');
$this->user->logedin();
	 $data['username'] = $session_data['username'];
	  $data['user_id'] = $session_data['user_id'];
	  $user_id = $session_data['user_id'];
	  $this->load->model('user');
$this->user->logedin();
	$this->load->database();
	 $this -> db -> select('*');
   $this -> db -> from('registration');
    $this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );
	$this->db->join ( 'country', 'country.iso3 = registration.country' , 'left' );
	#$this->db->join ( 'state', 'state.stateID = registration.state' , 'left' );
	$this->db->join ( 'mother_tongue', 'mother_tongue.mother_id = registration.mother_tongue' , 'left' );
	$this->db->join ( 'cast', 'cast_id = registration.cast' , 'left' );
	$this->db->join ( 'religions', 'religions.religion_id = registration.religion' , 'left' );
	$this->db->join ( 'star', 'star.star_id = registration.star' , 'left' );
	$this->db->join ( 'education', 'education.education_id = registration.education', 'left' );
	$this->db->join ( 'occupation', 'occupation.occupation_id = registration.occupation', 'left' );
	$this->db->join ( 'currency', 'currency.id_currency = registration.inc_currency', 'left' );
	
	
   #$where = "email='$username' OR user_id='username' AND password='active'";
   $this -> db -> where('email', $data['username']);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   foreach ($query->result() as $row)
		{
			/*print_r($row->iso3);
			print_r($row->country_name);*/
  $data = array(
  'query1'=>$query->result(),
         'id' => $row->uid,
		
         'username' => $row->email,
		 'profile_for' => $row->profile_for,
		 'name' => $row->name,
		 'day' => $row->day,
		 'month' => $row->month,
		 'year' => $row->year,
		 'gender' => $row->gender,
		 'religion' => $row->religion,
		 'cast' => $row->cast,
		 'mobile' => $row->mobile,
		 'mother_tongue' => $row->mother_tongue,
		 'country' => $row->country,
		 'merital_status' => $row->merital_status,
		 'subcast' => $row->subcast,
		 'gothram' => $row->gothram,
		 'state' => $row->state,
		 'city' => $row->city,
		 'height' => $row->height,
		 'weight' => $row->weight,
		 'body_type' => $row->body_type,
		 'complexion' => $row->complexion,
		 'education' => $row->education,
		 'occupation' => $row->occupation,
		 'inc_currency' => $row->inc_currency,
		 'income' => $row->income,
		 'employed_type' => $row->employed_type,
		 'food' => $row->food,
		 'smoking' => $row->smoking,
		 'drinking' => $row->drinking,
		 'sudha_jadakam' => $row->sudha_jadakam,
		 'star' => $row->star,
		 'rashi' => $row->rashi,
		 'family_statas' => $row->family_statas,
		 'family_type' => $row->family_type,
		 'family_value' => $row->family_value,
		 'about_us' => $row->about_us,
		 'file_name' => $row->file_name,
		 'pref_age_from' => $row->pref_age_from,
		 'Pref_age_to' => $row->Pref_age_to,
		 'status' =>TRUE
       );
}


  //calculate years of age (input string: YYYY-MM-DD)
$this->load->helper('date');
	  $year=$data['year'];
	  $month=$data['month'];
	# $day=$data['day'];
      $year_diff  = date("Y") - $year;
    $month_diff = date("m") - $month;
   #$day_diff   = date("d") - $day;
if ($month_diff < 0)
{
    $year_diff=$year_diff-1;
}
    #return $year_diff;

$data['age']=$year_diff;
 
 
$p1=$data['username'];
$p2=$data['profile_for'];
$p3=$data['name'];
$p4=$data['gender'];
$p5=$data['religion'];
$p6=$data['cast'];
$p7=$data['mobile'];
$p8=$data['mother_tongue'];
$p9=$data['country'];
$p10=$data['merital_status'];
$p11=$data['state'];
$p12=$data['city'];
$p13=$data['body_type'];
$p14=$data['education'];
$p15=$data['occupation'];
$p16=$data['file_name'];
if($p1=='')
{
	$p1=0;
}
else
{
	$p1=4.5;
}
if($p2=='')
{
	$p2=0;
}
else
{
	$p2=4.5;
}
if($p3=='')
{
	$p3=0;
}
else
{
	$p3=4.5;
}
if($p4=='')
{
	$p4=0;
}
else
{
	$p4=4.5;
}
if($p5=='')
{
	$p5=0;
}
else
{
	$p5=4.5;
}
if($p6=='')
{
	$p6=0;
}
else
{
	$p6=4.5;
}
if($p7=='')
{
	$p7=0;
}
else
{
	$p7=4.5;
}
if($p8=='')
{
	$p8=0;
}
else
{
	$p8=4.5;
}
if($p9=='')
{
	$p9=0;
}
else
{
	$p9=4.5;
}
if($p10=='')
{
	$p10=0;
}
else
{
	$p10=4.5;
}
if($p11=='')
{
	$p11=0;
}
else
{
	$p11=4.5;
}
if($p12=='')
{
	$p12=0;
}
else
{
	$p12=4.5;
}
if($p13=='')
{
	$p13=0;
}
else
{
	$p13=4.5;
}
if($p14=='')
{
	$p14=0;
}
else
{
	$p14=4.5;
}
if($p15=='')
{
	$p15=0;
}
else
{
	$p15=4.5;
}
if($p16=='')
{
	$p16=0;
}
else
{
	$p16=4.5;
}
$data['progress']=$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10+$p11+$p12+$p13+$p14+$p15+$p16;
#$this->load->model('model');
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
		#$data['prefcountry']=$this->user->prefcountry($prefcountry);
		#$data['prefstate']=$this->user->prefstate($prefstate);
		#print_r($values)
		#$this->load->view('index',$result);
		#$this->load->view('footer');
		$cnt=$data['country'];
	
		$data['country1']=$this->user->country($cnt);
		#print_r($data['country1']);
	 #$this->load->view('myaccount', $data);
	 redirect('myhome/index/2', 'refresh');
   }
   else
   {
     //If no session, redirect to login page
     redirect('home', 'refresh');
   }
 }
public function loadData()
	{
		$loadType=$_POST['loadType'];
		$loadId=$_POST['loadId'];

		$this->load->model('complete_reg_model');
		$result=$this->complete_reg_model->getData($loadType,$loadId);
		$HTML="";
		
		if($result->num_rows() > 0){
			foreach($result->result() as $list){
			$HTML.="<option value='".$list->name."'>".$list->name."</option>";
			}
		}
		echo $HTML;
	}
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('login', 'refresh');
 }
 
}
 
?>