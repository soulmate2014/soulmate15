<?php 
class my404 extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
    } 

    public function index() 
    { 
        $this->output->set_status_header('404'); 
        $data['content'] = 'error_404'; // View name 
		$this->load->model('myhome_model');
	$data['image_status']=$this->myhome_model->image();
        $this->load->view('error_404',$data);//loading in my template 
    } 
} 
?> 