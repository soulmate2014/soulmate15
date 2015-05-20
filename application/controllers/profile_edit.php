<?php
class profile_edit extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('profile_edit_model');
$this->load->helper('url');
}

function index()
{
	$data = array(
		'about_us' => $this->input->post('about_us'),
		'uid' => $this->input->post('uid')
		);
		$this->profile_edit_model->form_update_myself();
		redirect('myaccount');
}
function basic()
{
	$data = array(
		'weight' => $this->input->post('weight'),
		
		'day' => $this->input->post('day'),
		'month' => $this->input->post('month'),
		'year' => $this->input->post('year'),
		'physical_status' => $this->input->post('physical_status'),
		'height' => $this->input->post('height'),
		'mother_tongue' => $this->input->post('mother_tongue')
	);
	$data['body_type']=$this->input->post('body_type');
		$this->load->model('profile_edit_model');
		$this->profile_edit_model->form_update_basic($data);
		redirect('myaccount');
}
function religious()
{
$data = $_POST;

$this->load->model('profile_edit_model');
$this->profile_edit_model->form_update_religion($data);
redirect('myaccount');
}


function location()
{
$data = $_POST;

$this->load->model('profile_edit_model');
$this->profile_edit_model->form_update_location($data);
redirect('myaccount');

}

function professional()
{
$data = $_POST;

$this->load->model('profile_edit_model');
$this->profile_edit_model->form_update_professional($data);
redirect('myaccount');

}

function family()
{
$data = $_POST;

$this->load->model('profile_edit_model');
$this->profile_edit_model->form_update_family($data);
redirect('myaccount');

}
function basic_pref()
{
$data = $_POST;
$pref_star=$this->input->post('pref_star');
$pref_mother=$this->input->post('pref_mother');
$pref_cast=$this->input->post('pref_cast');
$data['pref_star'] = implode(',',$pref_star);
$data['pref_mother'] = implode(',',$pref_mother);
$data['pref_cast'] = implode(',',$pref_cast);

$this->load->model('profile_edit_model');
$this->profile_edit_model->form_update_basic_pref($data);
redirect('myaccount');

}
function professional_pref()
{
$data = $_POST;
$pref_education=$this->input->post('pref_education');
$pref_occupation=$this->input->post('pref_occupation');
$data['pref_education'] = implode(',',$pref_education);
$data['pref_occupation'] = implode(',',$pref_occupation);


$this->load->model('profile_edit_model');
$this->profile_edit_model->form_update_prof_pref($data);
redirect('myaccount');

}



function location_pref()
{
$data = $_POST;
$pref_country=$this->input->post('pref_country');
$pref_state=$this->input->post('pref_state');
$pref_city=$this->input->post('pref_city');
$data['pref_country'] = implode(',',$pref_country);
$data['pref_state'] = implode(',',$pref_state);
$data['pref_city'] = implode(',',$pref_city);


$this->load->model('profile_edit_model');
$this->profile_edit_model->form_update_location_pref($data);
redirect('myaccount');

}
}
?>