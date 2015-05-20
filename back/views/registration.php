<?php $this->load->view('profile_header');?>
<div class="container container_pading">
<form  action="<?php echo base_url();?>index.php/insert_complete_reg"  method="post">
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
        
    			<div class="span3"><label class="control-label gender_floatleft labelpadding" for="inputEmail">Marital Status
:
    			</label></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" name="merital_status" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="nevar maried">Never Maried
 						<input type="radio" name="merital_status" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="window">Widow
  						<input type="radio" name="merital_status" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="divorced">
         Divorced
					</label>


    </div></div>
  </div>
  
  <div class="control-group personal_control ">
     <div class="span3"><label class="control-label gender_floatleft" for="inputEmail">Sub Caste :</label></div>
    <div class="span7"><div class="controls">
<input type="hidden" style=" border: 2px solid #991248;color:#000; font-weight:100" class="input_feild" name="email" value="<?php echo $email; ?>" id="inputEmail">
  <input type="hidden" style=" border: 2px solid #991248;color:#000; font-weight:100" class="input_feild" name="user_id" value="<?php echo $user_id; ?>" id="inputEmail">
      <input type="text" style=" border: 2px solid #991248;color:#000; font-weight:100" class="input_feild" name="sub_cast" id="inputEmail">    </div></div>
  </div>
 <div class="control-group personal_control">
     <div class="span3"><label class="control-label gender_floatleft" for="inputEmail">Gothram :</label></div>
    <div class="span7"><div class="controls">
      <input type="text" style="border: 2px solid #991248;color:#000; font-weight:100" class="input_feild" name="gothram" id="inputEmail">    </div></div>
  </div>
  <div class="control-group personal_control">
    <div class="span3"><label class="control-label gender_floatleft" for="inputEmail">Country Living In :</label></div>
    <div class="span7"><div class="controls">
 <select onchange="print_state('state',this.selectedIndex);" class="selectpicker select_select" id="country" name ="country">
 </select>
 
    </div></div>
  </div>
  <div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">Residing State :</label></div>
    <div class="span7"><div class="controls">
 <select name ="state" class="selectpicker select_select" id ="state"></select>

    </div></div>
  </div>
  <div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">Residing City:</label></div>
    <div class="span7"><div class="controls">
 
  <input type="text" style=" border: 2px solid #991248;color:#000; font-weight:100" class="input_feild" name="city" id="inputEmail">
    </div></div>
  </div>
		</div>
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
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Height
:
    			</label></div>
    			<div class="span7">
              <div class="controls">
               <select name="height" class="selectpicker day">
									<option value="0">- Cms -</option>
									<option value="137">137cm</option><option value="138">138cm</option><option value="139">139cm</option><option value="140">140cm</option><option value="141">141cm</option><option value="142">142cm</option><option value="143">143cm</option><option value="144">144cm</option><option value="145">145cm</option><option value="146">146cm</option><option value="147">147cm</option><option value="148">148cm</option><option value="149">149cm</option><option value="150">150cm</option><option value="151">151cm</option><option value="152">152cm</option><option value="153">153cm</option><option value="154">154cm</option><option value="155">155cm</option><option value="156">156cm</option><option value="157">157cm</option><option value="158">158cm</option><option value="159">159cm</option><option value="160">160cm</option><option value="161">161cm</option><option value="162">162cm</option><option value="163">163cm</option><option value="164">164cm</option><option value="165">165cm</option><option value="166">166cm</option><option value="167">167cm</option><option value="168">168cm</option><option value="169">169cm</option><option value="170">170cm</option><option value="171">171cm</option><option value="172">172cm</option><option value="173">173cm</option><option value="174">174cm</option><option value="175">175cm</option><option value="176">176cm</option><option value="177">177cm</option><option value="178">178cm</option><option value="179">179cm</option><option value="180">180cm</option><option value="181">181cm</option><option value="182">182cm</option><option value="183">183cm</option><option value="184">184cm</option><option value="185">185cm</option><option value="186">186cm</option><option value="187">187cm</option><option value="188">188cm</option><option value="189">189cm</option><option value="190">190cm</option><option value="191">191cm</option><option value="192">192cm</option><option value="193">193cm</option><option value="194">194cm</option><option value="195">195cm</option><option value="196">196cm</option><option value="197">197cm</option><option value="198">198cm</option><option value="199">199cm</option><option value="200">200cm</option><option value="201">201cm</option><option value="202">202cm</option><option value="203">203cm</option><option value="204">204cm</option><option value="205">205cm</option><option value="206">206cm</option><option value="207">207cm</option><option value="208">208cm</option><option value="209">209cm</option><option value="210">210cm</option><option value="211">211cm</option><option value="212">212cm</option><option value="213">213cm</option>								</select>
   
 
    </div></div>
  </div>
  <div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Weight
:
    			</label></div>
    			<div class="span7">
              <div class="controls">
                 <select name="weight" class="selectpicker day">

									<option value="0">- Kgs -</option>
									<option value="41">41 kg</option><option value="42">42 kg</option><option value="43">43 kg</option><option value="44">44 kg</option><option value="45">45 kg</option><option value="46">46 kg</option><option value="47">47 kg</option><option value="48">48 kg</option><option value="49">49 kg</option><option value="50">50 kg</option><option value="51">51 kg</option><option value="52">52 kg</option><option value="53">53 kg</option><option value="54">54 kg</option><option value="55">55 kg</option><option value="56">56 kg</option><option value="57">57 kg</option><option value="58">58 kg</option><option value="59">59 kg</option><option value="60">60 kg</option><option value="61">61 kg</option><option value="62">62 kg</option><option value="63">63 kg</option><option value="64">64 kg</option><option value="65">65 kg</option><option value="66">66 kg</option><option value="67">67 kg</option><option value="68">68 kg</option><option value="69">69 kg</option><option value="70">70 kg</option><option value="71">71 kg</option><option value="72">72 kg</option><option value="73">73 kg</option><option value="74">74 kg</option><option value="75">75 kg</option><option value="76">76 kg</option><option value="77">77 kg</option><option value="78">78 kg</option><option value="79">79 kg</option><option value="80">80 kg</option><option value="81">81 kg</option><option value="82">82 kg</option><option value="83">83 kg</option><option value="84">84 kg</option><option value="85">85 kg</option><option value="86">86 kg</option><option value="87">87 kg</option><option value="88">88 kg</option><option value="89">89 kg</option><option value="90">90 kg</option><option value="91">91 kg</option><option value="92">92 kg</option><option value="93">93 kg</option><option value="94">94 kg</option><option value="95">95 kg</option><option value="96">96 kg</option><option value="97">97 kg</option><option value="98">98 kg</option><option value="99">99 kg</option><option value="100">100 kg</option><option value="101">101 kg</option><option value="102">102 kg</option><option value="103">103 kg</option><option value="104">104 kg</option><option value="105">105 kg</option><option value="106">106 kg</option><option value="107">107 kg</option><option value="108">108 kg</option><option value="109">109 kg</option><option value="110">110 kg</option><option value="111">111 kg</option><option value="112">112 kg</option><option value="113">113 kg</option><option value="114">114 kg</option><option value="115">115 kg</option><option value="116">116 kg</option><option value="117">117 kg</option><option value="118">118 kg</option><option value="119">119 kg</option><option value="120">120 kg</option><option value="121">121 kg</option><option value="122">122 kg</option><option value="123">123 kg</option><option value="124">124 kg</option><option value="125">125 kg</option><option value="126">126 kg</option><option value="127">127 kg</option><option value="128">128 kg</option><option value="129">129 kg</option><option value="130">130 kg</option><option value="131">131 kg</option><option value="132">132 kg</option><option value="133">133 kg</option><option value="134">134 kg</option><option value="135">135 kg</option><option value="136">136 kg</option><option value="137">137 kg</option><option value="138">138 kg</option><option value="139">139 kg</option><option value="140">140 kg</option>									</select>
   
    </div></div>
  </div>
  <div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Body Type
:
    			</label></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" name="body_type" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="slim">
  						Slim</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="body_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="average">
  						Average</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="body_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="athletic">
         Athletic</label>
         <label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="body_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="heavy">
         Heavy</label>


    </div></div>
  </div>
  
  <div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Complexion:
    			</label></div>
    			<div class="span9"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" name="complexion" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="Very Fair">
  						Very Fair</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="complexion" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Fair">
 						Fair</label>
                        <label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="complexion" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Weatish">
       Weatish </label>
         
         <label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="complexion" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Weatish Brown">
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
        
			<div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">Heighest Education :</label></div>
    <div class="span7"><div class="controls">
    <select name="education" class="selectpicker select_select">
									<option value="0">- Select -</option>								
									<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Engineering / Computers --">
<option value="6">Aeronautical Engineering</option>
<option value="8">B.Arch</option>
<option value="5">BCA</option>
<option value="49">BE</option>
<option value="9">B.Plan</option>
<option value="95">B.Sc IT/ Computer Science</option>
<option value="50">B.Tech.</option>
<option value="83">Other Bachelor Degree in Engineering / Computers</option>
</optgroup>
<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Engineering / Computers --">
<option value="7">M.Arch.</option>
<option value="51">MCA</option>
<option value="53">ME</option>
<option value="55">M.Sc. IT / Computer Science</option>
<option value="3">M.S.(Engg.)</option>
<option value="54">M.Tech.</option>
<option value="52">PGDCA</option>
<option value="84">Other Masters Degree in Engineering / Computers</option>
</optgroup>
<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Arts / Science / Commerce --">
<option value="43">Aviation Degree</option>
<option value="18">B.A.</option>
<option value="16">B.Com.</option>
<option value="39">B.Ed.</option>
<option value="56">BFA</option>
<option value="66">BFT</option>
<option value="57">BLIS</option>
<option value="59">B.M.M.</option>
<option value="17">B.Sc.</option>
<option value="58">B.S.W</option>
<option value="15">B.Phil.</option>
<option value="85">Other Bachelor Degree in Arts / Science / Commerce</option>
</optgroup>
<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Arts / Science / Commerce --">
<option value="13">M.A.</option>
<option value="11">MCom</option>
<option value="38">M.Ed.</option>
<option value="98">MFA</option>
<option value="60">MLIS</option>
<option value="12">M.Sc.</option>
<option value="63">MSW</option>
<option value="10">M.Phil.</option>
<option value="86">Other Master Degree in Arts / Science / Commerce</option>
</optgroup>
<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Management --">
<option value="35">BBA</option>
<option value="65">BFM (Financial Management)</option>
<option value="19">BHM (Hotel Management)</option>
<option value="87">Other Bachelor Degree in Management</option>
</optgroup>
<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Management --">
<option value="61">MBA</option>
<option value="76">MFM (Financial Management)</option>
<option value="14">MHM  (Hotel Management)</option>
<option value="64">MHRM (Human Resource Management)</option>
<option value="62">PGDM</option>
<option value="96">Other Master Degree in Management</option>
</optgroup>
<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Medicine in General / Dental / Surgeon --">
<option value="29">B.A.M.S.</option>
<option value="25">BDS</option>
<option value="28">BHMS</option>
<option value="68">BSMS</option>
<option value="31">BPharm</option>
<option value="27">BPT</option>
<option value="69">BUMS</option>
<option value="26">BVSc</option>
<option value="21">MBBS</option>
<option value="101">B.Sc. Nursing</option>
<option value="88">Other Bachelor Degree in Medicine</option>
</optgroup>
<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Medicine - General / Dental / Surgeon --">
<option value="22">MDS</option>
<option value="20">MD / MS (Medical)</option>
<option value="30">M.Pharm</option>
<option value="24">MPT</option>
<option value="23">MVSc</option>
<option value="97">Other Master Degree in Medicine</option>
</optgroup>
<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Legal --">
<option value="72">BGL</option>
<option value="73">B.L.</option>
<option value="74">LL.B.</option>
<option value="90">Other Bachelor Degree in Legal</option>
</optgroup>
<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Legal --">
<option value="71">LL.M.</option>
<option value="70">M.L.</option>
<option value="89">Other Master Degree in  Legal</option>
</optgroup>
<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Financial Qualification - ICWAI / CA / CS/ CFA --">
<option value="36">CA</option>
<option value="75">CFA (Chartered Financial Analyst)</option>
<option value="48">CS</option>
<option value="37">ICWA</option>
<option value="91">Other Degree in Finance</option>
</optgroup>
<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Service - IAS / IPS / IRS / IES / IFS  --">
<option value="77">IAS</option>
<option value="80">IES</option>
<option value="81">IFS</option>
<option value="79">IRS</option>
<option value="78">IPS</option>
<option value="92">Other Degree in Service</option>
</optgroup>
<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Ph.D. --">
<option value="33">Ph.D.</option>
</optgroup>
<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Any Diploma --">
<option value="46">Diploma</option>
<option value="82">Polytechnic</option>
<option value="45">Trade School</option>
<option value="94">Others in Diploma</option>
</optgroup>
<optgroup class="a" label="&nbsp;&nbsp;&nbsp;&nbsp;-- Higher Secondary / Secondary --">
<option value="47">Higher Secondary School / High School</option>
</optgroup>
								</select>
    
    </div></div>
  </div>
  <div class="control-group personal_control">
    <div class="span3">
      <label class="control-label gender_floatleft" for="inputEmail">Occupation :</label></div>
    <div class="span7"><div class="controls">
 <select name="occupation" class="selectpicker select_select">
									<option value="0">- Select -</option>
									<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ADMIN --" class="a"><option value="49">Manager</option><option value="48">Supervisor</option><option value="47">Officer</option><option value="39">Administrative Professional</option><option value="50">Executive</option><option value="46">Clerk</option><option value="63">Human Resources Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AGRICULTURE --" class="a"><option value="37">Agriculture &amp; Farming Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AIRLINE --" class="a"><option value="30">Pilot</option><option value="28">Air Hostess</option><option value="29">Airline Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ARCHITECT &amp; DESIGN --" class="a"><option value="19">Architect</option><option value="20">Interior Designer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BANKING &amp; FINANCE --" class="a"><option value="7">Chartered Accountant</option><option value="10">Company Secretary</option><option value="8">Accounts/Finance Professional</option><option value="16">Banking Service Professional</option><option value="9">Auditor</option><option value="69">Financial Accountant</option><option value="64">Financial Analyst / Planning</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BEAUTY &amp; FASHION --" class="a"><option value="25">Fashion Designer</option><option value="33">Beautician</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- CIVIL SERVICES --" class="a"><option value="52">Civil Services (IAS/IPS/IRS/IES/IFS)</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- DEFENCE --" class="a"><option value="53">Army</option><option value="54">Navy</option><option value="55">Airforce</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- EDUCATION --" class="a"><option value="5">Professor / Lecturer</option><option value="4">Teaching / Academician</option><option value="6">Education Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- HOSPITALITY --" class="a"><option value="34">Hotel / Hospitality Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- IT &amp; ENGINEERING --" class="a"><option value="1">Software Professional</option><option value="2">Hardware Professional</option><option value="3">Engineer - Non IT</option><option value="65">Designer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LEGAL --" class="a"><option value="17">Lawyer &amp; Legal Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LAW ENFORCEMENT --" class="a"><option value="18">Law Enforcement Officer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDICAL --" class="a"><option value="12">Doctor</option><option value="14">Health Care Professional</option><option value="15">Paramedical Professional</option><option value="13">Nurse</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MARKETING &amp; SALES --" class="a"><option value="42">Marketing Professional</option><option value="43">Sales Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDIA &amp; ENTERTAINMENT --" class="a"><option value="27">Journalist</option><option value="22">Media Professional</option><option value="24">Entertainment Professional</option><option value="26">Event Management Professional</option><option value="21">Advertising / PR Professional</option><option value="66">Designer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MERCHANT NAVY --" class="a"><option value="32">Mariner / Merchant Navy</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- SCIENTIST --" class="a"><option value="35">Scientist / Researcher</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- TOP MANAGEMENT --" class="a"><option value="41">CXO / President, Director, Chairman</option><option value="70">Business Analyst</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- OTHERS --" class="a"><option value="45">Consultant</option><option value="40">Customer Care Professional</option><option value="36">Social Worker</option><option value="51">Sportsman</option><option value="44">Technician</option><option value="38">Arts &amp; Craftsman</option><option value="67">Student</option><option value="68">Librarian</option><option value="888">Not Working</option></optgroup>								</select>
 
    </div></div>
  </div>
  <div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Monthly Income
:
    			</label></div>
    			<div class="span7">
              <div class="controls">
             <select name="inc_currency" class="selectpicker day">
									<option value="0">- Select Currency -</option>
									<script language="javascript" type="text/javascript"> incomecurr [1] ="AFA"; incomecurr [2] ="ALL"; incomecurr [3] ="DZD"; incomecurr [4] ="USD"; incomecurr [5] ="EUR"; incomecurr [6] ="AON"; incomecurr [7] ="XCD"; incomecurr [8] ="XCD"; incomecurr [9] ="XCD"; incomecurr [10] ="ARS"; incomecurr [11] ="AMD"; incomecurr [12] ="AWG"; incomecurr [13] ="AUD"; incomecurr [14] ="EUR"; incomecurr [15] ="AZM"; incomecurr [16] ="BSD"; incomecurr [17] ="BHD"; incomecurr [18] ="BDT"; incomecurr [19] ="BBD"; incomecurr [20] ="BYB"; incomecurr [21] ="EUR"; incomecurr [22] ="BZD"; incomecurr [23] ="XOF"; incomecurr [24] ="BMD"; incomecurr [25] ="BTN"; incomecurr [26] ="BOB"; incomecurr [27] ="BAM"; incomecurr [28] ="BWP"; incomecurr [29] ="NOK"; incomecurr [30] ="BRL"; incomecurr [31] ="USD"; incomecurr [32] ="USD"; incomecurr [33] ="BND"; incomecurr [34] ="BGL"; incomecurr [35] ="XOF"; incomecurr [36] ="BIF"; incomecurr [37] ="KHR"; incomecurr [38] ="XAF"; incomecurr [39] ="CAD"; incomecurr [40] ="CVE"; incomecurr [41] ="KYD"; incomecurr [42] ="XAF"; incomecurr [43] ="XAF"; incomecurr [44] ="CLP"; incomecurr [45] ="CNY"; incomecurr [46] ="AUD"; incomecurr [47] ="AUD"; incomecurr [48] ="COP"; incomecurr [49] ="KMF"; incomecurr [50] ="XAF"; incomecurr [51] ="NZD"; incomecurr [52] ="CRC"; incomecurr [53] ="HRK"; incomecurr [54] ="CUP"; incomecurr [55] ="CYP"; incomecurr [56] ="CZK"; incomecurr [57] ="DKK"; incomecurr [58] ="DJF"; incomecurr [59] ="XCD"; incomecurr [60] ="DOP"; incomecurr [61] ="TPE"; incomecurr [62] ="ECS"; incomecurr [63] ="EGP"; incomecurr [64] ="SVC"; incomecurr [65] ="XAF"; incomecurr [66] ="ERN"; incomecurr [67] ="EEK"; incomecurr [68] ="ETB"; incomecurr [69] ="FKP"; incomecurr [70] ="DKK"; incomecurr [71] ="FJD"; incomecurr [72] ="EUR"; incomecurr [73] ="EUR"; incomecurr [74] ="EUR"; incomecurr [75] ="XPF"; incomecurr [76] ="EUR"; incomecurr [77] ="XAF"; incomecurr [78] ="GMD"; incomecurr [79] ="GEL"; incomecurr [80] ="EUR"; incomecurr [81] ="GHC"; incomecurr [82] ="GIP"; incomecurr [83] ="EUR"; incomecurr [84] ="DKK"; incomecurr [85] ="XCD"; incomecurr [86] ="EUR"; incomecurr [87] ="USD"; incomecurr [88] ="QTQ"; incomecurr [89] ="GNF"; incomecurr [90] ="GWP"; incomecurr [91] ="GYD"; incomecurr [92] ="HTG"; incomecurr [93] ="AUD"; incomecurr [94] ="HNL"; incomecurr [95] ="HKD"; incomecurr [96] ="HUF"; incomecurr [97] ="ISK"; incomecurr [98] ="Rs."; incomecurr [99] ="IDR"; incomecurr [100] ="IRR"; incomecurr [101] ="IQD"; incomecurr [102] ="EUR"; incomecurr [103] ="ILS"; incomecurr [104] ="EUR"; incomecurr [105] ="XOF"; incomecurr [106] ="JMD"; incomecurr [107] ="JPY"; incomecurr [108] ="JOD"; incomecurr [109] ="KZT"; incomecurr [110] ="KES"; incomecurr [111] ="AUD"; incomecurr [112] ="KPW"; incomecurr [113] ="KRW"; incomecurr [114] ="KWD"; incomecurr [115] ="KGS"; incomecurr [116] ="LAK"; incomecurr [117] ="LVL"; incomecurr [118] ="LBP"; incomecurr [119] ="LSL"; incomecurr [120] ="LRD"; incomecurr [121] ="LYD"; incomecurr [122] ="CHF"; incomecurr [123] ="LTL"; incomecurr [124] ="EUR"; incomecurr [125] ="MOP"; incomecurr [126] ="MKD"; incomecurr [127] ="MGF"; incomecurr [128] ="MWK"; incomecurr [129] ="MYR"; incomecurr [130] ="MVR"; incomecurr [131] ="XOF"; incomecurr [132] ="MTL"; incomecurr [133] ="USD"; incomecurr [134] ="EUR"; incomecurr [135] ="MRO"; incomecurr [136] ="MUR"; incomecurr [137] ="EUR"; incomecurr [138] ="MXN"; incomecurr [139] ="USD"; incomecurr [140] ="MDL"; incomecurr [141] ="EUR"; incomecurr [142] ="MNT"; incomecurr [143] ="XCD"; incomecurr [144] ="MAD"; incomecurr [145] ="MZM"; incomecurr [146] ="MMK"; incomecurr [147] ="NAD"; incomecurr [148] ="AUD"; incomecurr [149] ="NPR"; incomecurr [150] ="EUR"; incomecurr [151] ="ANG"; incomecurr [152] ="XPF"; incomecurr [153] ="NZD"; incomecurr [154] ="NIC"; incomecurr [155] ="XOF"; incomecurr [156] ="NGN"; incomecurr [157] ="NZD"; incomecurr [158] ="AUD"; incomecurr [159] ="USD"; incomecurr [160] ="NOK"; incomecurr [161] ="OMR"; incomecurr [162] ="PKR"; incomecurr [163] ="USD"; incomecurr [164] ="PAB"; incomecurr [165] ="PGK"; incomecurr [166] ="PYG"; incomecurr [167] ="PEN"; incomecurr [168] ="PHP"; incomecurr [169] ="NZD"; incomecurr [170] ="PLZ"; incomecurr [171] ="EUR"; incomecurr [172] ="USD"; incomecurr [173] ="QAR"; incomecurr [174] ="EUR"; incomecurr [175] ="ROL"; incomecurr [176] ="RUR"; incomecurr [177] ="RWF"; incomecurr [178] ="GBP"; incomecurr [179] ="XCD"; incomecurr [180] ="XCD"; incomecurr [181] ="XCD"; incomecurr [182] ="WST"; incomecurr [183] ="ITL"; incomecurr [184] ="STD"; incomecurr [185] ="SAR"; incomecurr [186] ="XOF"; incomecurr [187] ="SCR"; incomecurr [188] ="SLL"; incomecurr [189] ="SGD"; incomecurr [190] ="SKK"; incomecurr [191] ="SIT"; incomecurr [192] ="SOD"; incomecurr [193] ="ZAR"; incomecurr [194] ="EUR"; incomecurr [195] ="LKR"; incomecurr [196] ="SHP"; incomecurr [197] ="EUR"; incomecurr [198] ="SDD"; incomecurr [199] ="SRG"; incomecurr [200] ="NOK"; incomecurr [201] ="SZL"; incomecurr [202] ="SEK"; incomecurr [203] ="CHF"; incomecurr [204] ="SYP"; incomecurr [205] ="TWD"; incomecurr [206] ="TJR"; incomecurr [207] ="TZS"; incomecurr [208] ="THB"; incomecurr [209] ="XOF"; incomecurr [210] ="NZD"; incomecurr [211] ="TOP"; incomecurr [212] ="TTD"; incomecurr [213] ="TND"; incomecurr [214] ="TRL"; incomecurr [215] ="TMM"; incomecurr [216] ="USD"; incomecurr [217] ="AUD"; incomecurr [218] ="UGS"; incomecurr [219] ="UAG"; incomecurr [220] ="AED"; incomecurr [221] ="GBP"; incomecurr [222] ="USD"; incomecurr [223] ="UYP"; incomecurr [224] ="UZS"; incomecurr [225] ="VUV"; incomecurr [226] ="EUR"; incomecurr [227] ="VUB"; incomecurr [228] ="VND"; incomecurr [229] ="USD"; incomecurr [230] ="XPF"; incomecurr [231] ="MAD"; incomecurr [232] ="YER"; incomecurr [233] ="YUN"; incomecurr [234] ="CDF"; incomecurr [235] ="ZMK"; incomecurr [236] ="ZWD"; incomecurr [237] ="XAF";
                                    </script><option value="98" style="color: rgb(0, 79, 0);">India - Rs.</option>									<option value="222" style="color: rgb(0, 79, 0);">United States of America - USD</option>									<option value="220" style="color: rgb(0, 79, 0);">United Arab Emirates - AED</option>									<option value="221" style="color: rgb(0, 79, 0);">United Kingdom - GBP</option>									<option value="13" style="color: rgb(0, 79, 0);">Australia - AUD</option>									<option value="189" style="color: rgb(0, 79, 0);">Singapore - SGD</option>									<option value="39" style="color: rgb(0, 79, 0);">Canada - CAD</option>									<option value="173" style="color: rgb(0, 79, 0);">Qatar - QAR</option>									<option value="114" style="color: rgb(0, 79, 0);">Kuwait - KWD</option>									<option value="161" style="color: rgb(0, 79, 0);">Oman - OMR</option>									<option value="17" style="color: rgb(0, 79, 0);">Bahrain - BHD</option>									<option value="185" style="color: rgb(0, 79, 0);">Saudi Arabia - SAR</option>									<option value="129" style="color: rgb(0, 79, 0);">Malaysia - MYR</option>									<option value="80" style="color: rgb(0, 79, 0);">Germany - EUR</option>									<option value="153" style="color: rgb(0, 79, 0);">New Zealand - NZD</option>									<option value="73" style="color: rgb(0, 79, 0);">France - EUR</option>									<option value="102" style="color: rgb(0, 79, 0);">Ireland - EUR</option>									<option value="203" style="color: rgb(0, 79, 0);">Switzerland - CHF</option>									<option value="193" style="color: rgb(0, 79, 0);">South Africa - ZAR</option>									<option value="195" style="color: rgb(0, 79, 0);">Sri Lanka - LKR</option>									<option value="99" style="color: rgb(0, 79, 0);">Indonesia - IDR</option>									<option value="149" style="color: rgb(0, 79, 0);">Nepal - NPR</option>									<option value="162" style="color: rgb(0, 79, 0);">Pakistan - PKR</option>									<option value="18" style="color: rgb(0, 79, 0);">Bangladesh - BDT</option>									<option value="1" style="color: rgb(0, 79, 0);">Afghanistan - AFA</option>																		<option value="more" style="color: rgb(0, 79, 0);">Show more options</option>
									</select>
  &nbsp;<input type="text" style="border: 2px solid #991248;
color: #000;
font-weight: 100;"  class="input_feild day" name="income" id="inputEmail"> 
    </div></div>
  </div>
  
  <div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Employed In
:
		</label></div>
    			<div class="span6"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" name="employed_type" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="Government">
  						Government</label>
					  <label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="employed_type" id="inlineRadio2" style="margin-left:30px; margin-right:5px;" class="radio1" value="Private">Private</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="employed_type" id="inlineRadio2" style="margin-left:35px; margin-right:5px;" class="radio1" value="Business">
         Business</label>
        <label class="radio-inline gender_floatleft labelpadding"> <input type="radio" name="employed_type" id="inlineRadio2" style=" margin-right:5px;" class="radio1" value="Defence">
         Defence</label>
         <label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="employed_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Self Employed">
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
:
    			</label></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" name="food" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="Vegitarian">
  						Vegitarian</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="food" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Non">
 						Non</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="food" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Eggetarian">
         Eggetarian</label>


    </div></div>
  </div>
  <div class="control-group personal_control">
        
    			<div class="span3">
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Smoking
:
    			</label></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" name="smoking" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="no">
  						No</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="smoking" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="occassionaly">
 						Occassionaly</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="smoking" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="yes">
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
  						<input type="radio" name="drinking" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="no">No</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="drinking" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="occationally">Occationally</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="drinking" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="yes">
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
        
    			<div class="span3"><label class="control-label gender_floatleft labelpadding" for="inputEmail">Shudha Jadakam:<br />
    			</label></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" name="sudha_jadakam" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="yes">
  						Yes</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="sudha_jadakam" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="yes">
 						No</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="sudha_jadakam" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Don't Know">
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
 
    <input type="text" style="border: 2px solid #991248;color:#000; font-weight:100" class="input_feild" name="rashi" id="inputEmail">
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
    			  <label class="control-label gender_floatleft labelpadding" for="inputEmail">Family Status
:
    			</label></div>
    			<div class="span9"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" name="family_statas" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="Middle class">Middle Class</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="family_statas" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="upper class">Upper Class</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="family_statas" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="rich">
         Rich</label>
         <label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="family_status" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="affluent">
         Affluent
					</label>


    </div></div>
  </div>
  <div class="control-group personal_control">
        
    			<div class="span3"><label class="control-label gender_floatleft labelpadding" for="inputEmail">Family Type
:
    			</label></div>
    			<div class="span7"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" name="family_type" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="joint">Joint</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="family_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="nuclear">Nuclear</label>
  						
					</label>


    </div></div>
  </div>
  <div class="control-group personal_control">
        
    			<div class="span3"><label class="control-label gender_floatleft labelpadding" for="inputEmail">Family Value
:
    			</label></div>
    			<div class="span9"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<input type="radio" name="family_value"  style=" margin-right:5px;" class="radio1" value="orthodex">Orthodex</label>
 						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="family_value"  style="margin-left:10px; margin-right:5px;" class="radio1" value="traditional">Traditional</label>
  						<label class="radio-inline gender_floatleft labelpadding"><input type="radio" name="family_value"  style="margin-left:10px; margin-right:5px;" class="radio1" value="moderate">
         Moderate</label>
        <label class="radio-inline gender_floatleft labelpadding"> <input type="radio" name="family_value"  style="margin-left:10px; margin-right:5px;" class="radio1" value="Liberal">
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
					Somthing About You
				</div>
			</div>
        </div>
        <div class="row-fluid">
        
			<div class="control-group personal_control">
        
    			<div class="span9"><div class="controls">
     				<label class="radio-inline gender_floatleft labelpadding">
  						<textarea name="about_us" style="color:#000; font-weight:100" class="comm" ></textarea>
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

<!--<div class="span5">
	<div class="row-fluid left1">
    
    	<div class="span12 morepersonal1">
					Search By ID
                    <form class="navbar-form pull-left form-search" >
                               <br /> <input type="text" class="form-control">
       				 <button class="btn">Search</button>
  						</form>
				</div>
                
        </div>
        <div class="row-fluid left">
    
    	<div class="span12 morepersonal1">
					
				</div>
                
        </div>
	</div>-->
</div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>file/js/countries.js"></script>
<script language="javascript">print_country("country");</script>
<?php $this->load->view('footer'); ?>