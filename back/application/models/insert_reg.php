<?php
class insert_reg extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->insert('registration', $data);
}
}
?>             