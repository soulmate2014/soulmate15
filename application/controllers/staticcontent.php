<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class staticcontent extends CI_Controller {
 
 function __construct()
 {
	 
   parent::__construct();
    $this->load->model('search_model');
  
 }
 
 function contact(){
	  $data['list']=$this->search_model->getCountry();
		#$data['result']=$this->search_model->get_country();
		$data['country']=$this->search_model->get_country();
		$this->load->model('homemodel');
		$data['profile_highlight']=$this->homemodel->profile();
		$data['prime']=$this->homemodel->prime();
		$data['mother']=$this->homemodel->mother_tongue();
		$data['allcast']=$this->homemodel->cast();
		$data['success']=$this->homemodel->success();
		$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
	 $this->load->view('contact',$data);
	 
 }
 
 function help(){
	
	 $data['list']=$this->search_model->getCountry();
		#$data['result']=$this->search_model->get_country();
		$data['country']=$this->search_model->get_country();
		$this->load->model('homemodel');
		$data['profile_highlight']=$this->homemodel->profile();
		$data['prime']=$this->homemodel->prime();
		$data['mother']=$this->homemodel->mother_tongue();
		$data['allcast']=$this->homemodel->cast();
		$data['success']=$this->homemodel->success();
		$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
	 $this->load->view('help',$data);
	 
 }
 function about(){
	  $data['list']=$this->search_model->getCountry();
		#$data['result']=$this->search_model->get_country();
		$data['country']=$this->search_model->get_country();
		$this->load->model('homemodel');
		$data['profile_highlight']=$this->homemodel->profile();
		$data['prime']=$this->homemodel->prime();
		$data['mother']=$this->homemodel->mother_tongue();
		$data['allcast']=$this->homemodel->cast();
		$data['success']=$this->homemodel->success();
		$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
	 $this->load->view('about',$data);
	 
 }
  function faq(){
	  $data['list']=$this->search_model->getCountry();
		#$data['result']=$this->search_model->get_country();
		$data['country']=$this->search_model->get_country();
		$this->load->model('homemodel');
		$data['profile_highlight']=$this->homemodel->profile();
		$data['prime']=$this->homemodel->prime();
		$data['mother']=$this->homemodel->mother_tongue();
		$data['allcast']=$this->homemodel->cast();
		$data['success']=$this->homemodel->success();
		$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
	 $this->load->view('faq',$data);
	 
 }
 
 function contactsend(){
	 $name=$this->input->post('name');
	 $address=$this->input->post('address');
	$city=$this->input->post('city');
	$state=$this->input->post('state');
	$phone=$this->input->post('phone');
	$email=$this->input->post('mail');
	$reason=$this->input->post('reason');
	
		 
		$this->load->helper(array('form', 'url'));
		
	$this->load->library('email');

$config1['mailtype'] = 'html';

$this->email->initialize($config1);
$this->email->from('info@soulmatematrimony.com', 'Soulmate Matrimony');
$this->email->to('info@soulmatematrimony.com'); 
$this->email->subject('Contact Details');


$this->email->message('<html>
<body>
<table rules="all" style="border-color:#666" cellpadding="10">
<tbody>
<tr style="background:#eee">
<td>
 <strong>Name: </strong>
 </td>
 <td>
  '.$name.'</td>
  </tr>
<tr style="background:#eee">
<td>
 <strong>City: </strong>
 </td>
 <td>
  '.$city.'</td>
  </tr>
  
  <tr style="background:#eee">
<td>
 <strong>State: </strong>
 </td>
 <td>
  '.$state.'</td>
  </tr>
 <tr style="background:#eee">
<td>
 <strong>Mobile: </strong>
 </td>
 <td>
  '.$phone.'</td>
  </tr>
  
   <tr style="background:#eee">
<td>
 <strong>Email: </strong>
 </td>
 <td>
  '.$email.'</td>
  </tr>
<tr style="background:#eee">
<td>
 <strong>Address: </strong>
 </td>
 <td>
  '.$address.'</td>
  </tr>
  
  <tr style="background:#eee">
<td>
 <strong>Contact Reason: </strong>
 </td>
 <td>
  '.$reason.'</td>
  </tr>
</tbody></table>
</body></html>');	


$this->email->send();

#echo $this->email->print_debugger();

redirect('staticcontent/contact');
 }
 
}