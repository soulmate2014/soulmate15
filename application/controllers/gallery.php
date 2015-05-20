<?php class Gallery extends CI_Controller {
 public function __construct() {
    parent::__construct();   
$this->load->model('file_model');
$this->load->helper('url');

}
    function index() {
        if(isset($_FILES['file_data'])){
			$this->load->helper('file');
			$this->load->helper('form');
            //get file name from temp direcotory
            $file   = read_file($_FILES['file_data']['tmp_name']);
            $name   = basename($_FILES['file_data']['name']);
            $rnd_name = "soul_".uniqid(rand(1,100000));    //set random name to avoid the same file name
			$path_parts = pathinfo($_FILES["file_data"]["name"]);
			$file_ext = $path_parts['extension'];   //get file extension
            $file_name = $rnd_name . '.' . $file_ext; //concatenate file name to its file extension
            $folder = 'files';
            write_file('files/'.$file_name, $file); //write the file to spesific direcotory
           $cropped_name = $file_name;   //generate thumbnail to expected width and height
 
            redirect('gallery/crop/'. $cropped_name);
        } else {
            $data['main_content'] = 'test/upload';
            $this->load->view('template', $data);
        }
    }
	
	
		function crop($path = null) {
		$this->load->helper('file');
        if( isset($_POST['submit']))
        {
            $this->load->library('image_lib');
 
            //set source file path and destination of file path
            $path = $this->input->post('file_name');
			#echo $path;
            $file_name = $path;
            $src_path = 'files/' . $path;
            $des_path =  'uploads/' . $file_name;
			$des_path1 =  'thumb/' . $file_name;
 			$des_path2 =  'thumb_account/' . $file_name;
            $x = $this->input->post('x');
            $y = $this->input->post('y');
            $width = $this->input->post('w');
            $height = $this->input->post('h');
 
            //set image library configuration
            $config['image_library']    = 'gd2';
            $config['source_image']     = $src_path;
            $config['new_image']        = $des_path;
            $config['maintain_ratio']   = FALSE;
            $config['width']            = $width;
            $config['height']           = $height;
            $config['orig_width']       = $width;
            $config['orig_height']      = $height;
            $config['x_axis']           = $x;
            $config['y_axis']           = $y;
			
			#$config['source_image']	= '/path/to/image/mypic.jpg';
$config['wm_text'] = 'Copyright 2006 - John Doe';
$config['wm_type'] = 'text';
/*$config['wm_font_path'] = './system/fonts/texb.ttf';*/
$config['wm_font_size']	= '16';
$config['wm_font_color'] = 'ffffff';
$config['wm_vrt_alignment'] = 'bottom';
$config['wm_hor_alignment'] = 'center';
$config['wm_padding'] = '10';

$this->image_lib->initialize($config); 

$this->image_lib->watermark();
           # $this->image_lib->initialize($config);
 
            //process thumb and reset the original with and height
           
			$this->image_lib->crop();
			
			
			$config1['image_library']    = 'gd2';
            $config1['source_image']     = $des_path;
            $config1['new_image']        = $des_path1;
            $config1['maintain_ratio']   = FALSE;
            $config1['width']            = 66;
            $config1['height']           = 66;
            $config1['orig_width']       = $width;
            $config1['orig_height']      = $height;
            $config1['x_axis']           = $x;
            $config1['y_axis']           = $y;
            $this->image_lib->initialize($config1);
  			$this->image_lib->image_process_gd('thumb', $width, $height);
			
			
			$config2['image_library']    = 'gd2';
            $config2['source_image']     = $des_path;
            $config2['new_image']        = $des_path2;
            $config2['maintain_ratio']   = FALSE;
            $config2['width']            = 200;
            $config2['height']           = 200;
            $config2['orig_width']       = $width;
            $config2['orig_height']      = $height;
            $config2['x_axis']           = $x;
            $config2['y_axis']           = $y;
            $this->image_lib->initialize($config2);
  			$this->image_lib->image_process_gd('thumb', $width, $height);
            $data['cropresult'] = $des_path;
            $data['main_content'] = 'test/cropresult';
			unlink('files/'. $file_name);
			$newdb['file_name'] = $file_name;
			$newdb1['prof_pic'] = $file_name;
			$this->load->model('file_model');
			
			
			$img['result']=$this->file_model->form1_select();
			foreach($img['result'] as $row){
			$prof_pic=$row->prof_pic;
			$image1=$row->image1;
			$image2=$row->image2;
			$image3=$row->image2;
			}
			if($prof_pic==NULL){
			$this->file_model->form1_insert($file_name);	
			}
			else if($prof_pic!=NULL&&$image1==NULL){
				$this->file_model->form1_insert1($file_name);	}
				
			else if($prof_pic!=NULL&&$image1!=NULL&&$image2==NULL){
				$this->file_model->form1_insert2($file_name);	}
				
				
			else if($prof_pic!=NULL&&$image1!=NULL&&$image2!=NULL){
				$this->file_model->form1_insert3($file_name);	}
				
			#$this->file_model->form1_insert($file_name);
			#delete_files('files/' . $file_name);
            #$this->load->view('profile_pic_upload', $data);
			redirect('upload_controller');
        } else {
            //set image size to width and height varable
            list($width, $height) =  getimagesize('files/' . $path);
            $data['orig_w'] = $width;
            $data['orig_h'] = $height;
            $data['targ_w'] = 150;      //expected thumbnail
            $data['targ_h'] = 150;
            $data['path'] = $path;
 
            $this->load->view('jcrop', $data);
        }
 
    }
}
?>