<?php
class File_model extends CI_Model{
function __construct() {
parent::__construct();
}
function form1_insert($newdb){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->where(array('email' => $this->input->post('email')));
$this->db->update('registration', $newdb);
}
}
?>             