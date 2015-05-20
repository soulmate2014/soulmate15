<?php $this->load->view('header');/*$this->load->view('header');*/?>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/common1.js"></script>
<style>
option {
background-color: #3c8483;
}
</style>
<script>
function validateForm1() {
	var about=document.forms["form"]["about_us"].value
	if (about==null || about=="") {
        alert("Please tell about yourself");
        return false;
    }

		if (document.forms["form"]["about_us"].value.length <= 50)
	
	  {   
	
		alert("This feild contain atleast 50 character");
		return false;
	
	  }
}
</script>
<div class="container container_pading">
<form  action="<?php echo base_url();?>index.php/insert_complete_reg" name="form" onsubmit="return validateForm1()"  method="post">
	<div class="span8">
		<div class="row-fluid">
			<h2 class="blog-post-title personal_inform">Personal Information</h2>
          
			<div class=" span10 personal_border">
				<div class="span1 personal1">
                
					<img src="<?php echo base_url();?>file/img/images/images/images/icon-2_11.jpg" />
				</div>
				<div class="span7 morepersonal">
					More Personal Details
				</div>
			</div>
        </div>
        
		<div class="row-fluid">
        
			<div class="control-group personal_control">
        
    			<div class="span3"><label class="control-label gender_floatleft labelpadding" for="inputEmail">Marital Status <span style="color:#F00; font-size:18px;">*</span>

    			</label></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" required="required" name="merital_status" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="nevar maried"  <?php echo set_radio('merital_status', 'nevar maried'); ?>>
  						Never Married
 						<input type="radio" name="merital_status" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="window"  <?php echo set_radio('merital_status', 'window'); ?>>Widow
  						<input type="radio" name="merital_status" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="divorced"  <?php echo set_radio('merital_status', 'divorced'); ?>>
         Divorced
					</label>


    </div></div>
  </div>
  
  <dl class="control-group personal_control ">
     <dt class="span3"><label class="control-label gender_floatleft" for="inputEmail">Sub Caste </label></dt>
    <dd class="span7"><div class="controls">
<input type="hidden" style=" border: 2px solid #42b8b6;color:#000; font-weight:100" class="input_feild" name="email" value="<?php #echo $email; ?>" id="inputEmail">
<input type="hidden" style=" border: 2px solid #42b8b6;color:#000; font-weight:100" class="input_feild" name="mobile" value="<?php #echo $mobile; ?>" id="inputEmail">

  <input type="hidden" style=" border: 2px solid #42b8b6;color:#000; font-weight:100" class="input_feild" name="user_id" value="<?php echo $user_id; ?>" id="inputEmail">
      <input type="text" style=" border: 2px solid #42b8b6;color:#000;  font-weight:100; margin-top:0px;" class="input_feild" name="sub_cast" id="inputEmail" value="<?php echo set_value('sub_cast'); ?>"> </div></dd>
  </dl>
 <div class="control-group personal_control">
     <div class="span3"><label class="control-label gender_floatleft" for="inputEmail">Gothram </label></div>
    <div class="span7"><div class="controls">
      <input type="text" style="border: 2px solid #42b8b6;color:#000;  font-weight:100" class="input_feild" name="gothram" id="inputEmail" value="<?php echo set_value('gothram'); ?>"> </div></div>
  </div>
  	<?php
			if($list->num_rows > 0){
				?>
			
  <div class="control-group personal_control">
    <div class="span3"><label class="control-label gender_floatleft" for="inputEmail">Country Living In <span style="color:#F00; font-size:18px;">*</span></label></div>
  
    <div class="span7"><div class="controls">
 <select  name="country" required="required"  style="border: 2px solid #42b8b6;color:#000; font-weight:100"  onchange="selectState(this.options[this.selectedIndex].value)">
 
								<option value="">Select country</option>
                                <option value="IND">INDIA</option>
                  <option value="USA">UNITED STATES</option>
                  <option value="GBR">UNITED KINGDOM</option>
                  <option value="ARE">UNITED ARAB EMIRATES</option>
                  <option value="SAU">SAUDI ARABIA</option>
                  <option value="KWT">KUWAIT</option>
								<?php
								foreach($list->result() as $listElement){
									?>
									<option value="<?php echo $listElement->iso3?>"><?php echo $listElement->country_name?></option>
									<?php
								}
								?>
							</select>
 
    </div></div>
  </div>
  <div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">Residing State </label><span style="color:#F00; font-size:18px;">*</span></div>
    <div class="span7"><div class="controls">
 <select name="state" required="required" style="border: 2px solid #42b8b6;color:#000; font-weight:100" id="state_dropdown" onchange="selectCity(this.options[this.selectedIndex].value)">
								<option value="">Select state</option>
							</select>
							<span id="state_loader"></span>

    </div></div>
  </div>
  <div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">Residing District<span style="color:#F00; font-size:18px;">*</span></label></div>
    <div class="span7"><div class="controls">
 <select name="city" style="border: 2px solid #42b8b6;color:#000; font-weight:100" id="city_dropdown">
								<option value="-1">Select city</option>
							</select>
							<span id="city_loader"></span>
    </div></div>
  </div>
		</div>
        
        <?php
			}else{
				echo 'No Country Name Found';
			}
			?>
		<div class="row-fluid personal_heading">
			
			<div class=" span10 personal_border">
				<div class="span1 personal1">
					<img src="<?php echo base_url();?>file/img/images/images/images/icon-2_11.jpg" />
				</div>
				<div class="span7 morepersonal">
					Physical Attributes</div>
			</div>
        </div>
        <div class="row-fluid">
        <div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Physical Status <span style="color:#F00; font-size:18px;">*</span></label></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
                    <input type="radio" required="required" name="physical_status" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="Normal" <?php echo set_radio('physical_status', 'Normal'); ?> />Normal</label>
                    <label class="radio-inline gender_floatleft labelpadding">
<input type="radio" name="physical_status" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="physically challenged" <?php echo set_radio('physical_status', 'physically challenged'); ?> />	Physically challenged</label>
  						


    </div></div>
  </div>
        
			<div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Height

    			</label></div>
    			<div class="span7">
              <div class="controls">
               <select name="height" style="border: 2px solid #42b8b6;" class="selectpicker day">
									<option value="0">- Cms -</option>
									<option value="137">137cm</option><option value="138">138cm</option><option value="139">139cm</option><option value="140">140cm</option><option value="141">141cm</option><option value="142">142cm</option><option value="143">143cm</option><option value="144">144cm</option><option value="145">145cm</option><option value="146">146cm</option><option value="147">147cm</option><option value="148">148cm</option><option value="149">149cm</option><option value="150">150cm</option><option value="151">151cm</option><option value="152">152cm</option><option value="153">153cm</option><option value="154">154cm</option><option value="155">155cm</option><option value="156">156cm</option><option value="157">157cm</option><option value="158">158cm</option><option value="159">159cm</option><option value="160">160cm</option><option value="161">161cm</option><option value="162">162cm</option><option value="163">163cm</option><option value="164">164cm</option><option value="165">165cm</option><option value="166">166cm</option><option value="167">167cm</option><option value="168">168cm</option><option value="169">169cm</option><option value="170">170cm</option><option value="171">171cm</option><option value="172">172cm</option><option value="173">173cm</option><option value="174">174cm</option><option value="175">175cm</option><option value="176">176cm</option><option value="177">177cm</option><option value="178">178cm</option><option value="179">179cm</option><option value="180">180cm</option><option value="181">181cm</option><option value="182">182cm</option><option value="183">183cm</option><option value="184">184cm</option><option value="185">185cm</option><option value="186">186cm</option><option value="187">187cm</option><option value="188">188cm</option><option value="189">189cm</option><option value="190">190cm</option><option value="191">191cm</option><option value="192">192cm</option><option value="193">193cm</option><option value="194">194cm</option><option value="195">195cm</option><option value="196">196cm</option><option value="197">197cm</option><option value="198">198cm</option><option value="199">199cm</option><option value="200">200cm</option><option value="201">201cm</option><option value="202">202cm</option><option value="203">203cm</option><option value="204">204cm</option><option value="205">205cm</option><option value="206">206cm</option><option value="207">207cm</option><option value="208">208cm</option><option value="209">209cm</option><option value="210">210cm</option><option value="211">211cm</option><option value="212">212cm</option><option value="213">213cm</option>								</select>
   
 
    </div></div>
  </div>
  <div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Weight

    			</label></div>
    			<div class="span7">
              <div class="controls">
                 <select name="weight" style="border: 2px solid #42b8b6;" class="selectpicker day">

									<option value="0">- Kgs -</option>
									<option value="41">41 kg</option><option value="42">42 kg</option><option value="43">43 kg</option><option value="44">44 kg</option><option value="45">45 kg</option><option value="46">46 kg</option><option value="47">47 kg</option><option value="48">48 kg</option><option value="49">49 kg</option><option value="50">50 kg</option><option value="51">51 kg</option><option value="52">52 kg</option><option value="53">53 kg</option><option value="54">54 kg</option><option value="55">55 kg</option><option value="56">56 kg</option><option value="57">57 kg</option><option value="58">58 kg</option><option value="59">59 kg</option><option value="60">60 kg</option><option value="61">61 kg</option><option value="62">62 kg</option><option value="63">63 kg</option><option value="64">64 kg</option><option value="65">65 kg</option><option value="66">66 kg</option><option value="67">67 kg</option><option value="68">68 kg</option><option value="69">69 kg</option><option value="70">70 kg</option><option value="71">71 kg</option><option value="72">72 kg</option><option value="73">73 kg</option><option value="74">74 kg</option><option value="75">75 kg</option><option value="76">76 kg</option><option value="77">77 kg</option><option value="78">78 kg</option><option value="79">79 kg</option><option value="80">80 kg</option><option value="81">81 kg</option><option value="82">82 kg</option><option value="83">83 kg</option><option value="84">84 kg</option><option value="85">85 kg</option><option value="86">86 kg</option><option value="87">87 kg</option><option value="88">88 kg</option><option value="89">89 kg</option><option value="90">90 kg</option><option value="91">91 kg</option><option value="92">92 kg</option><option value="93">93 kg</option><option value="94">94 kg</option><option value="95">95 kg</option><option value="96">96 kg</option><option value="97">97 kg</option><option value="98">98 kg</option><option value="99">99 kg</option><option value="100">100 kg</option><option value="101">101 kg</option><option value="102">102 kg</option><option value="103">103 kg</option><option value="104">104 kg</option><option value="105">105 kg</option><option value="106">106 kg</option><option value="107">107 kg</option><option value="108">108 kg</option><option value="109">109 kg</option><option value="110">110 kg</option><option value="111">111 kg</option><option value="112">112 kg</option><option value="113">113 kg</option><option value="114">114 kg</option><option value="115">115 kg</option><option value="116">116 kg</option><option value="117">117 kg</option><option value="118">118 kg</option><option value="119">119 kg</option><option value="120">120 kg</option><option value="121">121 kg</option><option value="122">122 kg</option><option value="123">123 kg</option><option value="124">124 kg</option><option value="125">125 kg</option><option value="126">126 kg</option><option value="127">127 kg</option><option value="128">128 kg</option><option value="129">129 kg</option><option value="130">130 kg</option><option value="131">131 kg</option><option value="132">132 kg</option><option value="133">133 kg</option><option value="134">134 kg</option><option value="135">135 kg</option><option value="136">136 kg</option><option value="137">137 kg</option><option value="138">138 kg</option><option value="139">139 kg</option><option value="140">140 kg</option>									</select>
   
    </div></div>
  </div>
  <div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Body Type

    			</label></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" required="required" name="body_type" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="slim"<?php echo set_radio('body_type', 'slim'); ?>>
  						Slim</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="body_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="average"<?php echo set_radio('body_type', 'average'); ?>>
  						Average</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="body_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="athletic"<?php echo set_radio('body_type', 'athletic'); ?>>
         Athletic</label>
         <label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="body_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="heavy"<?php echo set_radio('body_type', 'heavy'); ?>>
         Heavy</label>


    </div></div>
  </div>
  
  <div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Complexion
    			</label></div>
    			<div class="span9"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" name="complexion" required="required" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="Very Fair" <?php echo set_radio('complexion', 'Very Fair'); ?>>
  						Very Fair</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="complexion" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Fair" <?php echo set_radio('complexion', 'Fair'); ?>>
 						Fair</label>
                        <label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="complexion" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Weatish" <?php echo set_radio('complexion', 'Weatish'); ?>>
       Weatish </label>
         
         <label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="complexion" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Weatish Brown" <?php echo set_radio('complexion', 'Weatish Brown'); ?>>
         Weatish Brown
         
				  </label>


    </div></div>
  </div>
  </div>
  <div class="row-fluid personal_heading">
			
			<div class=" span10 personal_border">
				<div class="span1 personal1">
					<img src="<?php echo base_url();?>file/img/images/images/images/icon-2_11.jpg" />
				</div>
				<div class="span7 morepersonal">Education &amp; Occupation</div>
			</div>
        </div>
        <div class="row-fluid">
        
        
        <!--<div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">Collage Name </label></div>
    <div class="span7">
      <div class="controls">
        <input name="collage_name" type="text" class="input_feild" id="inputEmail" style="border: 2px solid #42b8b6;color:#000; font-weight:100; height: 30px;" value="<?php echo set_value('collage_name'); ?>" />
      </div></div>
  </div>-->
        
			<div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">Highest Education <span style="color:#F00; font-size:18px;">*</span></label></div>
    <div class="span7"><div class="controls">
    <select name="education" required="required" class="selectpicker select_select">
									<option value="">- Select -</option>								
									<?php foreach($education->result() as $row)
									{?>
                                    <option value="<?php echo $row->education_id?> "><?php echo $row->education_name;?></option>
									<?php }
									?>
								</select>
    
    </div></div>
  </div>
  
  <div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">Occupation <span style="color:#F00; font-size:18px;">*</span> </label></div>
    <div class="span7"><div class="controls">
 <select name="occupation" required="required" class="selectpicker select_select">
									<option value="">- Select -</option>
									<?php foreach($occupation->result() as $row1)
									{?>
                                    <option value="<?php echo $row1->occupation_id?> "><?php echo $row1->occupation_name;?></option>
									<?php }
									?></optgroup>								</select>
 
    </div></div>
  </div>
  <div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Monthly Income

    			</label></div>
    			<div class="span7">
              <div class="controls">
             <select name="inc_currency" style="border: 2px solid #42b8b6;" class="selectpicker day">
									<option value="0">Currency</option>
									<script language="javascript" type="text/javascript"> incomecurr [1] ="AFA"; incomecurr [2] ="ALL"; incomecurr [3] ="DZD"; incomecurr [4] ="USD"; incomecurr [5] ="EUR"; incomecurr [6] ="AON"; incomecurr [7] ="XCD"; incomecurr [8] ="XCD"; incomecurr [9] ="XCD"; incomecurr [10] ="ARS"; incomecurr [11] ="AMD"; incomecurr [12] ="AWG"; incomecurr [13] ="AUD"; incomecurr [14] ="EUR"; incomecurr [15] ="AZM"; incomecurr [16] ="BSD"; incomecurr [17] ="BHD"; incomecurr [18] ="BDT"; incomecurr [19] ="BBD"; incomecurr [20] ="BYB"; incomecurr [21] ="EUR"; incomecurr [22] ="BZD"; incomecurr [23] ="XOF"; incomecurr [24] ="BMD"; incomecurr [25] ="BTN"; incomecurr [26] ="BOB"; incomecurr [27] ="BAM"; incomecurr [28] ="BWP"; incomecurr [29] ="NOK"; incomecurr [30] ="BRL"; incomecurr [31] ="USD"; incomecurr [32] ="USD"; incomecurr [33] ="BND"; incomecurr [34] ="BGL"; incomecurr [35] ="XOF"; incomecurr [36] ="BIF"; incomecurr [37] ="KHR"; incomecurr [38] ="XAF"; incomecurr [39] ="CAD"; incomecurr [40] ="CVE"; incomecurr [41] ="KYD"; incomecurr [42] ="XAF"; incomecurr [43] ="XAF"; incomecurr [44] ="CLP"; incomecurr [45] ="CNY"; incomecurr [46] ="AUD"; incomecurr [47] ="AUD"; incomecurr [48] ="COP"; incomecurr [49] ="KMF"; incomecurr [50] ="XAF"; incomecurr [51] ="NZD"; incomecurr [52] ="CRC"; incomecurr [53] ="HRK"; incomecurr [54] ="CUP"; incomecurr [55] ="CYP"; incomecurr [56] ="CZK"; incomecurr [57] ="DKK"; incomecurr [58] ="DJF"; incomecurr [59] ="XCD"; incomecurr [60] ="DOP"; incomecurr [61] ="TPE"; incomecurr [62] ="ECS"; incomecurr [63] ="EGP"; incomecurr [64] ="SVC"; incomecurr [65] ="XAF"; incomecurr [66] ="ERN"; incomecurr [67] ="EEK"; incomecurr [68] ="ETB"; incomecurr [69] ="FKP"; incomecurr [70] ="DKK"; incomecurr [71] ="FJD"; incomecurr [72] ="EUR"; incomecurr [73] ="EUR"; incomecurr [74] ="EUR"; incomecurr [75] ="XPF"; incomecurr [76] ="EUR"; incomecurr [77] ="XAF"; incomecurr [78] ="GMD"; incomecurr [79] ="GEL"; incomecurr [80] ="EUR"; incomecurr [81] ="GHC"; incomecurr [82] ="GIP"; incomecurr [83] ="EUR"; incomecurr [84] ="DKK"; incomecurr [85] ="XCD"; incomecurr [86] ="EUR"; incomecurr [87] ="USD"; incomecurr [88] ="QTQ"; incomecurr [89] ="GNF"; incomecurr [90] ="GWP"; incomecurr [91] ="GYD"; incomecurr [92] ="HTG"; incomecurr [93] ="AUD"; incomecurr [94] ="HNL"; incomecurr [95] ="HKD"; incomecurr [96] ="HUF"; incomecurr [97] ="ISK"; incomecurr [98] ="Rs."; incomecurr [99] ="IDR"; incomecurr [100] ="IRR"; incomecurr [101] ="IQD"; incomecurr [102] ="EUR"; incomecurr [103] ="ILS"; incomecurr [104] ="EUR"; incomecurr [105] ="XOF"; incomecurr [106] ="JMD"; incomecurr [107] ="JPY"; incomecurr [108] ="JOD"; incomecurr [109] ="KZT"; incomecurr [110] ="KES"; incomecurr [111] ="AUD"; incomecurr [112] ="KPW"; incomecurr [113] ="KRW"; incomecurr [114] ="KWD"; incomecurr [115] ="KGS"; incomecurr [116] ="LAK"; incomecurr [117] ="LVL"; incomecurr [118] ="LBP"; incomecurr [119] ="LSL"; incomecurr [120] ="LRD"; incomecurr [121] ="LYD"; incomecurr [122] ="CHF"; incomecurr [123] ="LTL"; incomecurr [124] ="EUR"; incomecurr [125] ="MOP"; incomecurr [126] ="MKD"; incomecurr [127] ="MGF"; incomecurr [128] ="MWK"; incomecurr [129] ="MYR"; incomecurr [130] ="MVR"; incomecurr [131] ="XOF"; incomecurr [132] ="MTL"; incomecurr [133] ="USD"; incomecurr [134] ="EUR"; incomecurr [135] ="MRO"; incomecurr [136] ="MUR"; incomecurr [137] ="EUR"; incomecurr [138] ="MXN"; incomecurr [139] ="USD"; incomecurr [140] ="MDL"; incomecurr [141] ="EUR"; incomecurr [142] ="MNT"; incomecurr [143] ="XCD"; incomecurr [144] ="MAD"; incomecurr [145] ="MZM"; incomecurr [146] ="MMK"; incomecurr [147] ="NAD"; incomecurr [148] ="AUD"; incomecurr [149] ="NPR"; incomecurr [150] ="EUR"; incomecurr [151] ="ANG"; incomecurr [152] ="XPF"; incomecurr [153] ="NZD"; incomecurr [154] ="NIC"; incomecurr [155] ="XOF"; incomecurr [156] ="NGN"; incomecurr [157] ="NZD"; incomecurr [158] ="AUD"; incomecurr [159] ="USD"; incomecurr [160] ="NOK"; incomecurr [161] ="OMR"; incomecurr [162] ="PKR"; incomecurr [163] ="USD"; incomecurr [164] ="PAB"; incomecurr [165] ="PGK"; incomecurr [166] ="PYG"; incomecurr [167] ="PEN"; incomecurr [168] ="PHP"; incomecurr [169] ="NZD"; incomecurr [170] ="PLZ"; incomecurr [171] ="EUR"; incomecurr [172] ="USD"; incomecurr [173] ="QAR"; incomecurr [174] ="EUR"; incomecurr [175] ="ROL"; incomecurr [176] ="RUR"; incomecurr [177] ="RWF"; incomecurr [178] ="GBP"; incomecurr [179] ="XCD"; incomecurr [180] ="XCD"; incomecurr [181] ="XCD"; incomecurr [182] ="WST"; incomecurr [183] ="ITL"; incomecurr [184] ="STD"; incomecurr [185] ="SAR"; incomecurr [186] ="XOF"; incomecurr [187] ="SCR"; incomecurr [188] ="SLL"; incomecurr [189] ="SGD"; incomecurr [190] ="SKK"; incomecurr [191] ="SIT"; incomecurr [192] ="SOD"; incomecurr [193] ="ZAR"; incomecurr [194] ="EUR"; incomecurr [195] ="LKR"; incomecurr [196] ="SHP"; incomecurr [197] ="EUR"; incomecurr [198] ="SDD"; incomecurr [199] ="SRG"; incomecurr [200] ="NOK"; incomecurr [201] ="SZL"; incomecurr [202] ="SEK"; incomecurr [203] ="CHF"; incomecurr [204] ="SYP"; incomecurr [205] ="TWD"; incomecurr [206] ="TJR"; incomecurr [207] ="TZS"; incomecurr [208] ="THB"; incomecurr [209] ="XOF"; incomecurr [210] ="NZD"; incomecurr [211] ="TOP"; incomecurr [212] ="TTD"; incomecurr [213] ="TND"; incomecurr [214] ="TRL"; incomecurr [215] ="TMM"; incomecurr [216] ="USD"; incomecurr [217] ="AUD"; incomecurr [218] ="UGS"; incomecurr [219] ="UAG"; incomecurr [220] ="AED"; incomecurr [221] ="GBP"; incomecurr [222] ="USD"; incomecurr [223] ="UYP"; incomecurr [224] ="UZS"; incomecurr [225] ="VUV"; incomecurr [226] ="EUR"; incomecurr [227] ="VUB"; incomecurr [228] ="VND"; incomecurr [229] ="USD"; incomecurr [230] ="XPF"; incomecurr [231] ="MAD"; incomecurr [232] ="YER"; incomecurr [233] ="YUN"; incomecurr [234] ="CDF"; incomecurr [235] ="ZMK"; incomecurr [236] ="ZWD"; incomecurr [237] ="XAF";
                                    </script><option value="98" style="color: rgb(0, 79, 0);">INR.</option>									<option value="222" style="color: rgb(0, 79, 0);">USD</option>									<option value="220" style="color: rgb(0, 79, 0);">AED</option>									<option value="221" style="color: rgb(0, 79, 0);">GBP</option>									<option value="13" style="color: rgb(0, 79, 0);">AUD</option>									<option value="189" style="color: rgb(0, 79, 0);">SGD</option>									<option value="39" style="color: rgb(0, 79, 0);">CAD</option>									<option value="173" style="color: rgb(0, 79, 0);">QAR</option>									<option value="114" style="color: rgb(0, 79, 0);">KWD</option>									<option value="161" style="color: rgb(0, 79, 0);">OMR</option>									<option value="17" style="color: rgb(0, 79, 0);">BHD</option>									<option value="185" style="color: rgb(0, 79, 0);">SAR</option>									<option value="129" style="color: rgb(0, 79, 0);">MYR</option>									<option value="80" style="color: rgb(0, 79, 0);">EUR</option>									<option value="153" style="color: rgb(0, 79, 0);">NZD</option>									<option value="73" style="color: rgb(0, 79, 0);">EUR</option>									<option value="102" style="color: rgb(0, 79, 0);">EUR</option>									<option value="203" style="color: rgb(0, 79, 0);">CHF</option>									<option value="193" style="color: rgb(0, 79, 0);">ZAR</option>									<option value="195" style="color: rgb(0, 79, 0);">LKR</option>									<option value="99" style="color: rgb(0, 79, 0);">IDR</option>									<option value="149" style="color: rgb(0, 79, 0);">NPR</option>									<option value="162" style="color: rgb(0, 79, 0);">PKR</option>									<option value="18" style="color: rgb(0, 79, 0);">BDT</option>									<option value="1" style="color: rgb(0, 79, 0);">AFA</option>																		
									</select>
  &nbsp;<input type="text" style="border: 2px solid #42b8b6;
color: #000;
font-weight: 100; width: 90px;   class="input_feild day" name="income" id="inputEmail" value="<?php echo set_value('income'); ?>">
    </div></div>
  </div>
  
  <div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Employed In<span style="color:#F00; font-size:18px;">*</span>

		</label></div>
    			<div class="span6"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" required="required" name="employed_type" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="Government" <?php echo set_radio('employed_type', 'Government'); ?>>
  						Government</label>
					  <label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="employed_type" id="inlineRadio2" style="margin-left:30px; margin-right:5px;" class="radio1" value="Private" <?php echo set_radio('employed_type', 'Private'); ?>>Private</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="employed_type" id="inlineRadio2" style="margin-left:35px; margin-right:5px;" class="radio1" value="Business" <?php echo set_radio('employed_type', 'Business'); ?>>
         Business</label>
        <label class="radio-inline gender_floatleft labelpadding"> <input type="radio" name="employed_type" id="inlineRadio2" style=" margin-right:5px;" class="radio1" value="Defence"<?php echo set_radio('employed_type', 'Defence'); ?>>
         Defence</label>
         <label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="employed_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Self Employed" <?php echo set_radio('employed_type', 'Self Employed'); ?>>
         Self Employed
       </label>


    </div></div>
  </div>
  
  </div>
  <div class="row-fluid personal_heading">
			<div class=" span10 personal_border">
				<div class="span1 personal1">
					<img src="<?php echo base_url();?>file/img/images/images/images/icon-2_11.jpg" />
				</div>
				<div class="span7 morepersonal">Habits</div>
			</div>
        </div>
        	<div class="row-fluid">
        
			<div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Food

    			</label></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" name="food" required="required" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="Vegitarian" <?php echo set_radio('food', 'Vegitarian'); ?>>
  						Vegitarian</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="food" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1"  value="Non" <?php echo set_radio('food', 'Non'); ?>>
 						Non</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="food" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Eggetarian" <?php echo set_radio('food', 'Eggetarian'); ?>>
         Eggetarian</label>


    </div></div>
  </div>
  <div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Smoking

    			</label></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" required="required" name="smoking" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="no" <?php echo set_radio('smoking', 'no'); ?>>
  						No</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="smoking" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="occassionaly" <?php echo set_radio('smoking', 'occassionaly'); ?>>
 						Occassionaly</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="smoking" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="yes"<?php echo set_radio('smoking', 'yes'); ?>>
         Yes</label>


    </div></div>
  </div>
  <div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Drinking
:
		</label></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" required="required" name="drinking" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="no" <?php echo set_radio('drinking', 'no'); ?>>No</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="drinking" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="occationally" <?php echo set_radio('drinking', 'occationally'); ?>>Occationally</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="drinking" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="yes" <?php echo set_radio('drinking', 'yes'); ?>>
         Yes
					</label>


    </div></div>
  </div>
  </div>
    <div class="row-fluid personal_heading">
			<div class=" span10 personal_border">
				<div class="span1 personal1">
					<img src="<?php echo base_url();?>file/img/images/images/images/icon-2_11.jpg" />
				</div>
				<div class="span7 morepersonal">
				  Astrological Info
				</div>
			</div>
        </div>
        	<div class="row-fluid">
        
			<div class="control-group personal_control">
        
    			<div class="span3"><label class="control-label gender_floatleft labelpadding" for="inputEmail">Shudha Jadakam<br />
    			</label></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" required="required" name="sudha_jadakam" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="yes"  <?php echo set_radio('sudha_jadakam', 'yes'); ?>>
  						Yes</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="sudha_jadakam" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="no"  <?php echo set_radio('sudha_jadakam', 'no'); ?>>
 						No</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="sudha_jadakam" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Don't Know"  <?php echo set_radio('sudha_jadakam', "Don't Know"); ?>>
         Don't Know
					</label>


    </div></div>
  </div>
  <div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">Star</label></div>
    <div class="span7"><div class="controls">

  <select name="star"  class="selectpicker select_select">
											<option value="0" selected="selected">- Optional -</option>
											<option style="" value="1">Aswathi</option><option style="" value="2">Bharani</option><option style="" value="3">Krithiga</option><option style="" value="4">Rohini</option><option style="" value="5">Makayiram</option><option style="" value="6">Thiruvathira</option><option style="" value="7">Punartham</option><option style="" value="8">Pooyam</option><option style="" value="9">Ayilyam</option><option style="" value="10">Magam</option><option style="" value="11">Pooram</option><option style="" value="12">Uthram</option><option style="" value="13">Atham</option><option style="" value="14">Chithira</option><option style="" value="15">Chothi</option><option style="" value="16">Visakham</option><option style="" value="17">Anizham</option><option style="" value="18">Ketta</option><option style="" value="19">Moolam</option><option style="" value="20">Pooradam</option><option style="" value="21">Uthiradam</option><option style="" value="22">Thiruvonam</option><option style="" value="23">Avittam</option><option style="" value="24">Chadayam</option><option style="" value="25">Pooruttathi</option><option style="" value="26">Uthirattathi</option><option style="" value="27">Revathi</option>										</select>
    </div></div>
  </div>
  <div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">Rashi/Moon Sign :</label></div>
    <div class="span7"><div class="controls">
 
    <input type="text" style="border: 2px solid #42b8b6;color:#000;  font-weight:100" class="input_feild" name="rashi" id="inputEmail" value="<?php echo set_value('rashi'); ?>">
    </div></div>
  </div>
  </div>
  
  <div class="row-fluid personal_heading">
			<div class=" span10 personal_border">
				<div class="span1 personal1">
					<img src="<?php echo base_url();?>file/img/images/images/images/icon-2_11.jpg" />
				</div>
				<div class="span7 morepersonal">
					Family Profile
				</div>
			</div>
        </div>
        	<div class="row-fluid">
        
			<div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Family Status<span style="color:#F00; font-size:18px;">*</span>
    			</label></div>
    			<div class="span9"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" required="required" name="family_statas" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="Middle class" <?php echo set_radio('family_statas', 'Middle class'); ?>>Middle Class</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="family_statas" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="upper class" <?php echo set_radio('family_statas', 'upper class'); ?>>Upper Class</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="family_statas" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="rich" <?php echo set_radio('family_statas', 'rich'); ?>>
         Rich</label>
         <label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="family_status" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="affluent" <?php echo set_radio('family_statas', 'affluent'); ?>>
         Affluent
					</label>


    </div></div>
  </div>
  <div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">Father occupation:</label></div>
    <div class="span7"><div class="controls">
 
    <input type="text" style="border: 2px solid #42b8b6;color:#000; font-weight:100" class="input_feild" name="f_occupation" id="inputEmail"value="<?php echo set_value('f_occupation'); ?>" >
    </div></div>
  </div>
  <div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">Mother occupation :</label></div>
    <div class="span7"><div class="controls">
 
    <input type="text" style="border: 2px solid #42b8b6;color:#000;  font-weight:100" class="input_feild" name="m_occupation" id="inputEmail" value="<?php echo set_value('m_occupation'); ?>">
    </div></div>
  </div>
  
  <script src="http://code.jquery.com/jquery-1.10.1.js"></script>

  


<script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(function(){
    $('#ddlMaxExp').change(function(){
       var selectedMaxValue = Number($(this).val());
       var selectedMinValue = Number($('#ddlMinExp').val());
        
       if( selectedMaxValue > 0  && selectedMinValue < selectedMaxValue) {
           alert('select option brother and brothers married does not exist');
           $(this).find('option:first').attr('selected', 'selected');
       }
       else if( selectedMaxValue > 0 && selectedMinValue === 0) {
           alert('Please select no.of brother option first');
           $(this).find('option:first').attr('selected', 'selected');
       }       
       
    });
})
});//]]>  
</script>

<script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(function(){
    $('#sisterm').change(function(){
       var selectedMaxValue = Number($(this).val());
       var selectedMinValue = Number($('#sister').val());
        
       if( selectedMaxValue > 0  && selectedMinValue < selectedMaxValue) {
           alert('select option sister and sisters married does not exist');
           $(this).find('option:first').attr('selected', 'selected');
       }
       else if( selectedMaxValue > 0 && selectedMinValue === 0) {
           alert('Please select no.of sister option first');
           $(this).find('option:first').attr('selected', 'selected');
       }       
       
    });
})
});//]]>  
</script>
  

  <div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">No.Brothers</label>
    </div>
    <div class="span7">
    	<div class="controls">
			<select id="ddlMinExp" name="no_brothers" class="selectpicker select_select">
  				<option value="0">- Optional -</option>
  				<option value="1">1</option>
  				<option value="2">2</option>
  				<option value="3">3</option>
  				<option value="4">4</option>
  				<option value="5">5+</option>
			</select>
    	</div>
    </div>
  </div>
  <div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">No.of Sisters</label>
    </div>
    <div class="span7">
    	<div class="controls">
            <select id="sister" name="no_brothers" class="selectpicker select_select">
  				<option value="0">- Optional -</option>
  				<option value="1">1</option>
  				<option value="2">2</option>
  				<option value="3">3</option>
  				<option value="4">4</option>
  				<option value="5">5+</option>
			</select>
    	</div>
    </div>
  </div>
  <div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">No.of Brothers married</label>
    </div>
    <div class="span7">
    	<div class="controls">
			<select id="ddlMaxExp" name="b_married" class="selectpicker select_select">
  				<option value="0">-option-</option>
				<option style="" value="1">1</option>
                <option style="" value="2">2</option>
                <option style="" value="3">3</option>
                <option style="" value="4">4</option>
                <option style="" value="5">5+</option>
			</select>
    	</div>
     </div>
  </div>
  <div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">No.of Sister married</label>
    </div>
    <div class="span7">
    	<div class="controls">
        	<select id="sisterm" name="b_married" class="selectpicker select_select">
  				<option value="0">-option-</option>
				<option style="" value="1">1</option>
                <option style="" value="2">2</option>
                <option style="" value="3">3</option>
                <option style="" value="4">4</option>
                <option style="" value="5">5+</option>
			</select>

    	</div>
     </div>
  </div>
  <div class="control-group personal_control">
        
    			<div class="span3"><label class="control-label gender_floatleft labelpadding" for="inputEmail">Family Type<span style="color:#F00; font-size:18px;">*</span>
    			</label></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" required="required" name="family_type" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="joint" <?php echo set_radio('family_type', 'joint'); ?>>Joint</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="family_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="nuclear" <?php echo set_radio('family_type', 'nuclear'); ?>>Nuclear</label>
  						
					</label>


    </div></div>
  </div>
  <div class="control-group personal_control">
        
    			<div class="span3"><label class="control-label gender_floatleft labelpadding" for="inputEmail">Family Value
    			</label><span style="color:#F00; font-size:18px;">*</span></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" required="required" name="family_value"  style=" margin-right:5px;" class="radio1" value="orthodex" <?php echo set_radio('family_value', 'orthodex'); ?>>Orthodex</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="family_value"  style="margin-left:10px; margin-right:5px;" class="radio1" value="traditional" <?php echo set_radio('family_value', 'traditional'); ?>>Traditional</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="family_value"  style="margin-left:10px; margin-right:5px;" class="radio1" value="moderate" <?php echo set_radio('family_value', 'moderate'); ?>>
         Moderate</label>
        <label class="radio-inline gender_floatleft labelpadding"> <input type="radio" name="family_value"  style="margin-left:10px; margin-right:5px;" class="radio1" value="Liberal" <?php echo set_radio('family_value', 'Liberal'); ?>>
         Liberal
					</label>


    </div></div>
  </div>
  </div>
  <div class="row-fluid personal_heading">
			<div class=" span10 personal_border">
				<div class="span1 personal1">
					<img src="<?php echo base_url();?>file/img/images/images/images/icon-2_11.jpg" />
				</div>
				<div class="span7 morepersonal">
					Something About You
				</div>
			</div>
        </div>
         <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  
  
  



<script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(function() {
	
    $("textarea").change(function() {
        $(this).val( function(idx, val) {
			
            return val.replace(/\b(\w)+\@(\w)+\.(\w)+\b/g, "");
				
             
            
        });
		$(this).val( function(idx, val) {
			
       
			return val.replace(/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/, "");
			
             
            
        });
		
    });
});
});//]]>  


</script>

        <div class="row-fluid">
        
			<div class="control-group personal_control">
        
    			<div class="span9"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<textarea required="required" name="about_us" style="color:#000; font-weight:100" class="comm"><?php echo set_value('about_us'); ?></textarea>
					</label>


    </div></div>
  </div>
  
  <div class="control-group">
    <div class="span9">
    <div class="span4"></div><div class="controls">
    
     <button type="submit" class="btn">Register</button>
    </div></div>
  </div>
  </div>
  </div>
</form>

<div class="span5">
	<div class="row-fluid left1" style="margin-top:75px;">
    
    	<div class="span12 morepersonal1">
					
				</div>
                
        </div>
        <div class="row-fluid left">
        <div class="row-fluid left1" style="margin-bottom:25px;">
    
    	<img src="<?php echo base_url() ?>file/img/offer/offer5.jpg" />
                
        </div>
        <div class="row-fluid left1" style="margin-bottom:25px;">
    
    	<img src="<?php echo base_url() ?>file/img/offer/offer4.jpg" />
                
        </div>
        <div class="row-fluid left1" style="margin-bottom:25px;">
    
    	<img src="<?php echo base_url() ?>file/img/offer/offer5.jpg" />
                
        </div>
        <div class="row-fluid left1" style="margin-bottom:25px;">
    
    	<img src="<?php echo base_url() ?>file/img/offer/offer4.jpg" />
                
        </div>
        <div class="row-fluid left1" style="margin-bottom:25px;">
    
    	<img src="<?php echo base_url() ?>file/img/offer/offer5.jpg" />
                
        </div>
    
    	<div class="span12 morepersonal1">
					
				</div>
                
        </div>
	</div>
</div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>file/js/countries.js"></script>
<script language="javascript">print_country("country");</script>
<?php $this->load->view('footer'); ?>