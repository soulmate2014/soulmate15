<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class status extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function like_status($uid,$uuid)
	{
		$this->load->helper('url');
		
		$data['liked_user']=$uid;
		$data['user_id']=$uuid;
		
		$this->load->model('status_model');
		$this->status_model->like_status($data);
		redirect("individual/profile/".$uid."");
		

	}
	
	public function dislike_status($uid,$uuid)
	{
		$this->load->helper('url');
		$data['liked_user']=$uid;
		$data['user_id']=$uuid;
		
		$this->load->model('status_model');
		$this->status_model->dislike_status($data);
			redirect("individual/profile/".$uid."");
	
	
	}
	
	
	public function block($user_id)
	{
		$this->load->helper('url');
		 $session_data = $this->session->userdata('logged_in');
	$data2['user_id'] = $session_data['user_id'];
		$data2['blocked_id']=$user_id;
		
		
		$this->load->model('status_model');
		$this->status_model->block_status($data2);
			redirect("myhome/index/2");
	
	
	}
	public function unblock($user_id)
	{
		$this->load->helper('url');
		 $session_data = $this->session->userdata('logged_in');
	$data2['user_id'] = $session_data['user_id'];
		$data2['blocked_id']=$user_id;
		
		
		$this->load->model('status_model');
		$this->status_model->unblock_status($data2);
			redirect("myhome/index/2");
	
	
	}
	
	
	public function shortlist($user_id)
	{
		$this->load->helper('url');
		$session_data = $this->session->userdata('logged_in');
		$data2['user_id'] = $session_data['user_id'];
		$data2['shortlisted_id']=$user_id;
		$this->load->database();
		$this->db->insert('shortlisted', $data2);
		redirect("myhome/index/2");
	}
	
		public function shortlisted($user_id)
	{
		$this->load->helper('url');
		 $session_data = $this->session->userdata('logged_in');
	$data2['user_id'] = $session_data['user_id'];
		$data2['shortlisted_id']=$user_id;
		
		
		$this->load->model('status_model');
		$this->status_model->shortlisted($data2);
			redirect("myhome/index/2");
	
	
	}
	
	
	public function intrest($user_id)
	{
		date_default_timezone_set('Asia/Kolkata');
		$this->load->helper('date');
		$this->load->helper('url');
		$session_data = $this->session->userdata('logged_in');
		$data2['user_id'] = $session_data['user_id'];
		$data2['intrested_id']=$user_id;
		$data2['intrest_status']='0';
		#$data2['replay_status']='1';
		
		$data2['intrested_timestamp']= date('Y-m-d H:i:s');
		$this->load->database();
		$this->db->insert('intrestlist', $data2);
		redirect("myhome/index/2");
	}
}
?>