<?php $this->load->view('header');?> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<style>
.tabs-left {
  margin-top: 3rem;
}

.nav-tabs {
  float: left;
  border-bottom: 0;
}
.nav-tabs li {
  float: none;
  margin: 0;
}
.nav-tabs li a {
  margin-right: 0;
  border: 0;
  background-color: #c0392b;
}
.nav-tabs li a:hover {
  background-color: #e74c3c;
}
.nav-tabs .glyphicon {
  color: #fff;
}
.nav-tabs .active .glyphicon {
  color: #333;
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
  border: 0;
}

.tab-content {
  margin-left: 45px;
}
.tab-content .tab-pane {
  display: none;
  background-color: #fff;
  padding: 1.6rem;
  overflow-y: auto;
}
.tab-content .active {
  display: block;
}
</style>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<link href="<?php echo base_url(); ?>file/css/about.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/style1.css" rel="stylesheet" type="text/css" />
<div class="row-fluid content" style="margin-top:0px;padding-top:0px;
  padding-bottom: 60px;"	>

	<div class="container">
    <div class="span12 payment">
      <h2>Select Your Payment Option</h2>
    </div>
    <div class="span9 payment">
    <div class="span12 payment4">
  
  <div class="row">
    <div class="col-md-4 col-sm-5">
      <div class="tabs-left payment2">
        <ul class="nav nav-tabs " style=" margin-right:-2px; border-right:0px;">
          <li class="active"><a href="#home" data-toggle="tab" class="payment3"><span class="glyphicon glyphicon-heart"></span><h3>Credit card</h3></a></li>
          <li><a href="#profile" data-toggle="tab" class="payment3"><span class="glyphicon glyphicon-user"></span><h3>Debit card</h3></a></li>
          <li><a href="#favourite" data-toggle="tab" class="payment3"><span class="glyphicon glyphicon-heart-empty"></span><h3>Net Banking</h3></a></li>
          <li><a href="#download" data-toggle="tab" class="payment3"><span class="glyphicon glyphicon-cloud-download"></span><h3>Pay at Bank Branches</h3></a></li>
          
        </ul>
        <div id="myTabContent" class="tab-content">
  <div class="tab-pane active" id="home" style="background: #42b8b6; overflow:hidden;font-family:'Open Sans', sans-serif;">
  <form action="<?php echo site_url('checkout')?>" method="post">
  <div class="creditdiv">
    <label>Card holder name</label>
    <input type="text"  />
    <input type="hidden" name="payment_method" value="credit"  />
    <input type="hidden" name="package" value="<?php echo $package;?>"  />
    <input type="hidden" name="month" value="<?php echo $month;?>"  />
    <input type="hidden" name="pay_amount" value="<?php echo $amount;?>"  />
    <?php  $session_data = $this->session->userdata('logged_in');
	  $user_id = $session_data['user_id']; ?>
      <?php if($add1=='1000')
	  {
		  ?>
          <input type="hidden" name="profile_highlite" value="1"  />
         <?php }
		 else
		 { ?>
           <input type="hidden" name="profile_highlite" value="0"  />
           <?php } ?>
           
           
           <?php if($add2=='2000')
	  {
		  ?>
          <input type="hidden" name="astro_match" value="1"  />
         <?php }
		 else
		 { ?>
           <input type="hidden" name="astro_match" value="0"  />
           <?php } ?>
              <input type="hidden" name="total_payment" value="<?php echo $total; ?>"  />
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"  />
    
    <label>Credit card number</label>
    <input type="text"  />
    
    <label style="width:300px;">Card expiry date</label>  
    <select  style="width:100px; margin-top:0px;" class="selectpicker day">
                  <option value="">DD</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
    
    
    <select style="width:100px;margin-top:0px" class="selectpicker day">
                  <option value="">MM</option>
                  <option value="01">Jan</option>
                  <option value="02">Feb</option>
                  <option value="03">Mar</option>
                  <option value="04">Apr</option>
                  <option value="05">May</option>
                  <option value="06">Jun</option>
                  <option value="07">Jul</option>
                  <option value="08">Aug</option>
                  <option value="09">Sep</option>
                  <option value="10">Oct</option>
                  <option value="11">Nov</option>
                  <option value="12">Dec</option>
                </select>
    <label style="width:300px;">Card verification number (ccv)</label>
    <input type="text" style="width: 102px;float:left;" value=""  id="inputEmail">
    <br />
    	<button type="submit" style="width: 200px; float:right; height:40px; margin-left:150px; margin-top:15px; background:#FFF; color:#000;" class="span3 ">Make payment</button>
    	</div>
  </div>
  </form>
  
  
  <div class="tab-pane" id="profile" style="background: #42b8b6; overflow:hidden;font-family:'Open Sans', sans-serif;">
   <form action="<?php echo site_url('checkout')?>" method="post">
     <input type="hidden" name="payment_method" value="debit"  />
    <input type="hidden" name="package" value="<?php echo $package;?>"  />
    <input type="hidden" name="month" value="<?php echo $month;?>"  />
    <input type="hidden" name="pay_amount" value="<?php echo $amount;?>"  />
    <?php  $session_data = $this->session->userdata('logged_in');
	  $user_id = $session_data['user_id']; ?>
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"  />
   <div class="debitdiv">
    <label>Card holder name</label>
    <input type="text"  />
    
    <label>Debit card number</label>
    <input type="text"  />
    
    <label style="width:300px;">Card expiry date</label>
    
    <select  style="width:100px; margin-top:0px;" class="selectpicker day">
                  <option value="">DD</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
    
    
    <select  style="width:100px;margin-top:0px" class="selectpicker day">
                  <option value="">MM</option>
                  <option value="01">Jan</option>
                  <option value="02">Feb</option>
                  <option value="03">Mar</option>
                  <option value="04">Apr</option>
                  <option value="05">May</option>
                  <option value="06">Jun</option>
                  <option value="07">Jul</option>
                  <option value="08">Aug</option>
                  <option value="09">Sep</option>
                  <option value="10">Oct</option>
                  <option value="11">Nov</option>
                  <option value="12">Dec</option>
                </select>
    <label style="width:300px;">Card verification number (ccv)</label>
    <input type="text" style="width: 102px;float:left;" value=""  id="inputEmail">
<button type="submit" style="width: 200px; float:right; height:40px; margin-left:150px; margin-top:15px; background:#FFF; color:#000;" class="span3 ">Make payment</button>
    </div>
    
    </form>
  </div>
  <div class="tab-pane" id="favourite" style="background: #42b8b6; overflow:hidden;font-family:'Open Sans', sans-serif; height:auto;">
   <form action="<?php echo site_url('checkout')?>" method="post">
     <input type="hidden" name="payment_method" value="netbank"  />
    <input type="hidden" name="package" value="<?php echo $package;?>"  />
    <input type="hidden" name="month" value="<?php echo $month;?>"  />
    <input type="hidden" name="pay_amount" value="<?php echo $amount;?>"  />
    <?php  $session_data = $this->session->userdata('logged_in');
	  $user_id = $session_data['user_id']; ?>
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"  />
  <div class="paymentdiv">
  			<div class="payment16">
  				<h3>Pay using net banking</h3>
         	</div> 
            <div class="payment17">
            	<h4>A choice of 30 banks to make your payment</h4>
            </div>
            <div class="payment18">
            	Popular banks
            </div>
        <div class="payment21">
            <div class="payment19"><input type="checkbox" /><img src="<?php echo base_url(); ?>/file/img/images/PAYMENT-PAGE-NET-BANKING_03.png" width="121" height="33" /></div>
            <div class="payment20"><input type="checkbox" /><img src="<?php echo base_url(); ?>/file/img/images/images/PAYMENT-PAGE-NET-BANKING3_03.png" width="151" height="34" /></div>
            
            <div class="payment19"><input type="checkbox" /><img src="<?php echo base_url(); ?>/file/img/images/images/PAYMENT-PAGE-NET-BANKING2_05.png" width="141" height="34" /></div>
            <div class="payment20"><input type="checkbox" />
              <img src="<?php echo base_url(); ?>/file/img/images/images/PAYMENT-PAGE-NET-BANKING4_06.png" width="151" height="34" /></div>
         </div>
         
         <div class="payment22" style="margin-top:20px;">
            	<h4>Or choose other banks</h4>
            </div>
          <div><select id="slct" onchange="change();"  class="selectpicker" style="  width: 240px;">
                  <option value=""></option>
                </select>
                
                </div> <button type="submit" style="width: 200px; float:right; height:40px; margin-left:150px; margin-top:15px; background:#FFF; color:#000;" class="span3 ">Make payment</button>
  </div>       
       </form>  
  </div>
  <div class="tab-pane" id="download" style="background: #42b8b6; overflow:hidden;font-family:'Open Sans', sans-serif; height:auto;">
    <div class="maindiv2">
    		<div class="payment23"><img src="<?php echo base_url(); ?>/file/img/images/PAYMENT-PAGE-PAY-AT-BANK-BRANCHES_03.png" width="167" height="45" /></div>
         
         <div class="payment24">Visit any State Bank of India branch in India to make 
your payments in cash.</div>   
          <div class="payment25">Pay to A/C No : 000000000000</div> 
          <div class="payment25">A/C Name : Soulmate.com Pvt Ltd</div> 
         
         <div class="payment24">To transfer funds electronically use RTGS/NEFT 
IFSC Code SBIN0005797.</div>

			<div class="payment26" ><a href="">Click here to find a branch nearest to you</a></div>  
            
            <div class="payment27">RECEIVE THIS INFORMATION BY   <button type="submit" style="background-color:#FFF; margin-left:10px;" class="btn1 btn-small">SMS</button>
            <button type="submit" style="background-color:#FFF; margin-left:0px;" class="btn1 btn-small">E-MAIL</button>
            </div>     
    </div>
    	
        
        				<div class="maindiv3">
    		<div class="payment23"><img src="<?php echo base_url(); ?>/file/img/images/images/PAYMENT-PAGE-NET-BANKING3_03.png" width="176" height="34" /></div>
         
         <div class="payment24">Visit any State Bank of India branch in India to make 
your payments in cash.</div>   
          <div class="payment25">Pay to A/C No : 000000000000</div> 
          <div class="payment25">A/C Name : Soulmate.com Pvt Ltd</div> 
         
         <div class="payment24">To transfer funds electronically use RTGS/NEFT 
IFSC Code SBIN0005797.</div>

			<div class="payment26" ><a href="">Click here to find a branch nearest to you</a></div>  
            
            <div class="payment27">RECEIVE THIS INFORMATION BY   <button type="submit" style="background-color:#FFF; margin-left:10px;" class="btn1 btn-small">SMS</button>
            <button type="submit" style="background-color:#FFF; margin-left:0px;" class="btn1 btn-small">E-MAIL</button>
            </div>   
    </div>
        	
    
    					
                        <div class="maindiv3">
    		<div class="payment23"><img src="<?php echo base_url(); ?>/file/img/images/images/PAYMENT-PAGE-NET-BANKING2_05.png" width="163" height="34" /></div>
         
         <div class="payment24">Visit any State Bank of India branch in India to make 
your payments in cash.</div>   
          <div class="payment25">Pay to A/C No : 000000000000</div> 
          <div class="payment25">A/C Name : Soulmate.com Pvt Ltd</div> 
         
         <div class="payment24">To transfer funds electronically use RTGS/NEFT 
IFSC Code SBIN0005797.</div>

			<div class="payment26" ><a href="">Click here to find a branch nearest to you</a></div>  
            
            <div class="payment27">RECEIVE THIS INFORMATION BY   <button type="submit" style="background-color:#FFF; margin-left:10px;" class="btn1 btn-small">SMS</button>
            <button type="submit" style="background-color:#FFF; margin-left:0px;" class="btn1 btn-small">E-MAIL</button>
            </div>   
    </div>
    
    							
                                
                                	<div class="maindiv3">
    		<div class="payment23"><img src="<?php echo base_url(); ?>/file/img/images/images/PAYMENT-PAGE-NET-BANKING4_06.png" width="178" height="34" /></div>
         
         <div class="payment24">Visit any State Bank of India branch in India to make 
your payments in cash.</div>   
          <div class="payment25">Pay to A/C No : 000000000000</div> 
          <div class="payment25">A/C Name : Soulmate.com Pvt Ltd</div> 
         
         <div class="payment24">To transfer funds electronically use RTGS/NEFT 
IFSC Code SBIN0005797.</div>

			<div class="payment26" ><a href="">Click here to find a branch nearest to you</a></div>  
            
            <div class="payment27">RECEIVE THIS INFORMATION BY   <button type="submit" style="background-color:#FFF; margin-left:10px;" class="btn1 btn-small">SMS</button>
            <button type="submit" style="background-color:#FFF; margin-left:0px;" class="btn1 btn-small">E-MAIL</button>
            </div>   
    </div>
    
    
    
    
  </div>

</div><!-- /tab-content -->
      </div><!-- /tabbable -->
    </div><!-- /col -->
  </div>
    
    
    </div>
    </div>
    
  <div class="span3 payment5">
    <div class="">
     <div class="span10 payment6" style="margin-left:26px;">MEMBERSHIP PACKAGE</div>
     <b class="payment7">YOU SELECTED :</b>
     <p class="payment8"><?php echo $package;?> - <?php echo $month;?> - Rs <?php echo $amount;?></p>
     <div class="span10 payment11" style="margin-left:26px;">ADD ON PACKAGE</div>
     <?php if($add1=='1000')
	 { ?>
     <p class="payment9"><?php echo 'Profile Highliter';?>-<?php echo $add1;?></p>
     <?php } ?>
     <?php if($add2=='2000')
	 { ?>
     <p class="payment9"><?php echo 'Astro Match';?>-<?php echo $add2;?></p>
     <?php }
 ?>
  

   

    <!-- <p class="payment9">No - Add - On Selected</p>-->
     <div class="span10 payment10" style="margin-left:26px;">YOUR TOTAL : RS.<?php echo $total;?></div>
 	 </div>
  </div>
  
	  
    	
	
  <div class="payment13"><h3>Need assistance in making payment?</h3></div>
  
  <div class="payment14"><img src="<?php echo base_url(); ?>/file/img/images/PAYMENT-PAGE-CREDIT-CARD_04.png" width="72" height="67" /><p> Call Toll Free</p> <br />
  <p style="font-weight:bold"> 1800-0000-0000</p></div>
  <div class="payment15"><img src="<?php echo base_url(); ?>/file/img/images/PAYMENT-PAGE-CREDIT-CARD_10.png" width="691" height="62" /></div>
  </div>
  </div>
  
      <?php $this->load->view('footer');?> 