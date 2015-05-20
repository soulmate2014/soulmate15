<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class payment extends CI_Controller {
	public function __construct() {
	parent::__construct();
	$this->load->model('search_model');
	$this->load->model('payment_model');
	$this->load->helper("url");

}
function index()
{
	$data['start3']=$this->payment_model->payment();
	foreach($data['start3'] as $start)
	{
		$data1['s3amount']=$start->amount;
		$data1['s3contact']=$start->no_of_viewcontact;
		$data1['s3sms']=$start->no_of_sms;
	}
	
	$data['start6']=$this->payment_model->payment1();
	foreach($data['start6'] as $start)
	{
		$data1['s6amount']=$start->amount;
		$data1['s6contact']=$start->no_of_viewcontact;
		$data1['s6sms']=$start->no_of_sms;
	}
	
	$data['start9']=$this->payment_model->payment2();
	foreach($data['start9'] as $start)
	{
		$data1['s9amount']=$start->amount;
		$data1['s9contact']=$start->no_of_viewcontact;
		$data1['s9sms']=$start->no_of_sms;
	}
	
	$data['Standard3']=$this->payment_model->payment3();
	foreach($data['Standard3'] as $start)
	{
		$data1['st3amount']=$start->amount;
		$data1['st3contact']=$start->no_of_viewcontact;
		$data1['st3sms']=$start->no_of_sms;
	}
	
	$data['Standard6']=$this->payment_model->payment4();
	foreach($data['Standard6'] as $start)
	{
		$data1['st6amount']=$start->amount;
		$data1['st6contact']=$start->no_of_viewcontact;
		$data1['st6sms']=$start->no_of_sms;
	}
	
	$data['Standard9']=$this->payment_model->payment5();
	foreach($data['Standard9'] as $start)
	{
		$data1['st9amount']=$start->amount;
		$data1['st9contact']=$start->no_of_viewcontact;
		$data1['st9sms']=$start->no_of_sms;
	}
	
	$data['premium3']=$this->payment_model->payment6();
	foreach($data['premium3'] as $start)
	{
		$data1['pre3amount']=$start->amount;
		$data1['pre3contact']=$start->no_of_viewcontact;
		$data1['pre3sms']=$start->no_of_sms;
	}
	
	$data['premium6']=$this->payment_model->payment7();
	foreach($data['premium6'] as $start)
	{
		$data1['pre6amount']=$start->amount;
		$data1['pre6contact']=$start->no_of_viewcontact;
		$data1['pre6sms']=$start->no_of_sms;
	}
	
	$data['premium9']=$this->payment_model->payment8();
	foreach($data['premium9'] as $start)
	{
		$data1['pre9amount']=$start->amount;
		$data1['pre9contact']=$start->no_of_viewcontact;
		$data1['pre9sms']=$start->no_of_sms;
	}
	
	$data['prime3']=$this->payment_model->payment9();
	foreach($data['prime3'] as $start)
	{
		$data1['pri3amount']=$start->amount;
		$data1['pri3contact']=$start->no_of_viewcontact;
		$data1['pri3sms']=$start->no_of_sms;
	}
	
	$data['prime6']=$this->payment_model->payment10();
	foreach($data['prime6'] as $start)
	{
		$data1['pri6amount']=$start->amount;
		$data1['pri6contact']=$start->no_of_viewcontact;
		$data1['pri6sms']=$start->no_of_sms;
	}
	$data['soulmate']=$this->payment_model->payment11();
	foreach($data['soulmate'] as $start)
	{
		$data1['soulamount']=$start->amount;
		$data1['soulcontact']=$start->no_of_viewcontact;
		$data1['soulsms']=$start->no_of_sms;
	}
	$this->load->model('myhome_model');
		$data1['image_status']=$this->myhome_model->image();
	$this->load->view('payment',$data1);
}

		/*		  3month  		6 month			9month
                    
Start up	:		10			11				12
Standerd	:		13			14				15
premium		:		16			17				18
prime		:		19			20
Soulmate sp	:		21*/
function paymentcalculate()
{
	$package=$this->input->post('package');
	$addonhighlite=$this->input->post('addon1');
	$addonastro=$this->input->post('addon2');
	#echo $addonhighlite;
	#echo $addonastro;
	/*if($addonhighlite=='1000')
	{
	$data= array(
    'amount1' => $this->input->post('addon1'),
    'add1' => 'Profile Heighliter'
);
	}
	
	
	if($addonastro=='2000')
	{
	$data= array(
    'amount2' => $this->input->post('addon2'),
    'add2' => 'Astro Match'
);
	}*/
	
	if($package=="10")
	{
	$data= array(
    'amount' => $this->input->post('p1'),
    'package' => 'Start Up',
    'month' => '3 Months',
	'add1' => $addonhighlite,
	'add2' => $addonastro
	);
		$data["total"]=$data['amount'] +$data['add1'] +$data['add2'];

	}if($package=="11")
	{
		
		$data= array(
    'amount' => $this->input->post('p2'),
    'package' => 'Start Up',
    'month' => '6 Months',
	'add1' => $addonhighlite,
	'add2' => $addonastro
	);
		$data["total"]=$data['amount'] +$data['add1'] +$data['add2'];
	}
	if($package=="12")
	{
		
		$data= array(
    'amount' => $this->input->post('p3'),
    'package' => 'Start Up',
    'month' => '9 Months',
	'add1' => $addonhighlite,
	'add2' => $addonastro
	);
		$data["total"]=$data['amount'] +$data['add1'] +$data['add2'];
	}
	if($package=="13")
	{
		
		$data= array(
    'amount' => $this->input->post('p4'),
    'package' => 'Standard',
    'month' => '3 Months',
	'add1' => $addonhighlite,
	'add2' => $addonastro
	);
		$data["total"]=$data['amount'] +$data['add1'] +$data['add2'];
	}
	if($package=="14")
	{
		
		$data= array(
    'amount' => $this->input->post('p5'),
    'package' => 'Standard',
    'month' => '6 Months',
	'add1' => $addonhighlite,
	'add2' => $addonastro
	);
		$data["total"]=$data['amount'] +$data['add1'] +$data['add2'];
	}
	if($package=="15")
	{
		
		$data= array(
    'amount' => $this->input->post('p6'),
    'package' => 'Standard',
    'month' => '9 Months',
	'add1' => $addonhighlite,
	'add2' => $addonastro
	);
		$data["total"]=$data['amount'] +$data['add1'] +$data['add2'];
	}
	if($package=="16")
	{
		
		$data= array(
    'amount' => $this->input->post('p7'),
    'package' => 'premium',
    'month' => '3 Months',
	'add1' => 1000,
	'add2' => 2000
	);
	$data["total"]=$data['amount'];
	}
	if($package=="17")
	{
		
		$data= array(
    'amount' => $this->input->post('p8'),
    'package' => 'premium',
    'month' => '6 Months',
	'add1' => 1000,
	'add2' => 2000
	);
	$data["total"]=$data['amount'];
	}
	if($package=="18")
	{
		
		$data= array(
    'amount' => $this->input->post('p9'),
    'package' => 'premium',
    'month' => '9 Months',
	'add1' => 1000,
	'add2' => 2000
	);
	$data["total"]=$data['amount'];
	}
	
	
	if($package=="19")
	{
		
		$data= array(
    'amount' => $this->input->post('p10'),
    'package' => 'prime',
    'month' => '3 Months',
	'add1' => 1000,
	'add2' => 2000
	);
	$data["total"]=$data['amount'];
	}
	
	if($package=="20")
	{
		
		$data= array(
    'amount' => $this->input->post('p11'),
    'package' => 'prime',
    'month' => '6 Months',
	'add1' => 1000,
	'add2' => 2000
	);
	$data["total"]=$data['amount'];
	}
	
	if($package=="21")
	{
		
		$data= array(
    'amount' => $this->input->post('p12'),
    'package' => 'soulmate special',
    'month' => '18 Months',
	'add1' => 1000,
	'add2' => 2000
	);
	$data["total"]=$data['amount'];
	}
	

	
/*	if($addonhighlite=='100')
	{
		$data= array(
    'amount1' => $this->input->post('p13'),
    'addon1' => 'Profile highliter'
);
	}
	else
	{
		$data= array(
    'amount1' => '0'
);
	}
	
	
	if(isset($addonastro))
	{
		$data= array(
    'amount2' => $this->input->post('p14'),
    'addon2' => 'Astromatcher'
);
	}
	else
	{
		$data= array(
    'amount2' => '0'
);
	}
	$data['total']=$data['amount']+$data['amount1']+$data['amount2'];*/
	#$data['addon']=$addonhighlit + $addonastro;
	#$data['total']=$data['amount'];
	#print_r($data['total']);
	$this->load->model('myhome_model');
	$data['image_status']=$this->myhome_model->image();
	$this->load->view('paymentcheckout',$data);
	
	
}
}