<?php
class profile_edit extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->model('profile_edit_model');
}
function index()
{
$data = array(
'about_us' => $this->input->post('about_us'),
'uid' => $this->input->post('uid')
);
$this->profile_edit_model->form_update_myself();
$this->load->database();
	 $this -> db -> select('*');
   $this -> db -> from('registration');
    $this->db->join ( 'partners_pref', 'partners_pref.user_id = registration.user_id' , 'left' );
   #$where = "email='$username' OR user_id='username' AND password='active'";
   $this -> db -> where('uid', $data['uid']);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   foreach ($query->result() as $row)
{
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
$data['not_mention']='Not mentioned';

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
$this->load->view('myaccount',$data);
}
}
?>
