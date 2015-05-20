<?php 
$session_data = $this->session->userdata('logged_in');
$user_id= $session_data['user_id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soulmate</title>
<link href="<?php echo base_url();?>file/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"> </script>
<script type="text/javascript" src="<?php echo base_url();?>
file/js/script.js"></script>
<script src="<?php echo base_url();?>
file/js/rupyaINR.min.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>file/css/popup.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>file/css/style1.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<style>
.ph {
  padding-top: 0px;
  width: 29%;
  float: left;
  color: #fff;
}
.qimg {
  float: left;
}
.row-fluid.recommends8 .container .span12 .span8 .nav.nav-tabs.ad.mclr.recommends1 li.active{
	background-color:#42b8b6;
}
.row-fluid.recommends8 .container .span12 .span8 .nav.nav-tabs.ad.mclr.recommends1 li active.a:active{
	background-color:#42b8b6;
}

.myaccountprofpicmain {
	background-color: #e3e3e3;
	border: 3px #e3e3e3 solid;
	padding-left: 0px;
	padding-top: 0px;
	width: 156px;
	height: 175px;
	text-align:center;
}
.myaccountprofpic {
	overflow: hidden;
	border: 3px #e3e3e3 solid;
	padding-left: 0px;
	padding-top: 0px;
	width: 150px;
	height: 150px
}
.open {
  background-color: #229a98;
}
.open > .dropdown-menu {
display: block;
}
.span5 .offset0
{
	margin-top:55px;
}
option {
background-color: #3c8483;
color:#000;
}
optgroup
{
	color:#000;
	
}
::-webkit-input-placeholder {
   color: red;
}
.dropdown-menu {
position: absolute;
top: 100%;
left: 0;
z-index: 1000;
display: none;
float: left;
min-width: 135px;
padding: 5px 0;
margin: 0px 0 0;
list-style: none;
background-color: #ffffff;
border: 1px solid #ccc;
border: 1px solid #229a98;
/*border: 0px solid rgba(0, 0, 0, 0.2);*/
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 0px;
-webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
-moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
-webkit-background-clip: padding-box;
-moz-background-clip: padding;
background-clip: padding-box;
}</style>
</head>

<body>
<?php if($this->session->userdata('logged_in'))
 {
	 $session_data = $this->session->userdata('logged_in');
		$soul_id= $session_data['user_id'];
		$user_id= $session_data['user_id'];
 }
	 ?>
<div class="header">
  <div class="span7 lg1"><img src="<?php echo base_url(); ?>file/img/images/lg_03.png" /></div>
  <div class="span3 lg2">
    <div class="help">
      <div class="span1 phonelogo"> <img src="<?php echo base_url(); ?>file/img/phonelogo_03.png" /> </div>
      <div class="span1 helpline">
        <div class="span1 helpline1">HELPLINE</div>
        <div class="span1 helpline2">9965654858</div>
      </div>
    </div>
  </div>
<?php foreach($image_status as $img)
{
	
}
?>
  <div class="modal fade hide" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Delete Profile</h3>
                </div>
               <span style="margin-left:20px;">Are you sure want to delete this Account <?php echo $session_data['user_id']; ?></span>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
  <?php if($this->session->userdata('logged_in'))
 {
	 $session_data = $this->session->userdata('logged_in');
	 ?>
  <div class="span1 profilethumb" >
    <div class="span1 prof">
     <?php if($session_data['file_name']==''&&$session_data['gender']=='male' &&$img->profpic_status==0)
									{ ?>
                                     <a href="<?php echo site_url("managephoto/"); ?>"><img src="<?php echo base_url();?>file/img/avtr_menpro.jpg"  /></a>
                                       <?php }
									   elseif($session_data['file_name']==''&&$session_data['gender']=='female' &&$img->profpic_status==0)
									{ ?>
                                     <a href="<?php echo site_url("managephoto/"); ?>"><img src="<?php echo base_url();?>file/img/avtrwomenpro.jpg"  /></a>
                                       <?php }
									   else if($session_data['file_name']!=''&&$session_data['gender']=='male' &&$img->profpic_status==0)
									{ ?>
                                     <a href="<?php echo site_url("managephoto/"); ?>"><img src="<?php echo base_url();?>file/img/avtr_menpro.jpg"  /></a>
                                       <?php }
									   elseif($session_data['file_name']!=''&&$session_data['gender']=='female' &&$img->profpic_status==0)
									{ ?>
                                     <a href="<?php echo site_url("managephoto/"); ?>"><img src="<?php echo base_url();?>file/img/avtrwomenpro.jpg"  /></a>
                                       <?php }
									else if($session_data['file_name']!='' && $img->profpic_status==1)
									{
										?>
                                     <a href="<?php echo site_url("managephoto/"); ?>"><img src="<?php echo base_url(); ?>thumb/<?php echo $session_data['file_name']; ?>"/></a>
                                     <?php }
									 else if($image_status=='adv')
									{
										?>
                                     <a href="<?php echo site_url("managephoto/"); ?>"><img src="<?php echo base_url(); ?>thumb/<?php echo $session_data['file_name']; ?>"/></a>
                                     <?php }
									  ?></div>
  </div>
  <div class="span3 profiledetail">
    <div class="span4 profname"><a style="color:#FFF;" href="<?php echo base_url();?>index.php/individual/profile/<?php echo $user_id; ?>"><?php echo $session_data['name'] ?>&nbsp;(&nbsp;<?php echo $session_data['user_id']; ?>&nbsp;)</a></div>
    <div class="span4 accounttype">
      <div class="span2 account" style="margin-left:0px;"><span style="font-size:14px;">Account Type:<?php if($session_data['status_paid']==0){ echo "FREE";} else if($session_data['status_paid']==2){echo "PAID"; } else if($session_data['celibrity_status']==1){echo "CELIBRITY"; } ?></span><span style="margin-left:8px; font-size:14px;">|</span></div>
      <div class="span2 upgrade"><?php if($session_data['status_paid']==0){?><a style="color:#FFF;" href="<?php echo site_url("payment")?>">upgrade now</a>
      <?php } else if($session_data['status_paid']==2){?>
      <a style="color:#FFF;" href="#">Package Details</a>
      <?php } else if($session_data['celibrity_status']==1){?>
       <a style="color:#FFF;" href="#">Upgrade Now</a>
       <?php }?>
      </div>
    </div>
  </div>

  <div class="span1 drop">
    <div class="dropdown">
    <a href="#"  data-toggle="dropdown">
   <img  src="<?php echo base_url(); ?>file/img/images/settings_06.png" /></a>
     <!-- <button  type="button"  data-toggle="dropdown">a</button>-->
      <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu1">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url();?>index.php/myaccount">EDIT PROFILE</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url();?>index.php/managevideo">MANAGE VIDEO</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url();?>index.php/horoscope_controller/edithoro">EDIT HOROS</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>index.php/staticcontent/help">HELP</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">FAQ</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>index.php/succes">SUCCESS STORY</a></li>
        <li role="presentation"><a data-toggle="modal" data-target="#delete"  role="menuitem" tabindex="-1" >DELETE PROFILE</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>index.php/login/logout">LOG OUT</a></li>
        
        
      </ul>
    </div>
  </div>
    <?php }
	else
	{
		?>
        <div class="span5 offset0 n1">
    <div class="span3"></div>
   
    <div class="qimg"> <img src="<?php echo base_url(); ?>file/img/images/qu_09.png" /></div>
    <div class="ph" > <a style="color:#FFF;" href="<?php echo site_url('staticcontent/faq'); ?>">FAQ</a></div>
  </div>
        <div class="span5 offset0" data-original-title="" title="">
      	<form action="<?php echo base_url();?>index.php/verifylogin" method="post" accept-charset="utf-8" class="form-inline">
               <div class="span2 forgot"><input type="text" class="input-medium email"  value="<?php echo set_value('username'); ?>" placeholder="Email/Soulmate ID">
                 &nbsp;<a href="#" style="color:#FFF;">forgot password?</a> </div>
               <input type="password" class="input-medium email" name="password1"  placeholder="Password">
               
               <button type="submit" class="btn">Log in</button>
                 <?php echo form_error('username'); echo form_error('password1');?>
 		</form>
               </div>
               <?php }?>
</div>


 <?php if($session_data['celibrity_status']==1)
	  {
		  echo "";
	  }
		  else
		  { ?>
<div class="row-fluid menu ">
  <div class="container">
    <div class="navbar">
      <div class="navbar-inner">
     
        <div class="container">
          <div class="span3" data-original-title="" title=""></div>
          <ul role="navigation" class="nav">
           
            <!--<li><a href="#">ABOUTUS</a></li>-->
            <?php if($this->session->userdata('logged_in'))
 {
	 ?>
      <li class="active"><a href="<?php echo base_url();?>index.php/myhome/index/1">HOME</a></li>
            <!--<li><a href="<?php echo base_url();?>index.php/myaccount">MY ACCOUNT</a></li>-->
            <?php  }
 else
 {?>
 <li class="active"><a href="<?php echo base_url();?>">HOME</a></li>
  <li ><a  href="<?php echo base_url(); ?>index.php/staticcontent/about">ABOUT US</a></li>
         <li><a href="<?php echo base_url();?>index.php/home/register">REGISTER</a></li>
          
            <?php } ?>
            
              <?php if($this->session->userdata('logged_in'))
 {
	 ?>
            <li><a href="<?php echo base_url();?>index.php/searching">SEARCH</a></li>
     
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">MATCHES <b class="caret"></b></a>
                <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>index.php/searching/newmatches_all">New Matches </a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/searching/yettobeviewed">Yet to be Viewed</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/searching/viewed">Viewed & Not Contacted</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/searching/mutual">Mutual Matches</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">MESSAGES <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url();?>index.php/message">Inbox</a></li>
                    <li><a href="<?php echo base_url();?>index.php/message/sent">Sent Items</a></li>
                   	<li><a href="#">Trash</a></li>
                </ul>
            </li>
            <?php } ?>
            <li><a href="<?php echo base_url();?>index.php/payment">UP GRADE</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/staticcontent/contact">CONTACT US</a></li>
            <li style="border:none;"><a href="<?php echo base_url();?>index.php/staticcontent/help">HELP</a></li>
          </ul>
          <div class="span3" data-original-title="" title=""></div>
        </div>
        
        
      </div>
    </div>
  </div>
</div>
<?php }?>