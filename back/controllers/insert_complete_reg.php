<?php
class insert_complete_reg extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->model('complete_reg_model');
}
function index()
{
// Including Validation Library
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error" style="color:#F07D77;">*', '*</div>');
// Validating Name Field


$this->form_validation->set_rules('sub_cast', 'sub_cast', 'required|min_length[3]|max_length[50]');

if ($this->form_validation->run() == FALSE)
{
$this->load->view('registration',$data1);
}
else
{
$data1 = array(
'email' => $this->input->post('email'),
'user_id' => $this->input->post('user_id'),
'merital_status' => $this->input->post('merital_status'),
'subcast' => $this->input->post('sub_cast'),
'gothram' => $this->input->post('gothram'),
'state' => $this->input->post('state'),
'city' => $this->input->post('city'),
'height' => $this->input->post('height'),
'weight' => $this->input->post('weight'),
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
'about_us' => $this->input->post('about_us')
);
// Transfering Data To Model
$this->complete_reg_model->form_update($data1);

// Loading View
$this->load->view('profile_pic_upload',$data1);
}
}
}
?>
