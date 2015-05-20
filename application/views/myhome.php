<?php if($this->session->userdata('logged_in'))
 {
	 $session_data = $this->session->userdata('logged_in');
		$soul_id= $session_data['user_id'];
	 
	 ?>
<?php $this->load->view('header'); ?>
<style>
.row-fluid.recommends8 .container .span12 .span8 .nav.nav-tabs.ad.mclr.recommends1 a :hover
</style>
<div class="row-fluid recommends8">
<div class="container">
<div class="span12 ">
<div class="span8 recommends2">
<?php if(isset($message)){ ?>
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" 
      aria-hidden="true"> &times; </button>
  Your Account has been created successfully .Find your soulmate .... </div>
<?php } ?>
<?php if(isset($paysucces)){ ?>
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" 
      aria-hidden="true"> &times; </button>
  Your payment process has been successfully completed. </div>
<?php } ?>
<ul class="nav nav-tabs ad mclr recommends1" role="tablist">
  <li role="presentation" class="active "><a href="#home" aria-controls="home" role="tab" data-toggle="tab" >
    <div class="recommends"><span>
      <?php 
	if(count($query1)>0)
	{
		echo count($query1);
		};?>
      </span> <br />
      New Matches</div>
    </a></li>
  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" >
    <div class="recommends"><span><?php echo $profile->num_rows(); ?></span> <br />
      Yet to be viewed</div>
    </a></li>
  <li role="presentation" ><a href="#viewed" aria-controls="messages" role="tab" data-toggle="tab" >
    <div class="recommends"><span><?php echo $viewed->num_rows(); ?></span> <br />
      Viewed & Not Contacted</div>
    </a></li>
  <li role="presentation" ><a href="#shortlist" aria-controls="messages1" role="tab" data-toggle="tab" >
    <div class="recommends"> <span><?php echo $shortlisting->num_rows(); ?></span> <br />
      Shortlisted My Profile</div>
    </a></li>
  <li role="presentation" ><a href="#like" aria-controls="messages2" role="tab" data-toggle="tab" >
    <div class="recommends"><span> <?php echo $like->num_rows(); ?></span><br />
      Liked Profile</div>
    </a></li>
</ul>
<script>
document.getElementById("myDiv").style.marginLeft = "0px";
</script> 

<!-- Tab panes -->
<div class="tab-content mclr1 bg">
<div role="tabpanel" class="tab-pane active" id="home">
  <?php $i=1; foreach($query1 as $row)
	{ 
	?>
  <div class="span12 mdiv " style="margin-left:0px;" >
    <?php if($row->package=="premium" || $row->package=="prime" ||  $row->package=="soulmate special" ||$row->profile_highlite==1)
{?>
    <div id="highlite" style="background: rgba(198,239,249,1);
background: -moz-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(198,239,249,1)), color-stop(0%, rgba(113,206,239,1)), color-stop(0%, rgba(33,180,226,1)), color-stop(0%, rgba(198,239,249,1)), color-stop(49%, rgba(255,255,255,1)), color-stop(100%, rgba(198,239,249,1)));
background: -webkit-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -o-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -ms-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: linear-gradient(to bottom, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c6eff9', endColorstr='#c6eff9', GradientType=0 );"  class="span12 prof1">
      <?php }
								else
								{
									
?>
      <div    class="span12 prof1">
        <?php } ?>
        
        <div class="span12">
        <?php if($row->package=="premium" || $row->package=="prime" ||  $row->package=="soulmate special" ||$row->profile_highlite==1)
									{?>
                                <div class="span12" style=" margin-left:-10px; float:left; height:50px; background-image:url(<?php echo base_url();?>file/img/featured-profile-page_03.png); background-repeat:no-repeat; text-align:center; color:#FFF;"></div>
								<?php } ?>
          <?php
 if ($block->num_rows() >0)
 {
  foreach($block->result() as $blk) {
	 $blocked[]=  $blk->blocked_id;
 }}
 else
 {
 $blocked[]=  'S2078769';
 }
 if (in_array($row->user_id, $blocked)||($blocked===NULL)){
		?>
          <div class="v1" >
          
       
          <div style="float:left; margin-bottom:10px;" ><a href="#"><?php echo $row->name; ?> (<?php echo $row->user_id; ?>)</a> <i class=" icon-large icon-ban-circle"></i></div><?php if($row->package==NULL)
									{
										echo "";
									}
									else
									{
									?>
                                    <div style="width:110px; float:left; height:20px; background-image:url(<?php echo base_url();?>file/img/featured-profile-package_03.png); background-repeat:no-repeat; margin-left:5px; text-align:center; color:#FFF;"><?php echo $row->package; ?></div>
                                    <?php } ?></div><br />
          <?php } else { ?>
          <div class="v1" > <div style="float:left; margin-bottom:10px;"><a href="#"><?php echo $row->name; ?> (<?php echo $row->user_id; ?>)</a> </div><?php if($row->package==NULL)
									{
										echo "";
									}
									else
									{
									?>
                                    <div style="width:110px; float:left; height:20px; background-image:url(<?php echo base_url();?>file/img/featured-profile-package_03.png); background-repeat:no-repeat; margin-left:5px; text-align:center; color:#FFF; font-size: 11px;"><?php echo $row->package; ?></div>
                                    <?php } ?></div><br />
          <?php } ?>
        </div>
        <div class="span12">
          <div class="span3 view1" style="width:150px;">
            <?php if($row->file_name==''&&$row->gender=='male')
									{ ?>
            <img class="profile_thumb" src="<?php echo base_url();?>file/img/avtr_men.jpg"  />
            <?php } elseif($row->file_name==''&&$row->gender=='female')
									{  ?>
            <img class="profile_thumb" src="<?php echo base_url();?>file/img/avtr_women.jpg"  />
            <?php }
                                    
									else
									{
										?>
            <img class="profile_thumb" src="<?php echo base_url();?>uploads/<?php echo  $row->file_name; ?>">
            <?php } ?>
          </div>
          <div class="span5" style=" width:43.5%;">
            <div class="loader1 mclr2">
            
            <div class="modal fade hide" id="horo<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            <img src="<?php echo base_url();?>horoscope/<?php echo  $row->horoscope; ?>" class="img-responsive">
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              
              
              <div class="modal fade hide" id="rehoro<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope Request</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            You want to send a request to this member
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              
              
               <div class="modal fade hide" id="uphoro<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            You want to send a request to this member
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <div class="modal fade hide" id="mobile<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                Mobile number is <?php echo  $row->mobile; ?>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <div class="modal fade hide" id="mobileupgrade<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                To view mobile number of the profile <?php echo  $row->user_id; ?>.you should  upgrade your profile.<a href="<?php echo site_url('payment'); ?>">Upgrade</a>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <div class="modal fade hide" id="mailupgrade<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel" style="font-size:15px;"> To send Personalised Messages to her(<?php echo  $row->name; ?>), Upgrade your membership</h3>
                </div>
    
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <a href="<?php echo site_url('payment'); ?>"><button class="btn btn-primary">Upgrade</button></a>
                </div>
              </div>
              <div class="modal fade hide" id="mail<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel" style="font-size:20px;">send Personalised Messages to  to <?php echo  $row->name; ?></h3>
                </div>
                <form>
                  <!--<div class="span12">
                    <div class="span4"></div>
                    <div class="span6">Tell somthing to <?php echo  $row->name; ?></div>
                  </div>-->
                 <span style="margin-left:20%;">your message:</span>
                  <textarea name="mail" rows="5" style="border:#42b8b6 solid 2px; color:#000
                  ;"></textarea>
                  
                 
               
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Send mail</button>
                </div> </form>
              </div>
              <?php if($session_data['status_paid']==2){ ?>
              <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobile<?php echo $i; ?>" href="">View Mobile No</a> </p>
              <?php } else { ?>
              <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobileupgrade<?php echo $i; ?>" href="">View Mobile No</a>
              </p>
                <?php } ?>
                <!--<a data-toggle="modal" data-target="#myModal<?php echo $i; ?>" href="">Delete</a>--> 
                <?php if($session_data['status_paid']==2 && $row->horoscope!=""){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#horo<?php echo $i; ?>" href="">View Horoscope</a></p>
                <?php }
				else if($session_data['status_paid']==2 && $row->horoscope==NULL){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#rehoro<?php echo $i; ?>" href="">Request Horoscope</a></p>
				 <?php }
				 else if($session_data['status_paid']==0){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#uphoro<?php echo $i; ?>" href="">view Horoscope</a></p>
				 
				 <?php }?>
              <div class="span12 mnn">
                <?php  echo $row->about_us; ?>
                <br />
                <br />
              </div>
              <div class="span12">
                <form action="#">
                  <?php if($session_data['status_paid']==2){ ?>
                  <a data-toggle="modal" data-target="#mail<?php echo $i; ?>" href="">
                  <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                  </a>
                  <?php } else { ?>
                  <a data-toggle="modal" data-target="#mailupgrade<?php echo $i; ?>" href="">
                  <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                  </a>
                  <?php } ?>
                  <?php
 if ($intrested->num_rows() >0)
 {
  foreach($intrested->result() as $intrest) {
	 $int[]=  $intrest->intrested_id;
 }/*}
 else
 {
 $int[]= '10000';
 }*/
 if (in_array($row->user_id, $int)||($int===NULL)){
		?>
                  Intrest Send
                    <?php } else if($intrest->intrest_status==1) { ?>
                  Rejected request
                 
				  <?php } else {?>
         
                  <a href="<?php echo base_url(); ?>index.php/status/intrest/<?php  echo $row->user_id; ?>" style="text-decoration:none; color:inherit;">
                  <input type="button" class="btn1 btn-small match mbtn" name="yes" value="Send Interest" />
                  
                 <?php }} else
				 {
					 ?>
                       <a href="<?php echo base_url(); ?>index.php/status/intrest/<?php  echo $row->user_id; ?>" style="text-decoration:none; color:inherit;">
                  <input type="button" class="btn1 btn-small match mbtn" name="yes" value="Send Interest" /></a>
                  <?php } ?>
				 
                  <?php
 if ($block->num_rows() >0)
 {
  foreach($block->result() as $blk) {
	 $blocked[]=  $blk->blocked_id;
 }}
 else
 {
 $blocked[]= 'S2078769';
 }
 if (in_array($row->user_id, $blocked)||($blocked===NULL)){
		?>
                  <a href="<?php echo base_url(); ?>index.php/status/unblock/<?php  echo $row->user_id; ?>" style="text-decoration:none; color:inherit;">
                  <input style="background-color:#999;"   class=" btn1 btn-small match mbtn" type="button" value="Blocked" />
                  </a>
                  <?php }  else {  ?>
                  <a href="<?php echo base_url(); ?>index.php/status/block/<?php  echo $row->user_id; ?>"  style="text-decoration:none; color:inherit;">
                  <input class="btn1 btn-small match mbtn" type="button" value="Block" />
                  </a>
                  <?php  }?>
                  <?php
 if ($shortlist->num_rows() >0)
 {
  foreach($shortlist->result() as $short) {
	 $shortlisted[]=  $short->shortlisted_id;
 }}
 else
 {
 $shortlisted[]=  '11111';
 }
 if (in_array($row->user_id, $shortlisted)||($shortlisted===NULL)){
		?>
                  <a href="<?php echo base_url(); ?>index.php/status/shortlisted/<?php  echo $row->user_id; ?>" style="text-decoration:none; color:inherit;">
                  <input class="btn1 btn-small match mbtn" style="background-color:#999;" type="button" value="Shortlisted" />
                  </a>
                  <?php }  else {  ?>
                  <a href="<?php echo base_url(); ?>index.php/status/shortlist/<?php  echo $row->user_id; ?>"  style="text-decoration:none; color:inherit;">
                  <input class="btn1 btn-small match mbtn" type="button" value="Shortlist" />
                  </a>
                  <?php  }?>
                </form>
                </span>
                
   
             
              </div>
            </div>
          </div>
          <div class="span4 view1">
            <table>
              <tr>
                <td width="120px;">Profile Created For </td>
                <td> :&nbsp; </td>
                <td><strong><?php echo $row->profile_for; ?></strong></td>
              </tr>
              <tr>
                <td>Age, Height </td>
                <td> :&nbsp; </td>
                <td><strong><?php echo $row->age; ?> Yrs, <?php echo $row->height; ?> Cms</strong></td>
              </tr>
              <tr>
                <td>Religion </td>
                <td> :&nbsp; </td>
                <td><strong> <?php echo $row->religion_name; ?></strong></td>
              </tr>
              <tr>
                <td>Caste, Sub Caste</td>
                <td> :&nbsp; </td>
                <td><strong><?php echo $row->cast_name; ?>,<?php echo $row->subcast; ?></strong></td>
              </tr>
              <tr>
                <td>Star </td>
                <td> :&nbsp; </td>
                <td><strong><?php echo $row->star_name; ?></strong></td>
              </tr>
              <tr>
                <td valign="top">Location </td>
                <td valign="top"> :&nbsp; </td>
                <td><strong> <?php echo $row->city; ?>, <?php echo $row->state; ?>, <?php echo $row->country; ?></strong></td>
              </tr>
              <tr>
                <td valign="top">Education </td>
                <td valign="top"> :&nbsp; </td>
                <td><strong><?php echo $row->education_name; ?></strong></td>
              </tr>
              <tr>
                <td valign="top">Occupation </td>
                <td valign="top"> :&nbsp; </td>
                <td><strong> <?php echo $row->occupation_name; ?></strong></td>
              </tr>
              <tr>
                <td>Gender </td>
                <td> :&nbsp; </td>
                <td><strong> <?php echo $row->gender; ?></strong></td>
              </tr>
            </table>
            <br />
            <a href="<?php echo base_url();?>index.php/individual/profile/<?php echo $row->user_id; ?>"><strong>View Full Profile</strong></a> <br />
            &nbsp; </div>
        </div>
      </div>
    </div>
    <?php  $i++;}
	?>
    <div class="span12 recommends5">
      <div class="span8 recommends6">
        <?php if(count($query1)>9){ ?>
        <div class="span4 recommends7"><a href="<?php echo base_url(); ?>index.php/searching/newmatches_all">
          <button type="submit" style="width: 150px;" class="btn1 btn-large match">View all</button>
          </a></div>
        <?php } else{ echo ""; }?>
      </div>
    </div>
  </div>
  <div role="tabpanel" class="tab-pane" id="profile">
    <?php $j=1; foreach($profile->result() as $pro){ ?>
    <div class="span12 mdiv " style="margin-left:0px;" >
      <?php if($pro->package=="premium" || $pro->package=="prime" ||  $pro->package=="soulmate special" ||$pro->profile_highlite==1)
{?>
      <div id="highlite" style="background: rgba(198,239,249,1);
background: -moz-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(198,239,249,1)), color-stop(0%, rgba(113,206,239,1)), color-stop(0%, rgba(33,180,226,1)), color-stop(0%, rgba(198,239,249,1)), color-stop(49%, rgba(255,255,255,1)), color-stop(100%, rgba(198,239,249,1)));
background: -webkit-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -o-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -ms-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: linear-gradient(to bottom, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c6eff9', endColorstr='#c6eff9', GradientType=0 );"  class="span12 prof1">
        <?php }
								else
								{
									
?>
        <div    class="span12 prof1">
          <?php } ?>
          <div class="span12">
          <?php if($pro->package=="premium" || $pro->package=="prime" ||  $pro->package=="soulmate special" ||$pro->profile_highlite==1)
									{?>
                                <div class="span12" style=" margin-left:-10px; float:left; height:50px; background-image:url(<?php echo base_url();?>file/img/featured-profile-page_03.png); background-repeat:no-repeat; text-align:center; color:#FFF;"></div>
								<?php } ?>
            <?php
 if ($block->num_rows() >0)
 {
  foreach($block->result() as $blk) {
	 $blocked[]=  $blk->blocked_id;
 }}
 else
 {
 $blocked[]=  'S2078769';
 }
 if (in_array($pro->user_id, $blocked)||($blocked===NULL)){
		?>
           <div class="v1" >
          
       
          <div style="float:left; margin-bottom:10px;" ><a href="#"><?php echo $pro->name; ?> (<?php echo $pro->user_id; ?>)</a> <i class=" icon-large icon-ban-circle"></i></div><?php if($pro->package==NULL)
									{
										echo "";
									}
									else
									{
									?>
                                    <div style="width:110px; float:left; height:20px; background-image:url(<?php echo base_url();?>file/img/featured-profile-package_03.png); background-repeat:no-repeat; margin-left:5px; text-align:center; color:#FFF;"><?php echo $pro->package; ?></div>
                                    <?php } ?></div><br />
            <?php } else { ?>
            <div class="v1" > <div style="float:left; margin-bottom:10px;"><a href="#"><?php echo $pro->name; ?> (<?php echo $pro->user_id; ?>)</a> </div><?php if($pro->package==NULL)
									{
										echo "";
									}
									else
									{
									?>
                                    <div style="width:110px; float:left; height:20px; background-image:url(<?php echo base_url();?>file/img/featured-profile-package_03.png); background-repeat:no-repeat; margin-left:5px; text-align:center; color:#FFF; font-size: 11px;"><?php echo $pro->package; ?></div>
                                    <?php } ?></div><br />
            <?php } ?>
          </div>
          <div class="span12" style="margin-left:0px;">
            <div class="span3 view1 " style="width:150px;">
              <?php if($pro->file_name==''&&$pro->gender=='male')
									{ ?>
              <img class="profile_thumb" src="<?php echo base_url();?>file/img/avtr_men.jpg"  />
              <?php } elseif($pro->file_name==''&&$pro->gender=='female')
									{  ?>
              <img class="profile_thumb" src="<?php echo base_url();?>file/img/avtr_women.jpg"  />
              <?php }
                                    
									else
									{
										?>
              <img class="profile_thumb" src="<?php echo base_url();?>uploads/<?php echo  $pro->file_name; ?>">
              <?php } ?>
            </div>
            <div class="span5" style=" width:43.5%;">
              <div class="loader1 mclr2">
              <?php if($session_data['status_paid']==2){ ?>
              <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobilepro<?php echo $j; ?>" href="">View Mobile No</a> </p>
              <?php } else { ?>
             <p> <img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobileupgradepro<?php echo $j; ?>" href="">View Mobile No</a>
              </p>
                <?php } ?>
                 <?php if($session_data['status_paid']==2 && $pro->horoscope!=""){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#horopro<?php echo $j; ?>" href="">View Horoscope</a></p>
                <?php }
				else if($session_data['status_paid']==2 && $pro->horoscope==NULL){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#rehoropro<?php echo $j; ?>" href="">Request Horoscope</a></p>
				 <?php }
				 else if($session_data['status_paid']==2 && $pro->horoscope==""){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#uphoropro<?php echo $j; ?>" href="">view Horoscope</a></p>
				 
				 <?php }?>
                <div class="span12 mnn"> <?php echo  $pro->about_us; ?><br />
                  <br />
                </div>
                 <div class="modal fade hide" id="horopro<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            <img src="<?php echo base_url();?>horoscope/<?php echo  $pro->horoscope; ?>" class="img-responsive">
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              
              
              <div class="modal fade hide" id="rehoropro<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope Request</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            You want to send a request to this member
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              
              
               <div class="modal fade hide" id="uphoropro<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            You want to send a request to this member
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
                <div class="modal fade hide" id="mobilepro<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                Mobile number is <?php echo  $pro->mobile; ?>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <div class="modal fade hide" id="mobileupgradepro<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                To view mobile number of the profile <?php echo  $pro->user_id; ?>.you should  upgrade your profile.<a href="<?php echo site_url('payment'); ?>">Upgrade</a>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <div class="modal fade hide" id="mailupgradepro<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel" style="font-size:15px;"> To send Personalised Messages to her(<?php echo  $pro->name; ?>), Upgrade your membership</h3>
                </div>
    
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <a href="<?php echo site_url('payment'); ?>"><button class="btn btn-primary">Upgrade</button></a>
                </div>
              </div>
              <div class="modal fade hide" id="mailpro<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel" style="font-size:20px;">send Personalised Messages to  to <?php echo  $pro->name; ?></h3>
                </div>
                <form>
                  <!--<div class="span12">
                    <div class="span4"></div>
                    <div class="span6">Tell somthing to <?php echo  $pro->name; ?></div>
                  </div>-->
                 <span style="margin-left:20%;">your message:</span>
                  <textarea name="mail" rows="5" style="border:#42b8b6 solid 2px; color:#000
                  ;"></textarea>
                  
                 
               
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Send mail</button>
                </div> </form>
              </div>
                <div class="span12">
                  <form action="#">
                <?php if($session_data['status_paid']==1){ ?>
                  <a data-toggle="modal" data-target="#mailpro<?php echo $j; ?>" href="">
                  <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                  </a>
                  <?php } else { ?>
                  <a data-toggle="modal" data-target="#mailupgradepro<?php echo $j; ?>" href="">
                  <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                  </a>
                  <?php } ?>
                    <?php
 if ($intrested->num_rows() >0)
 {
  foreach($intrested->result() as $intrest) {
	 $int[]=  $intrest->intrested_id;
 }}
 else
 {
 $int[]= '10000';
 }
 if (in_array($pro->user_id, $int)||($int===NULL)){
		?>
                    Intrest Send
                    <?php } else {?>
                    <a href="<?php echo base_url(); ?>index.php/status/intrest/<?php  echo $pro->user_id; ?>" style="text-decoration:none; color:inherit;">
                    <input type="button" class="btn1 btn-small match mbtn" name="yes" value="Send Interest" />
                    <?php }?>
                    <?php
 if ($block->num_rows() >0)
 {
  foreach($block->result() as $blk) {
	 $blocked[]=  $blk->blocked_id;
 }}
 else
 {
 $blocked[]=  'S2078769';
 }
 if (in_array($pro->user_id, $blocked)||($blocked===NULL)){
		?>
                    <a href="<?php echo base_url(); ?>index.php/status/unblock/<?php  echo $pro->user_id; ?>" style="text-decoration:none; color:inherit;">
                    <input style="background-color:#999;"   class=" btn1 btn-small match mbtn" type="button" value="Blocked" />
                    </a>
                    <?php }  else {  ?>
                    <a href="<?php echo base_url(); ?>index.php/status/block/<?php  echo $pro->user_id; ?>"  style="text-decoration:none; color:inherit;">
                    <input class="btn1 btn-small match mbtn" type="button" value="block" />
                    </a>
                    <?php  }?>
                    <?php
 if ($shortlist->num_rows() >0)
 {
  foreach($shortlist->result() as $short) {
	 $shortlisted[]=  $short->shortlisted_id;
 }}
 else
 {
 $shortlisted[]=  '11111';
 }
 if (in_array($pro->user_id, $shortlisted)||($shortlisted===NULL)){
		?>
                    <a href="<?php echo base_url(); ?>index.php/status/shortlisted/<?php  echo $pro->user_id; ?>" style="text-decoration:none; color:inherit;">
                    <input class="btn1 btn-small match mbtn" style="background-color:#999;" type="button" value="shortlisted" />
                    </a>
                    <?php }  else {  ?>
                    <a href="<?php echo base_url(); ?>index.php/status/shortlist/<?php  echo $pro->user_id; ?>"  style="text-decoration:none; color:inherit;">
                    <input class="btn1 btn-small match mbtn" type="button" value="shortlist" />
                    </a>
                    <?php  }?>
                  </form>
                  </span>
                  
               
                  
                
                </div>
              </div>
            </div>
            <div class="span4 view1">
              <table>
                <tr>
                  <td width="120px;">Profile Created For </td>
                  <td> :&nbsp; </td>
                  <td><strong><?php echo $pro->profile_for; ?></strong></td>
                </tr>
                <tr>
                  <td>Age, Height </td>
                  <td> :&nbsp; </td>
                  <td><strong><?php echo $pro->age; ?> Yrs, <?php echo $pro->height; ?> Cms</strong></td>
                </tr>
                <tr>
                  <td>Religion </td>
                  <td> :&nbsp; </td>
                  <td><strong> <?php echo $pro->religion_name; ?></strong></td>
                </tr>
                <tr>
                  <td>Caste, Sub Caste</td>
                  <td> :&nbsp; </td>
                  <td><strong><?php echo $pro->cast_name; ?>,<?php echo $pro->subcast; ?></strong></td>
                </tr>
                <tr>
                  <td>Star </td>
                  <td> :&nbsp; </td>
                  <td><strong><?php echo $pro->star_name; ?></strong></td>
                </tr>
                <tr>
                  <td valign="top">Location </td>
                  <td valign="top"> :&nbsp; </td>
                  <td><strong> <?php echo $pro->city; ?>, <?php echo $pro->state; ?>, <?php echo $pro->country; ?></strong></td>
                </tr>
                <tr>
                  <td valign="top">Education </td>
                  <td valign="top"> :&nbsp; </td>
                  <td><strong><?php echo $pro->education_name; ?></strong></td>
                </tr>
                <tr>
                  <td valign="top">Occupation </td>
                  <td valign="top"> :&nbsp; </td>
                  <td><strong> <?php echo $pro->occupation_name; ?></strong></td>
                </tr>
                <tr>
                  <td>Gender </td>
                  <td> :&nbsp; </td>
                  <td><strong> <?php echo $pro->gender; ?></strong></td>
                </tr>
              </table>
              <br />
              <a href="<?php echo base_url();?>index.php/individual/profile/<?php echo $pro->user_id; ?>"><strong>View Full Profile</strong></a> </div>
          </div>
        </div>
      </div>
      <?php $j++;} ?>
      <div class="span12 recommends5">
        <div class="span8 recommends6">
          <?php if(count($profile)>10){ ?>
          <div class="span4 recommends7"><a href="<?php echo base_url(); ?>index.php/searching/yettobeviewed/<?php echo $soul_id ?>">
            <button type="submit" style="width: 150px;" class="btn1 btn-large match">View all</button>
            </a></div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="viewed">
      <?php $j=1; foreach($viewed->result() as $view) { ?>
      <div class="span12 mdiv " style="margin-left:0px;" >
        <?php if($view->package=="premium" || $view->package=="prime" ||  $view->package=="soulmate special" ||$view->profile_highlite==1)
{?>
        <div id="highlite" style="background: rgba(198,239,249,1);
background: -moz-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(198,239,249,1)), color-stop(0%, rgba(113,206,239,1)), color-stop(0%, rgba(33,180,226,1)), color-stop(0%, rgba(198,239,249,1)), color-stop(49%, rgba(255,255,255,1)), color-stop(100%, rgba(198,239,249,1)));
background: -webkit-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -o-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -ms-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: linear-gradient(to bottom, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c6eff9', endColorstr='#c6eff9', GradientType=0 );"  class="span12 prof1">
          <?php }
								else
								{
									
?>
          <div    class="span12 prof1">
            <?php } ?>
            <div class="span12">
            <?php if($view->package=="premium" || $view->package=="prime" ||  $view->package=="soulmate special" ||$view->profile_highlite==1)
									{?>
                                <div class="span12" style=" margin-left:-10px; float:left; height:50px; background-image:url(<?php echo base_url();?>file/img/featured-profile-page_03.png); background-repeat:no-repeat; text-align:center; color:#FFF;"></div>
								<?php } ?>
              <?php
 if ($block->num_rows() >0)
 {
  foreach($block->result() as $blk) {
	 $blocked[]=  $blk->blocked_id;
 }}
 else
 {
 $blocked[]=  'S2078769';
 }
 if (in_array($view->user_id, $blocked)||($blocked===NULL)){
		?>
              <div class="v1" >
          
       
          <div style="float:left; margin-bottom:10px;" ><a href="#"><?php echo $view->name; ?> (<?php echo $view->user_id; ?>)</a> <i class=" icon-large icon-ban-circle"></i></div><?php if($view->package==NULL)
									{
										echo "";
									}
									else
									{
									?>
                                    <div style="width:110px; float:left; height:20px; background-image:url(<?php echo base_url();?>file/img/featured-profile-package_03.png); background-repeat:no-repeat; margin-left:5px; text-align:center; color:#FFF;"><?php echo $view->package; ?></div>
                                    <?php } ?></div><br />
              <?php } else { ?>
              <div class="v1" > <div style="float:left; margin-bottom:10px;"><a href="#"><?php echo $view->name; ?> (<?php echo $view->user_id; ?>)</a> </div><?php if($view->package==NULL)
									{
										echo "";
									}
									else
									{
									?>
                                    <div style="width:110px; float:left; height:20px; background-image:url(<?php echo base_url();?>file/img/featured-profile-package_03.png); background-repeat:no-repeat; margin-left:5px; text-align:center; color:#FFF; font-size: 11px;"><?php echo $view->package; ?></div>
                                    <?php } ?></div><br />
              <?php } ?>
            </div>
            <div class="span12" style="margin-left:0px;">
              <div class="span3 view1 " style="width:150px;">
                <?php if($view->file_name==''&&$view->gender=='male')
									{ ?>
                <img class="profile_thumb" src="<?php echo base_url();?>file/img/avtr_men.jpg"  />
                <?php } elseif($view->file_name==''&&$view->gender=='female')
									{  ?>
                <img class="profile_thumb" src="<?php echo base_url();?>file/img/avtr_women.jpg"  />
                <?php }
                                    
									else
									{
										?>
                <img class="profile_thumb" src="<?php echo base_url();?>uploads/<?php echo  $view->file_name; ?>">
                <?php } ?>
              </div>
              <div class="span5" style="width:43.5%;">
                <div class="loader1 mclr2">
                 <?php if($session_data['status_paid']==2){ ?>
              <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobileview<?php echo $j; ?>" href="">View Mobile No</a> </p>
              <?php } else { ?>
              <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobileupgradeview<?php echo $j; ?>" href="">View Mobile No</a>
              </p>
                <?php } ?>
                 <?php if($session_data['status_paid']==2 && $view->horoscope!=""){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#horoview<?php echo $j; ?>" href="">View Horoscope</a></p>
                <?php }
				else if($session_data['status_paid']==2 && $view->horoscope==NULL){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#rehoroview<?php echo $j; ?>" href="">Request Horoscope</a></p>
				 <?php }
				 else if($session_data['status_paid']==2 && $view->horoscope==""){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#uphoroview<?php echo $j; ?>" href="">view Horoscope</a></p>
				 
				 <?php }?>
                  <div class="span12 mnn"> <?php echo  $view->about_us; ?><br />
                    <br />
                  </div>
                  
                  <div class="modal fade hide" id="horoview<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            <img src="<?php echo base_url();?>horoscope/<?php echo  $view->horoscope; ?>" class="img-responsive">
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              
              
              <div class="modal fade hide" id="rehoroview<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope Request</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            You want to send a request to this member
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              
              
               <div class="modal fade hide" id="uphoroview<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            You want to send a request to this member
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
                  <div class="modal fade hide" id="mobileview<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                Mobile number is <?php echo  $view->mobile; ?>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <div class="modal fade hide" id="mobileupgradeview<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                To view mobile number of the profile <?php echo  $view->user_id; ?>.you should  upgrade your profile.<a href="<?php echo site_url('payment'); ?>">Upgrade</a>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <div class="modal fade hide" id="mailupgradeview<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel" style="font-size:15px;"> To send Personalised Messages to her(<?php echo  $view->name; ?>), Upgrade your membership</h3>
                </div>
    
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <a href="<?php echo site_url('payment'); ?>"><button class="btn btn-primary">Upgrade</button></a>
                </div>
              </div>
              <div class="modal fade hide" id="mailview<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel" style="font-size:20px;">send Personalised Messages to  to <?php echo  $view->name; ?></h3>
                </div>
                <form>
                  <!--<div class="span12">
                    <div class="span4"></div>
                    <div class="span6">Tell somthing to <?php #echo  $pro->name; ?></div>
                  </div>-->
                 <span style="margin-left:20%;">your message:</span>
                  <textarea name="mail" rows="5" style="border:#42b8b6 solid 2px; color:#000
                  ;"></textarea>
                  
                 
               
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Send mail</button>
                </div> </form>
              </div>
                  <div class="span12">
                    <form action="#">
                     <?php if($session_data['status_paid']==1){ ?>
                  <a data-toggle="modal" data-target="#mailview<?php echo $j; ?>" href="">
                  <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                  </a>
                  <?php } else { ?>
                  <a data-toggle="modal" data-target="#mailupgradeview<?php echo $j; ?>" href="">
                  <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                  </a>
                  <?php } ?>
                      <?php
 if ($intrested->num_rows() >0)
 {
  foreach($intrested->result() as $intrest) {
	 $int[]=  $intrest->intrested_id;
 }}
 else
 {
 $int[]= '10000';
 }
 if (in_array($view->user_id, $int)||($int===NULL)){
		?>
                      Intrest Send
                      <?php } else {?>
                      <a href="<?php echo base_url(); ?>index.php/status/intrest/<?php  echo $view->user_id; ?>" style="text-decoration:none; color:inherit;">
                      <input type="button" class="btn1 btn-small match mbtn" name="yes" value="Send Interest" />
                      <?php }?>
                      <?php
 if ($block->num_rows() >0)
 {
  foreach($block->result() as $blk) {
	 $blocked[]=  $blk->blocked_id;
 }}
 else
 {
 $blocked[]=  'S2078769';
 }
 if (in_array($view->user_id, $blocked)||($blocked===NULL)){
		?>
                      <a href="<?php echo base_url(); ?>index.php/status/unblock/<?php  echo $view->user_id; ?>" style="text-decoration:none; color:inherit;">
                      <input style="background-color:#999;"   class=" btn1 btn-small match mbtn" type="button" value="Blocked" />
                      </a>
                      <?php }  else {  ?>
                      <a href="<?php echo base_url(); ?>index.php/status/block/<?php  echo $view->user_id; ?>"  style="text-decoration:none; color:inherit;">
                      <input class="btn1 btn-small match mbtn" type="button" value="block" />
                      </a>
                      <?php  }?>
                      <?php
 if ($shortlist->num_rows() >0)
 {
  foreach($shortlist->result() as $short) {
	 $shortlisted[]=  $short->shortlisted_id;
 }}
 else
 {
 $shortlisted[]=  '11111';
 }
 if (in_array($view->user_id, $shortlisted)||($shortlisted===NULL)){
		?>
                      <a href="<?php echo base_url(); ?>index.php/status/shortlisted/<?php  echo $view->user_id; ?>" style="text-decoration:none; color:inherit;">
                      <input class="btn1 btn-small match mbtn" style="background-color:#999;" type="button" value="shortlisted" />
                      </a>
                      <?php }  else {  ?>
                      <a href="<?php echo base_url(); ?>index.php/status/shortlist/<?php  echo $view->user_id; ?>"  style="text-decoration:none; color:inherit;">
                      <input class="btn1 btn-small match mbtn" type="button" value="shortlist" />
                      </a>
                      <?php  }?>
                    </form>
                    </span>
                           
               </div>
                </div>
              </div>
              <div class="span4 view1">
                <table>
                  <tr>
                    <td width="120px;">Profile Created For </td>
                    <td> :&nbsp; </td>
                    <td><strong><?php echo $view->profile_for; ?></strong></td>
                  </tr>
                  <tr>
                    <td>Age, Height </td>
                    <td> :&nbsp; </td>
                    <td><strong><?php echo $view->age; ?> Yrs, <?php echo $view->height; ?> Cms</strong></td>
                  </tr>
                  <tr>
                    <td>Religion </td>
                    <td> :&nbsp; </td>
                    <td><strong> <?php echo $view->religion_name; ?></strong></td>
                  </tr>
                  <tr>
                    <td>Caste, Sub Caste</td>
                    <td> :&nbsp; </td>
                    <td><strong><?php echo $view->cast_name; ?>,<?php echo $view->subcast; ?></strong></td>
                  </tr>
                  <tr>
                    <td>Star </td>
                    <td> :&nbsp; </td>
                    <td><strong><?php echo $view->star_name; ?></strong></td>
                  </tr>
                  <tr>
                    <td valign="top">Location </td>
                    <td valign="top"> :&nbsp; </td>
                    <td><strong> <?php echo $view->city; ?>, <?php echo $view->state; ?>, <?php echo $row->country; ?></strong></td>
                  </tr>
                  <tr>
                    <td valign="top">Education </td>
                    <td valign="top"> :&nbsp; </td>
                    <td><strong><?php echo $view->education_name; ?></strong></td>
                  </tr>
                  <tr>
                    <td valign="top">Occupation </td>
                    <td valign="top"> :&nbsp; </td>
                    <td><strong> <?php echo $view->occupation_name; ?></strong></td>
                  </tr>
                  <tr>
                    <td>Gender </td>
                    <td> :&nbsp; </td>
                    <td><strong> <?php echo $view->gender; ?></strong></td>
                  </tr>
                </table>
                <br />
                <a href="<?php echo base_url();?>index.php/individual/profile/<?php echo $view->user_id; ?>"><strong>View Full Profile</strong></a> </div>
            </div>
          </div>
        </div>
        <?php $j++;} ?>
        <div class="span12 recommends5">
          <div class="span8 recommends6">
            <?php if(count($viewed)>10){ ?>
            <div class="span4 recommends7"><a href="<?php echo base_url(); ?>index.php/searching/viewed">
              <button type="submit" style="width: 150px;" class="btn1 btn-large match">View all</button>
              </a></div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="shortlist">
        <?php $j=1; foreach($shortlisting->result() as $short){ ?>
        <div class="span12 mdiv " style="margin-left:0px;" >
          <?php if($short->package=="premium" || $short->package=="prime" ||  $short->package=="soulmate special" ||$short->profile_highlite==1)
{?>
          <div id="highlite" style="background: rgba(198,239,249,1);
background: -moz-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(198,239,249,1)), color-stop(0%, rgba(113,206,239,1)), color-stop(0%, rgba(33,180,226,1)), color-stop(0%, rgba(198,239,249,1)), color-stop(49%, rgba(255,255,255,1)), color-stop(100%, rgba(198,239,249,1)));
background: -webkit-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -o-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -ms-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: linear-gradient(to bottom, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c6eff9', endColorstr='#c6eff9', GradientType=0 ); margin-left:0px;"  class="span12 prof1">
            <?php }
								else
								{
									
?>
            <div    class="span12 prof1" style="margin-left:0px;">
              <?php } ?>
              <div class="span12">
                <?php if($short->package=="premium" || $short->package=="prime" ||  $short->package=="soulmate special" ||$short->profile_highlite==1)
									{?>
                                <div class="span12" style=" margin-left:-10px; float:left; height:50px; background-image:url(<?php echo base_url();?>file/img/featured-profile-page_03.png); background-repeat:no-repeat; text-align:center; color:#FFF;"></div>
								<?php } ?>
                <?php
 if ($block->num_rows() >0)
 {
  foreach($block->result() as $blk) {
	 $blocked[]=  $blk->blocked_id;
 }}
 else
 {
 $blocked[]=  'S2078769';
 }
 if (in_array($short->user_id, $blocked)||($blocked===NULL)){
		?>
                <div class="v1" >
          
       
          <div style="float:left; margin-bottom:10px;" ><a href="#"><?php echo $short->name; ?> (<?php echo $short->user_id; ?>)</a> <i class=" icon-large icon-ban-circle"></i></div><?php if($short->package==NULL)
									{
										echo "";
									}
									else
									{
									?>
                                    <div style="width:110px; float:left; height:20px; background-image:url(<?php echo base_url();?>file/img/featured-profile-package_03.png); background-repeat:no-repeat; margin-left:5px; text-align:center; color:#FFF;"><?php echo $short->package; ?></div>
                                    <?php } ?></div><br />
              <?php } else { ?>
              <div class="v1" > <div style="float:left; margin-bottom:10px;"><a href="#"><?php echo $short->name; ?> (<?php echo $short->user_id; ?>)</a> </div><?php if($short->package==NULL)
									{
										echo "";
									}
									else
									{
									?>
                                    <div style="width:110px; float:left; height:20px; background-image:url(<?php echo base_url();?>file/img/featured-profile-package_03.png); background-repeat:no-repeat; margin-left:5px; text-align:center; color:#FFF; font-size: 11px;"><?php echo $short->package; ?></div>
                                    <?php } ?></div>
                <?php } ?>
                <br />
                <br />
              </div>
              <div class="span12" style="margin-left:0px;">
                <div class="span3 view1 " style="width:150px;">
                  <?php if($short->file_name==''&&$short->gender=='male')
									{ ?>
                  <img class="profile_thumb" src="<?php echo base_url();?>file/img/avtr_men.jpg"  />
                  <?php } elseif($short->file_name==''&&$short->gender=='female')
									{  ?>
                  <img class="profile_thumb" src="<?php echo base_url();?>file/img/avtr_women.jpg"  />
                  <?php }
                                    
									else
									{
										?>
                  <img class="profile_thumb" src="<?php echo base_url();?>uploads/<?php echo  $short->file_name; ?>">
                  <?php } ?>
                </div>
                <div class="span5" style=" width:43.5%;">
                  <div class="loader1 mclr2">
                    <?php if($session_data['status_paid']==2){ ?>
              <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobileshort<?php echo $j; ?>" href="">View Mobile No</a> </p>
              <?php } else { ?>
             <p> <img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobileupgradeshort<?php echo $j; ?>" href="">View Mobile No</a>
              </p>
                <?php } ?>
                  <?php if($session_data['status_paid']==2 && $short->horoscope!=""){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#horoshort<?php echo $j; ?>" href="">View Horoscope</a></p>
                <?php }
				else if($session_data['status_paid']==2 && $short->horoscope==NULL){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#rehoroshort<?php echo $j; ?>" href="">Request Horoscope</a></p>
				 <?php }
				 else if($session_data['status_paid']==2 && $short->horoscope==""){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#uphoroshort<?php echo $j; ?>" href="">view Horoscope</a></p>
				 
				 <?php }?>   <div class="span12 mnn">
                      <?php  echo $short->about_us; ?>
                      <br />
                      <br />
                    </div>
                    <div class="span12">
                    
                    <div class="modal fade hide" id="horoshort<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            <img src="<?php echo base_url();?>horoscope/<?php echo  $short->horoscope; ?>" class="img-responsive">
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              
              
              <div class="modal fade hide" id="rehoroshort<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope Request</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            You want to send a request to this member
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              
              
               <div class="modal fade hide" id="uphoroshort<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            You want to send a request to this member
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
                    
                    <div class="modal fade hide" id="mobileshort<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                Mobile number is <?php echo  $short->mobile; ?>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <div class="modal fade hide" id="mobileupgradeshort<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                To view mobile number of the profile <?php echo  $short->user_id; ?>.you should  upgrade your profile.<a href="<?php echo site_url('payment'); ?>">Upgrade</a>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <div class="modal fade hide" id="mailupgradeshort<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel" style="font-size:15px;"> To send Personalised Messages to her(<?php echo  $short->name; ?>), Upgrade your membership</h3>
                </div>
    
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <a href="<?php echo site_url('payment'); ?>"><button class="btn btn-primary">Upgrade</button></a>
                </div>
              </div>
              <div class="modal fade hide" id="mailshort<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel" style="font-size:20px;">send Personalised Messages to  to <?php echo  $short->name; ?></h3>
                </div>
                <form>
                  <!--<div class="span12">
                    <div class="span4"></div>
                    <div class="span6">Tell somthing to <?php echo  $pro->name; ?></div>
                  </div>-->
                 <span style="margin-left:20%;">your message:</span>
                  <textarea name="mail" rows="5" style="border:#42b8b6 solid 2px; color:#000
                  ;"></textarea>
                  
                 
               
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Send mail</button>
                </div> </form>
              </div>
                      <form action="#">
                       <?php if($session_data['status_paid']==2){ ?>
                  <a data-toggle="modal" data-target="#mailshort<?php echo $j; ?>" href="">
                  <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                  </a>
                  <?php } else { ?>
                  <a data-toggle="modal" data-target="#mailupgradeshort<?php echo $j; ?>" href="">
                  <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                  </a>
                  <?php } ?>
                        <?php
 if ($intrested->num_rows() >0)
 {
  foreach($intrested->result() as $intrest) {
	 $int[]=  $intrest->intrested_id;
 }}
 else
 {
 $int[]= '10000';
 }
 if (in_array($short->user_id, $int)||($int===NULL)){
		?>
                        Intrest Send
                        <?php } else {?>
                        <a href="<?php echo base_url(); ?>index.php/status/intrest/<?php  echo $short->user_id; ?>" style="text-decoration:none; color:inherit;">
                        <input type="button" class="btn1 btn-small match mbtn" name="yes" value="Send Interest" />
                        <?php }?>
                        <?php
 if ($block->num_rows() >0)
 {
  foreach($block->result() as $blk) {
	 $blocked[]=  $blk->blocked_id;
 }}
 else
 {
 $blocked[]=  'S2078769';
 }
 if (in_array($short->user_id, $blocked)||($blocked===NULL)){
		?>
                        <a href="<?php echo base_url(); ?>index.php/status/unblock/<?php  echo $short->user_id; ?>" style="text-decoration:none; color:inherit;">
                        <input style="background-color:#999;"   class=" btn1 btn-small match mbtn" type="button" value="Blocked" />
                        </a>
                        <?php }  else {  ?>
                        <a href="<?php echo base_url(); ?>index.php/status/block/<?php  echo $short->user_id; ?>"  style="text-decoration:none; color:inherit;">
                        <input class="btn1 btn-small match mbtn" type="button" value="block" />
                        </a>
                        <?php  }?>
                        <?php
 if ($shortlist->num_rows() >0)
 {
  foreach($shortlist->result() as $shor) {
	 $shortlisted[]=  $shor->shortlisted_id;
 }}
 else
 {
 $shortlisted[]=  '11111';
 }
 if (in_array($short->user_id, $shortlisted)||($shortlisted===NULL)){
		?>
                        <a href="<?php echo base_url(); ?>index.php/status/shortlisted/<?php  echo $short->user_id; ?>" style="text-decoration:none; color:inherit;">
                        <input class="btn1 btn-small match mbtn" style="background-color:#999;" type="button" value="shortlisted" />
                        </a>
                        <?php }  else {  ?>
                        <a href="<?php echo base_url(); ?>index.php/status/shortlist/<?php  echo $short->user_id; ?>"  style="text-decoration:none; color:inherit;">
                        <input class="btn1 btn-small match mbtn" type="button" value="shortlist" />
                        </a>
                        <?php  }?>
                      </form>
                      </span>
                      
             
                    
                    </div>
                  </div>
                </div>
                <div class="span4 view1">
                  <table>
                    <tr>
                      <td width="120px;">Profile Created For </td>
                      <td> :&nbsp; </td>
                      <td><strong><?php echo $short->profile_for; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Age, Height </td>
                      <td> :&nbsp; </td>
                      <td><strong><?php echo $short->age; ?> Yrs, <?php echo $short->height; ?> Cms</strong></td>
                    </tr>
                    <tr>
                      <td>Religion </td>
                      <td> :&nbsp; </td>
                      <td><strong> <?php echo $short->religion_name; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Caste, Sub Caste</td>
                      <td> :&nbsp; </td>
                      <td><strong><?php echo $short->cast_name; ?>,<?php echo $short->subcast; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Star </td>
                      <td> :&nbsp; </td>
                      <td><strong><?php echo $short->star_name; ?></strong></td>
                    </tr>
                    <tr>
                      <td valign="top">Location </td>
                      <td valign="top"> :&nbsp; </td>
                      <td><strong> <?php echo $short->city; ?>, <?php echo $short->state; ?>, <?php echo $row->country; ?></strong></td>
                    </tr>
                    <tr>
                      <td valign="top">Education </td>
                      <td valign="top"> :&nbsp; </td>
                      <td><strong><?php echo $short->education_name; ?></strong></td>
                    </tr>
                    <tr>
                      <td valign="top">Occupation </td>
                      <td valign="top"> :&nbsp; </td>
                      <td><strong> <?php echo $short->occupation_name; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Gender </td>
                      <td> :&nbsp; </td>
                      <td><strong> <?php echo $short->gender; ?></strong></td>
                    </tr>
                  </table>
                  <br />
                  <a href="<?php echo base_url();?>index.php/individual/profile/<?php echo $short->user_id; ?>"><strong>View Full Profile</strong></a> </div>
              </div>
            </div>
          </div>
          <?php $j++;} ?>
          <div class="span12 recommends5">
            <div class="span8 recommends6">
              <?php if(count($shortlisting)>10){ ?>
              <div class="span4 recommends7"><a href="<?php echo base_url(); ?>/index.php/searching/shortlist">
                <button type="submit" style="width: 150px;" class="btn1 btn-large match">View all</button>
                </a></div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="like">
          <?php $j=1; foreach($like->result() as $like){ ?>
          <div class="span12 mdiv " style="margin-left:0px;" >
            <?php if($like->package=="premium" || $like->package=="prime" ||  $like->package=="soulmate special" ||$like->profile_highlite==1)
{?>
            <div id="highlite" style="background: rgba(198,239,249,1);
background: -moz-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(198,239,249,1)), color-stop(0%, rgba(113,206,239,1)), color-stop(0%, rgba(33,180,226,1)), color-stop(0%, rgba(198,239,249,1)), color-stop(49%, rgba(255,255,255,1)), color-stop(100%, rgba(198,239,249,1)));
background: -webkit-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -o-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: -ms-linear-gradient(top, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
background: linear-gradient(to bottom, rgba(198,239,249,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(198,239,249,1) 0%, rgba(255,255,255,1) 49%, rgba(198,239,249,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c6eff9', endColorstr='#c6eff9', GradientType=0 );margin-left:0px;"  class="span12 prof1">
              <?php }
								else
								{
									
?>
              <div    class="span12 prof1" style="margin-left:0px;">
                <?php } ?>
                <div class="span12">
                       <?php if($like->package=="premium" || $like->package=="prime" ||  $like->package=="soulmate special" ||$like->profile_highlite==1)
									{?>
                                <div class="span12" style=" margin-left:-10px; float:left; height:50px; background-image:url(<?php echo base_url();?>file/img/featured-profile-page_03.png); background-repeat:no-repeat; text-align:center; color:#FFF;"></div>
								<?php } ?>
                  <?php
 if ($block->num_rows() >0)
 {
  foreach($block->result() as $blk) {
	 $blocked[]=  $blk->blocked_id;
 }}
 else
 {
 $blocked[]=  'S2078769';
 }
 if (in_array($like->user_id, $blocked)||($blocked===NULL)){
		?>
                  <div class="v1" >
          
       
          <div style="float:left; margin-bottom:10px;" ><a href="#"><?php echo $like->name; ?> (<?php echo $like->user_id; ?>)</a> <i class=" icon-large icon-ban-circle"></i></div><?php if($like->package==NULL)
									{
										echo "";
									}
									else
									{
									?>
                                    <div style="width:110px; float:left; height:20px; background-image:url(<?php echo base_url();?>file/img/featured-profile-package_03.png); background-repeat:no-repeat; margin-left:5px; text-align:center; color:#FFF;"><?php echo $like->package; ?></div>
                                    <?php } ?></div><br />
              <?php } else { ?>
              <div class="v1" > <div style="float:left; margin-bottom:10px;"><a href="#"><?php echo $like->name; ?> (<?php echo $like->user_id; ?>)</a> </div><?php if($like->package==NULL)
									{
										echo "";
									}
									else
									{
									?>
                                    <div style="width:110px; float:left; height:20px; background-image:url(<?php echo base_url();?>file/img/featured-profile-package_03.png); background-repeat:no-repeat; margin-left:5px; text-align:center; color:#FFF; font-size: 11px;"><?php echo $like->package; ?></div>
                                    <?php } ?></div>
                  <?php } ?>
                </div>
                <div class="span12" style="margin-left:0px;">
                  <div class="span3 view1 " style="width:150px;">
                    <?php if($like->file_name==''&&$like->gender=='male')
									{ ?>
                    <img class="profile_thumb" src="<?php echo base_url();?>file/img/avtr_men.jpg"  />
                    <?php } elseif($like->file_name==''&&$like->gender=='female')
									{  ?>
                    <img class="profile_thumb" src="<?php echo base_url();?>file/img/avtr_women.jpg"  />
                    <?php }
                                    
									else
									{
										?>
                    <img class="profile_thumb" src="<?php echo base_url();?>uploads/<?php echo  $like->file_name; ?>">
                    <?php } ?>
                  </div>
                  <div class="span5" style="width:43.5%">
                    <div class="loader1 mclr2">
                   <?php if($session_data['status_paid']==2){ ?>
              <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobilelike<?php echo $j; ?>" href="">View Mobile No</a> </p>
              <?php } else { ?>
              <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobileupgradelike<?php echo $j; ?>" href="">View Mobile No</a>
              </p>
              <?php }?>
                    <?php if($session_data['status_paid']==2 && $like->horoscope!=NULL){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#horolike<?php echo $j; ?>" href="">View Horoscope</a></p>
                <?php }
				else if($session_data['status_paid']==2 && $like->horoscope==NULL){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#rehorolike<?php echo $j; ?>" href="">Request Horoscope</a></p>
				 <?php }
				 else if($session_data['status_paid']==2 && $like->horoscope==""){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#uphorolike<?php echo $j; ?>" href="">view Horoscope</a></p>
				 
				 <?php }?> 
              
                      <div class="span12 mnn">
                        <?php  echo $like->about_us; ?>
                        <br />
                        <br />
                      </div>
                      <div class="span12">
                      
                      <div class="modal fade hide" id="horolike<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            <img src="<?php echo base_url();?>horoscope/<?php echo  $like->horoscope; ?>" class="img-responsive">
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              
              
              <div class="modal fade hide" id="rehorolike<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope Request</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            You want to send a request to this member
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              
              
               <div class="modal fade hide" id="uphorolike<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            You want to send a request to this member
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
                      <div class="modal fade hide" id="mobilelike<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                Mobile number is <?php echo  $like->mobile; ?>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <div class="modal fade hide" id="mobileupgradelike<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                To view mobile number of the profile <?php echo  $like->user_id; ?>.you should  upgrade your profile.<a href="<?php echo site_url('payment'); ?>">Upgrade</a>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <div class="modal fade hide" id="mailupgradelike<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel" style="font-size:15px;"> To send Personalised Messages to her(<?php echo  $like->name; ?>), Upgrade your membership</h3>
                </div>
    
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <a href="<?php echo site_url('payment'); ?>"><button class="btn btn-primary">Upgrade</button></a>
                </div>
              </div>
              <div class="modal fade hide" id="maillike<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel" style="font-size:20px;">send Personalised Messages to  to <?php echo  $like->name; ?></h3>
                </div>
                <form>
                  <!--<div class="span12">
                    <div class="span4"></div>
                    <div class="span6">Tell somthing to <?php echo  $like->name; ?></div>
                  </div>-->
                 <span style="margin-left:20%;">your message:</span>
                  <textarea name="mail" rows="5" style="border:#42b8b6 solid 2px; color:#000
                  ;"></textarea>
                  
                 
               
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Send mail</button>
                </div> </form>
              </div>
                        <form action="#">
                          <?php if($session_data['status_paid']==2){ ?>
                  <a data-toggle="modal" data-target="#maillike<?php echo $j; ?>" href="">
                  <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                  </a>
                  <?php } else { ?>
                  <a data-toggle="modal" data-target="#mailupgradelike<?php echo $j; ?>" href="">
                  <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                  </a>
                  <?php } ?>
                          <?php
 if ($intrested->num_rows() >0)
 {
  foreach($intrested->result() as $intrest) {
	 $int[]=  $intrest->intrested_id;
 }}
 else
 {
 $int[]= '10000';
 }
 if (in_array($like->user_id, $int)||($int===NULL)){
		?>
                          Intrest Send
                          <?php } else {?>
                          <a href="<?php echo base_url(); ?>index.php/status/intrest/<?php  echo $like->user_id; ?>" style="text-decoration:none; color:inherit;">
                          <input type="button" class="btn1 btn-small match mbtn" name="yes" value="Send Interest" />
                          <?php }?>
                          <?php
 if ($block->num_rows() >0)
 {
  foreach($block->result() as $blk) {
	 $blocked[]=  $blk->blocked_id;
 }}
 else
 {
 $blocked[]=  'S2078769';
 }
 if (in_array($like->user_id, $blocked)||($blocked===NULL)){
		?>
                          <a href="<?php echo base_url(); ?>index.php/status/unblock/<?php  echo $like->user_id; ?>" style="text-decoration:none; color:inherit;">
                          <input style="background-color:#999;"   class=" btn1 btn-small match mbtn" type="button" value="Blocked" />
                          </a>
                          <?php }  else {  ?>
                          <a href="<?php echo base_url(); ?>index.php/status/block/<?php  echo $like->user_id; ?>"  style="text-decoration:none; color:inherit;">
                          <input class="btn1 btn-small match mbtn" type="button" value="block" />
                          </a>
                          <?php  }?>
                          <?php
 if ($shortlist->num_rows() >0)
 {
  foreach($shortlist->result() as $short) {
	 $shortlisted[]=  $short->shortlisted_id;
 }}
 else
 {
 $shortlisted[]=  '11111';
 }
 if (in_array($like->user_id, $shortlisted)||($shortlisted===NULL)){
		?>
                          <a href="<?php echo base_url(); ?>index.php/status/shortlisted/<?php  echo $like->user_id; ?>" style="text-decoration:none; color:inherit;">
                          <input class="btn1 btn-small match mbtn" style="background-color:#999;" type="button" value="shortlisted" />
                          </a>
                          <?php }  else {  ?>
                          <a href="<?php echo base_url(); ?>index.php/status/shortlist/<?php  echo $like->user_id; ?>"  style="text-decoration:none; color:inherit;">
                          <input class="btn1 btn-small match mbtn" type="button" value="shortlist" />
                          </a>
                          <?php  }?>
                        </form>
                        </span>
     
                      </div>
                    </div>
                  </div>
                  <div class="span4 view1">
                    <table>
                      <tr>
                        <td width="120px;">Profile Created For </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $like->profile_for; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Age, Height </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $like->age; ?> Yrs, <?php echo $like->height; ?> Cms</strong></td>
                      </tr>
                      <tr>
                        <td>Religion </td>
                        <td> :&nbsp; </td>
                        <td><strong> <?php echo $like->religion_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Caste, Sub Caste</td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $like->cast_name; ?>,<?php echo $like->subcast; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Star </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $like->star_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Location </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong> <?php echo $like->city; ?>, <?php echo $like->state; ?>, <?php echo $row->country; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Education </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong><?php echo $like->education_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Occupation </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong> <?php echo $like->occupation_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Gender </td>
                        <td> :&nbsp; </td>
                        <td><strong> <?php echo $like->gender; ?></strong></td>
                      </tr>
                    </table>
                    <br />
                    <a href="<?php echo base_url();?>index.php/individual/profile/<?php echo $like->user_id; ?>"><strong>View Full Profile</strong></a> </div>
                </div>
              </div>
            </div>
            <?php $j++;} ?>
            <div class="span12 recommends5">
              <div class="span8 recommends6">
                <?php if(count($like)>10){ ?>
                <div class="span4 recommends7"><a href="<?php echo base_url(); ?>index.php/searching/liked">
                  <button type="submit" style="width: 150px;" class="btn1 btn-large match">View all</button>
                  </a></div>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="span4 recommends3">
        <div class="search ">
          <div class="span12 mpd1">
            <h3>Search by ID</h3>
            <div class="span11 mpd">
             <form action="<?php echo site_url('searching/search_id')?>" method="post" class="navbar-form pull-left form-search">
                <input required type="text" name="user_id" class="form-control">
          
                <button type="submit" class="btn">Search</button>
              </form>
            </div>
          </div>
        </div>
        <div class="matches">
          <div class="span12" style="background-color:#FFF; overflow:hidden;"> <img src="<?php echo base_url(); ?>file/add/individual page2.jpg"> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>
<?php }
	else
	{
		 redirect('home/', 'refresh');
	}
	?>