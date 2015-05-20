<?php $this->load->view('header');?>
<link href="<?php echo base_url();?>file/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
<!--<link href="<?php echo base_url();?>file/css/styleh.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/baseh.css" rel="stylesheet" type="text/css" />-->
<link href="<?php echo base_url();?>file/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/style1.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url();?>file/css/elements.css" rel="stylesheet">
<script src="<?php echo base_url();?>file/js/my_js.js"></script>
<script src="<?php echo base_url();?>file/js/jquery-1.9.1.min.js"></script>
<style type='text/css'>
#upload_link {
	text-decoration: none;
}
#upload {
	display: none
}
#upload1_link {
	text-decoration: none;
}
#upload1 {
	display: none
}
#upload2_link {
	text-decoration: none;
}
#upload2 {
	display: none
}
</style>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type='text/javascript'>//<![CDATA[ 

$(function(){
$("#upload_link").on('click', function(e){
    e.preventDefault();
    $("#upload:hidden").trigger('click');
});
});

//]]>  

</script>
<script type='text/javascript'>//<![CDATA[ 

$(function(){
$("#upload1_link").on('click', function(e){
    e.preventDefault();
    $("#upload1:hidden").trigger('click');
});
});

//]]>  

</script>
<script>
function validateproject()
        {
 if(document.input.uploaded.value == "")
                {
                alert ("Please attach a file to be uploaded")
                valid = false;
                }
            return valid;
		}
</script>
<script type='text/javascript'>//<![CDATA[ 


$(function(){
	$("#upload2_link").on('click', function(e){
    e.preventDefault();
    $("#upload2:hidden").trigger('click');
});
});

//]]>  

</script>

<div class="row-fluid content">
  <div class="container">
    <h5 style="text-align:right; margin-top:30px; margin-bottom:20px;"></h5>
    <div class="span12 profhd" style="margin-left:0px;">
      <h4 class="prhd">ADDING YOUR VIDEO IMPROVES RESPONSES, SO ADD YOURS</h4>
    </div>
    
    


<!-- Button trigger modal -->
<!--<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
   Launch demo modal
</button>-->

<!-- Modal -->

    
    <div class="modal fade hide" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
      </div>
      <div class="modal-body">
        <p>One fine body…</p>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    
    <script src="app.js"></script>


     <div class="span12 profupload" style="margin-left:0px;">
      <h4 class="prhd1">UPLOAD VIDEO</h4>
</div>



    <form enctype="multipart/form-data" action="<?php echo base_url()?>index.php/managevideo/do_upload" method="post">
    <a name="raptors"></a>  
    <div class="span12 profuploading" style="margin-left:0px;">
  <div class="span6" style="padding-right:20px; height:282px; " >
 
  <div class="span12">
    <h4 style="font-weight:bold; font-size:24px; color:#42b8b6">Select a video file on your computer </h4>
    </div>
  
      <div class="span12" style="margin-top:35px;margin-left:0px; ">
    <span style="color:#F00;"><?php if(isset($error)){echo $error;}?></span>
      <input type="file" required="required" name="userfile" size="20" />
        <h4 style="font-weight:bold; font-size:12px; margin-top:25px; color:#656565">video  must be smaller than 30 second duration.2MB</h4>
         
           <input name="Submit"  class=" profile_btn" style="background-color:#4cbcba; width:120px; height:40px; margin-left:0px; font-size:16px; border-radius:5px; color:#FFF; border:none;" type="submit" value="UPLOAD" />
             <input type="hidden" name="redirect" value="<?php echo current_url(); ?>" />
      </div>
       
  </div>
  
    </div>
    <form>
    <div class="span12" style="margin-left:0px; margin-bottom:30px;">
    <div class="span12 profhd" style="margin-left:0px; margin-top:50px;">
      <h4 class="prhd" style="text-align:left;">VIDEO PRIVACY</h4>
    </div>
    
    <div class="span12" style="height:300px; margin-left:0px; padding:30px 50px;;   border: #42b8b6 solid 2px;">
    <div class="span6" style="padding-right:20px; height:282px; " >
  <div class="span12">
    <h4 style="font-weight:bold; font-size:16px; color:#656565">Select Your Video Privacy Status</h4>
    </div>
   
      <div class="span12" style="margin-top:20px; margin-left:0px; ">
      <form action="<?php echo base_url()?>index.php/managevideo/privacy" method="post"></form>
        <form action="<?php echo base_url()?>index.php/managevideo/privacy" method="post">
   <div class="span12" style="margin-top:10px; margin-left:0px; ">
      <input type="radio" name="privacy_status"  value="1" style=" margin-right:10px; margin-top:0px;" /><span style="color:#656565">Visible to all</span> <img src="<?php echo base_url();?>file/img/photoprivacy.png" />
      </div>
       <input type="radio" name="privacy_status"  value="2" style=" margin-right:10px; margin-top:0px;"  /><span style="color:#656565">Visible only to members whom I had contacted / responded</span>
      
         
           <input name="Submit" style="background-color:#4cbcba; width:180px; height:40px; margin-left:0px; font-size:16px; border-radius:5px; color:#FFF; border:none;" type="submit" value="SUBMIT & PROCEED" />
           
            </form>
      </div>
     
       
  </div>
  <div class="span6" style="height:282px; padding:8px 175px "><img src="<?php echo base_url();?>file/img/lockupload.png" /></div>
    </div>
    
    </div>
    </div>
   
  </div>
</div>
 <?php $session_data = $this->session->userdata('logged_in');
	 $data['loged'] = $this->session->userdata('logged_in');
	 $user_id = $session_data['user_id'];
	 ?>
<div id="abc">
  <div id="popupContact">


    <form action="#" id="form" method="post" name="form">
      <img id="close" src="<?php echo base_url();?>file/img/first-registration22_05.png" onclick ="div_hide()">
      <h2>Are you sure...?</h2>
      <p>If you dont add your pictures now,your matches may not
        contact you</p>
      <a href="<?php echo base_url();?>index.php/partnerpref/partner/<?php echo $user_id  ?>">
      <input type="button" id="button" value="I dont want matches to contact me" style="margin-right:10px;"/>
      </a> <a href="#" id="upload2_link">
      <input type="button" id="button" value="Let me add my photo"/>
      </a>
    </form>
  </div>
</div>
<?php $this->load->view('footer'); ?>
