<?php
class reg_model extends CI_Model{
function __construct() {
parent::__construct();
}
function isEmailExist($email) {
	$this->load->database();
    $this->db->select('email');
    $this->db->where('email', $email);
    $query = $this->db->get('registration');

    if ($query->num_rows() > 0) {
        return true;
    } else {
        return false;
    }
}
function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->insert('registration', $data);
}
}
?>             