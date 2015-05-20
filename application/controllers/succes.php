<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class succes extends CI_Controller {
	
	function index()
	{
		$this->load->model('search_model');
		$data['country']=$this->search_model->get_country();
		$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
		$this->load->view('succespost',$data);
		
	}
	
	function successtory()
	{
		$this->load->model('storymodel');
		$data['story']=$this->storymodel->story1();
		$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
		$this->load->view('successtory',$data);
		
	}
	
	function successinner($sid)
	{
		$this->load->model('storymodel');
		$data['story']=$this->storymodel->storyinner($sid);
		$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
		$this->load->view('successinner',$data);
		
	}
	function successpost()
	{
		$data=$_POST;
		print_r($data);
		
		$config['upload_path'] = './success_story/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1001';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
$config['file_name']="soul_success_".uniqid(rand(1,100000));
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data1 = array('upload_data' => $this->upload->data());
			
			$data['userfile']=$data1['upload_data']['file_name'];
			$this->load->database();
			$this->db->insert('success_story',$data);
			redirect('succes');
			
		}
		
		
	}
	
	
}

?>