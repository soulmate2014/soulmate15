<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class upload_video extends CI_Controller {
	
	function index($val)
	{
		$data['val']=$val;
		$this->load->view('video_upload',$data);
		
	}
	
	
	function do_upload()
	{
		$this->load->helper(array('form', 'url'));
		$config['upload_path'] = './video/';
$config['allowed_types'] = 'flv|mp4|avi|mpeg';   
$config['max_size'] = '2048'; // whatever you need
$config['max_width']          = '';
$config['max_height']          = '';
$config['file_name']="soul_vid_".uniqid(rand(1,100000));

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('managevideos', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$data1['video_link']=$data['upload_data']['file_name'];
			$session_data = $this->session->userdata('logged_in');
			$user_id= $session_data['user_id'];
			$this->load->database();
			$this->db->where('user_id',$user_id);
			$this->db->update('prof_video',$data1);
			
			$this->db->where('user_id',$user_id);
			$this->db->update('registration',$data1);
			redirect("upload_video/index/1");
		}
	}
	public function privacy(){
	$this->load->database();
	$session_data = $this->session->userdata('logged_in');
	$user_id= $session_data['user_id'];
	$data['video_status']=$this->input->post('privacy_status');
	$this->db->where('user_id',$user_id);
	$this->db->update('registration',$data);
	$this->db->where('user_id',$user_id);
	$this->db->update('prof_video',$data);
	redirect("partnerpref/partner");
	}
 
}

?>