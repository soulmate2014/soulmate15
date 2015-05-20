<?php
class complete_reg_model extends CI_Model{
function __construct() {
parent::__construct();
}
public function form_update() {
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
$this->load->database();
$this->db->where(array('email' => $this->input->post('email')));
$this->db->update('registration', $data1); 
} 
}
?>             