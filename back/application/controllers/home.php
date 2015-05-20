<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('home');
		
	}
	public function regist()
	{
		$this->load->helper('url');
		$this->load->view('registration');
		
	}
	public function homecontent()
	{
		$this->load->helper('url');
		$this->load->view('homecontent');
		function index()
{
// Including Validation Library
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
// Validating Name Field
$this->form_validation->set_rules('name', 'Username', 'required|min_length[5]|max_length[15]');
// Validating Email Field
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
// Validating Mobile no. Field
$this->form_validation->set_rules('mobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');
// Validating Address Field
$this->form_validation->set_rules('password', 'Address', 'required|min_length[10]|max_length[50]');

if ($this->form_validation->run() == FALSE)
{
$this->load->view('homecontent');
}
else
{
	  $data['user_a'] = $this->session->userdata('logged_in');
    $data['body'] = $this->load->view('user/register', '', true);
    if ($this->input->post('signup')) {
    
 $email = $this->input->post('email');
    $rand= random_string('unique');

 $this->user_model->save_user($rand);
$data = array(
'profile_for' => $this->input->post('profile_for'),
'name' => $this->input->post('name'),
'gender' => $this->input->post('gender[]'),
'day' => $this->input->post('day'),
'month' => $this->input->post('month'),
'year' => $this->input->post('year'),
'religion' => $this->input->post('religion'),
'cast' => $this->input->post('cast'),
'mobile' => $this->input->post('mobile'),
'email' => $this->input->post('email'),
'password' => $this->input->post('password'),
'mother_tongue' => $this->input->post('mother_tongue'),
'country' => $this->input->post('country')
);

// Transfering Data To Model
$this->insert_model->form_insert($data);

// Loading View
$this->load->view('home');
}
}
}
}

}