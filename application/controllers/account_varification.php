<?php
class account_varification extends CI_Controller {
function __construct() {
parent::__construct();
}
function emailvari($user_id,$emailotp) {
	$data['user_id']=$user_id;
	$data['emailotp']=$emailotp;

  	$this->load->database();
	$this -> db -> select('*');
	$this -> db -> from('email_varification');
	$this->db->where($data);
	$query = $this -> db -> get();
	if($query->num_rows()>0)
	{
		$this->load->model('complete_reg_model');
	$data1['result']=$this->complete_reg_model->emailstatus($user_id);	
	redirect('login');
	}
  	
}
	
	

}