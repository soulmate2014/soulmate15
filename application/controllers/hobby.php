<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class hobby extends CI_Controller {
	public function __construct() {
	parent::__construct();
	$this->load->model('hobby_model');
	$this->load->helper("url");

}
function index()
{
	$session_data = $this->session->userdata('logged_in');
	$data1['user_id']= $session_data['user_id'];
	$this->load->view('hobby',$data1);
	
}
 function daily()
 {
	 $this->load->view('daily_recomand');
 }

function insert_hobby()
{
	$hobby=$this->input->post('hobby');
	$intrest=$this->input->post('intrest');
	$fav_reads=$this->input->post('fav_reads');
	$fav_musics=$this->input->post('fav_musics');
	$preferd_movies=$this->input->post('preferd_movies');
	$sports=$this->input->post('sports');
	$fav_cousin=$this->input->post('fav_cousin');
	$fav_dress=$this->input->post('fav_dress');
	$fav_languages=$this->input->post('fav_languages');
	$data['user_id']=$this->input->post('user_id');
	if($hobby==NULL)
{
	$data1['hobby'] = "";
}
else
{
	$data['hobby']=implode(',',$hobby);
}
if($intrest==NULL)
{
	$data1['intrest'] = "";
}
else
{
	$data['intrest']=implode(',',$intrest);
}
	if($fav_reads==NULL)
{
	$data1['fav_reads'] = "";
}
else
{
	$data['fav_reads']=implode(',',$fav_reads);
}
	if($fav_musics==NULL)
{
	$data1['fav_musics'] = "";
}
else
{
	$data['fav_musics']=implode(',',$fav_musics);
}
	if($preferd_movies==NULL)
{
	$data1['preferd_movies'] = "";
}
else
{
	$data['preferd_movies']=implode(',',$preferd_movies);
}
	if($sports==NULL)
{
	$data1['sports'] = "";
}
else
{
	$data['sports']=implode(',',$sports);
}
	if($fav_cousin==NULL)
{
	$data1['fav_cousin'] = "";
}
else
{
	$data['fav_cousin']=implode(',',$fav_cousin);
}
	if($fav_dress==NULL)
{
	$data1['fav_dress'] = "";
}
else
{
	$data['fav_dress']=implode(',',$fav_dress);
}
	if($fav_languages==NULL)
{
	$data1['fav_languages'] = "";
}
else
{
	$data['fav_languages']=implode(',',$fav_languages);
	
}
	$this->load->model('hobby_model');
	$this->hobby_model->insert($data);
	
	redirect('payment');
}
}
?>