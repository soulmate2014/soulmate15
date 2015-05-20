<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		  $this->load->library('image_lib');
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['file_name' ]= "soul_".uniqid(rand(1,100000));
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		#if ($this->upload->do_upload()) {
                //If image upload in folder, set also this value in "$image_data". 
                $image_data = $this->upload->data();
           # }
		 /*    $img = substr($image_data['full_path'], 36);
        $config['image_library'] = 'gd2';
        $config['source_image'] = $image_data['full_path'];
        $config['wm_text'] = 'Ashik';
        $config['wm_type'] = 'text';
        $config['wm_font_path'] = './system/fonts/texb.ttf';
        $config['wm_font_size'] = '50';
        $config['wm_font_color'] = '#707A7C';
        $config['wm_hor_alignment'] = 'center';
        $config['new_image'] = '.uploads/watermark_' . $img;
        $this->image_lib->initialize($config);
        $src = $config['new_image'];
        $data['watermark_image'] = substr($src, 2);
        $data['watermark_image'] = base_url() . $data['watermark_image'];
        // Call watermark function in image library.
        $this->image_lib->watermark();*/
			
		$img = substr($image_data['full_path'],34);
		
        $config['image_library'] = 'gd2';
        $config['source_image'] = $image_data['full_path'];
        $config['wm_text'] = 'Soulmate';
        $config['wm_type'] = 'text';
        $config['wm_font_path'] = './system/fonts/texb.ttf';
        $config['wm_font_size'] = '35';
        $config['wm_font_color'] = '#707A7C';
        $config['wm_hor_alignment'] = 'center';
        $config['new_image'] = './uploads' .$img;
        $this->image_lib->initialize($config);
        #$src = $config['new_image'];
       
        // Call watermark function in image library.
        $this->image_lib->watermark();

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
echo $image_data['full_path'];
			#$this->load->view('upload_success', $data);
		}
	}
}
?>