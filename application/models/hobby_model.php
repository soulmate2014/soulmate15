<?php
class hobby_model extends CI_Model{
function __construct() {
parent::__construct();
}
function insert($data){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->where(array('user_id' => $this->input->post('user_id')));
$this->db->update('hobby', $data);
#echo $this->db->last_query();
}
}
?>