<?php
class insert_reg extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->model('reg_model');
}
function index()
{
// Including Validation Library
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error" style="color:#F07D77;">*', '*</div>');
// Validating Name Field

// Validating Mobile no. Field
$this->form_validation->set_rules('mobile', 'mobile.', 'required|regex_match[/^[0-9]{10}$/]');
// Validating Address Field
$this->form_validation->set_rules('password', 'password', 'required|min_length[10]|max_length[50]');

if ($this->form_validation->run() == FALSE)
{
$this->load->view('home');
}
else
{
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
$this->reg_model->form_insert($data);

// Loading View
$this->load->view('registration');
}
}
}
?>
