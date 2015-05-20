<?php
class insert_partner_pref extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->model('partner_pref_model');
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
$data1['pref_mother'] = implode(',',$pref_mother);
$data1['pref_star'] = implode(',',$pref_star);
$data1['pref_cast'] = implode(',',$pref_cast);
$data1['pref_country'] = implode(',',$pref_country);
$data1['pref_education'] = implode(',',$pref_education);
$data1['pref_mother'] = implode(',',$pref_mother);
$data1['pref_occupation'] = implode(',',$pref_occupation);
			
// Transfering Data To Model
$this->partner_pref_model->form_update($data1);

// Loading View
$this->load->view('upload_success',$data1);
}
}
}
?>
