<?php
class forgot extends CI_Controller {
function __construct() {
parent::__construct();
}
function index()
{
// Including Validation Library
$this->load->library('form_validation');
$this->form_validation->set_rules('email','email','trim|required|valid_email'); // removed is_unique

if ($this->form_validation->run() == FALSE)
{

$this->load->view('home');
}
else
{
$data = array(
'email' => $this->input->post('email')
);
$email=$this->input->post('email');
$file_name=md5(uniqid(rand(1,10000000)));
$data['tocken']=$file_name;

// Transfering Data To Model
/*$email=$data['email'];
$this->load->database();
   $this->db->select('uid');
$this->db->from('registration');
$this->db->where('email', $email );
  $query = $this->db->get();
    if ( $query->num_rows() > 0 )
    {
        $row = $query->row_array();
        return $row;
		$data['uid']=$row['uid'];
		echo $data['uid'];
		
    }*/
 $this->load->model('forgotmodel');
$this->forgotmodel->form_insert($data);
$err['error1']='error';
$err1['error2']='error';
	$this->load->database();
	$this->db->select('uid');
	$this->db->from('registration');
	$this->db->where('email', $email );
	$query = $this->db->get();
	if ( $query->num_rows() > 0 )
    {
    $row = $query->row_array();
    $data['uid']=$row['uid'];
	$this->load->library('email');
$config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';

        $this->email->initialize($config);

        $this->email->from('ashiq@zillioninfosolutions.com', 'Ashik');
        $this->email->to($email);

        $this->email->subject('This is a html email');
		$userid=$file_name;
        $html = "Hai <br>...
		Your password varification linkis here please click". base_url()."index.php/forgot/forgotpass/".$data['uid']."/$file_name";
		#$html = $this->input->post('name');
        $this->email->message($html);

        $this->email->send();		
		$this->load->view('home',$err);
	}
	else{
		$this->load->view('home',$err1);
	}
// Loading View
}
}
public function forgotpass($id,$tocken)
{
	$forgot['id']=$id;
	$forgot['tocken']=$tocken;
	$this->load->view('forgot',$forgot);
	
}
public function forgotupdate()
{
	$forgot1 = array(
'password' => $this->input->post('password'),
'uid' => $this->input->post('uid')
);
	$this->load->model('forgotmodel');
$this->forgotmodel->form_update($forgot1);
	
	
}

}
?>
