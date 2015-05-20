<?php

class api extends CI_Controller{

public function  __construct() {
parent::__construct();

}
public function index(){
	$this->load->view('json');
}
public function ajaxcall(){

$data['id']   = $this->input->post(‘id’);
$data['name'] = 'Ziyed';
$data['age']  = '24';
$data['se']  = 'Male';

echo json_encode($data);

}

}

?>