<?php
class mobile_varification extends CI_Controller {

function index()
{
	$this->load->view('mobile_varification');
}

function mobile($userid)
{
	$data['user_id']=$userid;
	$this->load->model('complete_reg_model');
	
	$data['result']=$this->complete_reg_model->getregidata($userid);
	
	
	#$data['mobile']=$mobileno;
	
	$this->load->view('mobile_varification',$data);
}

function varification1()
{
	$data['otp']=$this->input->post('otp');
	$data['user_id']=$this->input->post('user_id');
	$user_id=$this->input->post('user_id');
	$data['mobile']=$this->input->post('mobile');
	$this->load->model('mobile_model');

	$data1['result']=$this->mobile_model->varification($data);
	$data1['user_id']=$this->input->post('user_id');
	$data1['email']=$this->input->post('email');
	$data1['mobile']=$this->input->post('mobile');
	
	
	$this->mobile_model->deleteotp($data);
	$this->mobile_model->updateotp($data);
	if($data1['result']->num_rows()>0)
	{
		$this->mobile_model->updateotp();
		$data2['user_id']=$user_id;
	$data2['mobile_status']='1';
	$data2['mobile']=$this->input->post('mobile');
	$this->load->model('complete_reg_model');
	$data2['status']=$this->complete_reg_model->mobile_status($data2);
		redirect("insert_complete_reg/index2/".$user_id."");
		
		/*$this->load->model('complete_reg_model');
		$this->load->model('search_model');
		$data1['list']=$this->complete_reg_model->getCountry();
		$data1['country']=$this->search_model->get_country();
		$this->load->view('registration',$data1);*/
	}
	else
	{
		$data1['error']="your Mobile number not varified please add correct OTP";
	$this->load->view('mobile_varification',$data1);
	}
	}
	
	
	function resend()
{
	$otp=rand(100001,1000000);
	$data['otp']=$otp;
	$data['otp_status']=0;
	$data['user_id']=$this->input->post('user_id');
	$data['mobile']=$this->input->post('mobile');
	$this->load->model('complete_reg_model');
	$this->complete_reg_model->otpresend($data);
$userid=$this->input->post('user_id');
	$data['success']='OTP Send Successfully';
	$data['result']=$this->complete_reg_model->getregidata($userid);
	
	$this->load->view('mobile_varification',$data);
}
function skip($userid)
{
	$this->load->model('complete_reg_model');
	$data['result']=$this->complete_reg_model->getregidata($userid);
	foreach($data['result'] as $row)
	$data2['user_id']=$userid;
	$data2['mobile_status']='0';
	$data2['mobile']=$row->mobile;
	$data2['status']=$this->complete_reg_model->mobile_status($data2);
	$data2['email']=$this->complete_reg_model->getlogin($userid);
	foreach($data2['email'] as $row)
	{
		$email=$row->email;
		$name=$row->name;
	}
	#$this->load->view('mobile_varification');
	
	$this->load->library('email');

$config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->from('ashiq@zillioninfosolutions.com', 'Ashik');
  		$this->email->to($email);
		$this->email->subject('Mobile not varified');
		$html = "Hai $name($userid) <br>...Thank you for registering soulmate matrimony.We provide a wonderfull experience with us.your Mobile number is not varified.";
		#$html = $this->input->post('name');
 		$this->email->message($html);

		$this->email->send();

#echo $this->email->print_debugger();
	redirect("insert_complete_reg/index2/".$userid."");
}
}
?>