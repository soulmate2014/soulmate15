<?php /*if($this->session->userdata('logged_in'))
 {
	 $session_data = $this->session->userdata('logged_in');
		$soul_id= $session_data['user_id'];}
	 */
	 ?>
<?php $this->load->view('header'); ?>


<style>
.span3.addon table thead tr .tbody2 .span12.mid2 .moredetail a {
	color: #fff;
}
.span3.addon table thead tr .tbody2 .span12.mid2 .moredetail a:hover {
	color: #06C;
}
.rupyaINR{
	color:#000;
}
</style>

		<!--		3mnth  		6 month			9month
                    
Start up	:		10			11				12
Standerd	:		13			14				15
premium		:		16			17				18
prime		:		19			20
Soulmate sp	:		21-->
<div class="row-fluid recommends8" style="padding-top:20px;">
  <div class="container">
    <div class="span12">
      <h5 style="text-align:right;" >
      <a href="<?php echo base_url();?>index.php/myhome/index/procedtohome">Jump to home >>></a>
</h5>
      <h3 class="pagehead">Payment Options </h3>
      <h3 class="ourpackage">Our packages </h3>
    </div>
    <div class="span12" style="margin-left:0px;">
      <div class="span6">
        <div class="span1"> <img src="<?php echo base_url()?>file/img/payment1.png" /> </div>
        <div class="span5">
          <h5 class="package">Select Packages</h5>
        </div>
      </div>
    </div>
     <div id="ashik"></div>
    <form action="<?php /*echo site_url('payment/paymentcalculate'); */?>" >
    <div class="span12" style="margin-left:0px; margin-top:20px;">
      <div class="span9">
        <table width="100%">
          <thead>
            <tr>
              <td width="40%" class="thead">&nbsp;</td>
              <td width="20%" class="thead"><h6 class="theadhd">3 Months</h6></td>
              <td width="20%" class="thead"><h6 class="theadhd">6 Months</h6></td>
              <td width="20%" class="thead"><h6 class="theadhd">9 Months</h6></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td width="40%" class="tbody"><h6 class="tbodyhd">Start Up</h6></td>
              <td width="20%" class="tbody"><div class="span12 mid">
                  <input onclick="myFunction()" type="radio" class="radio_id" name="package" value="10" required="required">
                  <input type="hidden" name="p1" value="<?php echo $s3amount;?>" />
                  <span class="rupyaINR" style=""> Rs.</span><?php echo $s3amount;?></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">View Contacts </div>
                  <span class="noms">:40</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Send SMS </div>
                  <span class="noms">:30</span></div></td>
              <td width="20%" class="tbody"><div class="span12 mid">
                  <input type="radio" class="radio_id" name="package" value="11">
                  <input type="hidden" name="p2" value="<?php echo $s6amount;?>" />
                  Rs.<?php echo $s6amount;?></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">View Contacts </div>
                  <span class="noms">:80</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Send SMS </div>
                  <span class="noms">:60</span></div></td>
              <td width="20%" class="tbody"><div class="span12 mid">
                  <input type="radio" name="package" value="12">
                  <input type="hidden" name="p3" value="<?php echo $s9amount;?>" />
                  Rs.<?php echo $s9amount;?></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">View Contacts </div>
                  <span class="noms">:12</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Send SMS </div>
                  <span class="noms">:90</span></div></td>
            </tr>
            <tr>
              <td width="40%" class="tbody"><h6 class="tbodyhd">Standard</h6></td>
              <td width="20%" class="tbody"><div class="span12 mid">
                  <input type="radio" name="package" value="13">
                  <input type="hidden" name="p4" value="<?php echo $st3amount;?>" />
                  Rs.<?php echo $st3amount;?></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">View Contacts </div>
                  <span class="noms">:45</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Send SMS </div>
                  <span class="noms">:35</span></div></td>
              <td width="20%" class="tbody"><div class="span12 mid">
                  <input type="radio" name="package" value="14">
                  <input type="hidden" name="p5" value="<?php echo $st6amount;?>" />
                  Rs.<?php echo $st6amount;?></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">View Contacts </div>
                  <span class="noms">:90</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Send SMS </div>
                  <span class="noms">:70</span></div></td>
              <td width="20%" class="tbody"><div class="span12 mid">
                  <input type="radio" name="package" value="15">
                  <input type="hidden" name="p6" value="<?php echo $st9amount;?>" />
                  Rs.<?php echo $st9amount;?></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">View Contacts </div>
                  <span class="noms">:135</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Send SMS </div>
                  <span class="noms">:105</span></div></td>
            </tr>
            <tr>
              <td width="40%" class="tbody" ><h6 class="tbodyhd">Premium</h6></td>
              <td width="20%" class="tbody"><div class="span12 mid">
                  <input type="radio" name="package" value="16">
                  <input type="hidden" name="p7" value="<?php echo $pre3amount;?>" />
                  Rs.<?php echo $pre3amount;?></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">View Contacts </div>
                  <span class="noms">:50</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Send SMS </div>
                  <span class="noms">:40</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Profile Highlighter  </div>
                  <span class="noms">:1 month</span></div></td>
              <td width="20%" class="tbody"><div class="span12 mid">
                  <input type="radio" name="package" value="17">
                  <input type="hidden" name="p8" value="<?php echo $pre6amount;?>" />
                  Rs.<?php echo $pre6amount;?></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">View Contacts </div>
                  <span class="noms">:100</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Send SMS </div>
                  <span class="noms">:80</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Profile Highlighter  </div>
                  <span class="noms">:2month</span></div></td>
              <td width="20%" class="tbody"><div class="span12 mid">
                  <input type="radio" name="package" value="18">
                  <input type="hidden" name="p9" value="<?php echo $pre9amount;?>" />
                  Rs.<?php echo $pre9amount;?></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">View Contacts </div>
                  <span class="noms">:150</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Send SMS </div>
                  <span class="noms">:120</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Profile Highlighter  </div>
                  <span class="noms">:3 month</span></div></td>
            </tr>
            <tr>
              <td width="40%" class="tbody"><h6 class="tbodyhd">Prime</h6></td>
              <td width="20%" class="tbody"><div class="span12 mid">
                  <input type="radio" name="package" value="19">
                  <input type="hidden" name="p10" value="<?php echo $pri3amount;?>" />
                  Rs.<?php echo $pri3amount;?></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">View Contacts </div>
                  <span class="noms">:unlimited</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Send SMS </div>
                  <span class="noms">:unlimited</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Profile Highlighter  </div>
                  <span class="noms">:2month</span></div></td>
              <td width="20%" class="tbody"><div class="span12 mid">
                  <input type="radio" name="package" value="20">
                  <input type="hidden" name="p11" value="<?php echo $pri6amount;?>" />
                  Rs.<?php echo $pri6amount;?></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">View Contacts </div>
                  <span class="noms">:unlimited</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Send SMS </div>
                  <span class="noms">:unlimited</span></div>
                <div class="span12 mid1" style="min-height: 15px;
">
                  <div class="nomtitle">Profile Highlighter  </div>
                  <span class="noms">:3month</span></div></td>
              <td width="20%" class="tbody"></td>
            </tr>
          </tbody>
        </table>
        <table width="100%">
          <thead>
            <tr>
              <td width="40%" class="thead">&nbsp;</td>
              <td width="20%" class="thead"><h6 class="theadhd">18 Months</h6></td>
              <!--<td width="20%" class="thead"><h6 class="theadhd">6 Months</h6></td>-->
              <td width="40%" class="thead"><h6 class="theadhd">Benefits</h6></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td width="40%" class="tbody"><h6 class="tbodyhd">Soulmate Special</h6></td>
              <td width="20%" class="tbody"><div class="span12 mid">
                  <input type="radio" name="package" value="21">
                  <input type="hidden" name="p12" value="<?php echo $soulamount;?>" />
                  Rs.<?php echo $soulamount;?></div>
                <div class="span12 mid1" style="min-height: 15px; padding-left:6px;
">
                  <div class="nomtitle" style="width: 85px;">View Contacts </div>
                  <span class="noms">:360(20month)</span></div>
                <div class="span12 mid1" style="min-height: 15px; padding-left:6px;
">
                  <div class="nomtitle" style="width: 85px;">Send SMS </div>
                  <span class="noms" >:270(15/month)</span></div></td>
              <td width="40%" class="tbody1"><div class="span12 mid1" style="min-height: 15px; padding-left:6px;
">
                  <ul style="font-size:13px; margin-left:30px;">
                    <li>18 months of uninterrupted paid benefits</li>
                    <li>Exclusive Service Executive</li>
                    <li>View mobile members of 500 members to contact directly</li>
                    <li>Chat with prospects directly</li>
                    <li>Send unlimited personalised messages</li>
                    <li>View unlimited Horoscopes</li>
                  </ul>
                </div></td>
            </tr>
          </tbody>
        </table>
      </div>
     
      <div class="span3 addon" style="margin-left:10px;">
        <table width="100%">
          <thead>
            <tr>
              <td width="20%" class="thead"><h6 class="theadhd">Select Add-On Package</h6></td>
            </tr>
            <tr>
              <td width="20%" valign="top" class="tbody2"><div class="span12 mid1" style="min-height: 15px; padding-left:6px;
">
                  <input type="checkbox" name="addon1" value="1000" style="width:20px; margin-top:-6px; height:20px; margin-right:20px;" />
                  
                  <span class="heigh">Profile Highlighter</span> </div>
                <div class="span12 mid2" style="min-height: 15px;   padding-left: 40px;
">Feature your profile on top of search results at just Rs. 0000.
                  Get maximum visibility. </div>
                <div class="span12 mid2" style="min-height: 15px;   padding-left: 40px;
"> <span class="moredetail" href="#" >More Details »</span> </div></td>
            </tr>
            <tr>
              <td width="20%" class="tbody2"><div class="span12 mid1" style="min-height: 15px; padding-left:6px;
">
                  <input type="checkbox" name="addon2" value="2000" style="width:20px; margin-top:-6px; height:20px; margin-right:20px;" />
                 
                  <span class="heigh">AstroMatch </span> </div>
                <div class="span12 mid2" style="min-height: 15px;   padding-left: 40px;
">Compare your horoscope with a prospective match and get a compatibility report at just Rs. 000. </div>
                <div class="span12 mid2" style="min-height: 15px;   padding-left: 40px;
"> <span class="moredetail" href="#" >More Details »</span> </div></td>
            </tr>
            <tr>
              <td width="20%" valign="middle" class="tbody3"><div class="span12 mid2" style="min-height: 15px;   padding-left: 40px;
"> <?php if($this->session->userdata('logged_in'))
 {
	 $session_data = $this->session->userdata('logged_in');
	 ?>
                  <input class="buy" style="background-color:#ff9000;
		width:200px; height:80px; font-size: 25px;" type="submit" value="Buy Now" />
        <?php } else {
			?>
             <input class="buy" onclick="window.location.href='<?php echo base_url();?>index.php/home/register'" style="background-color:#ff9000;
		width:200px; height:80px; font-size: 25px;" type="button" value="Register Now" />
        <?php } ?>
                </div></td>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    </form>
     <script>
    $(document).ready(function(){
        $(".radio_id").click(function(){
            if($(this).attr("value")=="10"){
                $("#second_checkbox").hide(); 
				var inner = $('<div id="ashik">');
inner.html("fill in what you need");  
$("#ashik").show();             
                $("#first_checkbox_display").show();
            }
            if($(this).attr("value")=="11"){
                $("#first_checkbox_display").hide();                
                $("#second_checkbox").show();    
            }
        });
    });
</script>



    <?php if($this->session->userdata('logged_in'))
 {
	 $session_data = $this->session->userdata('logged_in');
	 ?>
     <div id="ashik1"></div>
    <!--<div class="span12" id="first_checkbox_display"  style="margin-left:0px; display:none; margin-top:20px;">
      <table width="100%">
          <thead>
            <tr>
            	<td width="40%" align="center" class="theadmember" style="border: 1px solid #2d9e9c;"></td>
              	<td width="40%"  class="theadmember" style="border: 1px solid #2d9e9c;"><h6 class="theadh6" style="text-align:left;">Membership Comparison Chart</h6></td>
              	<td width="20%" align="center" class="theadmember"  style="border: 1px solid #2d9e9c;"></td>
              
            </tr>
          </thead>
          <tbody>
          <tr>
          <td width="40%" class="theadbod" style="border-right: 1px solid #fff;"><h5 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left; font-weight:bold; border:none;">Membership

</h5>
<h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left; border:none;">Startup 3 months-3000

</h6></td>
 <td width="40%" class="theadbod" style="border-right: 1px solid #fff;"><h6 class="theadh6" style="color:#2d9e9c;font-weight:bold; padding-left:15px; text-align:left;">Add-on package

</h6>
<h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">Membership

</h6>
</td>
 <td width="20%" class="theadbod"><h6 class="theadh6" style="color:#000; padding-left:15px; text-align:left;">Your Total:

</h6></td>
</tr>
</tbody>
</table>
    </div>-->
    
    
    
    
    
    
    
    <div class="span12" id="second_checkbox"  style="margin-left:0px; display:none; margin-top:20px;">
      <table width="100%">
          <thead>
            <tr>
            	<td width="40%" align="center" class="theadmember" style="border: 1px solid #2d9e9c;"></td>
              	<td width="40%"  class="theadmember" style="border: 1px solid #2d9e9c;"><h6 class="theadh6" style="text-align:left;">Membership Comparison Chart</h6></td>
              	<td width="20%" align="center" class="theadmember"  style="border: 1px solid #2d9e9c;"></td>
              
            </tr>
          </thead>
          <tbody>
          <tr>
          <td width="40%" class="theadbod" style="border-right: 1px solid #fff;"><h5 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left; font-weight:bold; border:none;">Membership

</h5>
<h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left; border:none;">Start Up 6months-5300

</h6></td>
 <td width="40%" class="theadbod" style="border-right: 1px solid #fff;"><h6 class="theadh6" style="color:#2d9e9c;font-weight:bold; padding-left:15px; text-align:left;">Add-on package

</h6>
<h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">Membership

</h6>
</td>
 <td width="20%" class="theadbod"><h6 class="theadh6" style="color:#000; padding-left:15px; text-align:left;">Your Total:

</h6></td>
</tr>
</tbody>
</table>
    </div>
     <?php } ?>
    <div class="span12" style="margin-left:0px; margin-top:20px;">
      <table width="100%">
          <thead>
            <tr>
              <td width="32%" class="theadmember"><h6 class="theadh6">Membership Comparison Chart</h6></td>
              <td width="13%" class="theadmember"><h6 class="theadh6">Start Up</h6></td>
              <td width="13%" class="theadmember"><h6 class="theadh6">Standard</h6></td>
              <td width="13%" class="theadmember"><h6 class="theadh6">Premium</h6></td>
              <td width="13%" class="theadmember"><h6 class="theadh6">Prime</h6></td>
              <td width="13%" class="theadmember"><h6 class="theadh6">Soulmate
Special</h6></td>
            </tr>
          </thead>
          <tbody>
          <tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">Send unlimited personalised messages

</h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr>
          <tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">Access verified mobile numbers

</h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
             <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr>
          <tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">Send SMS

</h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr><tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">Chat instantly with prospect

</h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr>
          <tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">View horoscope of members

</h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
             <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr>
          <tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">Profile highlighter

</h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/cross.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/cross.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr>
          <tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">Personal Relationship Manager

</h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/cross.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/cross.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/cross.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr>
          <tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">Priority in search results

</h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr>
          <tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">Profile tagged as paid member

</h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/cross.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr>
          <tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">Prominent display in search results

</h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr>
          <tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">SMS Alerts.Get instant notifications on your mobile

</h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/cross.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr>
          <tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c;padding-left:15px; text-align:left;">Enhanced Privacy:
Photo / Horoscope / Phone

</h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr>
          <tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c; padding-left:15px;text-align:left;">Enhanced background colour for better profile 
visibility

</h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/cross.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr>
        <tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">View Social and Professional profile of members
</h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
				<td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr>
          <tr>
          <td width="32%" class="theadbod"><h6 class="theadh6" style="color:#2d9e9c; padding-left:15px; text-align:left;">Exclusive Customer Care Executive
- Just For You! 
visibility

</h6></td>
             <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/cross.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
              <td width="13%" class="theadbod"><h6 class="theadh6"><img src="<?php echo base_url();?>file/img/tick.png" /></h6></td>
          </tr>
          
          </tbody>
          </table>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>