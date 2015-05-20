<?php
class page extends CI_Controller {
public function __construct() {
parent::__construct();

}
function index()
{

$this->load->library('pagination');

$config['base_url'] = 'http://localhost/soul/index.php/page/paging/';
$config['total_rows'] = 200;
$config['per_page'] = 20; 

$this->pagination->initialize($config); 

$config['display_pages'] = FALSE;
echo $this->pagination->create_links();

}
function paging()
{

$this->load->view('paging');
}
}
?>