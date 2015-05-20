<?php
class partner_pref_model extends CI_Model{
function form_update($data1) {
$session_data = $this->session->userdata('logged_in');
$user_id = $session_data['user_id'];
$this->load->database();
$this->db->where('user_id', $user_id);
$this->db->update('partners_pref', $data1);
} 
}
?>