<?php include'header.php' ?>
<style>
.row-fluid.adcontent.result .container .span12 .span12.result1 .span8.result2 .span4 a{
	background-color:#991248;
	color:#FFF;
padding:1px 5px;
	width:10px;
	font-size:12px;

	text-decoration:none;
	border: 1px solid #991248;
}
.row-fluid.adcontent.result .container .span12 .span12.result1 .span8.result2 .span4 strong{
	background-color:#fff;
	width:10px;
	padding:1px 5px;
	

	font-size:12px;
	
	text-decoration:none;
	border: 1px solid #991248;
}
</style>
<div class="row-fluid adcontent result">
<div class="container">

    
    <div class="span12">
<h2>Search results (<?php echo $count ?>)</h2>
<div class="span8 result10">
 

  <!-- Tab panes -->
  <div class="tab-content mclr1 bg result11">
    <div role="tabpanel" class="tab-pane active" id="home">	
    <?php if($results==NULL)
			{
				echo 'No Search result found';
			
			?>
			<?php 
			}
			
			else
			{
				
				
	?>
     
<?php
$i=1;
		foreach($results as $item) {
		?>
        <div class="modal fade hide" id="horo<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Horoscope</h3>
                </div>
             <div class="modal-content">
        <div class="modal-body">
            <img src="<?php echo base_url();?>horoscope/<?php echo  $item->horoscope; ?>" class="img-responsive">
        </div>
    </div>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              
              <div class="modal fade hide" id="reqhoro<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
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
                Mobile number is <?php echo  $item->mobile; ?>
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
                To view mobile number of the profile <?php echo  $item->user_id; ?>.you should  upgrade your profile.<a href="<?php echo site_url('payment'); ?>">Upgrade</a>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
              
                   <div class="modal fade hide" id="mailupgrade<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel" style="font-size:15px;"> To send Personalised Messages to her(<?php echo  $item->name; ?>), Upgrade your membership</h3>
                </div>
    
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <a href="<?php echo site_url('payment'); ?>"><button class="btn btn-primary">Upgrade</button></a>
                </div>
              </div>
              <div class="modal fade hide" id="mail<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel" style="font-size:20px;">send Personalised Messages to  to <?php echo  $item->name; ?></h3>
                </div>
                <form>
                  <!--<div class="span12">
                    <div class="span4"></div>
                    <div class="span6">Tell somthing to <?php echo  $item->name; ?></div>
                  </div>-->
                 <span style="margin-left:20%;">your message:</span>
                  <textarea name="mail" rows="5" style="border:#42b8b6 solid 2px; color:#000
                  ;"></textarea>
                  
                 
               
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Send mail</button>
                </div> </form>
              </div>
    <div class="span12 mdiv " style="margin-left:0px;" >

                         <?php if($item->package=="premium" || $item->package=="prime" ||  $item->package=="soulmate special" ||$item->profile_highlite==1)
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

 <?php if($item->package=="premium" || $item->package=="prime" ||  $item->package=="soulmate special" ||$item->profile_highlite==1)
									{?>
                                <div class="span12" style=" margin-left:-10px; float:left; height:50px; background-image:url(<?php echo base_url();?>file/img/featured-profile-page_03.png); background-repeat:no-repeat; text-align:center; color:#FFF;"></div>
								<?php } ?>
                                
                                	<div class="span12">
                                    
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
 if (in_array($item->user_id, $blocked)||($blocked===NULL)){
		?>
                         <div class="v1" >
          
       
          <div style="float:left; margin-bottom:10px;" ><a href="#"><?php echo $item->name; ?> (<?php echo $item->user_id; ?>)</a> <i class=" icon-large icon-ban-circle"></i></div><?php if($item->package==NULL)
									{
										echo "";
									}
									else
									{
									?>
                                    <div style="width:110px; float:left; height:20px; background-image:url(<?php echo base_url();?>file/img/featured-profile-package_03.png); background-repeat:no-repeat; margin-left:5px; text-align:center; color:#FFF;"><?php echo $item->package; ?></div>
                                    <?php } ?></div><br />
          <?php } else { ?>
          <div class="v1" > <div style="float:left; margin-bottom:10px;"><a href="#"><?php echo $item->name; ?> (<?php echo $item->user_id; ?>)</a> </div><?php if($item->package==NULL)
									{
										echo "";
									}
									else
									{
									?>
                                    <div style="width:110px; float:left; height:20px; background-image:url(<?php echo base_url();?>file/img/featured-profile-package_03.png); background-repeat:no-repeat; margin-left:5px; text-align:center; color:#FFF; font-size: 11px;"><?php echo $item->package; ?></div>
                                    <?php } ?></div><br />
          <?php } ?>
                                 </div>
                                 	<div class="span12" style="margin-left:0px;">
                                    <div class="span3 view1 " style="width:150px;">
                                   
                                     <?php if($item->file_name=='')
									{ ?><img src="<?php echo base_url();?>file/img/noimg.jpg" width="150" height="150" />
                                    <?php }
									else
									{
										?>
                                    
                                    <img src="<?php echo base_url();?>uploads/<?php echo  $item->file_name; ?>"><?php } ?></div>
                            		<div class="span5" style="width:43.5%;">
                                    <div class="loader1 mclr2">
                          <?php if($session_data['status_paid']==2){ ?>
                                    	<p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg">  <a data-toggle="modal" data-target="#mobile<?php echo $i; ?>" href="">View Mobile No</a> </p>
                                        <?php } else { ?>
                                    <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg">  <a data-toggle="modal" data-target="#mobileupgrade<?php echo $i; ?>" href="">View Mobile No</a></p>		
                                     <?php } ?>
                                      <?php if($session_data['status_paid']==2 && $item->horoscope!=""){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#horo<?php echo $i; ?>" href="">View Horoscope</a></p>
                <?php }
				else if($session_data['status_paid']==2 && $item->horoscope==NULL){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#rehoro<?php echo $i; ?>" href="">Request Horoscope</a></p>
				 <?php }
				 else if($session_data['status_paid']==0 && $item->horoscope!=""){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#uphoro<?php echo $i; ?>" href="">view Horoscope</a></p>
				 
				 <?php }
                 else if($session_data['status_paid']==0 && $item->horoscope==""){ ?>
                <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"><a data-toggle="modal" data-target="#reqhoro<?php echo $i; ?>" href="">Request Horoscope</a></p>
				 
				 <?php }?>    
                                  
                                     <div class="span12 mnn">
                                       <?php echo  $item->about_us; ?><br /> 
 <br /></div>

<div class="span12">
<form action="#">
   <?php if($session_data['status_paid']==1){ ?>
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
 }}
 else
 {
 $int[]= '10000';
 }
 if (in_array($item->user_id, $int)||($int===NULL)){
		?>


       Intrest Send <?php } else {?>
         <a href="<?php echo base_url(); ?>index.php/status/intrest/<?php  echo $item->user_id; ?>" style="text-decoration:none; color:inherit;">

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
 if (in_array($item->user_id, $blocked)||($blocked===NULL)){
		?>
    	<a href="<?php echo base_url(); ?>index.php/status/unblock/<?php  echo $item->user_id; ?>" style="text-decoration:none; color:inherit;"> <input style="background-color:#999;"   class=" btn1 btn-small match mbtn" type="button" value="Blocked" /></a>
    	<?php }  else {  ?><a href="<?php echo base_url(); ?>index.php/status/block/<?php  echo $item->user_id; ?>"  style="text-decoration:none; color:inherit;">
        <input class="btn1 btn-small match mbtn" type="button" value="block" /></a>
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
 if (in_array($item->user_id, $shortlisted)||($shortlisted===NULL)){
		?>
    	<a href="<?php echo base_url(); ?>index.php/status/shortlisted/<?php  echo $item->user_id; ?>" style="text-decoration:none; color:inherit;"> <input class="btn1 btn-small match mbtn" style="background-color:#999;" type="button" value="shortlisted" /></a>
    	<?php }  else {  ?><a href="<?php echo base_url(); ?>index.php/status/shortlist/<?php  echo $item->user_id; ?>"  style="text-decoration:none; color:inherit;">
        <input class="btn1 btn-small match mbtn" type="button" value="shortlist" /></a>
        <?php  }?>
</form>
 </span>
  <div id="toPopup10"> 
    	
        <div class="close10"></div>
       
		<div id="popup_content10"> <!--your content start-->
        
           <p>
Your interest has been sent to Nijiya Nazar (E2953987).
            </p>
            <div class="span4">
 
 				
 
 
   			</div>  
         
            <a href="#"><input type="button" class="ppbutton" value="update"/></a>
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
    
	<div class="loaderr10"></div>
   	<div id="backgroundPopup10"></div>
    
    
    
    
    
    
    
    
    <div id="toPopup11"> 
    	
        <div class="close11"></div>
       
		<div id="popup_content11"> <!--your content start-->
        
           <p>
Your interest has been sent to Nijiya Nazar (E2953987).
            </p>
            <div class="span4">
 
 				
 
 
   			</div>  
         
            <a href="#"><input type="button" class="ppbutton" value="update"/></a>
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
    
	<div class="loaderr11"></div>
   	<div id="backgroundPopup11"></div>
    
    
  
  
  
  <div id="toPopup12"> 
    	
        <div class="close12"></div>
       
		<div id="popup_content12"> <!--your content start-->
        <h2>edit mobile number</h2>
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
    
	<div class="loaderr12"></div>
   	<div id="backgroundPopup12"></div>
            
 
 
 
 
 <div id="toPopup13"> 
    	
        <div class="close13"></div>
       
		<div id="popup_content13"> <!--your content start-->
        
           <p>
Your interest has been sent to Nijiya Nazar (E2953987).
            </p>
            <div class="span4">
 
 				
 
 
   			</div>  
         
            <a href="#"><input type="button" class="ppbutton" value="update"/></a>
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
    
	<div class="loaderr13"></div>
   	<div id="backgroundPopup13"></div>
    
       
 		</div>
             </div>
              
                               
                                     
                                     
                                    </div>
                                    <div class="span4 view1">
                 <table>
                                <tr>
                                  <td width="120px;">Profile Created For
                                    </td>
                                  <td>
                                  :&nbsp;
                                  </td>
                                  <td>
									<strong><?php echo $item->profile_for; ?></strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td>Age, Height
                                    </td>
                                    <td>
                                  :&nbsp;
                                    </td>
                                    <td>
									<strong><?php echo $item->age; ?> Yrs, <?php echo $item->height; ?> Cms</strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td>Religion
                                    </td>
                                    <td>
                                 :&nbsp;
                                    </td>
                                    <td>
									<strong> <?php echo $item->religion_name; ?></strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td>Caste, Sub Caste</td>
                                    <td>
                                   :&nbsp;
                                    </td>
                                    <td>
									<strong><?php echo $item->cast_name; ?>,<?php echo $item->subcast; ?></strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td>Star
                                    </td>
                                    <td>
                                   :&nbsp;
                                    </td>
                                    <td>
									<strong><?php echo $item->star_name; ?></strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td valign="top">Location 
                                    </td>
                                    <td valign="top">
                                   :&nbsp;
                                    </td>
                                    <td>
									<strong> <?php echo $item->city; ?>, <?php echo $item->state; ?>, <?php echo $item->country; ?></strong>
                                    </td>
                                    
                                    
                                </tr>
                                
                                <tr>
                                  <td valign="top">Education
                                    </td>
                                    <td valign="top">
                                    :&nbsp;
                                    </td>
                                    <td>
									<strong><?php echo $item->education_name; ?></strong>
                                    </td>
                                    
                                    
                                </tr>
                                
                                
                                <tr>
                                  <td valign="top">Occupation
                                    </td>
                                    <td valign="top">
                                    :&nbsp;
                                    </td>
                                    <td>
									<strong> <?php echo $item->occupation_name; ?></strong>
                                    </td>
                                    
                                    
                                </tr>
                                
                                 <tr>
                                    <td>Gender
                                    </td>
                                    <td>
                                    :&nbsp;
                                    </td>
                                    <td>
									<strong> <?php echo $item->gender; ?></strong>
                                    </td>
                                    
                                    
                                </tr>
                        	</table>
<br />
<a href="<?php echo base_url();?>index.php/individual/profile/<?php echo $item->user_id; ?>"><strong>View Full Profile</strong></a>
</div>
					</div>			</div>
                    
                    
                     


</div>
<?php $i++;} }?>






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
  <div class="span12 result1">                                           
  <div class="span8 result2">

<div class="span4 result3" style="width:375px;"><div style="text-align:center"><?php echo $links; ?></div></div>

</div>     
  </div>                          
</div>
    
     
</div>
</div>



<?php include'footer.php'; ?>
