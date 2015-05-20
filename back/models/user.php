<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('*');
   $this -> db -> from('registration');
   #$where = "email='$username' OR user_id='username' AND password='active'";
   $this -> db -> where('email', $username);
   $this -> db -> or_where('user_id', $username);
   $this -> db -> where('password',md5($password));
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
}
?>