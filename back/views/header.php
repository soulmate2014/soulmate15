<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soulmate</title>
<link href="<?php echo base_url();?>file/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/style1.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>

<body>
		<div class="header"><img src="<?php echo base_url();?>file/img/images/images/about_02.png" />
    <div class="navbar-wrapper">
    		<div class="container">

      
              <div class="span2 border" data-original-title="" title=""><i class="icon-user"></i><a href="#">NRI LOGIN</a></div>
               <div class="span2 border" data-original-title="" title=""><i class="icon-user"></i><a href="#">CELEBRITIES LOGIN</a></div>
               <div class="span1" data-original-title="" title=""></div>
               <div class="span3" data-original-title="" title=""><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>file/img/images/small.png"></a></div>
   
               <div class="span5 offset0" data-original-title="" title="">
      	 <?php if($this->session->userdata('logged_in'))
 {
	 ?>	
     
      <div class="span4"></div><a style="color:#fff; font-weight:bold;" href="login/logout">Logout</a>   <?php  }
 else
 {?>
               <form action="<?php echo base_url();?>index.php/verifylogin" method="post" accept-charset="utf-8" class="form-inline">
         
<form class="form-inline">
        
               <div class="span2 forgot"><input type="text" name="username" class="input-medium email" placeholder="Email">
                 &nbsp;<a href="#">forgot password?</a> </div>
               <input type="password" name="password" class="input-medium email" placeholder="Password">
               <button type="submit" class="btn">Log in</button>
 		</form>
 <?php } ?>
               </div>

      </div>
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
                <!--<li><a href="#">ABOUTUS</a></li>-->
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
                <li><a href="#">MATCHES</a></li>
                <li><a href="#">MESSAGES</a></li>
                <li><a href="#">UP GRADE</a></li>
                <li style="border:none;"><a href="#">HELP</a></li>
              </ul>
              <div class="span3" data-original-title="" title=""></div>
            </div>
          </div>
          </div>
          </div>
</div>