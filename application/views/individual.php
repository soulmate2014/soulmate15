<?php $this->load->view('header');?>
<?php 
$session_data = $this->session->userdata('logged_in');
$user_id= $session_data['user_id'];
$paid= $session_data['status_paid'];
?>
<?php foreach($query1 as $row){
	 ?>
  
<script>
$(document).ready(function(){
    $("#request").click(function(){
	
      var status=$("#status").val();
var user_id=$("#user_id").val();
var dataString = 'status='+status+'&user_id='+user_id;
 $.ajax({
           type: "POST",
           url: "<?php echo site_url("message/request_video");?>",
           data: dataString,
		   cache: false,
		   beforeSend: function() {
              $("#loading_image").show();
           },
           success: function(data){
			 $("#sta").hide();
			 $("#suc").show();
			  
           },
        });

    });
});
</script>
<div class="center">
           <div class="row-fluid content">
                                <div class="container">
                                <div class="span12">
                         <h2 class="individual"><?php echo $row->name; ?>(<?php echo $user_id; ?>)</h2>
                                                         <div class="span7 ">
                            <div class="profile individual8">
                                <div class="span12">
                                        <div class="span4 "><div class="myaccountprofpicmain">
          <div class="myaccountprofpic"><?php if($row->file_name==''&&$row->gender=='male')
									{ ?>
                                    <img class="profile_thumb" src="<?php echo base_url();?>file/img/avtr_men.jpg"  />
                                    <?php } elseif($row->file_name==''&&$row->gender=='female')
									{  ?>
                                    
                                    <img class="profile_thumb" src="<?php echo base_url();?>file/img/avtr_women.jpg"  />
                                    <?php }
                                    
									else
									{
										?>
                                    
                                    <img class="profile_thumb" src="<?php echo base_url();?>uploads/<?php echo  $row->file_name; ?>"><?php } ?></div></div></div>
                                        <div class="span8 individual3">
                                        <div class="individual2">
                                        <p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg">   View Mobile No/sms </p>
                                        <p><img src="<?php echo base_url(); ?>file/img/p2_03.jpg"> Request Horoscope</p>    
                                        </div>
                                        <?php if($like->num_rows() > 0){?>
                                         <div class="individual4">
                                    <h3>You Liked This member</h3>
                                     </div>
                                     <div class="individual5">
                                     <a href="<?php  echo base_url();?>index.php/status/dislike_status/<?php echo $row->user_id ?>/<?php if($you->num_rows() > 0){ ?><?php foreach($you->result() as $row1){ echo $row1->user_id; }}?>">
                                     <button type="submit" class="btn1 btn-large individual6">Dis Like</button>
                                     </a>
                                     </div>
                                     <?php } else{?>
                                     <div class="individual4">
                                    <h3>Did You Like This Member</h3>
                                     </div>
                                     <div class="individual5">
                                     <a href="<?php  echo base_url();?>index.php/status/like_status/<?php echo $user_id ?>/<?php if($you->num_rows() > 0){ ?><?php foreach($you->result() as $row1){ echo $row1->user_id; }}?>">
                                     <button type="submit" class="btn1 btn-large individual6">Like</button>
                                     </a>
                                     </div><?php }?>
                                     <div class="individual7">
                                     <?php if($paid==0){?>
                                        <p>Contact this member directly through Mobile, E-mail by upgrading your membership. Upgrade Now</p>
                                        <?php } ?>
                                     </div>
                                   
                                    </div>
                                                                </div>
                                                                <?php 
$session_data = $this->session->userdata('logged_in');

?>
                                                                  <?php if($session_data['status_paid']==1 &&$row->video_link!=""){ ?>
                                                                <div class="span12" style="margin-left:0px; margin-top:10px; height:280px; ">
                                                                <div class="span3"></div>
                                                                <div class="span6">
                                                                
                                                             
                                                            <video width="400" height="260" controls="controls">   <source src="<?php echo base_url();?>video/<?php echo $row->video_link;?>"></video> 
                                                            
                                                            
																
														</div>
                                                                <div class="span3"></div>
                                        
                                        
                                                                </div>
                                                                <?php } else if($session_data['status_paid']==1 &&$row->video_link==""){ ?>
                                                                <div class="span12" style="margin-left:0px; margin-top:10px; height:100px; ">
                                                                <div class="span2"></div>
                                                                <div class="span8">
                                                                
                                                          
																<div class="span12" style="height:100px; padding-top:40px; color:#000">No Vedo found on this user. Request video introduction.<input type="hidden" id="status" value="1" /><input type="hidden" id="user_id" value="<?php echo $user_id;?>" /><span id="sta"><a id="request" href="#"   style="color:#000; font-weight:bold;">Send request</a></span>
                                                                <span id="loading_image" style="display:none;"></span>
                                                                <span  id="suc" style="color:#930; display:none;">Your request send successfully</span></div>
														</div>
                                                                <div class="span2"></div>
                                        
                                        
                                                                </div>
                                                                <?php } ?>
                                </div>                          
                                               
                       
                           <div class="personal">
                            <div class="span11">
                            <h2>Personal Information</h2>
                             <div class="personal">
                          <div class="span10">
                          <div class="span12" >
                         
                          <ul class="nav">
                <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon_07.jpg" /></li>
                <li style="border:none;"><h3>My Self</h3></li>
             
                            </ul>
                           
                   
                           
                            </div>
                            </div>
                             </div>
   
                            <div class="paragraph">
                              <div class="span12">
                    <p><?php echo $row->about_us; ?> </p>
                             </div>
                            </div>
               </div>
                    </div>
                   
                    <div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span10">
                          <div class="span12" >
                         
                          <ul class="nav">
                 <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-2_11.jpg" /></li>          
                <li style="border:none;"><h3>Basic Details</h3></li>
           
                            </ul>
                                             
                            </div>
                            </div>
                             </div>
                            <div class="tble ">
                              <div class="span12">
                    <table class="new2 ">
                   
                                                        <tr >
                                <td >Profile created for :</td>
                                <td ><?php if( $row->profile_for==''||/*$row->profile_for==0||*/$row->profile_for==-1){ echo 'Not mensioned'; }else { ?> <?php echo $row->profile_for; }?></td>
                                <td class="new">Name:</td>
                                <td ><?php echo $row->name; ?></td>
                               
                               
                              </tr>
                              <tr>
                                <td>Body Type/Completion :</td>
                                <td><?php if( $row->body_type==''||$row->body_type==0||$row->body_type==-1){ echo 'Not mensioned'; }else { ?> <?php echo $row->body_type;} ?></td>
                                 <td class="new">Age :</td>
                                <td><?php if( $row->age==''||$row->age==0||$row->age==-1){ echo 'Not mensioned'; }else { ?> <?php echo $row->age; }?></td>
                               
                                </tr>
                                <tr>
                                <td>Physical Status :</td>
                               <td><?php if( $row->physical_status==''||$row->physical_status==0||$row->physical_status==-1){ echo 'Not mensioned'; }else { ?> <?php echo $row->physical_status;} ?></td>
                               <td class="new">Height :</td>
                                <td><?php if( $row->height==''||$row->height==0||$row->height==-1){ echo 'Not mensioned'; }else { ?> <?php echo $row->height; echo 'cm'; }?></td>
                             </tr>
                             <tr>
                               <td>Weight :</td>
                               <td><?php if( $row->weight==''||$row->weight==0||$row->weight==-1){ echo 'Not mensioned'; }else { ?> <?php echo $row->weight; echo 'kg'; }?></td>
                               <td class="new">Mother Tounge:</td>
                                <td><?php if( $row->mother_tongue_name==''/*||$row->mother_tongue_name==0*/||$row->mother_tongue_name==-1){ echo 'Not mensioned'; }else { ?> <?php echo $row->mother_tongue_name; }?></td>
                             </tr>
                   </table >
                   
                             
                             
                                                </div>
                            </div>
                             </div>
                 
                    </div>
                   
                   
                   
                   
                   
                   
 <div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span10">
                          <div class="span12" >
                         
                          <ul class="nav">
                 <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-2_16.jpg" /></li>
                <li style="border:none;"><h3>Religious Information</h3></li>
               
                            </ul>
                   
                            </div>
                            </div>
                             </div>
                            <div class="tble">
                              <div class="span12">
                    <table class="new2 ">
                   
  							<tr >
                            	<td >Religion :</td>
                                <td ><?php if( $row->religion_name==''/*||$row->religion_name==0||*//*$row->religion_name==-1*/){ echo 'Not mensioned'; }else { ?> <?php echo $row->religion_name;} ?></td>
                             
                              </tr>
                              <tr>
                                <td>Caste /Sub Caste :</td>
                                <td><?php if( $row->cast_name==''||/*$row->cast_name==0||*/$row->cast_name==-1){ echo 'Not mensioned'; }else { ?><?php echo $row->cast_name; }?></td>
                                
                                </tr>
                           	<tr>
                            	<td>Star </td>
                               <td><?php if( $row->star_name==''||/*$row->star_name==0||*/$row->star_name==-1){ echo 'Not mensioned'; }else { ?><?php echo $row->star_name; }?></td>
                               
                             </tr>
                             <tr> 
                               <td>Shudha Jdakam :</td>
                               <td><?php if( $row->sudha_jadakam==''||/*$row->sudha_jadakam==0||*/$row->sudha_jadakam==-1){ echo 'Not mensioned'; }else { ?><?php echo $row->sudha_jadakam;} ?></td>
                              
                             </tr>
                   </table >
                   
                             
                             
                                                </div>
                            </div>
                             </div>
                 
                    </div>                  
                   
                   
                    <div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span10">
                          <div class="span12" >
                         
                          <ul class="nav">
                 <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-3_16.jpg" /></li>
                <li style="border:none;"><h3>Location</h3></li>
               
                            </ul>
             
                            </div>
                            </div>
                             </div>
                            <div class="tble">
                              <div class="span12">
                    <table class="new2 ">
                   
  							<tr >
                            	<td >Country :</td>
                                <td > <?php echo $row->country_name;?></td>
                        
                                <td class="new">State :</td>
                                <td><?php if( $row->state==''/*||$row->state==0||$row->state==-1*/){ echo 'Not mensioned'; }else { ?> <?php echo $row->state;} ?></td>
                                
                                </tr>
                           	<tr>
                            	<td>City:</td>
                               <td><?php if( $row->city==''/*||$row->city==0||$row->city==-1*/){ echo 'Not mensioned'; }else { ?> <?php echo $row->city;} ?></td>
                         
                               <td class="new">citizenship:</td>
                               <td><?php if( $row->nationality==''/*||$row->nationality==0||$row->nationality==-1*/){ echo 'Not mensioned'; }else { ?> <?php echo $row->nationality;} ?></td>
                              
                             </tr>
                   </table >
                   
                             
                             
                                                </div>
                            </div>
                             </div>
                 
                    </div>
                   
 
 
 
<div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span10">
                          <div class="span12" >
                         
                          <ul class="nav">
                 <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-4_16.jpg" /></li>
                <li style="border:none;"><h3>Profesional Information</h3></li>
               
                            </ul>
               
                            </div>
                            </div>
                             </div>
                            <div class="tble">
                              <div class="span12">
                    <table class="new2 ">
                   
  							<tr >
                            	<td >Education :</td>
                                <td ><?php echo $row->education_name; ?></td>
                                <td class="new">Occupation:</td>
                                <td ><?php echo $row->occupation_name; ?></td>
                               
                                
                              </tr>
                              <tr>
                                <td>Anual Income :</td>
                                <td><?php echo $row->currrency_symbol; ?>.<?php echo $row->income; ?></td>
                                 <td class="new">Employed In :</td>
                                <td><?php echo $row->employed_type; ?></td>
                                
                                </tr>
                           	
                            
                   </table >
                   
                             
                             
                                                </div>
                       </div>
                       </div>
                  </div>
 
 
 
 
 
<div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span10">
                          <div class="span12" >
                         
                          <ul class="nav">
                 <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-5_16_16.jpg" /></li>
                <li style="border:none;"><h3>Family Details</h3></li>
             
                            </ul>
                 
                            </div>
                            </div>
                             </div>
                            <div class="tble">
                              <div class="span12">
                    <table class="new2 ">
                   
  							<tr >
                            	<td >Family Value :</td>
                                <td > <?php echo $row->family_value; ?></td>
                                <td  class="new">No:Of Brothers(s):</td>
                                <td ><?php echo $row->no_brothers; ?>/<?php echo $row->b_married; ?> married</td>
                               
                                
                              </tr>
                              <tr>
                                <td>Family Status :</td>
                                <td><?php echo $row->family_statas; ?></td>
                                 <td class="new">Mother Status :</td>
                                <td><?php echo $row->m_occupation; ?></td>
                                
                                </tr>
                           	<tr>
                            	<td>Father Status:</td>
                               <td><?php echo $row->f_occupation; ?></td>
                               <td class="new">No:Of Sister(s):</td>
                                <td><?php echo $row->no_sisters; ?>/<?php echo $row->s_married; ?> married</td>
                             </tr>
                           
                   </table >
                   
                             
                             
                                                </div>
                       </div>
                       </div>
                  </div>
 
 
                   
                   
                   
                   
</div>
                       
                 <div class="span5 n">
                                       
                           
                          <div class="search">
                                <div class="span12">
                                <h3>Search by ID</h3>
                                <div class="span11">
                               
                                <form action="<?php echo site_url('searching/search_id')?>" method="post" class="navbar-form pull-left form-search">
                <input required type="text" name="user_id" class="form-control">
          
                <button type="submit" class="btn">Search</button>
              </form>
                                </div> 
                                                               
                                </div>
                              </div>
                             
                             
                             
                             
                               <div class="matches">
                                <div class="span12">
                                       
                                                
                                
                             
                                </div>
                                </div>
       <div class="span12" ><h1 class="hed1">Partner Preference</h1></div>                          
  <div class="span12 individual8 ">
   
   <div class="span2  p1 "> <?php if($row->file_name=='')
									{ ?><img src="<?php echo base_url();?>uploads/noimage.jpg" width="150" height="150" style=" border-radius:50%; width:99px; height:94px; border:2px solid #42b8b6; padding-left: 0px;
padding-top: 0px; "  /><!--<form action="<?php echo base_url();?>index.php/upload_myaccount_controller/do_upload" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                    <input type="hidden" name="email" value="<?php echo $username; ?>" /><input type="file" /><input type="submit" class="btn" value="upload" name="Submit" />
                                    </form>-->
                                    <?php }
									else
									{
										?>
                                    <img src="<?php echo base_url();?>uploads/<?php echo $row->file_name; ?>" width="150" style=" border-radius:50%; width:99px; height:94px; border:2px solid #42b8b6; padding-left: 0px;
padding-top: 0px; "  height="150" /><?php } ?> <span class="he">He </span>                            
     </div>
     <div class="span8 partner ">
     
       <div class="span2 ">
    <img src="<?php echo base_url();?>file/img/list_06.png" style="padding-left: 0px;
padding-top: 0px;" /> <img src="<?php echo base_url();?>file/img/list_06.png" style="padding-left: 0px;
padding-top: 0px;" /> <span class="she">You</span>
     </div>
      <div class="span8">Following  of <?php echo $row->name ?>'s partner preferences
match your profile
</div>
 <div class="span2">
<img src="<?php echo base_url();?>file/img/list_06.png" style="padding-left: 0px;
padding-top: 0px;" /> <img src="<?php echo base_url();?>file/img/list_06.png" style="padding-left: 0px;
padding-top: 0px;" /></div>
  </div>
  <div class="span2">
     <?php if($you->num_rows() > 0)
	 { ?>
     <?php foreach($you->result() as $row1) {?>
     <img src="<?php echo base_url();?>uploads/<?php echo $row1->file_name; ?>" width="150" style=" border-radius:50%; width:99px; height:94px; border:2px solid #42b8b6; padding-left: 0px;
padding-top: 0px; "  height="150" />
           <?php }} ?>
               
                </div>                        
 </div>                              
                               
                           
                                <div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span12">
                          <div class="span12 n1" >
                         <div class="adjest">
                          <ul class="nav">
                 <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon_07.jpg"/></li>
                <li style="border:none;"><h3>Basic & Religious Preferences</h3></li>
             
                            </ul>
                           
                            </div>
                            </div>
                            </div>
                             </div>
                            <div class="tble">
                              <div class="span12">
                    <table class="new2 ">
                   
                                                        <tr >
                                <td  width="150px">Age </td>
                                        <td>:</td>
                                 
                                <td width="225px" ><?php echo $row->pref_age_from; ?>&nbsp;to&nbsp;<?php echo $row->Pref_age_to; ?></td>
                                 <td > <?php if($you->num_rows() > 0)
	 { ?>
     <?php foreach($you->result() as $row1) {
		if($row->Pref_age_to>=$row1->age&&$row->pref_age_from<=$row1->age){ $pp1=1;?><img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{ $pp1=0;?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php }}}?></td>
                             
                              </tr>
                              <tr>
                                <td>height</td>
                                <td>:</td>
                                <td><?php echo $row->pref_height_from; ?>&nbsp;to&nbsp;<?php echo $row->pref_height_to; ?></td>
                                 <td ><?php if($row->pref_height_to>=$row1->height&&$row->pref_height_from<=$row1->height){$pp2=1;?><img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{$pp2=0; ?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php } ?></td>
                                </tr>
                                <tr>
                                <td>Marital Status
</td>
<td >:</td>
                                    <td><?php echo $row->pref_status; ?></td>
                               <td ><?php if($row->pref_status==$row1->merital_status||$row->pref_status=='any'){ $pp3=1;?><img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{ $pp3=0;?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php } ?></td>
                             </tr>
                             <tr>
                               <td>Physical Status </td>
                               <td>:</td>
                             <td><?php echo $row->pref_physical_status; ?></td>
                              <td ><?php if($row->pref_physical_status==$row1->physical_status){ $pp4=1?><img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{$pp4=0; ?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php } ?></td>
                             </tr>
                           
                             <tr>
                               <td>Mother Toungue</td>
                               <td>:</td>
                           <td>  
 
             				  <?php if($value->num_rows > 0) {?><?php foreach ($value->result() as $val){?> <?php echo $val->mother_tongue_name ?>,
                             <?php }}?></td>
                           <td >
						        <?php $cities = explode(',',$row->pref_mother);

if (in_array($row1->mother_tongue, $cities)) { $pp5=1?>
   			   <img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{$pp5=0; ?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php }
?></td>
                             </tr>
                               <tr>
                               <td>Religion </td>
                               <td>:</td>
                                <td >
                               
							  <?php echo $row->religion_name;?></td>
                            <td ><?php if($row->pref_religion==$row1->religion||$row->pref_religion=='any'){ $pp6=1?><img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{$pp6=0; ?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php } ?></td>
                             </tr>
                             <tr>
                               <td>Cast / Religion </td>
                               <td>:</td>
                               <td><?php if($prefcast->num_rows > 0) {?><?php foreach ($prefcast->result() as $val){ $pp7=1?> <?php echo $val->cast_name ?>,
                             <?php }}?></td>
                              <td > <?php $cities = explode(',',$row->pref_cast);

if (in_array($row1->cast, $cities)) {?>
   			   <img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{ $pp7=0;?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php }
?>	</td>
                             </tr>
                              <tr>
                               <td>Star </td>
                               <td>:</td>
                               <td><?php if($prefstar->num_rows > 0) {?><?php foreach ($prefstar->result() as $val){ ?> <?php echo $val->star_name; ?>,
                             <?php }}
							 
							 else 
							 {
							 
							 echo 'Not Mensioned';
							 }
							 ?></td>
                               <td ><?php $cities = explode(',',$row->pref_star);

if (in_array($row1->star, $cities)) {$pp8=1?>
   			   <img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{ $pp8=0;?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php }
?>	</td>
                             </tr>
                             
                      <tr>
                               <td>Eating Habits </td>
                               <td>:</td>
                               <td><?php echo $row->pref_eating_habbit; ?></td>
                                <td ><?php if($row->pref_eating_habbit==$row1->food||$row->pref_eating_habbit=='Doesnt matter'){ $pp9=1?><img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{$pp9=0; ?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php } ?></td>
                             </tr>
                                 <tr>
                               <td>Smoking Habits </td>
                               <td>:</td>
                               <td><?php echo $row->pref_smoking; ?></td>
                              <td ><?php if($row->pref_smoking==$row1->smoking||$row->pref_smoking=='Doesnt matter'){ $pp10=1;?><img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{$pp10=0; ?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php } ?></td>
                             </tr>
                                <tr>
                               <td>Drinking Habits</td>
                               <td>:</td>
                               
                                 
                               <td><?php echo $row->pref_drinking; ?></td>
                              <td ><?php if($row->pref_drinking==$row1->drinking||$row->pref_drinking=='Doesnt matter'){ $pp11=1;?><img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{ $pp11=0;?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php } ?></td>
                             </tr>
                             
                   </table >
                   
                             
                             
                                                </div>
                            </div>
                             </div>
                 
                    </div>
                   
                   
                   
                   
                   
                    <div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span12">
                          <div class="span12" >
                          <div class="adjest">
                          <ul class="nav">
                 <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-4_16.jpg" /></li>
                <li style="border:none;"><h3>Professional Preferences</h3></li>
               
                            </ul>
                            </div>
                            </div>
                            </div>
                             </div>
                            <div class="tble">
                              <div class="span12">
                    <table class="new2 ">
                   
                                                        <tr >
                                <td width="150px" >Education </td>
                                 <td>:</td>
                               <td width="225px" ><?php if($prefedu->num_rows > 0) {?><?php foreach ($prefedu->result() as $val){?> <?php echo $val->education_name ?>,
                             <?php }}?></td>
                             <td ><?php $cities = explode(',',$row->pref_education);

if (in_array($row1->education, $cities)) { $pp12=1?>
   			   <img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{ $pp12=0;?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php }
?></td>
                              </tr>
                              <tr>
                                <td>Occupation </td>
                                 <td>:</td>
                               <td><?php if($prefoccupation->num_rows > 0) {?><?php foreach ($prefoccupation->result() as $val){?> <?php echo $val->occupation_name ?>,
                             <?php }}?></td>
                                <td ><?php $cities = explode(',',$row->pref_occupation);

if (in_array($row1->occupation, $cities)) { $pp13=1?>
   			   <img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{ $pp13=0;?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php }
?></td> </tr>
                                <tr>
                                <td>Annual Income
</td>
 <td>:</td>
                             <td><?php echo $row->currrency_symbol; ?>.<?php echo $row->pref_income; ?></td>
                               <td ><?php 

if ($row1->income>=$row->pref_income) { $pp14=1?>
   			   <img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{ $pp14=0;?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php }
?></td>
                             </tr>
                           
                   </table >
                   
                             
                             
                                                </div>
                            </div>
                             </div>
                 
                    </div>
                   
                   
                    <div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span12">
                          <div class="span12" >
                          <ul class="nav">
                          <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-6_17.jpg" /></li>
               <li style="border:none;"><h3>Location Preferences</h3></li>
               
                                        </ul>
         
                            </div>
                            </div>
                             </div>
                            <div class="tble">
                              <div class="span12">
                    <table class="new2 ">
                   
                                                        <tr >
                                <td width="150px" >Country</td>
                                 <td>:</td>
                               <td width="225px" ><?php if($prefcountry->num_rows > 0) {?><?php foreach ($prefcountry->result() as $val){?> <?php echo $val->nicename ?>,
                             <?php }}?></td>
                              <td ><?php $cities = explode(',',$row->pref_country);

if (in_array($row1->country, $cities)) { $pp15=1?>
   			   <img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{ $pp15=0;?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php }
?></td>
                              </tr>
                              <tr>
                                <td>State </td>
                                 <td>:</td>
                                 <td> <?php echo $row->pref_state ?></td>
                                <td ><?php $cities = explode(',',$row->pref_state);

if (in_array($row1->state, $cities)) { $pp16=1?>
   			   <img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{ $pp16=0;?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php }
?></td>
                                </tr>
                                <tr>
                                <td>City
</td>
 <td>:</td>
                             <td><?php echo $row->pref_city ?>,
                                <td ><?php $cities = explode(',',$row->pref_city);

if (in_array($row1->city, $cities)) { $pp17=1?>
   			   <img src="<?php echo base_url();?>file/img/true_11.png" /><?php } else
		{ $pp17=0;?><img src="<?php echo base_url();?>file/img/false_15.png" /><?php }
?></td>
                             </tr>
                           
                   </table >
                   <br />
                   <div class="span8"><?php $pp=$pp1+$pp2+$pp3+$pp4+$pp5+$pp6+$pp7+$pp8+$pp9+$pp10+$pp11+$pp12+$pp13+$pp14+$pp15+$pp16+$pp17; ?> 
                     <strong><?php echo $pp; ?> / 17 of <?php echo $row->name ?>'s partner preferences
match your profile</strong> </div>
                             
                             
                              </div>
                            </div>
                             </div>
                 
                    </div>
 
 
 
   </div>
   </div>
   
   </div>
   </div>
   </div>
   <?php } ?>
   <?php $this->load->view('footer');?>