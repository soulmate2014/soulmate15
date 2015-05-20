<?php
class profile_edit_model extends CI_Model{
function __construct() {
parent::__construct();
}
public function form_update_myself() {
$data1 = array(
'about_us' => $this->input->post('about_us'),
'uid' => $this->input->post('uid')
);
$this->load->database();
$this->db->where(array('uid' => $this->input->post('uid')));
$this->db->update('registration', $data1); 
} 
}
?>             