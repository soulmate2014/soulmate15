<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class celibrityverifyLogin extends CI_Controller {
 


 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }
 
 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password1', 'Password', 'trim|required|xss_clean|callback_check_database');
 
 
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
   		$this->load->model('search_model');
		$this->load->helper("url");
 	 	$data['list']=$this->search_model->getCountry();
		$data['result']=$this->search_model->get_country();
		$data['country']=$this->search_model->get_country();
		$this->load->model('homemodel');
		$data['profile_highlight']=$this->homemodel->profile();
		$data['mother']=$this->homemodel->mother_tongue();
		$data['allcast']=$this->homemodel->cast();
		$data['prime']=$this->homemodel->prime();
		$data['success']=$this->homemodel->success();
    	$this->load->view('home',$data);
   }
   else
   {
     	//Go to private area
     	redirect('login1', 'refresh');
   }
 
 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   		$username = $this->input->post('username');
 
   //query the database
   		$result = $this->user->login1($username, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->uid,
		 'user_id' => $row->user_id,
         'username' => $row->email,
		 'profile_for' => $row->profile_for,
		 'name' => $row->name,
		 'gender' => $row->gender,
		 'religion' => $row->religion,
		 'cast' => $row->cast,
		 'mobile' => $row->mobile,
		 'mother_tongue' => $row->mother_tongue,
		 'country' => $row->country,
		 'merital_status' => $row->merital_status,
		 'subcast' => $row->subcast,
		 'gothram' => $row->gothram,
		 'state' => $row->state,
		 'city' => $row->city,
		 'height' => $row->height,
		 'weight' => $row->weight,
		 'body_type' => $row->body_type,
		 'complexion' => $row->complexion,
		 'education' => $row->education,
		 'occupation' => $row->occupation,
		 'inc_currency' => $row->inc_currency,
		 'income' => $row->income,
		 'employed_type' => $row->employed_type,
		 'food' => $row->food,
		 'smoking' => $row->smoking,
		 'drinking' => $row->drinking,
		 'sudha_jadakam' => $row->sudha_jadakam,
		 'star' => $row->star,
		 'rashi' => $row->rashi,
		 'family_statas' => $row->family_statas,
		 'family_type' => $row->family_type,
		 'family_value' => $row->family_value,
		 'about_us' => $row->about_us,
		  'file_name' => $row->file_name,
		  'status_paid' => $row->status_paid,
		   'celibrity_status' => $row->celibrity_status,
		 'status' =>TRUE
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>