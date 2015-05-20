<?php $this->load->view('header');?>

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
<script type='text/javascript'>
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
      <h4 class="prhd">ADDING YOUR PHOTO IMPROVES RESPONSES, SO ADD YOURS</h4>
    </div>
    
    


<!-- Button trigger modal -->
<!--<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
   Launch demo modal
</button>-->

<!-- Modal -->
<?php foreach($profimage as $row){}
?>
<script type='text/javascript'>
function myFunction() {
var name = document.getElementById("profpic").value;
var imgorder = document.getElementById("imgorder").value;
/*var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var contact = document.getElementById("contact").value;*/
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name + '&name2=' + imgorder /*+ '&password1=' + password + '&contact1=' + contact*/;

// AJAX code to submit form.
$.ajax({
type: "POST",
url: "<?php echo base_url()?>index.php/managephoto/delete",
data: dataString,
cache: false,
success: function(html) {

	var html="Deleted Succesfully"
document.getElementById('ali').innerHTML = html;
document.getElementById("blk").style.display = 'none';
document.getElementById("back").style.display = 'block';
document.getElementById("close").style.display = 'none';
}
});

return false;
}
</script>

<script type='text/javascript'>
function myFunction1() {
var name1 = document.getElementById("profpic1").value;
var imgorder1 = document.getElementById("imgorder").value;
/*var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var contact = document.getElementById("contact").value;*/
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name1 + '&name2=' + imgorder1 /*+ '&password1=' + password + '&contact1=' + contact*/;

// AJAX code to submit form.
$.ajax({
type: "POST",
url: "<?php echo base_url()?>index.php/managephoto/delete1",
data: dataString,
cache: false,
success: function(html) {

	var html="Deleted Succesfully"
document.getElementById('ali1').innerHTML = html;
document.getElementById("blk1").style.display = 'none';

document.getElementById("back1").style.display = 'block';
document.getElementById("close1").style.display = 'none';
}
});

return false;
}
</script>


<script type='text/javascript'>
function myFunction2() {
var name2 = document.getElementById("profpic2").value;
var imgorder2 = document.getElementById("imgorder").value;
/*var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var contact = document.getElementById("contact").value;*/
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name2 + '&name2=' + imgorder2 /*+ '&password1=' + password + '&contact1=' + contact*/;

// AJAX code to submit form.
$.ajax({
type: "POST",
url: "<?php echo base_url()?>index.php/managephoto/delete2",
data: dataString,
cache: false,
success: function(html) {

	var html="Deleted Succesfully"
document.getElementById('ali2').innerHTML = html;
document.getElementById("blk2").style.display = 'none';
document.getElementById("back2").style.display = 'block';
document.getElementById("close2").style.display = 'none';
}
});

return false;
}
</script>


<script type='text/javascript'>
function myFunction3() {
var name = document.getElementById("profpic3").value;
var imgorder = document.getElementById("imgorder").value;
/*var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var contact = document.getElementById("contact").value;*/
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name + '&name2=' + imgorder /*+ '&password1=' + password + '&contact1=' + contact*/;

// AJAX code to submit form.
$.ajax({
type: "POST",
url: "<?php echo base_url()?>index.php/managephoto/delete3",
data: dataString,
cache: false,
success: function(html) {

	var html="Deleted Succesfully"
document.getElementById('ali3').innerHTML = html;
document.getElementById("blk3").style.display = 'none';
document.getElementById("back3").style.display = 'block';
document.getElementById("close3").style.display = 'none';
}
});

return false;
}
</script>

    <div class="modal fade hide" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete photo</h3>
      </div>
      <div class="modal-body" id="blk">
        <p>Are you sure you want to delete this photo?</p>
      </div>
      <div id="ali"></div>
      <div class="modal-footer">
     <form id="form1" name="form">
      <input type="hidden" id="profpic" name="profpic" value="<?php echo $row->prof_pic ?>" />
       <input type="hidden" id="imgorder" name="imgorder" value="1" />
        <button class="btn" id="close" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn" id="back" data-dismiss="modal" aria-hidden="true" style="display:none;"  onclick="window.location.href='<?php echo site_url('managephoto'); ?>'">Back</button>
        <input type="button" id="submit1" value="Delete Photo" onclick="myFunction()" class="btn btn-primary" />
        </form>
      </div>
    </div>
    
    <div class="modal fade hide" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete photo</h3>
      </div>
      <div class="modal-body" id="blk1">
        <p>Are you sure you want to delete this photo?<?php echo $row->image1 ?></p>
      </div>
        <div id="ali1"></div>
      <div class="modal-footer">
      <form id="form1" name="form">
      <input type="hidden" id="profpic1" name="profpic1" value="<?php echo $row->image1 ?>" />
       <input type="hidden" id="imgorder" name="imgorder" value="2" />
        <button class="btn" id="close2" data-dismiss="modal" aria-hidden="true">Close</button>
          <button class="btn" id="back1" data-dismiss="modal" aria-hidden="true" style="display:none;"  onclick="window.location.href='<?php echo site_url('managephoto'); ?>'"> Back  </button>
       <input type="button" id="submit1" value="Delete Photo" onclick="myFunction1()" class="btn btn-primary" />
        </form>
      </div>
    </div>
    
    
    <div class="modal fade hide" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete photo</h3>
      </div>
      <div class="modal-body" id="blk2">
        <p>Are you sure you want to delete this photo?<?php echo $row->image2 ?></p>
      </div>
        <div id="ali2"></div>
      <div class="modal-footer">
      <form id="form1" name="form">
      <input type="hidden" id="profpic2" name="profpic2" value="<?php echo $row->image2 ?>" />
      <input type="hidden" id="imgorder" name="imgorder" value="3" />
      <button class="btn" id="close2" data-dismiss="modal" aria-hidden="true">Close</button>
          <button class="btn" id="back2" data-dismiss="modal" aria-hidden="true" style="display:none;"  onclick="window.location.href='<?php echo site_url('managephoto'); ?>'">Back</button>
      <input type="button" id="submit1" value="Delete Photo" onclick="myFunction2()" class="btn btn-primary" />
        </form>
      </div>
    </div>
    
    
    <div class="modal fade hide" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete photo</h3>
      </div>
      <div class="modal-body" id="blk3">
        <p>Are you sure you want to delete this photo?<?php echo $row->image3 ?></p>
      </div>
        <div id="ali3"></div>
      <div class="modal-footer">
       <form id="form1" name="form">
      <input type="hidden" id="profpic3" name="profpic3" value="<?php echo $row->image3 ?>" />
      <input type="hidden" id="imgorder" name="imgorder" value="4" />
        <button class="btn" id="close3" data-dismiss="modal" aria-hidden="true">Close</button>
          <button class="btn" id="back3" data-dismiss="modal" aria-hidden="true" style="display:none;"  onclick="window.location.href='<?php echo site_url('managephoto'); ?>'">Back</button>
        <input type="button" id="submit1" value="Delete Photo" onclick="myFunction3()" class="btn btn-primary" />
        </form>
      </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    
    <script src="app.js"></script>
<div class="span12 " style="margin-left:0px; margin-top:30px; ">
<?php foreach($profimage as $row){}
?>
	<?php if($row->prof_pic!=NULL)
	{?>
      <div class="span3 profpic" style="width:237px; ">
     <!-- <div class="" style="position:relative"><img src="<?php echo base_url();?>file/img/close.png" /></div>-->
        <div class="span12" style="width:237px; overflow:hidden;" ><img src="<?php echo base_url();?>thumb_account/<?php echo $row->prof_pic; ?>" width="237px" height="224px" /></div>
        <div class="span12" style="text-align:center; margin-top:10px; font-weight:bold; font-size:12px;"><?php if($row->profpic_status=='0'){
			echo "Pending Approval &nbsp;|&nbsp;";
		}
		else
		{
			echo "Approved";
		}
		
			?> &nbsp;|&nbsp;<a data-toggle="modal" data-target="#myModal" href="">Delete</a></div>
      </div>
	<?php } 
	else
	{ ?>

<div class="span3 profpic" style="width:237px; ">
        <div class="span12" style="width:237px; overflow:hidden;" ><a href="#raptors"><img src="<?php echo base_url();?>file/img/profile237x224.jpg"  /></a></div>
     
      </div>
      <?php } ?>
    
    
    <?php if($row->image1!=NULL)
	{?>
       <div class="span3 profpic"  style="width:237px; 	margin-left:125px; ">
        <div class="span12" style="width:237px; overflow:hidden;" ><a href="#raptors"><img src="<?php echo base_url();?>thumb_account/<?php echo $row->image1; ?>" width="237px" height="224px" /></a></div>
       <div class="span12" style="text-align:center; margin-top:10px; font-weight:bold; font-size:12px;">Pending Approval&nbsp;|&nbsp;<a data-toggle="modal" data-target="#myModal1" href="">Delete</a></div>
      </div>
	<?php } 
	else
	{ ?>

  <div class="span3 profpic"  style="width:237px; 	margin-left:125px;">
        <div class="span12" style="width:237px; overflow:hidden;" ><a href="#raptors"><img src="<?php echo base_url();?>file/img/profile237x224.jpg"  /></a></div>
     
      </div>
      <?php } ?>
   
     <?php if($row->image2!=NULL)
	{?>
       <div class="span3 profpic"  style="width:237px; 	margin-left:125px; ">
        <div class="span12" style="width:237px; overflow:hidden;" ><a href="#raptors"><img src="<?php echo base_url();?>thumb_account/<?php echo $row->image2; ?>" width="237px" height="224px" /></a></div>
            <div class="span12" style="text-align:center; margin-top:10px; font-weight:bold; font-size:12px;">Pending Approval&nbsp;|&nbsp;<a data-toggle="modal" data-target="#myModal2" href="">Delete</a></div>
      </div>
	<?php } 
	else
	{ ?>

  <div class="span3 profpic"  style="width:237px; 	margin-left:125px; ">
        <div class="span12" style="width:237px; overflow:hidden;" ><a href="#raptors"><img src="<?php echo base_url();?>file/img/profile237x224.jpg"  /></a></div>
      
      </div>
      <?php } ?>
       <?php if($row->image3!=NULL)
	{?>
       <div class="span3 profpic"  style="width:237px; 	margin-left:125px; ">
        <div class="span12" style="width:237px; overflow:hidden;" ><a data-toggle="modal" data-target="#myModal" href="index3.html"><img src="<?php echo base_url();?>thumb_account/<?php echo $row->image3; ?>" width="237px" height="224px" /></a></div>
         <div class="span12" style="text-align:center; margin-top:10px; font-weight:bold; font-size:12px;">Pending Approval&nbsp;|&nbsp;<a data-toggle="modal" data-target="#myModal3" href="index2.html">Delete</a></div>
      </div>
	<?php } 
	else
	{ ?>

   <div class="span3 profpic"  style="width:237px; 	margin-left:125px; ">
        <div class="span12" style="width:237px; overflow:hidden;" ><a href="#raptors"><img src="<?php echo base_url();?>file/img/profile237x224.jpg"  /></a></div>
      
      </div>
      <?php } ?>
    </div>

     <div class="span12 profupload" style="margin-left:0px;">
      <h4 class="prhd1">UPLOAD PHOTO</h4>
</div>
 
    <form enctype="multipart/form-data" action="<?php echo base_url()?>index.php/gallery1" method="post">
    <a name="raptors"></a>  
    <div class="span12 profuploading" style="margin-left:0px;">
  <div class="span6" style="padding-right:20px; height:282px; border-right:#666 solid 1px;" >
 
  <div class="span12">
    <h4 style="font-weight:bold; font-size:24px; color:#42b8b6">Select an image file on your computer </h4>
    </div>
  
      <div class="span12" style="margin-top:35px;margin-left:0px; ">
      <input type="file" name="file_data" />
        <h4 style="font-weight:bold; font-size:12px; margin-top:25px; color:#656565">Photo must be a .jpg, .png or .bmp format no larger than 2MB</h4>
         
           <input name="Submit" name="upload" class=" profile_btn" style="background-color:#4cbcba; width:120px; height:40px; margin-left:0px; font-size:16px; border-radius:5px; color:#FFF; border:none;" type="submit" value="UPLOAD" />
             <input type="hidden" name="redirect" value="<?php echo current_url(); ?>" />
      </div>
       
  </div>
  <div class="span6" style="height:282px; padding:60px 60px; "><img src="<?php echo base_url();?>file/img/facebookupload.png" /></div>
    </div>
    <form>
    <div class="span12" style="margin-left:0px; margin-bottom:30px;">
    <div class="span12 profhd" style="margin-left:0px; margin-top:50px;">
      <h4 class="prhd" style="text-align:left;"> PHOTO PRIVACY</h4>
    </div>
    
    <div class="span12" style="height:300px; margin-left:0px; padding:30px 50px;;   border: #42b8b6 solid 2px;">
    <div class="span6" style="padding-right:20px; height:282px; " >
  <div class="span12">
    <h4 style="font-weight:bold; font-size:16px; color:#656565">Select Your Photo Privacy Status</h4>
    </div>
   
      <div class="span12" style="margin-top:20px; margin-left:0px; ">
      <form action="<?php echo base_url()?>index.php/managephoto/privacy" method="post"></form>
        <form action="<?php echo base_url()?>index.php/managephoto/privacy" method="post">
   <div class="span12" style="margin-top:10px; margin-left:0px; ">
      <input type="radio" name="privacy_status"  value="1" style=" margin-right:10px; margin-top:0px;" /><span style="color:#656565">Visible to all</span> <img src="<?php echo base_url();?>file/img/photoprivacy.png" />
      </div>
       <input type="radio" name="privacy_status"  value="0" style=" margin-right:10px; margin-top:0px;"  /><span style="color:#656565">Visible only to members whom I had contacted / responded</span>
      
         
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
