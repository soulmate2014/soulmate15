<?php if($this->session->userdata('logged_in'))
 {
	 $session_data = $this->session->userdata('logged_in');
		$soul_id= $session_data['user_id'];
	 
	 ?>
<?php $this->load->view('header'); ?>
<script>
$(document).ready(function(){
    $("#ashik").click(function(){
		event.preventDefault();
      
 $.ajax({
           type: "POST",
           url: "<?php echo site_url('message/read_int/1');?>",
           /*data: {  
                    senderid:$('#senderid').val(),
                rcvrid:$('#rcvrid').val(),
                msg: $('#msg').val(),
            },*/
           dataType: "json",
           success: function(html){
			   alert(html);
           },
        });

    });
});
</script>
</head>
<body>
<style>
.ashik {
position: relative;
  top: 0px;
  right: -21px;
  background-color: #ff9000;
  text-align:center;
  border-radius: 50%;
  width: 20px;
  height: 20px;
  float:left;
}


</style>

<div class="row-fluid adcontent">
  <div class="container">
    <div class="span12">
      <h2>Inbox - All Conversations</h2>
      <div class="span7 " style="width:64.264957%;">
        <ul class="nav nav-tabs ad mclr" role="tablist">
          <li role="presentation" class="active "><a href="#home" aria-controls="home" role="tab" data-toggle="tab" >ALL</a></li>
          <li role="presentation"> <a href="#profile" id="ashik" aria-controls="profile" role="tab" data-toggle="tab" >
            <?php if($new_message->num_rows()>0){ ?>
            <span class="ashik" style="position:relative;   top: -6px;
  left: 0px;">
            <?php  echo $new_message->num_rows(); }?>
            </span>NEW</a></li>
          <li role="presentation" ><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" >Read Not Replied</a></li>
          <li role="presentation" ><a href="#messages1" aria-controls="messages1" role="tab" data-toggle="tab" >Accepted</a></li>
          <li role="presentation" ><a href="#messages2" aria-controls="messages2" role="tab" data-toggle="tab" >Replied</a></li>
          <li role="presentation" ><a href="#messages3" aria-controls="messages3" role="tab" data-toggle="tab" >Decision Pending</a></li>
          <li role="presentation" ><a href="#messages4" aria-controls="messages4" role="tab" data-toggle="tab" >Not Interested</a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content mclr1 bg">
          <div role="tabpanel" class="tab-pane active" id="home">
            <?php $i=1; foreach($intrest_msg->result() as $intrest){ ?>
                   <div class="modal fade hide" id="mobile<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                Mobile number is <?php echo  $intrest->mobile; ?>
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
                To view mobile number of the profile <?php echo  $intrest->user_id; ?>.you should  upgrade your profile.<a href="<?php echo site_url('payment'); ?>">Upgrade</a>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
            <div class="span12 mdiv" style="margin-left:0px;">
              <div  class="span12 prof1">
                <div  class="span12">
                  <input class="check " type="checkbox" />
                  <span class="v1"><?php echo $intrest->name;?></span><br />
                  <span style="cursor:pointer;" class="id1"  onClick="document.location='https://www.google.co.in/'"><?php echo $intrest->user_id;?></span> </div>
                <div class="span12">
                  <div class="span3 view1" style="width:150px;">
                    <?php if($intrest->file_name=='')
									{ ?>
                    <img class="profile_thumb" src="<?php echo base_url();?>file/img/noimg.jpg"  />
                    <?php }
									else
									{
										?>
                    <img class="profile_thumb" src="<?php echo base_url();?>uploads/<?php echo  $intrest->file_name; ?>">
                    <?php } ?>
                  </div>
                  <div class="span5" style=" width:45.5%; margin-left:0px;">
                    <div class="loader1 mclr2">
                       <?php if($session_data['status_paid']==1){ ?>
              <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobile<?php echo $i; ?>" href="">View Mobile No</a> </p>
              <?php } else { ?>
              <img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobileupgrade<?php echo $i; ?>" href="">View Mobile No</a>
              <p>
                <?php } ?>
                <!--<a data-toggle="modal" data-target="#myModal<?php echo $i; ?>" href="">Delete</a>--> 
                     <!--<div class="span11 mnn">
                        <?php  echo $intrest->about_us; ?>
                        <br />
                        <br />
                      </div>-->
                      <div class="span11">
                        <?php if($intrest->intrest_status=='0')
{
	?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $intrest->user_id; ?>'">Intrested</span> <span>This member sent you intrest you profile </span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/message/reject_intrest/<?php echo $intrest->user_id; ?>'" type="button" value="Not Intrest" />
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/message/intrest_accept/<?php echo $intrest->user_id; ?>'" type="button" value="Intrest Accepted" />
                        <?php }
 else if($intrest->intrest_status=='1')
 {
	 
 ?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $intrest->user_id; ?>'">Rejected</span> <span>You rejected this member</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/searching/yettobeviewed'" type="button" value="View more suiteble profile" />
                        <?php } 
  else if($intrest->intrest_status=='2' && $intrest->status_paid==0) {
	  ?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $intrest->user_id; ?>'">Accepted</span> <span>You Accepted this member request</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/payment'" type="button" value="Upgrade" />
                        <?php }
else if($intrest->intrest_status=='2' && $intrest->status_paid==1){
	?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $intrest->user_id; ?>'">Accepted</span> <span>You Accepted this member request</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/searching/yettobeviewed'" type="button" value="View more suiteble profile" />
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <div class="span4 view1">
                    <table>
                      <tr>
                        <td width="120px;">Profile Created For </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $intrest->profile_for; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Age, Height </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $intrest->age; ?> Yrs, <?php echo $intrest->height; ?> Cms</strong></td>
                      </tr>
                      <tr>
                        <td>Religion </td>
                        <td> :&nbsp; </td>
                        <td><strong> <?php echo $intrest->religion_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Caste, Sub Caste</td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $intrest->cast_name; ?>,<?php echo $intrest->subcast; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Star </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $intrest->star_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Location </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong> <?php echo $intrest->city; ?>, <?php echo $intrest->state; ?>, <?php echo $intrest->country; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Education </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong><?php echo $intrest->education_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Occupation </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong> <?php echo $intrest->occupation_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Gender </td>
                        <td> :&nbsp; </td>
                        <td><strong> <?php echo $intrest->gender; ?></strong></td>
                      </tr>
                    </table>
                    <br />
                    <a href="<?php echo base_url();?>index.php/individual/profile/<?php echo $intrest->user_id; ?>"><strong>View Full Profile</strong></a> </div>
                </div>
              </div>
            </div>
            <?php $i++;} ?>
          </div>
          <div role="tabpanel" class="tab-pane" id="profile">
            <?php $i=1; foreach($new_message->result() as $new){
	 ?>
      <div class="modal fade hide" id="mobile<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                Mobile number is <?php echo  $new->mobile; ?>
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
                To view mobile number of the profile <?php echo  $new->user_id; ?>.you should  upgrade your profile.<a href="<?php echo site_url('payment'); ?>">Upgrade</a>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
            <div class="span12 mdiv" style="margin-left:0px;">
              <div class="span12 prof1">
                <div class="span12">
                  <input class="check " type="checkbox" />
                  <span class="v1"> <?php echo $new->name; ?></span><br />
                  <span class="id1"> S189856</span> </div>
                <div class="span12">
                  <div class="span3 view1 "> <img src="img/images/images/message-page_03.png"/></div>
                  <div class="span5">
                    <div class="loader1 mclr2">
                      <p><img src="img/images/p1_03.jpg" /> View Mobile No/sms </p>
                      <p> <img src="img/images/p2_03.jpg" /> Request Horoscope</p>
                      <div class="span11 mnn"> Lorem Ipsum is simply dummy text of the printing 
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy <br />
                        <br />
                      </div>
                      <div class="span11">
                        <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                        <input type="button" class="btn1 btn-small match mbtn" name="yes" value="Send Interest" />
                        </span></div>
                    </div>
                  </div>
                  <div class="span4 view1"> Profile Created for Daughter<br />
                    Name : Nina .P<br />
                    Age, Height : 21 Yrs, 5 Ft 3 In / 160 Cms<br />
                    Religion : Hindu<br />
                    Caste, Sub Caste : Ezhava<br />
                    Star :Rohini<br />
                    Location : Thrissur, Kerala, India<br />
                    Education: civil<br />
                    Occupation : Not working<br />
                    <br />
                    <a href="#">View Full Profile</a> </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <div role="tabpanel" class="tab-pane" id="messages">
             <?php foreach($notreplaid->result() as $notreplaid){ ?>
            <div class="span12 mdiv" style="margin-left:0px;">
              <div  class="span12 prof1">
                <div  class="span12">
                  <input class="check " type="checkbox" />
                  <span class="v1"><?php echo $notreplaid->name;?></span><br />
                  <span style="cursor:pointer;" class="id1"  onClick="document.location='https://www.google.co.in/'"><?php echo $notreplaid->user_id;?></span> </div>
                <div class="span12">
                  <div class="span3 view1" style="width:150px;">
                    <?php if($notreplaid->file_name=='')
									{ ?>
                    <img class="profile_thumb" src="<?php echo base_url();?>file/img/noimg.jpg"  />
                    <?php }
									else
									{
										?>
                    <img class="profile_thumb" src="<?php echo base_url();?>uploads/<?php echo  $notreplaid->file_name; ?>">
                    <?php } ?>
                  </div>
                  <div class="span5" style=" width:45.5%; margin-left:0px;">
                    <div class="loader1 mclr2">
                    <?php if($session_data['status_paid']==1){ ?>
              <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobile<?php echo $i; ?>" href="">View Mobile No</a> </p>
              <?php } else { ?>
              <img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobileupgrade<?php echo $i; ?>" href="">View Mobile No</a>
              <p>
                <?php } ?>
                <!--<a data-toggle="modal" data-target="#myModal<?php echo $i; ?>" href="">Delete</a>--> 
                     <!--<div class="span11 mnn">
                        <?php  echo $notreplaid->about_us; ?>
                        <br />
                        <br />
                      </div>-->
                      <div class="span11">
                        <?php if($notreplaid->intrest_status=='0')
{
	?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $notreplaid->user_id; ?>'">Intrested</span> <span>This member sent you intrest you profile </span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/message/reject_intrest/<?php echo $notreplaid->user_id; ?>'" type="button" value="Not Intrest" />
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/message/intrest_accept/<?php echo $notreplaid->user_id; ?>'" type="button" value="Intrest Accepted" />
                        <?php }
 else if($notreplaid->intrest_status=='1')
 {
	 
 ?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $notreplaid->user_id; ?>'">Rejected</span> <span>You rejected this member</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/searching/yettobeviewed'" type="button" value="View more suiteble profile" />
                        <?php } 
  else if($notreplaid->intrest_status=='2' && $notreplaid->status_paid==0) {
	  ?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $notreplaid->user_id; ?>'">Accepted</span> <span>You Accepted this member request</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/payment'" type="button" value="Upgrade" />
                        <?php }
else if($notreplaid->intrest_status=='2' && $notreplaid->status_paid==1){
	?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $notreplaid->user_id; ?>'">Accepted</span> <span>You Accepted this member request</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/searching/yettobeviewed'" type="button" value="View more suiteble profile" />
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <div class="span4 view1">
                    <table>
                      <tr>
                        <td width="120px;">Profile Created For </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $notreplaid->profile_for; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Age, Height </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $notreplaid->age; ?> Yrs, <?php echo $notreplaid->height; ?> Cms</strong></td>
                      </tr>
                      <tr>
                        <td>Religion </td>
                        <td> :&nbsp; </td>
                        <td><strong> <?php echo $notreplaid->religion_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Caste, Sub Caste</td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $notreplaid->cast_name; ?>,<?php echo $notreplaid->subcast; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Star </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $notreplaid->star_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Location </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong> <?php echo $notreplaid->city; ?>, <?php echo $notreplaid->state; ?>, <?php echo $notreplaid->country; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Education </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong><?php echo $notreplaid->education_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Occupation </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong> <?php echo $notreplaid->occupation_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Gender </td>
                        <td> :&nbsp; </td>
                        <td><strong> <?php echo $notreplaid->gender; ?></strong></td>
                      </tr>
                    </table>
                    <br />
                    <a href="<?php echo base_url();?>index.php/individual/profile/<?php echo $notreplaid->user_id; ?>"><strong>View Full Profile</strong></a> </div>
                </div>
              </div>
            </div>
            <?php $i++;} ?>
            
          </div>
          <div role="tabpanel" class="tab-pane" id="messages1">
              <?php $i=1; foreach($accept->result() as $acpt){ ?>
               <div class="modal fade hide" id="mobile<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                Mobile number is <?php echo  $acpt->mobile; ?>
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
                To view mobile number of the profile <?php echo  $acpt->user_id; ?>.you should  upgrade your profile.<a href="<?php echo site_url('payment'); ?>">Upgrade</a>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
            <div class="span12 mdiv" style="margin-left:0px;">
              <div  class="span12 prof1">
                <div  class="span12">
                  <input class="check " type="checkbox" />
                  <span class="v1"><?php echo $acpt->name;?></span><br />
                  <span style="cursor:pointer;" class="id1"  onClick="document.location='https://www.google.co.in/'"><?php echo $acpt->user_id;?></span> </div>
                <div class="span12">
                  <div class="span3 view1" style="width:150px;">
                    <?php if($acpt->file_name=='')
									{ ?>
                    <img class="profile_thumb" src="<?php echo base_url();?>file/img/noimg.jpg"  />
                    <?php }
									else
									{
										?>
                    <img class="profile_thumb" src="<?php echo base_url();?>uploads/<?php echo  $acpt->file_name; ?>">
                    <?php } ?>
                  </div>
                  <div class="span5" style=" width:45.5%; margin-left:0px;">
                    <div class="loader1 mclr2">
                      <?php if($session_data['status_paid']==1){ ?>
              <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobile<?php echo $i; ?>" href="">View Mobile No</a> </p>
              <?php } else { ?>
              <img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobileupgrade<?php echo $i; ?>" href="">View Mobile No</a>
              <p>
                <?php } ?>
                <!--<a data-toggle="modal" data-target="#myModal<?php echo $i; ?>" href="">Delete</a>--> 
                     <!--<div class="span11 mnn">
                        <?php  echo $acpt->about_us; ?>
                        <br />
                        <br />
                      </div>-->
                      <div class="span11">
                        <?php if($acpt->intrest_status=='0')
{
	?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $acpt->user_id; ?>'">Intrested</span> <span>This member sent you intrest you profile </span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/message/reject_intrest/<?php echo $acpt->user_id; ?>'" type="button" value="Not Intrest" />
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/message/intrest_accept/<?php echo $acpt->user_id; ?>'" type="button" value="Intrest Accepted" />
                        <?php }
 else if($acpt->intrest_status=='1')
 {
	 
 ?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $acpt->user_id; ?>'">Rejected</span> <span>You rejected this member</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/searching/yettobeviewed'" type="button" value="View more suiteble profile" />
                        <?php } 
  else if($acpt->intrest_status=='2' && $acpt->status_paid==0) {
	  ?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $acpt->user_id; ?>'">Accepted</span> <span>You Accepted this member request</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/payment'" type="button" value="Upgrade" />
                        <?php }
else if($acpt->intrest_status=='2' && $acpt->status_paid==1){
	?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $acpt->user_id; ?>'">Accepted</span> <span>You Accepted this member request</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/searching/yettobeviewed'" type="button" value="View more suiteble profile" />
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <div class="span4 view1">
                    <table>
                      <tr>
                        <td width="120px;">Profile Created For </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $acpt->profile_for; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Age, Height </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $acpt->age; ?> Yrs, <?php echo $acpt->height; ?> Cms</strong></td>
                      </tr>
                      <tr>
                        <td>Religion </td>
                        <td> :&nbsp; </td>
                        <td><strong> <?php echo $acpt->religion_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Caste, Sub Caste</td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $acpt->cast_name; ?>,<?php echo $acpt->subcast; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Star </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $acpt->star_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Location </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong> <?php echo $acpt->city; ?>, <?php echo $acpt->state; ?>, <?php echo $acpt->country; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Education </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong><?php echo $acpt->education_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Occupation </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong> <?php echo $acpt->occupation_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Gender </td>
                        <td> :&nbsp; </td>
                        <td><strong> <?php echo $acpt->gender; ?></strong></td>
                      </tr>
                    </table>
                    <br />
                    <a href="<?php echo base_url();?>index.php/individual/profile/<?php echo $acpt->user_id; ?>"><strong>View Full Profile</strong></a> </div>
                </div>
              </div>
            </div>
            <?php $i++;} ?>
            
          </div>
          <div role="tabpanel" class="tab-pane" id="messages2">
            <?php $i=1; foreach($replaid->result() as $replaid){ ?>
               <div class="modal fade hide" id="mobile<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                Mobile number is <?php echo  $replaid->mobile; ?>
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
                To view mobile number of the profile <?php echo  $replaid->user_id; ?>.you should  upgrade your profile.<a href="<?php echo site_url('payment'); ?>">Upgrade</a>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
            <div class="span12 mdiv" style="margin-left:0px;">
              <div  class="span12 prof1">
                <div  class="span12">
                  <input class="check " type="checkbox" />
                  <span class="v1"><?php echo $replaid->name;?></span><br />
                  <span style="cursor:pointer;" class="id1"  onClick="document.location='https://www.google.co.in/'"><?php echo $replaid->user_id;?></span> </div>
                <div class="span12">
                  <div class="span3 view1" style="width:150px;">
                    <?php if($replaid->file_name=='')
									{ ?>
                    <img class="profile_thumb" src="<?php echo base_url();?>file/img/noimg.jpg"  />
                    <?php }
									else
									{
										?>
                    <img class="profile_thumb" src="<?php echo base_url();?>uploads/<?php echo  $replaid->file_name; ?>">
                    <?php } ?>
                  </div>
                  <div class="span5" style=" width:45.5%; margin-left:0px;">
                    <div class="loader1 mclr2">
                    <?php if($session_data['status_paid']==1){ ?>
              <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobile<?php echo $i; ?>" href="">View Mobile No</a> </p>
              <?php } else { ?>
              <img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobileupgrade<?php echo $i; ?>" href="">View Mobile No</a>
              <p>
                <?php } ?>
                <!--<a data-toggle="modal" data-target="#myModal<?php echo $i; ?>" href="">Delete</a>--> 
                
                      <!--<div class="span11 mnn">
                        <?php  echo $replaid->about_us; ?>
                        <br />
                        <br />
                      </div>-->
                      <div class="span11">
                        <?php if($replaid->intrest_status=='0')
{
	?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $replaid->user_id; ?>'">Intrested</span> <span>This member sent you intrest you profile </span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/message/reject_intrest/<?php echo $replaid->user_id; ?>'" type="button" value="Not Intrest" />
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/message/intrest_accept/<?php echo $replaid->user_id; ?>'" type="button" value="Intrest Accepted" />
                        <?php }
 else if($replaid->intrest_status=='1')
 {
	 
 ?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $replaid->user_id; ?>'">Rejected</span> <span>You rejected this member</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/searching/yettobeviewed'" type="button" value="View more suiteble profile" />
                        <?php } 
  else if($replaid->intrest_status=='2' && $replaid->status_paid==0) {
	  ?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $replaid->user_id; ?>'">Accepted</span> <span>You Accepted this member request</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/payment'" type="button" value="Upgrade" />
                        <?php }
else if($replaid->intrest_status=='2' && $replaid->status_paid==1){
	?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $replaid->user_id; ?>'">Accepted</span> <span>You Accepted this member request</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/searching/yettobeviewed'" type="button" value="View more suiteble profile" />
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <div class="span4 view1">
                    <table>
                      <tr>
                        <td width="120px;">Profile Created For </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $replaid->profile_for; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Age, Height </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $replaid->age; ?> Yrs, <?php echo $replaid->height; ?> Cms</strong></td>
                      </tr>
                      <tr>
                        <td>Religion </td>
                        <td> :&nbsp; </td>
                        <td><strong> <?php echo $replaid->religion_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Caste, Sub Caste</td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $replaid->cast_name; ?>,<?php echo $replaid->subcast; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Star </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $replaid->star_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Location </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong> <?php echo $replaid->city; ?>, <?php echo $replaid->state; ?>, <?php echo $replaid->country; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Education </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong><?php echo $replaid->education_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Occupation </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong> <?php echo $replaid->occupation_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Gender </td>
                        <td> :&nbsp; </td>
                        <td><strong> <?php echo $replaid->gender; ?></strong></td>
                      </tr>
                    </table>
                    <br />
                    <a href="<?php echo base_url();?>index.php/individual/profile/<?php echo $replaid->user_id; ?>"><strong>View Full Profile</strong></a> </div>
                </div>
              </div>
            </div>
            <?php $i++; } ?>
            
          </div>
          <div role="tabpanel" class="tab-pane" id="messages3">
            
            
          </div>
          <div role="tabpanel" class="tab-pane" id="messages4">
            <?php $i=1; foreach($rejected as $res)
 {?>
 <div class="modal fade hide" id="mobile<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Mobile Number</h3>
                </div>
                Mobile number is <?php echo  $res->mobile; ?>
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
                To view mobile number of the profile <?php echo  $res->user_id; ?>.you should  upgrade your profile.<a href="<?php echo site_url('payment'); ?>">Upgrade</a>
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button class="btn btn-primary">Save changes</button>
                </div>
              </div>
            <div class="span12 mdiv">
              <div class="span12 prof1">
                <div class="span12">
                  <input class="check " type="checkbox" />
                  <span class="v1"> <?php echo $res->name; ?></span><br />
                  <span class="id1"> <?php echo $res->user_id; ?></span> </div>
                <div class="span12">
                  <div class="span3 view1" style="width:150px;">
                    <?php if($res->file_name=='')
									{ ?>
                    <img class="profile_thumb" src="<?php echo base_url();?>file/img/noimg.jpg"  />
                    <?php }
									else
									{
										?>
                    <img class="profile_thumb" src="<?php echo base_url();?>uploads/<?php echo  $res->file_name; ?>">
                    <?php } ?>
                  </div>
                  <div class="span5" style=" width:45.5%; margin-left:0px;">
                    <div class="loader1 mclr2">
                       <?php if($session_data['status_paid']==1){ ?>
              <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobile<?php echo $i; ?>" href="">View Mobile No</a> </p>
              <?php } else { ?>
              <img src="<?php echo base_url(); ?>file/img/p1_03.jpg"><a data-toggle="modal" data-target="#mobileupgrade<?php echo $i; ?>" href="">View Mobile No</a>
              <p>
                <?php } ?>
                <!--<a data-toggle="modal" data-target="#myModal<?php echo $i; ?>" href="">Delete</a>--> 
                     <div class="span11 mnn">
                        <?php  echo $res->about_us; ?>
                        <br />
                        <br />
                      </div>
                      <div class="span11">
                        <?php if($res->intrest_status=='0')
{
	?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $res->user_id; ?>'">Intrested</span> <span>This member sent you intrest you profile </span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/message/reject_intrest/<?php echo $res->user_id; ?>'" type="button" value="Not Intrest" />
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/message/intrest_accept/<?php echo $res->user_id; ?>'" type="button" value="Intrest Accepted" />
                        <?php }
 else if($res->intrest_status=='1')
 {
	 
 ?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $res->user_id; ?>'">Rejected</span> <span>This member Rejected your request</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/searching/yettobeviewed'" type="button" value="View more suiteble profile" />
                        <?php } 
  else if($res->intrest_status=='2' && $res->status_paid==0) {
	  ?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $res->user_id; ?>'">Accepted</span> <span>You Accepted this member request</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/payment'" type="button" value="Upgrade" />
                        <?php }
else if($res->intrest_status=='2' && $res->status_paid==1){
	?>
                        <span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $res->user_id; ?>'">Accepted</span> <span>You Accepted this member request</span><br>
                        <br>
                        <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/searching/yettobeviewed'" type="button" value="View more suiteble profile" />
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <div class="span4 view1">
                    <table>
                      <tr>
                        <td width="120px;">Profile Created For </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $res->profile_for; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Age, Height </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $res->age; ?> Yrs, <?php echo $res->height; ?> Cms</strong></td>
                      </tr>
                      <tr>
                        <td>Religion </td>
                        <td> :&nbsp; </td>
                        <td><strong> <?php echo $res->religion_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Caste, Sub Caste</td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $res->cast_name; ?>,<?php echo $res->subcast; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Star </td>
                        <td> :&nbsp; </td>
                        <td><strong><?php echo $res->star_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Location </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong> <?php echo $res->city; ?>, <?php echo $res->state; ?>, <?php echo $res->country; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Education </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong><?php echo $res->education_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td valign="top">Occupation </td>
                        <td valign="top"> :&nbsp; </td>
                        <td><strong> <?php echo $res->occupation_name; ?></strong></td>
                      </tr>
                      <tr>
                        <td>Gender </td>
                        <td> :&nbsp; </td>
                        <td><strong> <?php echo $res->gender; ?></strong></td>
                      </tr>
                    </table>
                    <br />
                    <a href="<?php echo base_url();?>index.php/individual/profile/<?php echo $res->user_id; ?>"><strong>View Full Profile</strong></a> </div>
                </div>
              </div>
            </div>
            <?php $i++;} ?>
          </div>
        </div>
      </div>
      <div class="span4">
        <div class="search">
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
