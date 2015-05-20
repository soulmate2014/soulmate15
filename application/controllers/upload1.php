<?php

class Upload1 extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$this->load->library('image_lib');
		$config['upload_path'] = './testing/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '5000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload()) {
                //If image upload in folder, set also this value in "$image_data". 
                $image_data = $this->upload->data();
            }
		 $img = substr($image_data['full_path'], 51);
        $config['image_library'] = 'gd2';
        $config['source_image'] = $image_data['full_path'];
        $config['x_axis'] = '10';
        $config['y_axis'] = '10';
        $config['maintain_ratio'] = TRUE;
        $config['width'] = '150';
        $config['height'] = '132';
        $config['new_image'] = './testing/crop_' . $img;
        $this->image_lib->initialize($config);
        $src = $config['new_image'];
        $data['crop_image'] = substr($src, 2);
        $data['crop_image'] = base_url() . $data['crop_image'];
        // Call crop function in image library.
        $this->image_lib->crop();
        // Return new image contains above properties and also store in "uplods" folder.
        #return $data;

		/*if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data =$this->upload->data();
			
			
			 $img = substr($data['full_path'], 40);
 			$config['image_library'] = 'gd2';
			$config['source_image']	= $data['full_path'];
			$config['x_axis'] = "5";
        $config['y_axis'] = "5";
        $config['maintain_ratio'] = TRUE;
        $config['width'] = "150";
        $config['height'] = "150";
		
		$config['new_image'] = './testing/crop/crop_' . $img;
        $this->image_lib->initialize($config);
        $src = $config['new_image'];
        $data['crop_image'] = substr($src, 5);
        $data['crop_image'] = base_url() . $data['crop_image'];
		
		
        // Call crop function in image library.
        


$this->image_lib->crop();


if ( ! $this->image_lib->crop())
{
    echo $this->image_lib->display_errors();
}

					#$data['upload_data']['file_name'];}*/
						$data = array('upload_data' => $this->upload->data());
					$data['upload_data']['file_name'];
			$this->load->view('success', $data);
		
	}
}
?>