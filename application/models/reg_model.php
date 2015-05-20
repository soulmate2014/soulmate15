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


function isMobileExist($mobile) {
	$this->load->database();
    $this->db->select('mobile');
    $this->db->where('mobile', $mobile);
    $query = $this->db->get('registration');

    if ($query->num_rows() > 0) {
        return true;
    } else {
        return false;
    }
}
function form_insert($data){
// Inserting in Table(students) of Database(college)
$data['account_status']=1;
		$data['status_paid']=0;
$data1['user_id']=$data['user_id'];
$this->load->database();
$this->db->insert('registration', $data);
$this->db->insert('partners_pref', $data1);
$this->db->insert('hobby', $data1);
$this->db->insert('profile_photos', $data1);
$this->db->insert('payment', $data1);
$this->db->insert('prof_video', $data1);

}
}
?>