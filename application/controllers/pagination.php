<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Pagination extends CI_Controller 
{
	public function __construct() {
		parent:: __construct();
 
		$this->load->helper("url");
		$this->load->model("Countries_Model");
		$this->load->library("pagination");
	}
 
	public function index() {
		$config["base_url"] = base_url() . "index.php/pagination";
		$config["total_rows"] = $this->Countries_Model->record_count();
		$config["per_page"] = 5;
		$config["uri_segment"] = 2;
 
		$this->pagination->initialize($config);
 
		$page = ($this->uri->segment(2))? $this->uri->segment(2) : 0;
		$data["results"] = $this->Countries_Model->get_countries($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
 
		$this->load->view("pagination", $data);
	}
}	