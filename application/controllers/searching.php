<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class searching extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('search_model');
$this->load->helper("url");
$this->load->library("pagination");
$session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
	 $gender = $session_data['gender'];
}
function img()
    {
		$this->load->view('upload_form');
	}
function index()
{
	#$data['country']=$this->search_model->get_country();
	$data['result']=$this->search_model->get_country();
	$data['list']=$this->search_model->getCountry();
	$this->load->model('myhome_model');
	$data['image_status']=$this->myhome_model->image();
	$this->load->view('search',$data);
}

function searchresult()
{
	$this->load->view('searchresult');
}

public function printing() {
	$data['result']=$this->search_model->printing();
	$this->load->view('welcome_message',$data);
	}
function search()
{
	$data['query'] = $this->search_model->get_search();
	$this->load->view('searchres', $data);
}
public function search_id() {
		$config["base_url"] = base_url() . "index.php/searching/search_id";
		$config["total_rows"] = $this->search_model->record_count();
		$config["per_page"] = 5;
		$config["uri_segment"] = 3;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'previous';
 
		$this->pagination->initialize($config);
 
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$data["results"] = $this->search_model->get_countries($config["per_page"], $page);
		
		#echo print_r($data["results"]);
		$data['count']=$config["total_rows"];
		$data["links"] = $this->pagination->create_links();
 $this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
		$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
		$this->load->view("searchresult", $data);
	}




public function search_anonym() {

		$config["base_url"] = base_url() . "index.php/searching/search_anonym";
		$config["total_rows"] = $this->search_model->record_anonym_count();
		$config["per_page"] = 5;
		$config["uri_segment"] = 3;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'previous';
 	if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
            $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$this->pagination->initialize($config);
 
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$data["results"] = $this->search_model->get_anonym_search($config["per_page"], $page);
		
		$data['count']=$config["total_rows"];
		$data["links"] = $this->pagination->create_links();
		$session_data = $this->session->userdata('logged_in');
 $data['email']=$session_data['username'];
 $this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
		$this->load->view("anonym_searchresult", $data);

	}
	
public function search_regular() {

	/*	$config["base_url"] = base_url() . "index.php/searching/search_regular";
		$config["total_rows"] = $this->search_model->record_regular_count();
		$config["per_page"] = 5;
		$config["uri_segment"] = 3;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'previous';
 	if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
            $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$this->pagination->initialize($config);
 
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$data["results"] = $this->search_model->get_regular_search($config["per_page"], $page);
		
		$data['count']=$config["total_rows"];
		$data["links"] = $this->pagination->create_links();
		$session_data = $this->session->userdata('logged_in');
 		$data['email']=$session_data['username'];
 		$data['package']=$this->search_model->package();
 		#$this->load->model('myhome_model');
		
		
			$session_data = $this->session->userdata('logged_in');
	 		$data['loged'] = $this->session->userdata('logged_in');
	 		$user = $session_data['user_id'];
			/*$this->load->database();
			$this -> db -> select('*');
	   		$this -> db -> where('user_id',$user);
   			$this -> db -> from('profile_photos');

	 		  $query = $this -> db -> get();
			  echo $this->db->last_query();*/
			/*$data['image_status']='adv';
		$this->load->view("searchresult", $data);*/
		$config["base_url"] = base_url() . "index.php/searching/search_advanced";
		$config["total_rows"] = $this->search_model->record_advanced_count();
		$config["per_page"] = 5;
		$config["uri_segment"] = 3;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'previous';
 	if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
            $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$this->pagination->initialize($config);
 
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$data["results"] = $this->search_model->get_advanced_search($config["per_page"], $page);
		$data['count']=$config["total_rows"];
		$data["links"] = $this->pagination->create_links();
 $this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
		$this->load->view("searchresult", $data);

	}
	
	
	public function search_advanced() {

		$config["base_url"] = base_url() . "index.php/searching/search_advanced";
		$config["total_rows"] = $this->search_model->record_advanced_count();
		$config["per_page"] = 5;
		$config["uri_segment"] = 3;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'previous';
 	if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
            $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$this->pagination->initialize($config);
 
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$data["results"] = $this->search_model->get_advanced_search($config["per_page"], $page);
		$data['count']=$config["total_rows"];
		$data["links"] = $this->pagination->create_links();
 $this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
		$this->load->view("searchresult", $data);

	}
	
	public function newmatches_all() {
		

			$config["base_url"] = base_url() . "index.php/searching/newmatches_all";
			$config["total_rows"] = $this->search_model->record_newmatches_count();
			$config["per_page"] = 15;
			$config["uri_segment"] = 3;
			$config['next_link'] = 'Next';
			$config['prev_link'] = 'previous';
 		if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
            $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
			$this->pagination->initialize($config);
 			$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
			$data["results"] = $this->search_model->get_newmatches_all($config["per_page"], $page);
			$data['count']=$config["total_rows"];
			$data["links"] = $this->pagination->create_links();
 			$session_data = $this->session->userdata('logged_in');
			$user= $session_data['user_id'];
		  	$this->load->model('myhome_model');
 			$profile=$this->myhome_model->profile_yet($user);
			$data['block']=$this->myhome_model->bolck_user($user);
			$data['shortlist']=$this->myhome_model->shortlist($user);
			$data['shortlisting']=$this->myhome_model->short1($user);
			$data['intrested']=$this->myhome_model->intrest($user);
			$data['profile']=$profile;
			$data['viewed']=$this->myhome_model->viewed($user);
			$data['like']=$this->myhome_model->liked($user);
			$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
			$this->load->view("viewall", $data);

		}
	
public function yettobeviewed() {
$session_data = $this->session->userdata('logged_in');
 
 		$user= $session_data['user_id'];
		$config["base_url"] = base_url() . "index.php/searching/yettobeviewed";
		$config["total_rows"] = $this->search_model->record_yettobeviewed_count($user);
		$config["per_page"] = 15;
		$config["uri_segment"] = 3;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'previous';
 	if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
        $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$this->pagination->initialize($config);
 		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$data["results"] = $this->search_model->get_yettobeviewed($config["per_page"], $page);
		$data['count']=$config["total_rows"];
		$data["links"] = $this->pagination->create_links();
 		$this->load->model('myhome_model');
 		$profile=$this->myhome_model->profile_yet($user);
		$data['block']=$this->myhome_model->bolck_user($user);
		$data['shortlist']=$this->myhome_model->shortlist($user);
		$data['shortlisting']=$this->myhome_model->short1($user);
		$data['intrested']=$this->myhome_model->intrest($user);
		$data['profile']=$profile;
		$data['viewed']=$this->myhome_model->viewed($user);
		$data['like']=$this->myhome_model->liked($user);
		$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
		$this->load->view("viewall", $data);

	}
	
	
public function viewed() {
		$session_data = $this->session->userdata('logged_in');
		$user= $session_data['user_id'];
		$config["base_url"] = base_url() . "index.php/searching/viewed";
		$config["total_rows"] = $this->search_model->record_viewed_count($user);
		$config["per_page"] = 15;
		$config["uri_segment"] = 3;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'previous';
 	if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
        $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$this->pagination->initialize($config);
 		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$data["results"] = $this->search_model->get_viewed($config["per_page"], $page);
		$data['count']=$config["total_rows"];
		$data["links"] = $this->pagination->create_links();
 		$this->load->helper('url');
 		$session_data = $this->session->userdata('logged_in');
		$user= $session_data['user_id'];
		$this->load->model('myhomem');
		$this->load->model('myhome_model');
		$profile=$this->myhome_model->profile_yet($user);
		$data['block']=$this->myhome_model->bolck_user($user);
		$data['shortlist']=$this->myhome_model->shortlist($user);
		$data['shortlisting']=$this->myhome_model->short1($user);
		$data['intrested']=$this->myhome_model->intrest($user);
		$data['profile']=$profile;
		$data['viewed']=$this->myhome_model->viewed($user);
		$data['like']=$this->myhome_model->liked($user);
		$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
		$this->load->view("viewall", $data);

			}
	
public function shortlist() {
		$session_data = $this->session->userdata('logged_in');
		$user= $session_data['user_id'];
		$config["base_url"] = base_url() . "index.php/searching/viewed";
		$config["total_rows"] = $this->search_model->record_short_count($user);
		$config["per_page"] = 15;
		$config["uri_segment"] = 3;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'previous';
 	if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
        $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$data["results"] = $this->search_model->get_short($config["per_page"], $page);
		$data['count']=$config["total_rows"];
		$data["links"] = $this->pagination->create_links();
		$this->load->helper('url');
		$session_data = $this->session->userdata('logged_in');
		$user= $session_data['user_id'];
		$this->load->model('myhomem');
		$this->load->model('myhome_model');
		$profile=$this->myhome_model->profile_yet($user);
		$data['block']=$this->myhome_model->bolck_user($user);
		$data['shortlist']=$this->myhome_model->shortlist($user);
		$data['shortlisting']=$this->myhome_model->short1($user);
		$data['intrested']=$this->myhome_model->intrest($user);
		$data['profile']=$profile;
		$data['viewed']=$this->myhome_model->viewed($user);
		$data['like']=$this->myhome_model->liked($user);
		$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
		$this->load->view("viewall", $data);
	}
	
	
public function liked() {
		$session_data = $this->session->userdata('logged_in');
		$user= $session_data['user_id'];
		$config["base_url"] = base_url() . "index.php/searching/viewed";
		$config["total_rows"] = $this->search_model->record_like_count($user);
		$config["per_page"] = 15;
		$config["uri_segment"] = 3;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'previous';
 	if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
        $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$this->pagination->initialize($config);
 		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$data["results"] = $this->search_model->get_like($config["per_page"], $page);
		$data['count']=$config["total_rows"];
		$data["links"] = $this->pagination->create_links();
 		$this->load->helper('url');
 		$session_data = $this->session->userdata('logged_in');
		$user= $session_data['user_id'];
 		$this->load->model('myhomem');
  		$this->load->model('myhome_model');
 		$profile=$this->myhome_model->profile_yet($user);
		$data['block']=$this->myhome_model->bolck_user($user);
		$data['shortlist']=$this->myhome_model->shortlist($user);
		$data['shortlisting']=$this->myhome_model->short1($user);
		$data['intrested']=$this->myhome_model->intrest($user);
		$data['profile']=$profile;
		$data['viewed']=$this->myhome_model->viewed($user);
		$data['like']=$this->myhome_model->liked($user);
		$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
		$this->load->view("viewall", $data);

	}
	
	
	
	public function loadData()
	{
		$loadType=$_POST['loadType'];
		$loadId=$_POST['loadId'];
		$this->load->model('search_model');
		$result=$this->search_model->getData($loadType,$loadId);
		$HTML="";
		
		if($result->num_rows() > 0){
			foreach($result->result() as $list){
				$HTML.="<option value='".$list->cast_id."'>".$list->cast_name."</option>";
			}
		}
		echo $HTML;
	}
	
	
	public function loadData2()
	{
		$loadType=$_POST['loadType'];
		$loadId=$_POST['loadId'];
		$this->load->model('search_model');
		$result2=$this->search_model->getData2($loadType,$loadId);
		$HTML="";
		
		if($result->num_rows() > 0){
			foreach($result2->result() as $list){
				$HTML.="<option value='".$list->cast_id."'>".$list->cast_name."</option>";
			}
		}
		echo $HTML;
	}
public function mutual() {
		$session_data = $this->session->userdata('logged_in');
		$user= $session_data['user_id'];
		$config["base_url"] = base_url() . "index.php/searching/muhtual";
		$config["total_rows"] = $this->search_model->record_mutual_count($user);
		$config["per_page"] = 15;
		$config["uri_segment"] = 3;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'previous';
 		if (count($_GET) > 0) $config['suffix'] = '?'.http_build_query($_GET, '', "&");
        $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$this->pagination->initialize($config);
 		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$data["results"] = $this->search_model->get_mutual($config["per_page"], $page);
		$data['count']=$config["total_rows"];
		$data["links"] = $this->pagination->create_links();
 		$this->load->helper('url');
 		$session_data = $this->session->userdata('logged_in');
		$user= $session_data['user_id'];
 		$this->load->model('myhomem');
  		$this->load->model('myhome_model');
 		$profile=$this->myhome_model->profile_yet($user);
		$data['block']=$this->myhome_model->bolck_user($user);
		$data['shortlist']=$this->myhome_model->shortlist($user);
		$data['shortlisting']=$this->myhome_model->short1($user);
		$data['intrested']=$this->myhome_model->intrest($user);
		$data['profile']=$profile;
		$data['viewed']=$this->myhome_model->viewed($user);
		$data['like']=$this->myhome_model->liked($user);
		$this->load->model('myhome_model');
		$data['image_status']=$this->myhome_model->image();
		$this->load->view("viewall", $data);

	}
	

}
?>
