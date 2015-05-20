<?php $this->load->view('header');?>
<?php foreach($query1 as $row){ ?>
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
                                        
                                                                </div>
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
                                 
                             
                              </tr>
                              <tr>
                                <td>height</td>
                                <td>:</td>
                                
                                </tr>
                                <tr>
                                <td>Marital Status
</td>
<td >:</td>
                                    <td><?php echo $row->pref_status; ?></td>
                              
                             </tr>
                             <tr>
                               <td>Physical Status </td>
                               <td>:</td>
                             <td><?php echo $row->pref_physical_status; ?></td>
                            
                             </tr>
                           
                             <tr>
                               <td>Mother Toungue</td>
                               <td>:</td>
                           <td>  
 
             				  <?php if($value->num_rows > 0) {?><?php foreach ($value->result() as $val){?> <?php echo $val->mother_tongue_name ?>,
                             <?php }}?></td>
                          
                             </tr>
                               <tr>
                               <td>Religion </td>
                               <td>:</td>
                                <td >
                               
							  <?php echo $row->religion_name;?></td>
                           
                             </tr>
                             <tr>
                               <td>Cast / Religion </td>
                               <td>:</td>
                               <td><?php if($prefcast->num_rows > 0) {?><?php foreach ($prefcast->result() as $val){ $pp7=1?> <?php echo $val->cast_name ?>,
                             <?php }}?></td>
                              
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
                            
                             </tr>
                             
                      <tr>
                               <td>Eating Habits </td>
                               <td>:</td>
                               <td><?php echo $row->pref_eating_habbit; ?></td>
                             </tr>
                                 <tr>
                               <td>Smoking Habits </td>
                               <td>:</td>
                               <td><?php echo $row->pref_smoking; ?></td>
                             
                             </tr>
                                <tr>
                               <td>Drinking Habits</td>
                               <td>:</td>
                               
                                 
                               <td><?php echo $row->pref_drinking; ?></td>
                          
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
                    
                              </tr>
                              <tr>
                                <td>Occupation </td>
                                 <td>:</td>
                               <td><?php if($prefoccupation->num_rows > 0) {?><?php foreach ($prefoccupation->result() as $val){?> <?php echo $val->occupation_name ?>,
                             <?php }}?></td>
                         </tr>
                                <tr>
                                <td>Annual Income
</td>
 <td>:</td>
                             <td><?php echo $row->currrency_symbol; ?>.<?php echo $row->pref_income; ?></td>
                    
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
                                   </tr>
                              <tr>
                                <td>State </td>
                                 <td>:</td>
                                 <td> <?php echo $row->pref_state ?></td>
                             
                                </tr>
                                <tr>
                                <td>City
</td>
 <td>:</td>
                             <td><?php echo $row->pref_city ?>,
                             
                             </tr>
                           
                   </table >
                   <br />
                   
                             
                             
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