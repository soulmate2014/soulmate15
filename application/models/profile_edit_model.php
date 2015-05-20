<?php class profile_edit_model extends CI_Model{

public function form_update_myself() 
{
	$data1 = array(
	'about_us' => $this->input->post('about_us'),
	'uid' => $this->input->post('uid')
	);
	$this->load->database();
	$this->db->where(array('uid' => $this->input->post('uid')));
	$this->db->update('registration', $data1); 
} 
public function form_update_basic($data) 
{
	
	$this->load->database();
	$this->db->where(array('uid' => $this->input->post('uid')));
	$this->db->update('registration', $data); 
} 
public function form_update_religion($data) 
{
	
	$this->load->database();
	$this->db->where(array('uid' => $this->input->post('uid')));
	$this->db->update('registration', $data); 
} 

public function form_update_location($data) 
{
	
	$this->load->database();
	$this->db->where(array('uid' => $this->input->post('uid')));
	$this->db->update('registration', $data); 
	}

public function form_update_professional($data) 
{
	
	$this->load->database();
	$this->db->where(array('uid' => $this->input->post('uid')));
	$this->db->update('registration', $data); 
	} 
public function form_update_family($data) 
{
	
	$this->load->database();
	$this->db->where(array('uid' => $this->input->post('uid')));
	$this->db->update('registration', $data); 

}


public function form_update_basic_pref($data) 
{
	
	$this->load->database();
	$this->db->where(array('user_id' => $this->input->post('user_id')));
	$this->db->update('partners_pref', $data); 

}


public function form_update_prof_pref($data) 
{
	
	$this->load->database();
	$this->db->where(array('user_id' => $this->input->post('user_id')));
	$this->db->update('partners_pref', $data); 

} 



public function form_update_location_pref($data) 
{
	
	$this->load->database();
	$this->db->where(array('user_id' => $this->input->post('user_id')));
	$this->db->update('partners_pref', $data); 
	$this->db->last_query();
}
}
?>