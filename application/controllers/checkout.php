<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); /*//we need to call PHP's session object to access it through CI*/
class checkout extends CI_Controller {
	
	function index()
 {
	 $this->load->helper('form');
	 $this->load->helper('url');
	#$data['all']=$_POST;
	#print_r($data['all']);
	$this->load->model('checkoutmodel');
	$this->checkoutmodel->index();
	redirect("myhome/index/succespayment");
 }
	
	
}
?>