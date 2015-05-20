<?php
class payment_model extends CI_Model{
function __construct() {
parent::__construct();
}
function payment(){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->select('*');
$this->db->from('package');
$this->db->where('package_name','Start Up');
$this->db->where('month','3');
$query=$this->db->get();
return $query->result();
}


function payment1(){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->select('*');
$this->db->from('package');
$this->db->where('package_name','Start Up');
$this->db->where('month','6');
$query=$this->db->get();
return $query->result();
}

function payment2(){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->select('*');
$this->db->from('package');
$this->db->where('package_name','Start Up');
$this->db->where('month','9');
$query=$this->db->get();
return $query->result();
}

function payment3(){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->select('*');
$this->db->from('package');
$this->db->where('package_name','Standard');
$this->db->where('month','3');
$query=$this->db->get();
return $query->result();
}


function payment4(){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->select('*');
$this->db->from('package');
$this->db->where('package_name','Standard');
$this->db->where('month','6');

$query=$this->db->get();
#echo $this->db->last_query();
return $query->result();
}


function payment5(){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->select('*');
$this->db->from('package');
$this->db->where('package_name','Standard');
$this->db->where('month','9');
$query=$this->db->get();

return $query->result();
}


function payment6(){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->select('*');
$this->db->from('package');
$this->db->where('package_name','premium');
$this->db->where('month','3');
$query=$this->db->get();
return $query->result();
}


function payment7(){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->select('*');
$this->db->from('package');
$this->db->where('package_name','premium');
$this->db->where('month','6');
$query=$this->db->get();
return $query->result();
}

function payment8(){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->select('*');
$this->db->from('package');
$this->db->where('package_name','premium');
$this->db->where('month','9');
$query=$this->db->get();
return $query->result();
}

function payment9(){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->select('*');
$this->db->from('package');
$this->db->where('package_name','prime');
$this->db->where('month','3');
$query=$this->db->get();
return $query->result();
}


function payment10(){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->select('*');
$this->db->from('package');
$this->db->where('package_name','prime');
$this->db->where('month','6');
$query=$this->db->get();
return $query->result();
}

function payment11(){
// Inserting in Table(students) of Database(college)
$this->load->database();
$this->db->select('*');
$this->db->from('package');
$this->db->where('package_name','soulmate spacial');
$this->db->where('month','18');
$query=$this->db->get();
return $query->result();
}
}
?>             