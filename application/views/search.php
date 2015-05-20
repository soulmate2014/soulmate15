<?php if($this->session->userdata('logged_in'))
 {
	 ?>	
<?php include'header.php' ?>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/common.js"></script>
<div class="row-fluid adcontent">
<div class="container">
    <div class="span7">
<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs ad" role="tablist">
    <li role="presentation" class="active "><a href="#home" aria-controls="home" role="tab" data-toggle="tab" >REGULAR SEARCH</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" >ADVANCED SEARCH</a></li>
    <li role="presentation" ><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" >SEARCH BY ID</a></li>
  
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
   
   <div class="span12 choose">
<script src="http://code.jquery.com/jquery-1.10.1.js"></script>
<script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(function(){
    $('#ddlMaxExp').change(function(){
       var selectedMaxValue = Number($(this).val());
       var selectedMinValue = Number($('#ddlMinExp').val());
        
       if( selectedMaxValue > 0  && selectedMinValue > selectedMaxValue) {
           alert('Age to does not grater than Age from');
           $(this).find('option:first').attr('selected', 'selected');
       }
       else if( selectedMaxValue > 0 && selectedMinValue === 0) {
           alert('Please select Age option first');
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
        
       if( selectedMaxValue > 0  && selectedMinValue > selectedMaxValue) {
           alert('Height range does not exist');
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
<form action="<?php echo base_url(); ?>index.php/searching/search_regular" method="get">   
	<div class="span12">   
   		<div class="span4 adinput2">
        	<label class="radio-inline">gender
            </label>
        </div>
  		<div class="span8">
        	<div class="span4">
            	<input type="radio" checked="checked" name="gender" id="inlineRadio1 " value="male" style="margin:2px 7px 0 0 ;">
                male
            </div>
  				<input type="radio" name="gender" id="inlineRadio1" value="female" style="margin:2px 7px 0 0 ;"> female</div>
</div>
<div class="span12">
    <div class="span4 adinput2"><label>age</label></div>
      <div class="span8"><select style=" width: 102px;border: 2px solid #fff;background-color: #42b8b6; color:#FFF;" id="ddlMinExp" name="age_from" class=" adtext selectpicker select_select day">
  				<option value="">- Optional -</option>
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
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
			</select>to
   
      <select style=" width: 102px;border: 2px solid #fff;
margin-right: 7px; background-color: #42b8b6; color:#FFF;" id="ddlMaxExp" name="age_to" class="adtext selectpicker select_select day">
<option value="">- Optional -</option>
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
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
			</select>
  </div></div>
  <div class="span12">
   <div class="span4 adinput2"><label>height</label></div>
 <div class="span8">
 <select id="sister" style="border:2px solid #fff;margin-right:7px; background-color:#42b8b6;" class="selectpicker "   name="height_from" >
  				<option value="">- Cms -</option>
									<option value="137">137cm</option><option value="138">138cm</option><option value="139">139cm</option><option value="140">140cm</option><option value="141">141cm</option><option value="142">142cm</option><option value="143">143cm</option><option value="144">144cm</option><option value="145">145cm</option><option value="146">146cm</option><option value="147">147cm</option><option value="148">148cm</option><option value="149">149cm</option><option value="150">150cm</option><option value="151">151cm</option><option value="152">152cm</option><option value="153">153cm</option><option value="154">154cm</option><option value="155">155cm</option><option value="156">156cm</option><option value="157">157cm</option><option value="158">158cm</option><option value="159">159cm</option><option value="160">160cm</option><option value="161">161cm</option><option value="162">162cm</option><option value="163">163cm</option><option value="164">164cm</option><option value="165">165cm</option><option value="166">166cm</option><option value="167">167cm</option><option value="168">168cm</option><option value="169">169cm</option><option value="170">170cm</option><option value="171">171cm</option><option value="172">172cm</option><option value="173">173cm</option><option value="174">174cm</option><option value="175">175cm</option><option value="176">176cm</option><option value="177">177cm</option><option value="178">178cm</option><option value="179">179cm</option><option value="180">180cm</option><option value="181">181cm</option><option value="182">182cm</option><option value="183">183cm</option><option value="184">184cm</option><option value="185">185cm</option><option value="186">186cm</option><option value="187">187cm</option><option value="188">188cm</option><option value="189">189cm</option><option value="190">190cm</option><option value="191">191cm</option><option value="192">192cm</option><option value="193">193cm</option><option value="194">194cm</option><option value="195">195cm</option><option value="196">196cm</option><option value="197">197cm</option><option value="198">198cm</option><option value="199">199cm</option><option value="200">200cm</option><option value="201">201cm</option><option value="202">202cm</option><option value="203">203cm</option><option value="204">204cm</option><option value="205">205cm</option><option value="206">206cm</option><option value="207">207cm</option><option value="208">208cm</option><option value="209">209cm</option><option value="210">210cm</option><option value="211">211cm</option><option value="212">212cm</option><option value="213">213cm</option>
			</select>
            to
            <select id="height_to"  name="height_to2" class="selectpicker" style="border:2px solid #fff; background-color:#42b8b6;">
              <option value="">- Cms -</option>
              <option value="137">137cm</option>
              <option value="138">138cm</option>
              <option value="139">139cm</option>
              <option value="140">140cm</option>
              <option value="141">141cm</option>
              <option value="142">142cm</option>
              <option value="143">143cm</option>
              <option value="144">144cm</option>
              <option value="145">145cm</option>
              <option value="146">146cm</option>
              <option value="147">147cm</option>
              <option value="148">148cm</option>
              <option value="149">149cm</option>
              <option value="150">150cm</option>
              <option value="151">151cm</option>
              <option value="152">152cm</option>
              <option value="153">153cm</option>
              <option value="154">154cm</option>
              <option value="155">155cm</option>
              <option value="156">156cm</option>
              <option value="157">157cm</option>
              <option value="158">158cm</option>
              <option value="159">159cm</option>
              <option value="160">160cm</option>
              <option value="161">161cm</option>
              <option value="162">162cm</option>
              <option value="163">163cm</option>
              <option value="164">164cm</option>
              <option value="165">165cm</option>
              <option value="166">166cm</option>
              <option value="167">167cm</option>
              <option value="168">168cm</option>
              <option value="169">169cm</option>
              <option value="170">170cm</option>
              <option value="171">171cm</option>
              <option value="172">172cm</option>
              <option value="173">173cm</option>
              <option value="174">174cm</option>
              <option value="175">175cm</option>
              <option value="176">176cm</option>
              <option value="177">177cm</option>
              <option value="178">178cm</option>
              <option value="179">179cm</option>
              <option value="180">180cm</option>
              <option value="181">181cm</option>
              <option value="182">182cm</option>
              <option value="183">183cm</option>
              <option value="184">184cm</option>
              <option value="185">185cm</option>
              <option value="186">186cm</option>
              <option value="187">187cm</option>
              <option value="188">188cm</option>
              <option value="189">189cm</option>
              <option value="190">190cm</option>
              <option value="191">191cm</option>
              <option value="192">192cm</option>
              <option value="193">193cm</option>
              <option value="194">194cm</option>
              <option value="195">195cm</option>
              <option value="196">196cm</option>
              <option value="197">197cm</option>
              <option value="198">198cm</option>
              <option value="199">199cm</option>
              <option value="200">200cm</option>
              <option value="201">201cm</option>
              <option value="202">202cm</option>
              <option value="203">203cm</option>
              <option value="204">204cm</option>
              <option value="205">205cm</option>
              <option value="206">206cm</option>
              <option value="207">207cm</option>
              <option value="208">208cm</option>
              <option value="209">209cm</option>
              <option value="210">210cm</option>
              <option value="211">211cm</option>
              <option value="212">212cm</option>
              <option value="213">213cm</option>
            </select>
 </div></div>
  
  
  	<?php
			if($list->num_rows > 0){
				?>
 <div class="span12"> 
  <div class="span4 adinput2">
   <label>Religion</label></div>
    <div class="span8">
 <select style="background-color: #42b8b6;" class="selectpicker" name="religion" onchange="selectState8(this.options[this.selectedIndex].value)">
								<option value="">Select Religion</option>
								<?php
								foreach($list->result() as $listElement){
									?>
									<option value="<?php echo $listElement->religion_id?>"><?php echo $listElement->religion_name?></option>
									<?php
								}
								?>
							</select>
    </div></div> 
    
    

    
    
    
<div class="span12">    
    <div class="span4 adinput2"><label>Cast</label></div>
    <div class="span8">
    <select style="background-color:#42b8b6;" name="cast" class="selectpicker" id="state_dropdown8" onchange="selectCity(this.options[this.selectedIndex].value)">
								<option value="">Select Cast</option>
							</select>
							<span id="state_loader"></span>
    
    </div> </div>
    <?php
			}else{
				echo 'No Country Name Found';
			}
			?>
    <div class="span12">    
<div class="span4 adinput2">
<label>Mother tongue</label>
</div>
    <div class="span8">
    <select style="background-color:#42b8b6;" name="mother_tounge" class="selectpicker" placeholder="cast" >
<option value="" selected="">Select Mother Tongue</option>
            <option value="54">Angika</option>
            <option value="1">Arunachali</option>
            <option value="2">Assamese</option>
            <option value="3">Awadhi</option>
            <option value="4">Bengali</option>
            <option value="5">Bhojpuri</option>
            <option value="6">Brij</option>
            <option value="7">Bihari</option>
            <option value="53">Badaga</option>
            <option value="8">Chatisgarhi</option>
            <option value="9">Dogri</option>
            <option value="10">English</option>
            <option value="11">French</option>
            <option value="12">Garhwali</option>
            <option value="13">Garo</option>
            <option value="14">Gujarati</option>
            <option value="15">Haryanvi</option>
            <option value="16">Himachali/Pahari</option>
            <option value="17">Hindi</option>
            <option value="18">Kanauji</option>
            <option value="19">Kannada</option>
            <option value="20">Kashmiri</option>
            <option value="21">Khandesi</option>
            <option value="22">Khasi</option>
            <option value="23">Konkani</option>
            <option value="24">Koshali</option>
            <option value="25">Kumoani</option>
            <option value="26">Kutchi</option>
            <option value="27">Lepcha</option>
            <option value="28">Ladacki</option>
            <option value="29">Magahi</option>
            <option value="30">Maithili</option>
            <option value="31">Malayalam</option>
            <option value="32">Manipuri</option>
            <option value="33">Marathi</option>
            <option value="34">Marwari</option>
            <option value="35">Miji</option>
            <option value="36">Mizo</option>
            <option value="37">Monpa</option>
            <option value="38">Nicobarese</option>
            <option value="39">Nepali</option>
            <option value="40">Oriya</option>
            <option value="41">Punjabi</option>
            <option value="42">Rajasthani</option>
            <option value="43">Sanskrit</option>
            <option value="44">Santhali</option>
            <option value="45">Sindhi</option>
            <option value="46">Sourashtra</option>
            <option value="47">Tamil</option>
            <option value="48">Telugu</option>
            <option value="49">Tripuri</option>
            <option value="50">Tulu</option>
            <option value="51">Urdu</option>
  </select>
    </div> </div>
    
<div class="span12">    
   <div class="span4 adinput2"><label>Country</label></div>
    <div class="span8"><select style="background-color:#42b8b6;" name="country" class="selectpicker" placeholder="cast" >
    <option selected="selected" value="">--Select a country-- </option>
    <?php foreach ($result as $res) { ?>

    <option value="<?php echo $res->iso3 ?>"><?php echo $res->nicename ?></option>

        <?php } ?>


  </select>
    </div></div>
    
    
    
    
    <div class="span12 ">
    <div class="span4 adinput2">
    <label>Education</label>
    </div>
    <div class="span8">
    <select style="border: 2px solid #fff;background-color: #42b8b6; color:#FFF;" class="form-control education" name="education">
		<option value="">- Select -</option>								
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

</div>
</div>


<!--

<div class="span12"> 
   <div class="span4 adinput2"><label class="radio-inline">Show profile</label></div>
  <div class="span8"><div class="span4"><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;"> with photo</div>
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;"> with horoscope</div></div>


<div class="span12">
 <div class="span4 adinput2"><label class="radio-inline">Don't Show</label></div>
 <div class="span8"> <div class="span4"><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;">ignored profile</div>
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;">viewed profile</div></div>-->


<div class="span12">
<div class="span4 adinput2"><button type="submit" style="background-color:#FFF;" class="btn1 btn-large">Search</button>
    </div><div class="span8"></div></div>
</form>

   </div><!-- span12 -->
    </div><!-- home -->
    
    
    <div role="tabpanel" class="tab-pane" id="profile">

   <div style="margin-left:0px;" class="span12 choose">
<form action="<?php echo base_url(); ?>index.php/searching/search_advanced" method="get">   
<div class="span12 ">   
<div class="span4 adinput2">
        	<label class="radio-inline">gender
            </label>
        </div>
  		<div class="span8">
        	<div class="span4">
            	<input type="radio" checked="checked" name="gender" id="inlineRadio1 " value="male" style="margin:2px 7px 0 0 ;">
                male
            </div>
  				<input type="radio" name="gender" id="inlineRadio1" value="female" style="margin:2px 7px 0 0 ;"> female</div>
</div>



<div class="span12 adspan12">
    <div class="span4 adinput2"><label><span class="span8">
      
    </span>age</label></div>
      <div class="span8"><select style=" width: 102px;border: 2px solid #fff;background-color: #42b8b6; color:#FFF;" id="ddlMinExp" name="age_from" class=" adtext selectpicker select_select day">
  				<option value="">- Optional -</option>
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
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
			</select>to
   
      <select style=" width: 102px;border: 2px solid #fff;
margin-right: 7px; background-color: #42b8b6; color:#FFF;" id="ddlMaxExp" name="age_to" class="adtext selectpicker select_select day">
<option value="">- Optional -</option>
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
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
			</select>
  </div></div>

  
  <div class="span12 adspan12">
   <div class="span4 adinput2"><label>height</label></div>
 <div class="span8">
 <select id="sister" style="border:2px solid #fff;margin-right:7px; background-color: #42b8b6;" class="selectpicker "   name="height_from" >
  				<option value="">- Cms -</option>
									<option value="137">137cm</option><option value="138">138cm</option><option value="139">139cm</option><option value="140">140cm</option><option value="141">141cm</option><option value="142">142cm</option><option value="143">143cm</option><option value="144">144cm</option><option value="145">145cm</option><option value="146">146cm</option><option value="147">147cm</option><option value="148">148cm</option><option value="149">149cm</option><option value="150">150cm</option><option value="151">151cm</option><option value="152">152cm</option><option value="153">153cm</option><option value="154">154cm</option><option value="155">155cm</option><option value="156">156cm</option><option value="157">157cm</option><option value="158">158cm</option><option value="159">159cm</option><option value="160">160cm</option><option value="161">161cm</option><option value="162">162cm</option><option value="163">163cm</option><option value="164">164cm</option><option value="165">165cm</option><option value="166">166cm</option><option value="167">167cm</option><option value="168">168cm</option><option value="169">169cm</option><option value="170">170cm</option><option value="171">171cm</option><option value="172">172cm</option><option value="173">173cm</option><option value="174">174cm</option><option value="175">175cm</option><option value="176">176cm</option><option value="177">177cm</option><option value="178">178cm</option><option value="179">179cm</option><option value="180">180cm</option><option value="181">181cm</option><option value="182">182cm</option><option value="183">183cm</option><option value="184">184cm</option><option value="185">185cm</option><option value="186">186cm</option><option value="187">187cm</option><option value="188">188cm</option><option value="189">189cm</option><option value="190">190cm</option><option value="191">191cm</option><option value="192">192cm</option><option value="193">193cm</option><option value="194">194cm</option><option value="195">195cm</option><option value="196">196cm</option><option value="197">197cm</option><option value="198">198cm</option><option value="199">199cm</option><option value="200">200cm</option><option value="201">201cm</option><option value="202">202cm</option><option value="203">203cm</option><option value="204">204cm</option><option value="205">205cm</option><option value="206">206cm</option><option value="207">207cm</option><option value="208">208cm</option><option value="209">209cm</option><option value="210">210cm</option><option value="211">211cm</option><option value="212">212cm</option><option value="213">213cm</option>
			</select>
            to
            <select id="sisterm"  name="height_to" class="selectpicker" style="border:2px solid #fff; background-color: #42b8b6;">
  				<option value="">- Cms -</option>
									<option value="137">137cm</option><option value="138">138cm</option><option value="139">139cm</option><option value="140">140cm</option><option value="141">141cm</option><option value="142">142cm</option><option value="143">143cm</option><option value="144">144cm</option><option value="145">145cm</option><option value="146">146cm</option><option value="147">147cm</option><option value="148">148cm</option><option value="149">149cm</option><option value="150">150cm</option><option value="151">151cm</option><option value="152">152cm</option><option value="153">153cm</option><option value="154">154cm</option><option value="155">155cm</option><option value="156">156cm</option><option value="157">157cm</option><option value="158">158cm</option><option value="159">159cm</option><option value="160">160cm</option><option value="161">161cm</option><option value="162">162cm</option><option value="163">163cm</option><option value="164">164cm</option><option value="165">165cm</option><option value="166">166cm</option><option value="167">167cm</option><option value="168">168cm</option><option value="169">169cm</option><option value="170">170cm</option><option value="171">171cm</option><option value="172">172cm</option><option value="173">173cm</option><option value="174">174cm</option><option value="175">175cm</option><option value="176">176cm</option><option value="177">177cm</option><option value="178">178cm</option><option value="179">179cm</option><option value="180">180cm</option><option value="181">181cm</option><option value="182">182cm</option><option value="183">183cm</option><option value="184">184cm</option><option value="185">185cm</option><option value="186">186cm</option><option value="187">187cm</option><option value="188">188cm</option><option value="189">189cm</option><option value="190">190cm</option><option value="191">191cm</option><option value="192">192cm</option><option value="193">193cm</option><option value="194">194cm</option><option value="195">195cm</option><option value="196">196cm</option><option value="197">197cm</option><option value="198">198cm</option><option value="199">199cm</option><option value="200">200cm</option><option value="201">201cm</option><option value="202">202cm</option><option value="203">203cm</option><option value="204">204cm</option><option value="205">205cm</option><option value="206">206cm</option><option value="207">207cm</option><option value="208">208cm</option><option value="209">209cm</option><option value="210">210cm</option><option value="211">211cm</option><option value="212">212cm</option><option value="213">213cm</option>
			</select>
</div></div>
    	<?php
			if($list->num_rows > 0){
				?>
 <div class="span12"  style="margin-left: 0px;"> 
  <div class="span4 adinput2">
   <label>Religion</label></div>
    <div class="span8" >
 <select style="background-color: #42b8b6;margin-left: 0px;" class="selectpicker" name="religion" onchange="selectState10(this.options[this.selectedIndex].value)">
								<option value="">Select Religion</option>
								<?php
								foreach($list->result() as $listElement){
									?>
									<option value="<?php echo $listElement->religion_id?>"><?php echo $listElement->religion_name?></option>
									<?php
								}
								?>
							</select>
    </div></div> 
    
    

    
    
    
<div class="span12"  style="margin-left: 0px;">    
    <div class="span4 adinput2"><label>Cast</label></div>
    <div class="span8" >
    <select style="background-color: #42b8b6; margin-left: 0px;" name="cast" class="selectpicker" id="state_dropdown10" onchange="selectCity(this.options[this.selectedIndex].value)">
								<option value="">Select Cast</option>
							</select>
							<span id="state_loader"></span>
    
    </div> </div>
    <?php
			}else{
				echo 'No Country Name Found';
			}
			?>
    
    <div class="span12 adspan12">    
<div class="span4 adinput2">
<label>Mother tongue</label>
</div>
    <div class="span8">
    <select style="background-color: #42b8b6;" name="mother_tounge" class="selectpicker" placeholder="cast" >
<option value="" selected="">Select Mother Tongue</option>
            <option value="54">Angika</option>
            <option value="1">Arunachali</option>
            <option value="2">Assamese</option>
            <option value="3">Awadhi</option>
            <option value="4">Bengali</option>
            <option value="5">Bhojpuri</option>
            <option value="6">Brij</option>
            <option value="7">Bihari</option>
            <option value="53">Badaga</option>
            <option value="8">Chatisgarhi</option>
            <option value="9">Dogri</option>
            <option value="10">English</option>
            <option value="11">French</option>
            <option value="12">Garhwali</option>
            <option value="13">Garo</option>
            <option value="14">Gujarati</option>
            <option value="15">Haryanvi</option>
            <option value="16">Himachali/Pahari</option>
            <option value="17">Hindi</option>
            <option value="18">Kanauji</option>
            <option value="19">Kannada</option>
            <option value="20">Kashmiri</option>
            <option value="21">Khandesi</option>
            <option value="22">Khasi</option>
            <option value="23">Konkani</option>
            <option value="24">Koshali</option>
            <option value="25">Kumoani</option>
            <option value="26">Kutchi</option>
            <option value="27">Lepcha</option>
            <option value="28">Ladacki</option>
            <option value="29">Magahi</option>
            <option value="30">Maithili</option>
            <option value="31">Malayalam</option>
            <option value="32">Manipuri</option>
            <option value="33">Marathi</option>
            <option value="34">Marwari</option>
            <option value="35">Miji</option>
            <option value="36">Mizo</option>
            <option value="37">Monpa</option>
            <option value="38">Nicobarese</option>
            <option value="39">Nepali</option>
            <option value="40">Oriya</option>
            <option value="41">Punjabi</option>
            <option value="42">Rajasthani</option>
            <option value="43">Sanskrit</option>
            <option value="44">Santhali</option>
            <option value="45">Sindhi</option>
            <option value="46">Sourashtra</option>
            <option value="47">Tamil</option>
            <option value="48">Telugu</option>
            <option value="49">Tripuri</option>
            <option value="50">Tulu</option>
            <option value="51">Urdu</option>
  </select>
    </div> 
    </div>
    
     <div class="span12 adspan12">
    <div class="span4 adinput2">
    <label>Education</label>
    </div>
    <div class="span8">
    <select style="border: 2px solid #fff;background-color: #42b8b6; color:#FFF;" class="form-control education" name="education">
		<option value="">- Select -</option>								
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

</div>
</div>


<div class="span12 adspan12">
    <div class="span4 adinput2">
    <label>Occupation</label>
    </div>
    <div class="span8">
    <select style="border: 2px solid #fff;background-color: #42b8b6; color:#FFF;" class="form-control education" name="occupation">
		<option value="0">- Select -</option>
									<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ADMIN --" class="a"><option value="49">Manager</option><option value="48">Supervisor</option><option value="47">Officer</option><option value="39">Administrative Professional</option><option value="50">Executive</option><option value="46">Clerk</option><option value="63">Human Resources Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AGRICULTURE --" class="a"><option value="37">Agriculture &amp; Farming Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AIRLINE --" class="a"><option value="30">Pilot</option><option value="28">Air Hostess</option><option value="29">Airline Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ARCHITECT &amp; DESIGN --" class="a"><option value="19">Architect</option><option value="20">Interior Designer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BANKING &amp; FINANCE --" class="a"><option value="7">Chartered Accountant</option><option value="10">Company Secretary</option><option value="8">Accounts/Finance Professional</option><option value="16">Banking Service Professional</option><option value="9">Auditor</option><option value="69">Financial Accountant</option><option value="64">Financial Analyst / Planning</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BEAUTY &amp; FASHION --" class="a"><option value="25">Fashion Designer</option><option value="33">Beautician</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- CIVIL SERVICES --" class="a"><option value="52">Civil Services (IAS/IPS/IRS/IES/IFS)</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- DEFENCE --" class="a"><option value="53">Army</option><option value="54">Navy</option><option value="55">Airforce</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- EDUCATION --" class="a"><option value="5">Professor / Lecturer</option><option value="4">Teaching / Academician</option><option value="6">Education Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- HOSPITALITY --" class="a"><option value="34">Hotel / Hospitality Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- IT &amp; ENGINEERING --" class="a"><option value="1">Software Professional</option><option value="2">Hardware Professional</option><option value="3">Engineer - Non IT</option><option value="65">Designer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LEGAL --" class="a"><option value="17">Lawyer &amp; Legal Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LAW ENFORCEMENT --" class="a"><option value="18">Law Enforcement Officer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDICAL --" class="a"><option value="12">Doctor</option><option value="14">Health Care Professional</option><option value="15">Paramedical Professional</option><option value="13">Nurse</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MARKETING &amp; SALES --" class="a"><option value="42">Marketing Professional</option><option value="43">Sales Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDIA &amp; ENTERTAINMENT --" class="a"><option value="27">Journalist</option><option value="22">Media Professional</option><option value="24">Entertainment Professional</option><option value="26">Event Management Professional</option><option value="21">Advertising / PR Professional</option><option value="66">Designer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MERCHANT NAVY --" class="a"><option value="32">Mariner / Merchant Navy</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- SCIENTIST --" class="a"><option value="35">Scientist / Researcher</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- TOP MANAGEMENT --" class="a"><option value="41">CXO / President, Director, Chairman</option><option value="70">Business Analyst</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- OTHERS --" class="a"><option value="45">Consultant</option><option value="40">Customer Care Professional</option><option value="36">Social Worker</option><option value="51">Sportsman</option><option value="44">Technician</option><option value="38">Arts &amp; Craftsman</option><option value="67">Student</option><option value="68">Librarian</option><option value="888">Not Working</option></optgroup>					
</select>

</div>
</div>
 <div class="span12 adspan12">
    <div class="span4 adinput2">
    <label>Annual Income</label>
    </div>
    <div class="span8">
   
    <select style="border: 2px solid #fff;background-color: #42b8b6; color:#FFF;" class="form-control education" name="income">
		<option value="0" selected="">Any</option><option value="1">Less than Rs.50 thousand</option><option value="2">Rs.50 thousand </option><option value="3">Rs.1 Lakh</option><option value="4">Rs.2 Lakh</option><option value="5">Rs.3 Lakh</option><option value="6">Rs.4 Lakh</option><option value="7">Rs.5 Lakh</option><option value="8">Rs.6 Lakh</option><option value="9">Rs.7 Lakh</option><option value="10">Rs.8 Lakh</option><option value="11">Rs.9 Lakh</option><option value="12">Rs.10 Lakh</option><option value="13">Rs.12 Lakh</option><option value="14">Rs.14 Lakh</option><option value="15">Rs.16 Lakh</option><option value="16">Rs.18 Lakh</option><option value="17">Rs.20 Lakh</option><option value="18">Rs.25 Lakh</option><option value="19">Rs.30 Lakh</option><option value="20">Rs.35 Lakh</option><option value="21">Rs.40 Lakh</option><option value="22">Rs.45 Lakh</option><option value="23">Rs.50 Lakh</option><option value="24">Rs.60 Lakh</option><option value="25">Rs.70 Lakh</option><option value="26">Rs.80 Lakh</option><option value="27">Rs.90 Lakh</option><option value="28">Rs.1 Crore</option><option value="29">Rs.1 Crore &amp; Above</option>	
</select>

</div>
</div>
 <div class="span12 adspan12">
    <div class="span4 adinput2">
    <label>Star</label>
    </div>
    <div class="span8">
    <select style="border: 2px solid #fff;background-color: #42b8b6; color:#FFF;" class="form-control education" name="star">
		<option value="0" selected="selected">- Optional -</option>
											<option style="" value="1">Aswathi</option><option style="" value="2">Bharani</option><option style="" value="3">Krithiga</option><option style="" value="4">Rohini</option><option style="" value="5">Makayiram</option><option style="" value="6">Thiruvathira</option><option style="" value="7">Punartham</option><option style="" value="8">Pooyam</option><option style="" value="9">Ayilyam</option><option style="" value="10">Magam</option><option style="" value="11">Pooram</option><option style="" value="12">Uthram</option><option style="" value="13">Atham</option><option style="" value="14">Chithira</option><option style="" value="15">Chothi</option><option style="" value="16">Visakham</option><option style="" value="17">Anizham</option><option style="" value="18">Ketta</option><option style="" value="19">Moolam</option><option style="" value="20">Pooradam</option><option style="" value="21">Uthiradam</option><option style="" value="22">Thiruvonam</option><option style="" value="23">Avittam</option><option style="" value="24">Chadayam</option><option style="" value="25">Pooruttathi</option><option style="" value="26">Uthirattathi</option><option style="" value="27">Revathi</option>
</select>

</div>
</div>
 
  <div class="span12 adspan12"> 
   <div class="span4 adinput2"><label class="radio-inline">Show profile</label></div>
  <div class="span8"><div class="span4"><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;"> with photo</div>
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;"> with horoscope</div></div>


<div class="span12 adspan12">
 <div class="span4 adinput2"><label class="radio-inline">Don't Show</label></div>
 <div class="span8"> <div class="span4"><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;">ignored profile</div>
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;">viewed profile</div></div>


<div class="span12 adspan12">
<div class="span4 adinput2"><button type="submit" style="background-color:#FFF;" class="btn1 btn-large">Search</button>
    </div><div class="span8"></div></div>
</form>
   
   </div><!-- span12 -->
    
      
    </div><!-- profile -->
    
    
    <div role="tabpanel" class="tab-pane" id="messages">
    
   <div class="span12 choose">
 	
   	<form action="<?php echo base_url(); ?>index.php/searching/search_id" method="post">
              <div class="span12" >  <div class="span7 searchbyid" ><label><b>Enter ID</b><input type="text" name="user_id" class="input-large email adinput" placeholder="Name"><button type="submit" class="btn-small btn1 adbtn">search</button></label>
          </div>
             </div></form>
              <div class="span12" > 
            
                       <div class="span6" >
               
 		</div>
               </div>
               </div>
    </div>

  </div>

</div>

  <div role="tabpanel" class="tab-pane fade" id="messages">...</div>
  <div role="tabpanel" class="tab-pane fade" id="settings">...</div>
</div>


<div class="span4 adreg" style="background-color:#FFF;">
<div class="matches">
                            	<div class="span12" style="background-color:#FFF; overflow:hidden;">
                                	 <img src="<?php echo base_url(); ?>file/add/individual page2.jpg">
                                
                             
                                </div>
                                </div>
<!--
    <h2>REGISTER NOW</h2>
    <div class="text-center">
     <div class="span12"><div class="control-group">
    
    <div class="controls">
 
    <select name="profile_for" class="selectpicker">
<option value="0">Select Matrimony Profile for</option>
			<option value="1">Myself</option>
			<option value="2">Son</option>
			<option value="3">Daughter</option>
			<option value="4">Brother</option>
			<option value="5">Sister</option>
			<option value="6">Relative</option>
			<option value="7">Friend</option>
  </select>
    </div>
  </div></div>
     <div class="span12 ">
     <div class="controls">
    <select name="day" class="selectpicker day" >
    <option value="0">DD</option>
  <option value='01'>01</option>
<option value='02'>02</option>
<option value='03'>03</option>
<option value='04'>04</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
  </select>
  <select name="month" class="selectpicker day">
  <option>MM</option>
 <option value='01'>January</option>
<option value='02'>February</option>
<option value='03'>March</option>
<option value='04'>April</option>
<option value='05'>May</option>
<option value='06'>June</option>
<option value='07'>July</option>
<option value='08'>August</option>
<option value='09'>September</option>
<option value='10'>October</option>
<option value='11'>November</option>
<option value='12'>December</option>
  </select>
 <select name="year" class="selectpicker day">
  <option>YYYY</option>
   	<option value="2007">2014</option>
	<option value="2006">2013</option>
	<option value="2005">2012</option>
	<option value="2004">2011</option>
	<option value="2003">2010</option>
	<option value="2002">2009</option>
   <option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>

	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	<option value="1944">1944</option>
	<option value="1943">1943</option>
	<option value="1942">1942</option>
	<option value="1941">1941</option>
	<option value="1940">1940</option>
	<option value="1939">1939</option>
	<option value="1938">1938</option>
	<option value="1937">1937</option>
	<option value="1936">1936</option>
	<option value="1935">1935</option>
	<option value="1934">1934</option>
	<option value="1933">1933</option>
	<option value="1932">1932</option>
	<option value="1931">1931</option>
	<option value="1930">1930</option>
	<option value="1929">1929</option>
	<option value="1928">1928</option>
	<option value="1927">1927</option>
	<option value="1926">1926</option>
	<option value="1925">1925</option>
	<option value="1924">1924</option>
	<option value="1923">1923</option>
	<option value="1922">1922</option>
	<option value="1921">1921</option>
	<option value="1920">1920</option>
	<option value="1919">1919</option>
	<option value="1918">1918</option>
	<option value="1917">1917</option>
	<option value="1916">1916</option>
	<option value="1915">1915</option>
	<option value="1914">1914</option>
	<option value="1913">1913</option>
	<option value="1912">1912</option>
	<option value="1911">1911</option>
	<option value="1910">1910</option>
	<option value="1909">1909</option>
	<option value="1908">1908</option>
	<option value="1907">1907</option>
	<option value="1906">1906</option>
	<option value="1905">1905</option>
	<option value="1904">1904</option>
	<option value="1903">1903</option>
	<option value="1902">1902</option>
	<option value="1901">1901</option>
	<option value="1900">1900</option>
  </select>
    </div></div>
     <div class="span12 ">
     	<div class="control-group">
    
      <input type="text" name="mobile" id="inputEmail" placeholder="mobile number" >
    </div>
  </div>
     
     <div class="span12 ">
     <div class="control-group">
   
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="name">
    </div>
  </div>
     </div>
     <div class="span12 ">
     	<div class="control-group">
    <div class="controls">
    <select class="selectpicker" placeholder="Select Religion">
   <option value="0" selected="">Select Religion</option>
   <option value="1">Hindu</option>
   <option value="2">Muslim - Shia</option>
   <option value="3">Muslim - Sunni</option>
   <option value="4">Muslim - Others</option>
   <option value="5">Christian - Catholic</option>
   <option value="6">Christian - Orthodox</option>
   <option value="7">Christian - Protestant</option>
   <option value="8">Christian - Others</option>
   <option value="9">Sikh</option>
   <option value="10">Jain - Digambar</option>
   <option value="11">Jain - Shwetambar</option>
   <option value="12">Jain - Others</option>
   <option value="13">Parsi</option>
   <option value="14">Buddhist</option>
   <option value="15">Inter-Religion</option>
   <option value="16">No Religious Belief</option>
  
  </select>
    </div>
  </div>
     </div>
     <div class="span12 ">
     	 <div class="control-group">
    
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="email">
    </div>
    </div>
  </div>
  <div class="span12">
  <div class="control-group">
   
   
           
    		 <div class="controls">
   
     
     <label class="radio-inline" for="inputEmail">GENDER :
  <input type="radio" name="gender" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="male">MALE
  <input type="radio" name="gender" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="female">FEMALE
</label>

</div>
  
  </div>
  
  </div>
  <div class="span12 ">
  <div class="control-group">
    
    <div class="controls">
    <select name="cast" class="selectpicker" placeholder="cast" >
    <option></option>
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
  </select>
    </div>
  </div>
  </div>
  <div class="span12 "> 
 	<div class="control-group">
    	<div class="controls">
      	<input name="password" type="password" id="inputEmail" placeholder="password">
    	</div>
  	</div>
 </div> 
   <div class="span12 butten"><div class="control-group"> <div class="controls"><button type="submit" style="background-color:#FFF;" class="btn1 btn-large">REGISTER FREE</button>

   
    
      
    </div>
  </div>
  	</div>
  		</div>-->
  </div>
</div>




<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>

<script type="text/javascript">
  (function($) {
      fakewaffle.responsiveTabs(['xs', 'sm']);
  })(jQuery);
  $('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>
    </div>
    <?php include'footer.php';?>
	<?php }
	else
	{
		 redirect('home/', 'refresh');
	}