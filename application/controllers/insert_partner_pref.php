<?php
class insert_partner_pref extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->model('partner_pref_model');
}
function hobby()
{
	$this->load->view('hobby');
}
function index()
{
// Including Validation Library
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error" style="color:#F07D77;">*', '*</div>');
// Validating Name Field


$this->form_validation->set_rules('user_id', 'user_id', 'required|min_length[3]|max_length[50]');

if ($this->form_validation->run() == FALSE)
{
$this->load->view('partner_preference',$data1);
}
else
{
/*	$mul_array = $this->input->post('pref_mothertounge[]');
converting array into a string
$mul_val_string = serialize($mul_array); */
$data1 = array(
'user_id' => $this->input->post('user_id'),
'pref_age_from' => $this->input->post('pref_age_from'),
'pref_age_to' => $this->input->post('pref_age_to'),
'pref_status' => $this->input->post('pref_merital'),
'pref_height_from' => $this->input->post('pref_height_from'),
'pref_height_to' => $this->input->post('pref_height_to'),
'pref_physical_status' => $this->input->post('pref_physical_status'),
'pref_religion' => $this->input->post('pref_religion'),
/*'pref_cast' => $this->input->post('pref_cast[]'),
'pref_star' => $this->input->post('pref_star[]'),*/
'pref_eating_habbit' => $this->input->post('pref_eating'),
'pref_drinking' => $this->input->post('pref_drinking'),
'pref_smoking' => $this->input->post('pref_smoking'),
/*'pref_country' => $this->input->post('pref_country[]'),
'pref_education' => $this->input->post('pref_education[]'),
'pref_occupation' => $this->input->post('pref_occupation[]'),*/
'pref_income' => $this->input->post('pref_income'),
'pref_income_currency' => $this->input->post('ref_income_currency'),
'pref_discription' => $this->input->post('partner_disc')
);
/*foreach($data1['pref_mother'] as $playerID) {
	$this->load->database();
     $this->db->insert('partners_pref', array('pref_mother' => $playerID));
  } */
$pref_cast=$this->input->post('pref_cast');
$pref_star=$this->input->post('pref_star');
$pref_country=$this->input->post('pref_country');
$pref_education=$this->input->post('pref_education');
$pref_mother=$this->input->post('pref_mothertounge');
$pref_occupation=$this->input->post('pref_occupation');
$pref_state=$this->input->post('pref_state');
$pref_city=$this->input->post('pref_city');


if($pref_mother==NULL)
{
	$data1['pref_mother'] = "";
}
else
{
$data1['pref_mother'] = implode(',',$pref_mother);
}
if($pref_star==NULL)
{
	$data1['pref_star'] = "";
}
else
{
$data1['pref_star'] = implode(',',$pref_star);
}
if($pref_cast==NULL)
{
	$data1['pref_cast'] = "";
}
else
{
$data1['pref_cast'] = implode(',',$pref_cast);
}
if($pref_country==NULL)
{
	$data1['pref_country'] = "";
}
else
{
$data1['pref_country'] = implode(',',$pref_country);
}
if($pref_education==NULL)
{
	$data1['pref_education'] = "";
}
else
{
$data1['pref_education'] = implode(',',$pref_education);
}
if($pref_occupation==NULL)
{
	$data1['pref_occupation'] = "";
}
else
{
$data1['pref_occupation'] = implode(',',$pref_occupation);
}
if($pref_state==NULL)
{
	$data1['pref_state'] = "";
}
else
{
$data1['pref_state'] = implode(',',$pref_state);
}
if($pref_city==NULL)
{
	$data1['pref_city'] = "";
}
else
{
$data1['pref_city'] = implode(',',$pref_city);
}
// Transfering Data To Model
$this->partner_pref_model->form_update($data1);

// Loading View
redirect('hobby');
}
}
}
?>
