<?php
class insert_reg extends CI_Controller {
function __construct() {
parent::__construct();
}
public function isEmailExist($email) {
    $this->load->library('form_validation');
    $this->load->model('reg_model');
    $is_exist = $this->reg_model->isEmailExist($email);

    if ($is_exist) {
        $this->form_validation->set_message(
            'isEmailExist', 'Email address is already exist.'
        );    
        return false;
    } else {
        return true;
    }
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
$this->form_validation->set_rules('name', 'name', 'required');
$this->form_validation->set_rules('password', 'password', 'required|min_length[10]|max_length[50]');
$this->form_validation->set_rules('email','email','trim|required|valid_email|callback_isEmailExist'); // removed is_unique

if ($this->form_validation->run() == FALSE)
{

$this->load->view('home');
}
else
{
$data = array(
'profile_for' => $this->input->post('profile_for'),
'name' => $this->input->post('name'),
'gender' => $this->input->post('gender'),
'day' => $this->input->post('day'),
'month' => $this->input->post('month'),
'year' => $this->input->post('year'),
'religion' => $this->input->post('religion'),
'cast' => $this->input->post('cast'),
'mobile' => $this->input->post('mobile'),
'email' => $this->input->post('email'),
'password' => md5($this->input->post("password")),
'mother_tongue' => $this->input->post('mother_tongue'),
'country' => $this->input->post('country')
);
$file_name="S".rand(1,10000000);
$data['user_id']=$file_name;

$email=$data['email'];
// Transfering Data To Model
$this->reg_model->form_insert($data);

// Loading View
$this->load->library('email');
$config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';

        $this->email->initialize($config);

        $this->email->from('ashiq@zillioninfosolutions.com', 'Soulmate');
        $this->email->to($email);

        $this->email->subject('This is a html email');
		$name=$data['name'];
		$userid=$file_name;
        $html = "Hai $name <br>...
		Thank you for registering soulmate matrimony.We provide a wonderfull experience with us.your soulmate id is<b>$userid</b>";
		#$html = $this->input->post('name');
        $this->email->message($html);

        $this->email->send();

$this->load->view('registration',$data);
}
}
}
?>
