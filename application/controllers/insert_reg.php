<?php
class insert_reg extends CI_Controller {
function __construct() {
parent::__construct();
}
public function isEmailExist($email) {
    $this->load->library('form_validation');
    $this->load->model('reg_model');
    $is_exist = $this->reg_model->isEmailExist($email);

    if ($is_exist) {
        $this->form_validation->set_message(
            'isEmailExist', 'Email address is already exist.'
        );    
        return false;
    } else {
        return true;
    }
}

public function isMobileExist($mobile) {
    $this->load->library('form_validation');
    $this->load->model('reg_model');
    $is_exist = $this->reg_model->isMobileExist($mobile);

    if ($is_exist) {
        $this->form_validation->set_message(
            'isMobileExist', 'Mobile Number is already exist.'
        );    
        return false;
    } else {
        return true;
    }
}
function index1()
{
	$this->load->view('home');
}
function index()
{
	// Including Validation Library
	$this->load->library('form_validation');
	$this->form_validation->set_error_delimiters('<div class="error" 	style="color:#F07D77;">*', '*</div>');
// Validating Name Field

// Validating Mobile no. Field
	#$this->form_validation->set_rules('mobile', 'mobile.', 'required|regex_match[/^[0-9]{10}$/]');
// Validating Address Field
	$this->form_validation->set_rules('name', 'name', '');
	$this->form_validation->set_rules('gender[]', 'gender', '');
	$this->form_validation->set_rules('password', 'password', 	'required|min_length[10]|max_length[50]');
	$this->form_validation->set_rules('email','email','trim|required|valid_email|callback_isEmailExist'); // removed is_unique
	$this->form_validation->set_rules('mobile','mobile','trim|required|valid_mobile|callback_isMobileExist'); // removed is_unique

if ($this->form_validation->run() == FALSE)
	{
  
  		$this->load->model('search_model');
		$this->load->helper("url");
  		$data['list']=$this->search_model->getCountry();
		$data['country']=$this->search_model->get_country();
		$this->load->model('homemodel');
		$data['profile_highlight']=$this->homemodel->profile();
		$data['mother']=$this->homemodel->mother_tongue();
		$data['allcast']=$this->homemodel->cast();
		$data['prime']=$this->homemodel->prime();
		$data['success']=$this->homemodel->success();
    	$this->load->view('home',$data);
	}
else
	{
	$data = array(
				'profile_for' => $this->input->post('profile_for'),
				'name' => $this->input->post('name'),
				'gender' => $this->input->post('gender'),
				'day' => $this->input->post('day'),
				'month' => $this->input->post('month'),
				'year' => $this->input->post('year'),
				'religion' => $this->input->post('religion'),
				'cast' => $this->input->post('cast'),
				'mobile' => $this->input->post('mobile'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post("password")),
				'mother_tongue' => $this->input->post('mother_tongue'),
				'phonecode' => $this->input->post('phonecode'),
				'residential_status' => $this->input->post('residential_status'),
				'nationality' => $this->input->post('nationality')
				);
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
		$file_name="S".rand(100001,999999);
		$data['user_id']=$file_name;
		$email=$data['email'];
// Transfering Data To Model
		$datestring = "%Y-%m-%d";
		mdate($datestring);
		$data['created_date']=mdate($datestring);
		$this->reg_model->form_insert($data);
		$this->load->library('email');
		$config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->from('info@soulmatematrimony.com', 'Ashik');
        $this->email->to($email);
		$this->email->subject('This is a html email');
		$name=$data['name'];
		$otp=rand(100001,1000000);
		$emailotp=uniqid($otp);
		$dataemail['user_id']=$file_name;
		$dataemail['email']=$email;
		$dataemail['emailotp']=$emailotp;
		$dataemail['email_status']='0';
		$userid=$file_name;
		$base=base_url();
		
        $html = "Hai $name <br>...Thank you for registering soulmate matrimony.We provide a wonderfull experience with us.your soulmate id is<b>$userid</b><br>.TO varify this email please click this link ".$base."/index.php/account_varification/emailvari/".$userid."/".$emailotp."";
		#$html = $this->input->post('name');
        $this->email->message($html);
		$this->email->send();
		$this->load->model('complete_reg_model');
		$this->load->model('search_model');
		$data['emailvari']=$this->complete_reg_model->email($dataemail);
		$data['list']=$this->complete_reg_model->getCountry();
		$data['country']=$this->search_model->get_country();
		
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
		
	}*/$otpdata['otp']=$otp;
	$otpdata['user_id']=$file_name;
	$otpdata['mobile']=$this->input->post('mobile');
	$mobileno=$this->input->post('mobile');
	$otpdata['otp_status']=0;
		$this->complete_reg_model->otpstatus($otpdata);
		$account_status['account_status']=1;
		$paid_status['status_paid']=1;
		#$this->reg_model->account_status($account_status);
		#$this->reg_model->paid_status($paid_status);
		redirect("mobile_varification/mobile/".$userid."");
		#$this->load->view('mobile_varification',$data);
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
}
?>
