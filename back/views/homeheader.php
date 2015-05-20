<!DOCTYPE html>
<html>
<head>
    <title>Soulmate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url();?>file/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url();?>file/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url();?>file/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>file/css/elements.css" rel="stylesheet">

<script src="<?php echo base_url();?>file/js/my_js.js"></script>
</head>
  <body>
    <div class="header"><img src="<?php echo base_url();?>file/img/images/headerbg_01.jpg">
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="row show-grid">
              <div class="span2 bord" data-original-title="" title=""><i class="icon-user"></i><a href="#">NRI LOGIN</a></div>
               <div class="span2 bord" data-original-title="" title=""><i class="icon-user"></i><a href="#">CELEBRITIES LOGIN</a></div>
               <div class="span1" data-original-title="" title=""></div>
               <div class="span3" data-original-title="" title=""><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>file/img/images/logo_06.png"></a></div>
              
               <div class="span5 offset0" data-original-title="" style="color: #F07D77;"  title="">
            
                <?php if($this->session->userdata('logged_in'))
 {
	 ?>	
     
      <div class="span4"></div><a style="color:#fff; font-weight:bold;" href="index.php/login/logout">Logout</a>   <?php  }
 else
 {?>
            
               <form action="<?php echo base_url();?>index.php/verifylogin" method="post" accept-charset="utf-8" class="form-inline">
         
<form class="form-inline">
        
               <div class="span2 forgot"><input type="text" name="username" class="input-medium email" placeholder="Email/Soulmate ID">
                 &nbsp;<a href="#" id="popup" onClick="div_show()">forgot password?</a> </div>
               <input type="password" name="password" class="input-medium email" placeholder="Password">
               <button type="submit" class="btn">Log in</button>
 		</form>
           <?php echo validation_errors(); ?>
 <?php } ?>
               </div>
             </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div>
    
    </div>
    <div id="abc">
<div id="popupContact">
<?php
if(isset($error1))
{
?>
    <script language="Javascript">
<!--
alert ("Send you password reset link to your mail")
//-->
</script>
<?php 
}
?>
<?php
if(isset($error2))
{
?>
    <script language="Javascript">
<!--
alert ("The given email is does not exist .Please type a valid email")
//-->
</script>
<?php 
}
?>
<form action="<?php echo base_url();?>index.php/forgot" id="form" method="post" name="form">
<img id="close" src="<?php echo base_url();?>file/img/first-registration22_05.png" onclick ="div_hide()">
<h2>Forgot your password?</h2>
<p>If you Forgot the password please enter the given email.We send a varificaion link to your mail.</p>
<p><input type="text" name="email" class="email .btn-danger" placeholder="Email" style=" color:#000;border: 2px solid #ad2759;"></p>
<?php echo form_error('email'); ?>
<input value="submit" class="btn" name="submit" style="margin-right:10px;" type="submit">
</form>
</div>
</div>
    <div class="row-fluid menu ">
    <div class="container">
    <div class="navbar">
<div class="navbar-inner">
            <div class="container">
            <div class="span3" data-original-title="" title=""></div>
              <ul class="nav">
                <li class="active"><a href="#">HOME</a></li>
                <li ><a  href="#">ABOUTUS</a></li>
                  <?php if($this->session->userdata('logged_in'))
 {
	 ?>	
                <li><a href="<?php echo base_url();?>index.php/login">MY ACCOUNT</a></li>
                 <?php  }
 else
 {?>
                <li><a href="#">REGISTER</a></li>
                <?php } ?>
                <li><a href="#">SEARCH</a></li>
                <li><a href="#">UP GRADE</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li style="border:none;"><a href="#">HELP</a></li>
              </ul>
              <div class="span3" data-original-title="" title=""></div>
            </div>
          </div>
          </div>
          </div>
        </div>
       