<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('*');
   $this -> db -> from('registration');
   #$where = "email='$username' OR user_id='username' AND password='active'";
   $this -> db -> where('password',md5($password));
    $this -> db -> where('celibrity_status','0');
   $this -> db -> where('email', $username);
    $this -> db -> or_where('user_id', $username);
	$this -> db -> where('password',md5($password));
    $this -> db -> where('celibrity_status','0');
#echo $this->db->last_query();
   
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
 
  function login1($username, $password)
 {
   $this -> db -> select('*');
   $this -> db -> from('registration');
   #$where = "email='$username' OR user_id='username' AND password='active'";
     $this -> db -> where('celibrity_status','1');
	    $this -> db -> where('password',md5($password));
   $this -> db -> where('email', $username);
    $this -> db -> or_where('user_id', $username);
     $this -> db -> where('celibrity_status','1');
	    $this -> db -> where('password',md5($password));
   

  
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
#echo $this->db->last_query();
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
 public function logedin(){
	  $this->load->helper('date');
	 $this->load->database();
	 $session_data = $this->session->userdata('logged_in');
	  $user_id = $session_data['user_id'];
	  #$last=date('Y-m-d');
	$this->db->where('user_id', $user_id);

	$this->db->set('last_logedin', 'DATE_ADD(NOW(), INTERVAL 1 MINUTE)', FALSE);

$this->db->update('registration');
		
	}
 function getCountry2(){
		$this->db->select('iso3,country_id,country_name');
		$this->db->from('country');
		$this->db->order_by('country_name', 'asc'); 
		$query=$this->db->get();
		return $query; 
	}
 
function getCountry(){
		$this->db->select('iso3,country_id,country_name');
		$this->db->from('country');
		$this->db->order_by('country_name', 'asc'); 
		$query=$this->db->get();
		return $query; 
	}
	
function getData($loadType,$loadId){
		if($loadType=="state"){
			$fieldList='stateID,state_name as name';
			$table='state';
			$fieldName='iso3';
			$orderByField='state_name';						
		}else{
			$fieldList='id,city_name as name';
			$table='city';
			$fieldName='state_id';
			$orderByField='city_name';	
		}
		
		$this->db->select($fieldList);
		$this->db->from($table);
		$this->db->where($fieldName, $loadId);
		$this->db->order_by($orderByField, 'asc');
		$query=$this->db->get();
		return $query; 
	}
	function country($cnt){
		$this->db->select('iso3,country_id,country_name');
		$this->db->from('country');
		$this->db->where('iso3', $cnt);
		$this->db->order_by('country_name', 'asc'); 
		$query1=$this->db->get();
		#echo $this->db->last_query();
		
		return $query1; 
		
	}
	function mother(){
		$this->db->select('*');
		$this->db->from('mother_tongue');
		$this->db->order_by('mother_tongue_name', 'asc'); 
		$query1=$this->db->get();
		
		return $query1; 
		
	}
	
	function mother1(){
		$this->db->select('*');
		$this->db->from('mother_tongue');
		$this->db->order_by('mother_tongue_name', 'asc'); 
		$query1=$this->db->get();
		
		return $query1; 
		
	}
	function star(){
		$this->db->select('*');
		$this->db->from('star');
		$this->db->order_by('star_id', 'asc'); 
		$query1=$this->db->get();
		
		return $query1; 
		
	}
	
	function star1(){
		$this->db->select('*');
		$this->db->from('star');
		$this->db->order_by('star_id', 'asc'); 
		$query1=$this->db->get();
		
		return $query1; 
		
	}
	function education1($edu){
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('education_id',$edu);
		$this->db->order_by('education_id', 'asc'); 
		$query1=$this->db->get();
		
		return $query1; 
		
	}
	function education(){
		$this->db->select('*');
		$this->db->from('education');
		
		$this->db->order_by('education_id', 'asc'); 
		$query1=$this->db->get();
		
		return $query1; 
		
	}
	function occupation(){
		$this->db->select('*');
		$this->db->from('occupation');
		$this->db->order_by('occupation_id', 'asc'); 
		$query1=$this->db->get();
		
		return $query1; 
		
	}
		function currency(){
		$this->db->select('*');
		$this->db->from('currency');
		$this->db->order_by('id_currency', 'asc'); 
		$query1=$this->db->get();
		
		return $query1; 
		
	}
	
		function prefvalue($values){
			#print_r($values);
			#foreach ($values as $val):
			#$res="'mother_id'".",".$val;
			#echo $val;
			#echo $res;
			#endforeach;
		$this->db->select('*');
		$this->db->from('mother_tongue');
		#foreach ($values as $val):
		$this->db->where_in('mother_id', $values);
		#endforeach;
		#$this->db->order_by('id_currency', 'asc'); 
		$query1=$this->db->get();
		#echo $this->db->last_query();
		
		return $query1; 
		
		
	}
	
		function prefcast($prefcast){
			#print_r($values);
			#foreach ($values as $val):
			#$res="'mother_id'".",".$val;
			#echo $val;
			#echo $res;
			#endforeach;
		$this->db->select('*');
		$this->db->from('cast');
		#foreach ($prefcast as $val):
		$this->db->where_in('cast_id', $prefcast);
		#endforeach;
		#$this->db->order_by('id_currency', 'asc'); 
		$query1=$this->db->get();
		#echo $this->db->last_query();
		
		return $query1; 
		
		
	}
	
	
	function prefstar($prefstar){
			#print_r($values);
			#foreach ($values as $val):
			#$res="'mother_id'".",".$val;
			#echo $val;
			#echo $res;
			#endforeach;
		$this->db->select('*');
		$this->db->from('star');
		#foreach ($prefcast as $val):
		$this->db->where_in('star_id', $prefstar);
		#endforeach;
		#$this->db->order_by('id_currency', 'asc'); 
		$query1=$this->db->get();
		#echo $this->db->last_query();
		
		return $query1; 
		
		
	}
	
	function prefedu($prefedu){
			#print_r($values);
			#foreach ($values as $val):
			#$res="'mother_id'".",".$val;
			#echo $val;
			#echo $res;
			#endforeach;
		$this->db->select('*');
		$this->db->from('education');
		#foreach ($prefcast as $val):
		$this->db->where_in('education_id', $prefedu);
		#endforeach;
		#$this->db->order_by('id_currency', 'asc'); 
		$query1=$this->db->get();
		#echo $this->db->last_query();
		
		return $query1; 
		
		
	}
	
	
	function prefoccupation($prefoccupation){
			
		$this->db->select('*');
		$this->db->from('occupation');
		#foreach ($prefcast as $val):
		$this->db->where_in('occupation_id', $prefoccupation);
		#endforeach;
		#$this->db->order_by('id_currency', 'asc'); 
		$query1=$this->db->get();
		#echo $this->db->last_query();
		
		return $query1; 
		
		
	}
	function prefcountry($prefcountry){
			
		$this->db->select('*');
		$this->db->from('country');
		#foreach ($prefcast as $val):
		$this->db->where_in('iso3', $prefcountry);
		#endforeach;
		#$this->db->order_by('id_currency', 'asc'); 
		$query1=$this->db->get();
		#echo $this->db->last_query();
		
		return $query1; 
		
		
	}
	
	function prefstate($prefstate){
			
		$this->db->select('*');
		$this->db->from('state');
		#foreach ($prefcast as $val):
		$this->db->where_in('state_name', $prefstate);
		#endforeach;
		#$this->db->order_by('id_currency', 'asc'); 
		$query1=$this->db->get();
		#echo $this->db->last_query();
		
		return $query1; 
		
		
	}
	function prefcity($prefcity){
			
		$this->db->select('*');
		$this->db->from('city');
		#foreach ($prefcast as $val):
		$this->db->where_in('city_name', $prefcity);
		#endforeach;
		#$this->db->order_by('id_currency', 'asc'); 
		$query1=$this->db->get();
		#echo $this->db->last_query();
		
		return $query1; 
		
		
	}
	}

?>