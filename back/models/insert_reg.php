<?php
class insert_reg extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->load->database();
$query=$this->db->get_where('registration',array('email' => $this->input->post('email'))); //check if 'id' field is existed or not

   if($query!=null)  // id found stop
   {
$this->load->view('home');
   }
   else // id not found continue..
   {
      $this->db->insert('registration', $data);
   }    

}
}
?>             