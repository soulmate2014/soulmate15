<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class insert_complete_reg_final extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->helper('date');
 }
 
  function index($user_id)
 {
	 $this->load->model('user');
	 $this->load->model('complete_reg_model');
		$this->load->model('search_model');
		$data1['user_id']=$user_id;
		$data1['list']=$this->complete_reg_model->getCountry();
		$data1['country']=$this->search_model->get_country();
		$data1['education']=$this->user->education();
		$data1['occupation']=$this->user->occupation();
		$this->load->view('registration',$data1);
 }
}