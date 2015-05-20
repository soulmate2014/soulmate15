<?php $this->load->view('header'); ?>
<div class="row-fluid adcontent">
<div class="container">
<div class="span12">
<h2>Sent - All Conversations</h2>

<div class="span7 " style="width:64.264957%;">
 <ul class="nav nav-tabs ad mclr" role="tablist">
    <li role="presentation" class="active "><a href="#home" aria-controls="home" role="tab" data-toggle="tab" >All</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" >Unread</a></li>
    <li role="presentation" ><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" >Read Not Replied</a></li>
   <li role="presentation" ><a href="#messages1" aria-controls="messages1" role="tab" data-toggle="tab" >Accepted</a></li>
    <li role="presentation" ><a href="#messages2" aria-controls="messages2" role="tab" data-toggle="tab" >Replied</a></li>
     <li role="presentation" ><a href="#messages3" aria-controls="messages3" role="tab" data-toggle="tab" >Decision Pending</a></li>
      <li role="presentation" ><a href="#messages4" aria-controls="messages4" role="tab" data-toggle="tab" >Not Interested</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content mclr1 bg">
    <div role="tabpanel" class="tab-pane active" id="home">	
    <?php foreach($intrest_msg->result() as $intrest){ ?>
    <div class="span12 mdiv" style="margin-left:0px;">

                            	<div  class="span12 prof1">
                            

                                	<div  class="span12"><input class="check " type="checkbox" /> <span class="v1"><?php echo $intrest->name;?></span><br />
                                    
                                 <span style="cursor:pointer;" class="id1"  onClick="document.location='https://www.google.co.in/'"><?php echo $intrest->user_id;?></span>
                                 </div>
                                 	<div class="span12">
                                    <div class="span3 view1" style="width:150px;">
                                   
                                     <?php if($intrest->file_name=='')
									{ ?><img class="profile_thumb" src="<?php echo base_url();?>file/img/noimg.jpg"  />
                                    <?php }
									else
									{
										?>
                                    
                                    <img class="profile_thumb" src="<?php echo base_url();?>uploads/<?php echo  $intrest->file_name; ?>"><?php } ?></div>
                            		<div class="span5" style=" width:45.5%; margin-left:0px;">
                                    <div class="loader1 mclr2">
                                    	<p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"> View Mobile No/sms </p>
                                    		
                                      <p> <img src="<?php echo base_url(); ?>file/img/p2_03.jpg">Request Horoscope</p>    
                                     
                                  
                                     <div class="span11 mnn">
                                       <?php  echo $intrest->about_us; ?> <br />  
 <br /></div>

<div class="span11">

<span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $intrest->user_id; ?>'">Intrested</span>
<span>This member sent you intrest you profile </span><br><br>
  <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
  <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $intrest->user_id; ?>'" type="button" value="Not Intrest" />
 
 </span></div>
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
									<strong><?php echo $intrest->profile_for; ?></strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td>Age, Height
                                    </td>
                                    <td>
                                  :&nbsp;
                                    </td>
                                    <td>
									<strong><?php echo $intrest->age; ?> Yrs, <?php echo $intrest->height; ?> Cms</strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td>Religion
                                    </td>
                                    <td>
                                 :&nbsp;
                                    </td>
                                    <td>
									<strong> <?php echo $intrest->religion_name; ?></strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td>Caste, Sub Caste</td>
                                    <td>
                                   :&nbsp;
                                    </td>
                                    <td>
									<strong><?php echo $intrest->cast_name; ?>,<?php echo $intrest->subcast; ?></strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td>Star
                                    </td>
                                    <td>
                                   :&nbsp;
                                    </td>
                                    <td>
									<strong><?php echo $intrest->star_name; ?></strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td valign="top">Location 
                                    </td>
                                    <td valign="top">
                                   :&nbsp;
                                    </td>
                                    <td>
									<strong> <?php echo $intrest->city; ?>, <?php echo $intrest->state; ?>, <?php echo $intrest->country; ?></strong>
                                    </td>
                                    
                                    
                                </tr>
                                
                                <tr>
                                  <td valign="top">Education
                                    </td>
                                    <td valign="top">
                                    :&nbsp;
                                    </td>
                                    <td>
									<strong><?php echo $intrest->education_name; ?></strong>
                                    </td>
                                    
                                    
                                </tr>
                                
                                
                                <tr>
                                  <td valign="top">Occupation
                                    </td>
                                    <td valign="top">
                                    :&nbsp;
                                    </td>
                                    <td>
									<strong> <?php echo $intrest->occupation_name; ?></strong>
                                    </td>
                                    
                                    
                                </tr>
                                
                                 <tr>
                                    <td>Gender
                                    </td>
                                    <td>
                                    :&nbsp;
                                    </td>
                                    <td>
									<strong> <?php echo $intrest->gender; ?></strong>
                                    </td>
                                    
                                    
                                </tr>
                        	</table>
<br />
<a href="<?php echo base_url();?>index.php/individual/profile/<?php echo $intrest->user_id; ?>"><strong>View Full Profile</strong></a>
</div>
					</div>			</div> 


</div>

<?php } ?>


 		</div>
        
        
 <div role="tabpanel" class="tab-pane" id="profile">
  <?php foreach($read_status->result() as $read){ ?>
    <div class="span12 mdiv" style="margin-left:0px;">

                            	<div  class="span12 prof1">
                            

                                	<div  class="span12"><input class="check " type="checkbox" /> <span class="v1"><?php echo $read->name;?></span><br />
                                    
                                 <span style="cursor:pointer;" class="id1"  onClick="document.location='https://www.google.co.in/'"><?php echo $read->user_id;?></span>
                                 </div>
                                 	<div class="span12">
                                    <div class="span3 view1" style="width:150px;">
                                   
                                     <?php if($read->file_name=='')
									{ ?><img class="profile_thumb" src="<?php echo base_url();?>file/img/noimg.jpg"  />
                                    <?php }
									else
									{
										?>
                                    
                                    <img class="profile_thumb" src="<?php echo base_url();?>uploads/<?php echo  $read->file_name; ?>"><?php } ?></div>
                            		<div class="span5" style=" width:45.5%; margin-left:0px;">
                                    <div class="loader1 mclr2">
                                    	<p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg"> View Mobile No/sms </p>
                                    		
                                      <p> <img src="<?php echo base_url(); ?>file/img/p2_03.jpg">Request Horoscope</p>    
                                     
                                  
                                     <div class="span11 mnn">
                                       <?php  echo $read->about_us; ?> <br />  
 <br /></div>

<div class="span11">

<span style="cursor:pointer; border:solid 1px #009999; padding:3px;" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $read->user_id; ?>'">Intrested</span>
<span>This member sent you intrest you profile </span><br><br>
  <input class="btn1 btn-small match mbtn" type="button" value="Send Mail" />
  <input class="btn1 btn-small match mbtn" onClick="document.location='<?php echo base_url();?>index.php/individual/profile/<?php echo $read->user_id; ?>'" type="button" value="Not Intrest" />
 
 </span></div>
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
									<strong><?php echo $read->profile_for; ?></strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td>Age, Height
                                    </td>
                                    <td>
                                  :&nbsp;
                                    </td>
                                    <td>
									<strong><?php echo $read->age; ?> Yrs, <?php echo $read->height; ?> Cms</strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td>Religion
                                    </td>
                                    <td>
                                 :&nbsp;
                                    </td>
                                    <td>
									<strong> <?php echo $read->religion_name; ?></strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td>Caste, Sub Caste</td>
                                    <td>
                                   :&nbsp;
                                    </td>
                                    <td>
									<strong><?php echo $read->cast_name; ?>,<?php echo $read->subcast; ?></strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td>Star
                                    </td>
                                    <td>
                                   :&nbsp;
                                    </td>
                                    <td>
									<strong><?php echo $read->star_name; ?></strong>
                                    </td>
                                </tr>
                                
                                   <tr>
                                    <td valign="top">Location 
                                    </td>
                                    <td valign="top">
                                   :&nbsp;
                                    </td>
                                    <td>
									<strong> <?php echo $read->city; ?>, <?php echo $read->state; ?>, <?php echo $read->country; ?></strong>
                                    </td>
                                    
                                    
                                </tr>
                                
                                <tr>
                                  <td valign="top">Education
                                    </td>
                                    <td valign="top">
                                    :&nbsp;
                                    </td>
                                    <td>
									<strong><?php echo $read->education_name; ?></strong>
                                    </td>
                                    
                                    
                                </tr>
                                
                                
                                <tr>
                                  <td valign="top">Occupation
                                    </td>
                                    <td valign="top">
                                    :&nbsp;
                                    </td>
                                    <td>
									<strong> <?php echo $read->occupation_name; ?></strong>
                                    </td>
                                    
                                    
                                </tr>
                                
                                 <tr>
                                    <td>Gender
                                    </td>
                                    <td>
                                    :&nbsp;
                                    </td>
                                    <td>
									<strong> <?php echo $read->gender; ?></strong>
                                    </td>
                                    
                                    
                                </tr>
                        	</table>
<br />
<a href="<?php echo base_url();?>index.php/individual/profile/<?php echo $read->user_id; ?>"><strong>View Full Profile</strong></a>
</div>
					</div>			</div> 


</div>
<?php } ?>



 		</div>
        
<div role="tabpanel" class="tab-pane" id="messages">
    




 		</div>        
       
<div role="tabpanel" class="tab-pane" id="messages1">
    




 		</div>       
       
 <div role="tabpanel" class="tab-pane" id="messages2">
    




 			</div>
 

<div role="tabpanel" class="tab-pane" id="messages3">
    




 		</div>
 
 
 <div role="tabpanel" class="tab-pane" id="messages4">
    




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