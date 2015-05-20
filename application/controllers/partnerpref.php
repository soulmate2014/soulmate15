<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class partnerpref extends CI_Controller {    
public function __construct() {
    parent::__construct();   

}

function partner()
{

 	$session_data = $this->session->userdata('logged_in');
$userid= $session_data['user_id'];

					
$this->load->model('complete_reg_model');
$data['user_id']=$userid;
		$data['list']=$this->complete_reg_model->getCountry();
		$this->load->model('file_model');
		$data['religion']=$this->file_model->getreligion();
		$this->load->model('user');
		$data['star']=$this->user->star();
		$data['mother']=$this->user->mother();
		$data['education']=$this->user->education();
		$data['occupation']=$this->user->occupation();
		$data['currency']=$this->user->currency();
		$this->load->view('partner_preference',$data);

}
}
?>