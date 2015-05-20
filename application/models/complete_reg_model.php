<?php
class complete_reg_model extends CI_Model{
function __construct() {
parent::__construct();
}
public function form_update($data1) {
	$session_data = $this->session->userdata('logged_in');
$user_id= $session_data['user_id'];
$this->load->database();
$this->db->where('user_id',$user_id);
$this->db->update('registration', $data1); 
#$this->db->last_query();

} 
public function otpstatus($otpdata) {
$this->load->database();
$this->db->insert('smsotp', $otpdata); 
}
function otpresend($otpdata) {
$this->load->database();
$this->db->insert('smsotp', $otpdata); 
$this->load->database();
		$data2['mobile']=$otpdata['mobile'];
		$user_id=$this->input->post('user_id');
		$this->db->where('user_id',$user_id);
		$this->db->update('registration', $data2); 
		#echo $this->db->last_query();
}
function getCountry(){
		$this->db->select('iso3,country_name');
		$this->db->from('country');
		$this->db->order_by('country_name', 'asc'); 
		$query=$this->db->get();
		return $query; 
	}
function getData($loadType,$loadId){
		if($loadType=="state"){
			$fieldList='state_name as name';
			$table='state';
			$fieldName='iso3';
			$orderByField='state_name';						
		}else{
			$fieldList='city_name as name';
			$table='city';
			$fieldName='city_state';
			$orderByField='city_name';	
		}
		
		$this->db->select($fieldList);
		$this->db->from($table);
		$this->db->where($fieldName, $loadId);
		$this->db->order_by($orderByField, 'asc');
		$query=$this->db->get();
		return $query; 
	}
	
	function email($dataemail){
		$this->load->database();
		$query=$this->db->insert('email_varification', $dataemail);  
		return $query; 
	}
	
	function emailstatus($user_id){
		$this->load->database();
		$data2['email_status']='1';
		$this->db->where('user_id',$user_id);
		$query=$this->db->update('email_varification', $data2); 
		return $query; 
	}
	
	function getregidata($userid){
		$this->load->database();
	$this->db->select('*');
		$this->db->from('registration');
		$this->db->where('user_id', $userid);
		$query=$this->db->get();
		return $query->result();
	}
	function getlogin($userid){
		$this->load->database();
	$this->db->select('*');
		$this->db->from('registration');
		$this->db->where('user_id', $userid);
		$query=$this->db->get();
		return $query->result();
	}
	
	function mobile_status($data2){
		
		$this->load->database();
	
		$query=$this->db->insert('mobile_vari_status', $data2);  
		
		return $query;
	}
	
	
}
?>