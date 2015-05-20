<?php 
class myhomem extends CI_Model{
	public function bolck_user($user) {
		$this -> db -> select('*');
   $this -> db -> from('registration');
    $this->db->join ( 'block_list', 'block_list.blocked_id = registration.user_id' , 'left' );
	$this->db->where('user_id',$user);
	$query = $this -> db -> get();
/*   echo  $this->db->last_query();
*/    $this->db->last_query();
   return $query;
	}
	
}
?>