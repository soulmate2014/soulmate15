<?php include'header.php' ?>

<div class="row-fluid adcontent result">
<div class="container">

    
    <div class="span12">
<h2>Search results (<?php echo $count ?>)</h2>
<div class="span12 result1">

<div class="span8"><div class="span2 result4">Dont show profiles :</div>

<div class="span2 result5"><input class="check " type="checkbox" >All ready viewed</div>
<div class="span2 result6"><input class="check " type="checkbox" >All ready contacted</div>
<div class="span2 result7"><input class="check " type="checkbox" >Shortlisted</div>
<div class="span2 result8"><input class="check " type="checkbox" >Ignored</div>
<div class="span2 result8"> <input type="submit"  class="result9"></div>

</div>
<div class="span8 result2"><div class="span4"><input class="check " type="checkbox" >Send Interest All</div>

<div class="span4 result3"><div style="text-align:center"><?php echo $links; ?></div><img src="<?php echo base_url(); ?>file/img/search-result-page_04.png" /></div>

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
                                	<div class="span12"><input class="check " type="checkbox"> <span class="v1"><?php echo $item->name; ?></span><br>
                                 <span class="id1"> <b><?php echo $item->user_id; ?></b></span>
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
                            		<div class="span5">
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
                                    <div class="span4 view1">
                                    Profile Created for <strong><?php echo $item->profile_for; ?></strong><br>
Age, Height : <strong><?php echo $item->user_id; ?> Yrs, <?php echo $item->height; ?> Cms</strong><br>
Religion :<strong> <?php echo $item->height; ?></strong><br>
Caste, Sub Caste : <strong><?php echo $item->cast; ?>,<?php echo $item->subcast; ?></strong><br>
Star :<strong><?php echo $item->star; ?></strong><br>
Location :<strong> <?php echo $item->city; ?>, <?php echo $item->state; ?>, <?php echo $item->country; ?></strong><br>
Education: <strong><?php echo $item->education; ?></strong><br>
Occupation :<strong> <?php echo $item->occupation; ?></strong><br>
<br>
<a href="#">View Full Profile</a>
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

<div class="span4 result3"><img src="<?php echo base_url(); ?>file/img/search-result-page_04.png" /></div>

</div>     
  </div>                          
</div>
    
     
</div>
</div>



<?php include'footer.php'; ?>
