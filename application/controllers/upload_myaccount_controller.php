<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload_myaccount_Controller extends CI_Controller {    
public function __construct() {
parent::__construct();   
$this->load->model('file_model');
$this->load->helper('url');
}       
public function file_view(){
    $this->load->view('myaccount', array('error' => ' ' ));    
}

public function do_upload(){
	
	$config =  array(
                  'upload_path'     => "./uploads/",
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                  'overwrite'       => FALSE,
                  'max_size'        => "2048000",  // Can be set to particular file size
				  'file_name'      => "soul_".uniqid(rand(1,100000)),
                  'max_height'      => "7686",
                  'max_width'       => "5024"  
                );    
				$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$file_name=$this->input->post('email');
			$data = array('upload_data' => $this->upload->data());
$data['upload_data']['file_name'];
$data['upload_data']['file_type'];
$data['upload_data']['file_ext'];
$data['upload_data']['file_size'];
$data['user_id']=$file_name;
$session_data = $this->session->userdata('logged_in');

$newdb['user_id'] = $session_data['user_id'];
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

$res=$this->file_model->form2_insert($newdb);
if($res)
{
redirect('login','refresh');
}
		}
		}
}
?>