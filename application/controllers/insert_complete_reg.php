<?php
class insert_complete_reg extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->model('complete_reg_model');
$this->load->helper('date');
}
function index1()
{
	$this->load->view('registration');
}

function index2($user_id)
{
	/*$this->load->model('complete_reg_model');
		$this->load->model('search_model');
		$data1['user_id']=$user_id;
		$data1['list']=$this->complete_reg_model->getCountry();
		$data1['country']=$this->search_model->get_country();*/
		$result=$this->complete_reg_model->getlogin($user_id);
		if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->uid,
		 'user_id' => $row->user_id,
         'username' => $row->email,
		 'profile_for' => $row->profile_for,
		 'name' => $row->name,
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
		  'status_paid' => $row->status_paid,
		  'celibrity_status' => $row->celibrity_status,
		 'status' =>TRUE
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
	 redirect("insert_complete_reg_final/index/".$user_id."");
    #$this->load->view('registration',$data1);
   }
		
}
function index()
{
// Including Validation Library
/*$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error" style="color:#F07D77;">*', '*</div>');*/
// Validating Name Field

// Validating Address Field
/*$this->form_validation->set_rules('city', 'city', '');
$this->form_validation->set_rules('physical_status', 'physical_status', '');
$this->form_validation->set_rules('merital_status', 'merital_status', '');
$this->form_validation->set_rules('employed_type', 'employed_type', '');
$this->form_validation->set_rules('sudha_jadakam', 'sudha_jadakam', '');
$this->form_validation->set_rules('family_statas', 'family_statas', '');
$this->form_validation->set_rules('family_type', 'family_type', '');
$this->form_validation->set_rules('family_value', 'family_value', '');
$this->form_validation->set_rules('food', 'food', '');
$this->form_validation->set_rules('smoking', 'smoking', '');
$this->form_validation->set_rules('drinking', 'drinking', '');
$this->form_validation->set_rules('body_type', 'body_type', '');
$this->form_validation->set_rules('complexion', 'complexion', '');
$this->form_validation->set_rules('collage_name', 'collage_name', '');
$this->form_validation->set_rules('income', 'income', '');
$this->form_validation->set_rules('rashi', 'rashi', '');
$this->form_validation->set_rules('f_occupation', 'naf_occupationme', '');
$this->form_validation->set_rules('m_occupation', 'm_occupation', '');
$this->form_validation->set_rules('country', 'country', '');
$this->form_validation->set_rules('about_us', 'about_us', 'callback_custom_min_length[6]|required|xss_clean');
$this->form_validation->set_rules('gothram', 'gothram', '');
$this->form_validation->set_rules('sub_cast', 'sub_cast', '');*/

/*if ($this->form_validation->run() == FALSE)
{
	
	$data['email']=$this->input->post('email');
	$data['user_id']=$this->input->post('user_id');
	$this->load->model('complete_reg_model');
	$result['list']=$this->complete_reg_model->getCountry();
$this->load->view('registration',$data);
}*/
/*else
{*/
$otp=rand(100001,1000000);
/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Get the PHP helper library from twilio.com/docs/php/install
		require_once('twilio-php-master/Services/Twilio.php'); // Loads the library
		
		 
		// Your Account Sid and Auth Token from twilio.com/user/account
		$sid = 'AC0aeb982366aab89f03fb6043f0fa875b'; 
		$token = '4b9ca8ca89b0ab827163eeea0a14650f'; 
		$phoneNumber = $this->input->post('mobile');
        $areaCode = $this->input->post('phonecode');
		$fullNumber = "+".$areaCode.$phoneNumber;
		$client = new Services_Twilio($sid, $token);
		 
		$client->account->messages->sendMessage("+17407395259", $fullNumber, "Your mobile number varification OTP is ".$otp."");
		
	}*/
$data1 = array(

'user_id' => $this->input->post('user_id'),
'merital_status' => $this->input->post('merital_status'),
'subcast' => $this->input->post('sub_cast'),
'gothram' => $this->input->post('gothram'),
'country' => $this->input->post('country'),
'state' => $this->input->post('state'),
'city' => $this->input->post('city'),
'height' => $this->input->post('height'),
'weight' => $this->input->post('weight'),
'physical_status' => $this->input->post('physical_status'),
'body_type' => $this->input->post('body_type'),
'complexion' => $this->input->post('complexion'),
'education' => $this->input->post('education'),
'occupation' => $this->input->post('occupation'),
'inc_currency' => $this->input->post('inc_currency'),
'income' => $this->input->post('income'),
'employed_type' => $this->input->post('employed_type'),
'food' => $this->input->post('food'),
'smoking' => $this->input->post('smoking'),
'drinking' => $this->input->post('drinking'),
'sudha_jadakam' => $this->input->post('sudha_jadakam'),
'star' => $this->input->post('star'),
'rashi' => $this->input->post('rashi'),
'family_statas' => $this->input->post('family_statas'),
'family_type' => $this->input->post('family_type'),
'family_value' => $this->input->post('family_value'),
'f_occupation' => $this->input->post('f_occupation'),
'm_occupation' => $this->input->post('m_occupation'),
'no_sisters' => $this->input->post('no_sisters'),
'no_brothers' => $this->input->post('no_brothers'),
's_married' => $this->input->post('s_married'),
'b_married' => $this->input->post('b_married'),
'collage_name' => $this->input->post('collage_name'),
'mobile_varification' => '0',
'about_us' => $this->input->post('about_us')
);

$datestring = "%Y-%m-%d";
mdate($datestring);
$data1['created_date']=mdate($datestring);
// Transfering Data To Model
$this->complete_reg_model->form_update($data1);
redirect('upload_controller');
// Loading View
#$this->load->view('profile_pic_upload',$data1);
/*}*/
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
}
?>
