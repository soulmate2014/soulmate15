<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class jcrop extends CI_Controller {
	function index()
	{
		$this->load->view('upload');
	}

}