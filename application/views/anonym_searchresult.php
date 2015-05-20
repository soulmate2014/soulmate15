<?php include'header.php' ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>file/css/main.css">
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
<div class="span12 result1">


<div class="span8 result2"><!--<div class="span4"><input class="check " type="checkbox" >Send Interest All</div>-->

<div class="span4 result3" style="width:375px;"><div style="text-align:center"><?php echo $links; ?></div></div>

</div>
</div>



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
		foreach($results as $item) {
		?>
   
    <div class="span12 mdiv" style="margin-left:0px;">

                            	<div class="span12 prof1">
                                	<div class="span12"><!--<input class="check " type="checkbox"> --><span class="v1"><a href="#"><?php echo $item->name; ?> (<?php echo $item->user_id; ?>)</a></span>
                                 </div>
                                 	<div class="span12">
                                    <div class="span3 view1 ">
                                   <?php if($item->file_name=='')
									{ ?><img src="<?php echo base_url();?>file/img/noimg.jpg" width="150" height="150" />
                                    <?php }
									else
									{
										?>
                                    
                                    <img src="<?php echo base_url();?>uploads/<?php echo  $item->file_name; ?>"><?php } ?></div>
                            		<div class="span4">
                                    <div class="loader1 mclr2 result">
                                    	<p><img src="<?php echo base_url(); ?>file/img/p1_03.jpg">   View Mobile No/sms </p>
                                    		
                                      <p> <img src="<?php echo base_url(); ?>file/img/p2_03.jpg">  Request Horoscope</p>    
                                     
                                  
                                     <div class="span11 mnn">
                                      <?php echo $item->about_us; ?><br> 
 <br></div>

<div class="span11">
  <input class="btn1 btn-small match mbtn" type="button" value="Send Mail">
 
 <input type="button" class="btn1 btn-small match mbtn" name="yes" value="Send Interest">
 </div>
                                     </div>
                                    </div>
                                    <div class="span5 view1">
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
<?php } }?>






</div>
        
 </div>
</div> 
   			
 				<div class="span4 result12">                           
                            <div class="search">
                            	<div class="span12 mpd1">
                                <h3>Search by ID</h3>
                                <div class="span11 mpd">
                                
                                <form class="navbar-form pull-left form-search">
                                <input type="text" class="form-control">
       				 <button class="btn">Search</button>
  						</form>
                            	</div>	
								
                                </div>
                              </div>
                              
                              <div class="matches">
                            	<div class="span12">
                                	<h3>Your matches</h3>
                                		<div class="span10 mbd2">
                                        	<div class="span11 mbd3">  <img src="img/images/images/my-account_03.jpg"></div>
                                        <div class="span9 mbd4">
                                        <h4>Tharunima</h4>
                                        <h5>S189599</h5>
                                        <h5>Trichur</h5>
                                        </div>
                                        </div>
                                <div class="span5 mbd5"> 
       				<button type="submit" style="background-color:#FFF;" class="btn1 btn-large match">More</button>

                                </div>
                             
                                </div>
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
<div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window"> Soulmate
    <div id="lorem">
      <p>To View these profile please register on Soulmate</p>
    </div>
    <div id="popupfoot"> <a href="<?php echo base_url();?>" class="close agree">I agree</a> </div>
  </div>
  <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
<script src="<?php echo base_url(); ?>file/js/main.js"></script>


<?php include'footer.php'; ?>
