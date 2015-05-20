<?php $this->load->view('profile_header');?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"> </script>
<script type="text/javascript" src="<?php echo base_url() ?>file/js/script.js"></script>
<link href="<?php echo base_url() ?>file/css/popup.css" rel="stylesheet" type="text/css" media="all" />
<style>
.span4.varotp {
margin-left: 253px;
}
h1 {
font-weight: 700;
margin-bottom: 10px;
}

</style>
<?php foreach($result as $row) ?>
<div class="row-fluid menu ">
    <div class="container">
    <div class="navbar">
<div class="navbar-inner">
            <div class="container freg">
            <div class="span4" data-original-title="" title=""></div>
              <h3>Welcome to Soulmate Matrimony</h3>
              <div class="span3" data-original-title="" title=""></div>
            </div>
          </div>
          </div>
          </div>
        </div>
<div class="row-fluid content">
	<div class="container">
    <a style="float:right; color:#aeaeae; padding-top:10px;" href="<?php echo base_url()?>index.php/mobile_varification/skip/<?php echo $row->user_id;?>">Skip This Page ></a>
            <div class="span12 mob">
            	<div class="span10 mob1">
             <?php if(isset($error)){ ?>
						<h3> <?php echo $error; ?></h3>
					<?php }?>
            		<div class="span7 mob2">
                   
                    <h3 style="font-weight:bold;">We need to verify your account before 
you can start</h3></div>
<div class="span8 mob3">
 <p>You can  now login with this Soulmate ID : <?php echo $row->user_id ?> or your E-mail ID.
A verification mail with login details has been sent to your E-mail.</p>        </div>           
                   </div>
 <div class="span10 mob4">                  
       <h1>Verify your Mobile number & E-mail to active your profile</h1>
  </div>
                         
 <div class="span10 mob6">
 
 					<div class="span8 mob7" style="margin-bottom:20px; color:#656565;">
                    <h1 style="font-size:35px;">Verify your mobile no through SMS</h1>
                    
                    </div>
                    
                    <div class="span8 mob8" style="margin-bottom:20px; margin-top:10px;">
 <h3 style="font-size:18px; text-align:center; ">An sms verification PIN has been sent to your mobile.</h3>
 					</div>
  <div class="span4  varotp">
  <form action="<?php echo base_url(); ?>index.php/mobile_varification/varification1" method="post">
   <input type="hidden" name="mobile" value="<?php echo $row->mobile;?>" style="height:30px"  />
    <input type="hidden" name="user_id" value="<?php echo $row->user_id;?>" style="height:30px"  />
     <input type="hidden" name="email" value="<?php #echo $email; ?>" style="height:30px"  />
  <input type="text" name="otp" style="height:30px"  /><button type="submit" class="btn">Verify</button>
  </form></div>
  <div class="span4">
    <form action="<?php echo base_url(); ?>index.php/mobile_varification/resend" method="post">
  
    <input type="hidden" name="user_id" id="user_id" value="<?php echo $row->user_id;?>" style="height:30px"  />
   
  <input type="text" name="mobile" id="mobile" value="<?php echo $row->mobile;?>" style="height:30px"  /><button type="submit" id="submit1" class="btn">Resend</button>
  </form>
  <?php if(isset($success))
  {
	  echo "<span style='color:#42b8b6'>$success</span>";
  }
  ?>
  </div>
  <script type="text/javascript">
/*
$('#submit1').click(function() {

  //var title = $('#title').val();

  var form_data = {
    user_id: $('#user_id').val(),
	mobile: $('#mobile').val(),
    ajax: '1'   
  };

  $.ajax({
    url: "<?php echo site_url('mobile_varification/resend');?>",
    type: "POST",
	
    data: form_data,
    success: function() {
      alert('OTP send to your mobile');
    }
  });

  return false;
});*/

</script>

 <!-- <div class="span4">
  <input type="text" name=""  value="9895989598" />
  <button class="btn"><a href="#" class="topopup9" style="text-decoration:none; color:inherit;">Edit no</a></button>
    </div>    -->            
      
      
      
 
 
 
 
 <!--<div id="toPopup9"> 
    	
        <div class="close9"></div>
       
		<div id="popup_content9"> <!--your content start-->
        <!--<h2>edit mobile number</h2>
           <p>
If you wish to change your mobile number,please change and verify it
            </p>
            <div class="span4">
 <select name="profile_for" class="selectpicker select_select" style="color:#000;border-color:#991248;font-weight: 100;">
<option value="0">india(+91)</option>
			<option value="Myself">Myself</option>
			<option value="Son">Son</option>
			<option value="Daughter">Daughter</option>
			<option value="Brother">Brother</option>
			<option value="Sister">Sister</option>
			<option value="Relative">Relative</option>
			<option value="Friend">Friend</option>
  </select>  </div>  
  <div class="spann4">
   <input type="text" name=""  value="9895989598" />
  </div>       
            <a href="#"><input type="button" class="ppbutton" value="update"/></a>
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
<!--    
	<div class="loaderr9"></div>
   	<div id="backgroundPopup9"></div>-->
               
      
      
      
      
      
      
                    
<!--  <div class="span9 mob11">
 <h3>You will receive sms in few second,if dont click to resend the PIN</h3>
  </div>                   
  <div class="span4 mob13"><button type="submit" class=" btn-large mob12 ">Resend pin</button></div>                  
                        
 </div>-->
 <div class="span8 mob14">          
   <h4>Once your mobile no is verified <a href="#">click here</a> to start your partner search</h4> </div>            
            </div>
    </div>
</div>
</body>
</html>