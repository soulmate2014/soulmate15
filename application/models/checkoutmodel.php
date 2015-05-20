<?php
Class checkoutmodel extends CI_Model
{
	
	function index()
	{
		date_default_timezone_set('Asia/Kolkata');
	$this->load->helper('date');
	$this->load->database();
	$user_id=$this->input->post('user_id');
	
	$data['all']=$_POST;
		$data11['package_start']= date('Y-m-d H:i:s');
	$this->db->where('user_id',$user_id);
	$this->db->update('payment',$data['all']);
	$this->db->update('payment',$data11);
	#echo  $this->db->last_query();
	$data1['package']=$this->input->post('package');
	$data1['profile_highlite']=$this->input->post('profile_highlite');
	$data1['astro_match']=$this->input->post('profile_highlite');
	$data1['status_paid']=1;
	$this->db->where('user_id',$user_id);
	$this->db->update('registration',$data1);
	#echo  $this->db->last_query();
	
	}
	
}