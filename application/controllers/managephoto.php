<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class managephoto extends CI_Controller {
public function __construct() {
	parent::__construct();
	$this->load->model('hobby_model');
	$this->load->helper("url");

}
function index()
{
$this->load->model('file_model');
$this->load->model('myhome_model');
	 $data1['profimage']=$this->file_model->form1_select();
	 $data1['image_status']=$this->myhome_model->image();
	$this->load->view('managephotos',$data1);
	
}

public function do_upload(){
	$config['crop'] =  array(
                  'image_library'   => 'gd2',
                  'maintain_ratio'  =>  FALSE,
                  'width'           =>  '100',
                  'height'          => '100',
                  
);
     $config =  array(
                  'upload_path'     => "./uploads/",
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => FALSE,
                  'max_size'        => "2048000",  // Can be set to particular file size
				  'file_name'      => "soul_".uniqid(rand(1,100000)),
                  'height'      => "768",
                  'width'       => "1024"  
                );    
			
				$this->load->library('upload', $config);
				
				if($this->upload->do_upload())
				{
					
				
					$file_name=$this->input->post('user_id');
					$data = array('upload_data' => $this->upload->data());
					$data['upload_data']['file_name'];
$data['upload_data']['file_type'];
$data['upload_data']['file_ext'];
$data['upload_data']['file_size'];

$data['user_id']=$file_name;
#$newdb = array('user_id' => $this->input->post('email'));
//$file_name=rand(1,1000)."soul";
//$file_name.'_'.
$newdb['file_name'] = $data['upload_data']['file_name'];
$newdb['file_type'] = $data['upload_data']['file_type'];
$newdb['file_ext'] = $data['upload_data']['file_ext'];
$newdb['file_size'] = $data['upload_data']['file_size'];


//echo '<pre>';
//print_r($data);
//echo '</pre>';

//$_POST['owner'] = $this->auth->get_user();


$this->file_model->form1_insert($newdb);
 	
					
$this->load->model('complete_reg_model');
		$data['list']=$this->complete_reg_model->getCountry();
		$this->load->model('file_model');
		$data['religion']=$this->file_model->getreligion();
		$this->load->model('user');
		$data['star']=$this->user->star();
		$data['mother']=$this->user->mother();
		$data['education']=$this->user->education();
		$data['occupation']=$this->user->occupation();
		$data['currency']=$this->user->currency();
		$this->load->view('partner_preference',$data);
				}
				else
				{
					$data1['user_id']=$this->input->post('user_id');
					$data1['upload_error']="Erron file uploading.Please select a image";
				$this->load->view('profile_pic_upload',$data1);
				/*$error = array('error' => $this->upload->display_errors());
				$error['user_id']=$this->input->post('user_id');
				$this->load->view('profile_pic_upload', $error);*/
				} 
				
}

public function privacy(){
	$this->load->database();
	$session_data = $this->session->userdata('logged_in');
	$user_id= $session_data['user_id'];
	$data['privacy_status']=$this->input->post('privacy_status');
	$this->db->where('user_id',$user_id);
	$this->db->update('registration',$data);
	redirect("managephoto");
	}
	
	
public function delete(){
	$profpic=$this->input->post('name1');
	$imgorder=$this->input->post('name2');
	$this->load->database();
	$session_data = $this->session->userdata('logged_in');
	$user_id= $session_data['user_id'];
	
	$data['prof_pic']=NULL;
	
	$data1['file_name']=NULL;
	
	$this->db->where('prof_pic',$profpic);
	$this->db->update('profile_photos',$data);
	$this->db->where('file_name',$profpic);
	$this->db->update('registration',$data1);
	
	unlink('uploads/'. $profpic);
	unlink('thumb/'. $profpic);
	}
public function delete1(){
	$profpic=$this->input->post('name1');
	$imgorder=$this->input->post('name2');
	$this->load->database();
	$session_data = $this->session->userdata('logged_in');
	$user_id= $session_data['user_id'];
	$data2['image1']=NULL;
	
	$this->db->where('image1',$profpic);
	$this->db->update('profile_photos',$data2);
	echo $this->db->last_query();
	unlink('uploads/'. $profpic);
	unlink('thumb/'. $profpic);
	}
public function delete2(){
	$profpic=$this->input->post('name1');
	$imgorder=$this->input->post('name2');
	$this->load->database();
	$session_data = $this->session->userdata('logged_in');
	$user_id= $session_data['user_id'];
	$data3['image2']=NULL;
	$this->db->where('image2',$profpic);
	$this->db->update('profile_photos',$data3);
	
	unlink('uploads/'. $profpic);
	unlink('thumb/'. $profpic);
	}
	
public function delete3(){
	$profpic=$this->input->post('name1');
	$imgorder=$this->input->post('name2');
	$this->load->database();
	$session_data = $this->session->userdata('logged_in');
	$user_id= $session_data['user_id'];
	$data4['image3']=NULL;
	$this->db->where('image3',$profpic);
	$this->db->update('profile_photos',$data4);
	
	unlink('uploads/'. $profpic);
	unlink('thumb/'. $profpic);

	
	#echo $this->db->last_query();
	
	}
}