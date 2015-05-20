 <div class="row-fluid footer">
           <div class="container">
    <div class="span6 footer_manu feutured1">
     <?php if($this->session->userdata('logged_in'))
 {
	 ?>
           <a href="<?php echo base_url();?>index.php/myhome">HOME</a> / 
         
            <a href="<?php echo base_url();?>index.php/myaccount">MY ACCOUNT</a> /
             <a href="<?php echo base_url();?>index.php/searching">SEARCH</a>  / 
           
            <?php } else { ?>
            
             <a href="<?php echo base_url();?>">HOME</a> /
               <a href="<?php echo base_url(); ?>index.php/staticcontent/about">ABOUTUS</a> /
             <a href="<?php echo base_url();?>index.php/home/register">REGISTER</a> /
            
              <?php } ?>
             <a href="<?php echo base_url();?>index.php/payment">UP GRADE</a> / 
             <a href="<?php echo base_url(); ?>index.php/staticcontent/contact">CONTACT US</a> / 
             <a href="<?php echo base_url(); ?>index.php/staticcontent/help">HELP</a>
             </div>
             <div class="span3"></div>
             <div class="span3 feutured1"> <div class="span4"><label class="control-label" for="inputEmail" style="padding-top:10px;">FOLLOW US </label></div>
                               <ul> <li><a href="#"><img src="<?php echo base_url();?>file/img/images/facebook_25.jpg"></a></li>
                                <li><a href="#"><img src="<?php echo base_url();?>file/img/images/twitter_25.jpg"></a></li>
                                <li><a href="#"><img src="<?php echo base_url();?>file/img/images/google_25.jpg"></a></li> </ul>
                              
                            </div>
             </div>
             </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="<?php echo base_url();?>file/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>file/js/jquery-2.1.3.js"></script>
        
        
           
</body>
</html>