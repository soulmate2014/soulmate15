 <?php $this->load->view('profile_header');?>
 <style type='text/css'>
    #upload_link{
    text-decoration:none;
}
#upload{
    display:none
}
 #upload1_link{
    text-decoration:none;
}
#upload1{
    display:none
}
 #upload2_link{
    text-decoration:none;
}
#upload2{
    display:none
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
</script>



<script type='text/javascript'>//<![CDATA[ 

$(function(){
$("#upload2_link").on('click', function(e){
    e.preventDefault();
    $("#upload2:hidden").trigger('click');
});
});
</script>
<div class="row-fluid content">
				<div class="container">
    				<div class="span12 freg1">
                    	<div class="span12"><a href="#" id="popup" onClick="div_show()">
<p>Skip this page>>>></p></a>
                    	<h1><div class="span2 freg9"></div>Add photos now & ensure more responses!</h1>
                        <div class="span10 freg2">
                        	<div class="span10 freg3">
                       	 		<div class="span4 freg7">
                                <input id="upload2" type="file" name="userfile"/>
<a href="" id="upload2_link"><img src="<?php echo base_url();?>file/img/first-registration18_05.png" width="340" height="300" /></a>
                                <ul class="freg14">
          		<li>With 10 mb of size</li>
                <li>jpg/gif/png/bnp</li>
                <li><?php echo $user_id; ?></li>
                                </ul>
                                </div>		
                          		<div class="span8 freg8">
                            <form action="<?php echo base_url();?>index.php/upload_controller/do_upload" method="post" accept-charset="utf-8" enctype="multipart/form-data"> 
                            <input type="hidden" style=" border: 2px solid #991248;color:#000; font-weight:100" class="input_feild" name="email" value="<?php echo $email; ?>" id="inputEmail">
                            <input type="hidden" style=" border: 2px solid #991248;color:#000; font-weight:100" class="input_feild" name="user_id" value="<?php echo $user_id; ?>" id="inputEmail">
                                	<div class="span10 freg4">
                                    <input id="upload" name="userfile" type="file"/>
<a href="" id="upload_link"><h3>Add photo from my 
computer</h3></a></div>
                                    	<div class="circle circle-border">
     								<div class="circle-inner">
         							<div class="score-text"><img src="<?php echo base_url();?>file/img/first-registration1_07.png" width="103" height="112" />
          								</div>
     									</div>
										</div>
                                        <input name="Submit" class=" btn-large freg12" type="submit" value="UPLOAD PHOTO"  />
                                     </FORM>
                                <div class="span10 freg4 freg5 freg11">
                                     <input id="upload1" name="userfile" type="file"/>
<a href="" id="upload1_link"><h3>Add photo from facebook</h3></a></div>
                                    <div class="circle circle-border freg6 freg11">
     								<div class="circle-inner freg10">
         							<div class="score-text"><img src="<?php echo base_url();?>file/img/first-registration15_07.png" width="74" height="58" />
          								</div>
     									</div>
										</div>
                                          <input name="Submit" class=" btn-large freg12" type="submit" value="UPLOAD PHOTO" />
                                </div>
                                
                          </div>
                        </div>
                        
                        
                      </div>
                    </div>
<div id="abc">
<div id="popupContact">
<form action="#" id="form" method="post" name="form">
<img id="close" src="<?php echo base_url();?>file/img/first-registration22_05.png" onclick ="div_hide()">
<h2>Are you sure...?</h2>
<p>If you dont add your pictures now,your matches may not
contact you</p>
<a href="#"><input type="button" id="button" value="I dont want matches to contact me" style="margin-right:10px;"/></a>
<a href="#"><input type="button" id="button" value="Let me add my photo"/></a>
</form>
</div>
</div>

                </div>
</div>
