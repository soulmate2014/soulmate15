<?php include'profile_header.php' ?>
<title><?php echo $user_id; ?></title>
<link href="<?php echo base_url();?>file/css/elements.css" rel="stylesheet">

<script src="<?php echo base_url();?>file/js/my_js.js"></script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"
        type="text/javascript"></script>


<script>
$(document).ready(function() {
 
    $('#btn-add').click(function(){
        $('#select-from option:selected').each( function() {
                $('#select-to').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove').click(function(){
        $('#select-to option:selected').each( function() {
            $('#select-from').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>

<script>
$(document).ready(function() {
 
    $('#btn-add1').click(function(){
        $('#Muslim option:selected').each( function() {
                $('#select-to1').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove1').click(function(){
        $('#select-to1 option:selected').each( function() {
            $('#Muslim').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>
<script>
$(document).ready(function() {
 
    $('#btn-add1').click(function(){
        $('#Muslim option:selected').each( function() {
                $('#select-to1').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove1').click(function(){
        $('#select-to1 option:selected').each( function() {
            $('#Muslim').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>
<script>
$(document).ready(function() {
 
    $('#btn-add1').click(function(){
        $('#Hindu option:selected').each( function() {
                $('#select-to1').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove1').click(function(){
        $('#select-to1 option:selected').each( function() {
            $('#Hindu').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>
<script>
$(document).ready(function() {
 
    $('#btn-add1').click(function(){
        $('#Christian option:selected').each( function() {
                $('#select-to1').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove1').click(function(){
        $('#select-to1 option:selected').each( function() {
            $('#Christian').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>

<script>
$(document).ready(function() {
 
    $('#btn-add2').click(function(){
        $('#select-from2 option:selected').each( function() {
                $('#select-to2').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove2').click(function(){
        $('#select-to2 option:selected').each( function() {
            $('#select-from2').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>
<script>
$(document).ready(function() {
 
    $('#btn-add3').click(function(){
        $('#select-from3 option:selected').each( function() {
                $('#select-to3').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove3').click(function(){
        $('#select-to3 option:selected').each( function() {
            $('#select-from3').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>

<script>
$(document).ready(function() {
 
    $('#btn-add4').click(function(){
        $('#select-from4 option:selected').each( function() {
                $('#select-to4').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove4').click(function(){
        $('#select-to4 option:selected').each( function() {
            $('#select-from4').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>

<script>
$(document).ready(function() {
 
    $('#btn-add5').click(function(){
        $('#select-from5 option:selected').each( function() {
                $('#select-to5').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove5').click(function(){
        $('#select-to5 option:selected').each( function() {
            $('#select-from5').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.js"></script>

<div class="row-fluid content">
	<div class="container">
            <div class="span12 thrdreg">
                  <a href="#" id="popup" onClick="div_show()"><p>Skip this page>>>></p></a>     
<h3>Complete your partner preferences to find the one who completes you.<?php echo $user_id; ?></h3>   
                 <h4>Here you can custamize your partner preference.you will receive matches by your e-mail</h4>   
           		<div class="span10 thrdreg1">
                <div class="span11 thrdreg2">
<form  action="<?php echo base_url();?>index.php/insert_partner_pref"  method="post">
                <div class="span12">
                
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
   <div class="span3 thrdreg3" style="margin-left:0px;"><label>Prefferd age :</label></div>
 <div class="span8 thrdreg3"><select name="pref_age_from" class="selectpicker day2" style="margin-right:7px;">
  <option value='18'>18</option>
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
 <select name="pref_age_to" class="selectpicker day2" style="margin-left:7px;margin-right:7px;">
<option value='18'>18</option>
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
  </select>years</div>
  				</div>
  
  <div class="span12 thrdreg3">   
   <div class="span3 adinput2"><label class="radio-inline">Marital Status :</label></div>
  <div class="span8"><div class="span2"><input type="radio" name="pref_merital" id="inlineRadio1 " value="any" style="margin:2px 7px 0 0 ;">Any</div>
  
 <div class="span2"> <input type="radio" name="pref_merital" id="unmarried" value="option1" style="margin:2px 7px 0 0 ;">Unmarried</div>
 <div class="span2">
<input type="radio" name="pref_merital" id="inlineRadio1" value="widow" style="margin:2px 7px 0 0 ;"> widow </div> 
  
  <div class="span2">
<input type="radio" name="pref_merital" id="inlineRadio1" value="Divorced" style="margin:2px 7px 0 0 ;"> Divorsed</div> 
  	</div>
	</div>
  
  
 <div class="span12 thrdreg3">
   <div class="span3"><label>Height :</label></div>
 <div class="span8 thrdreg3"><select name="pref_height_from" class="selectpicker day2" style="margin-right:7px;">
									<option value="0">- Cms -</option>
									<option value="137">137cm</option><option value="138">138cm</option><option value="139">139cm</option><option value="140">140cm</option><option value="141">141cm</option><option value="142">142cm</option><option value="143">143cm</option><option value="144">144cm</option><option value="145">145cm</option><option value="146">146cm</option><option value="147">147cm</option><option value="148">148cm</option><option value="149">149cm</option><option value="150">150cm</option><option value="151">151cm</option><option value="152">152cm</option><option value="153">153cm</option><option value="154">154cm</option><option value="155">155cm</option><option value="156">156cm</option><option value="157">157cm</option><option value="158">158cm</option><option value="159">159cm</option><option value="160">160cm</option><option value="161">161cm</option><option value="162">162cm</option><option value="163">163cm</option><option value="164">164cm</option><option value="165">165cm</option><option value="166">166cm</option><option value="167">167cm</option><option value="168">168cm</option><option value="169">169cm</option><option value="170">170cm</option><option value="171">171cm</option><option value="172">172cm</option><option value="173">173cm</option><option value="174">174cm</option><option value="175">175cm</option><option value="176">176cm</option><option value="177">177cm</option><option value="178">178cm</option><option value="179">179cm</option><option value="180">180cm</option><option value="181">181cm</option><option value="182">182cm</option><option value="183">183cm</option><option value="184">184cm</option><option value="185">185cm</option><option value="186">186cm</option><option value="187">187cm</option><option value="188">188cm</option><option value="189">189cm</option><option value="190">190cm</option><option value="191">191cm</option><option value="192">192cm</option><option value="193">193cm</option><option value="194">194cm</option><option value="195">195cm</option><option value="196">196cm</option><option value="197">197cm</option><option value="198">198cm</option><option value="199">199cm</option><option value="200">200cm</option><option value="201">201cm</option><option value="202">202cm</option><option value="203">203cm</option><option value="204">204cm</option><option value="205">205cm</option><option value="206">206cm</option><option value="207">207cm</option><option value="208">208cm</option><option value="209">209cm</option><option value="210">210cm</option><option value="211">211cm</option><option value="212">212cm</option><option value="213">213cm</option>								</select>
  </select>to
 <select name="pref_height_to" class="selectpicker day2" style="margin-left:7px;margin-right:7px;">
<option value="0">- Cms -</option>
									<option value="137">137cm</option><option value="138">138cm</option><option value="139">139cm</option><option value="140">140cm</option><option value="141">141cm</option><option value="142">142cm</option><option value="143">143cm</option><option value="144">144cm</option><option value="145">145cm</option><option value="146">146cm</option><option value="147">147cm</option><option value="148">148cm</option><option value="149">149cm</option><option value="150">150cm</option><option value="151">151cm</option><option value="152">152cm</option><option value="153">153cm</option><option value="154">154cm</option><option value="155">155cm</option><option value="156">156cm</option><option value="157">157cm</option><option value="158">158cm</option><option value="159">159cm</option><option value="160">160cm</option><option value="161">161cm</option><option value="162">162cm</option><option value="163">163cm</option><option value="164">164cm</option><option value="165">165cm</option><option value="166">166cm</option><option value="167">167cm</option><option value="168">168cm</option><option value="169">169cm</option><option value="170">170cm</option><option value="171">171cm</option><option value="172">172cm</option><option value="173">173cm</option><option value="174">174cm</option><option value="175">175cm</option><option value="176">176cm</option><option value="177">177cm</option><option value="178">178cm</option><option value="179">179cm</option><option value="180">180cm</option><option value="181">181cm</option><option value="182">182cm</option><option value="183">183cm</option><option value="184">184cm</option><option value="185">185cm</option><option value="186">186cm</option><option value="187">187cm</option><option value="188">188cm</option><option value="189">189cm</option><option value="190">190cm</option><option value="191">191cm</option><option value="192">192cm</option><option value="193">193cm</option><option value="194">194cm</option><option value="195">195cm</option><option value="196">196cm</option><option value="197">197cm</option><option value="198">198cm</option><option value="199">199cm</option><option value="200">200cm</option><option value="201">201cm</option><option value="202">202cm</option><option value="203">203cm</option><option value="204">204cm</option><option value="205">205cm</option><option value="206">206cm</option><option value="207">207cm</option><option value="208">208cm</option><option value="209">209cm</option><option value="210">210cm</option><option value="211">211cm</option><option value="212">212cm</option><option value="213">213cm</option>	
  </select></div>
  			</div>  


 <div class="span12 thrdreg3">   
   <div class="span3 adinput2"><label class="radio-inline">Phisical Status :</label></div>
  <div class="span8"><div class="span2"><input type="radio" name="pref_physical_status" id="inlineRadio1 " value="Normal" style="margin:2px 7px 0 0 ;">Normal</div>
  
 <div class="span4"> <input type="radio" name="pref_physical_status" id="inlineRadio1" value="Physically challenged" style="margin:2px 7px 0 0 ;">Physically challenged</div>
 <div class="span3">
<input type="radio" name="pref_physical_status" id="inlineRadio1" value="Doesnt matter" style="margin:2px 7px 0 0 ;"> Doesnt matter </div> 
  	</div>
	</div>
  
  
  
<div class="span12 thrdreg3"> 
  <div class="span3 adinput2">
  <script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(document).ready(function(){
    var Religion = $("#Religion"),
        SelectCaste = $("#SelectCaste"), 
        Hindu = $("#Hindu"), 
        Muslim = $("#Muslim"), 
        Christian = $("#Christian");

        Religion.change(function(){ 
        var sReligion = $(this).val();  
        SelectCaste.hide().prop('name', '');
        Hindu.hide().prop('name', '');
        Muslim.hide().prop('name', '');
        Christian.hide().prop('name', '');
        if(sReligion=="1") {
                Hindu.show();
                Hindu.prop('name','Caste');
            }
            else if(sReligion=="2") {
                Muslim.show();
                Muslim.prop('name','Caste');
            }
            else if(sReligion=="3") {
                Christian.show();
                Christian.prop('name','Caste');
            }
    });
});
});//]]>  

</script>
   <label>Religion</label></div>
    <div class="span8">
   <select class="selectpicker FormInput" placeholder="Select Religion" name="pref_religion" id="Religion">
   <option selected="selected" label="Select" value="">- Select Religion -</option>
            <option label="Hindu" value="1">Hindu</option>
            <option label="Muslim" value="2">Muslim</option>
            <option label="Christian" value="3">Christian</option>
  
  </select>
    </div>
    </div>  
    
    
    
  <div class="span12 thrdreg3"> 
  <div class="span3 adinput2">
   <label>Mother Toungue:</label></div>
    <div class="span3">
   
    <fieldset>
  <select class="FormInput" id="SelectCaste" disabled="disabled" name="" style="display: none;">
            
      </select>
       
    <select  id="select-from" multiple size="5">
   
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

    </select></div>
     <div class="span1 thrdreg4">
<a class="btn1 btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add" >Add </a><br/>
    <a class="btn1 btn-small" href="JavaScript:void(0);" id="btn-remove"> Remove</a></div>
 
  <div class="span3">
    <select  name="pref_mothertounge[]" id="select-to" multiple size="5">
      
    </select>
 
  </fieldset> 
 </div>
    </div>  
   
   
   
     <div class="span12 thrdreg3"> 
  <div class="span3 adinput2">
   <label>Caste:</label></div>
    <div class="span3">
   
    <fieldset>
 
     <div id="CasteList"> 
        <select class="FormInput" multiple size="5" id="Hindu" style="display: none;" name="">
            
            <option value="1">Ad Dharmi</option>
            <option value="2">Adi Dravida</option>
            <option value="3">Aggarwal</option>
            <option value="4">Agri</option>
            <option value="5">Ahom</option>
            <option value="6">Ambalavasi</option>
            <option value="7">Arora</option>
            <option value="8">Arunthathiyar</option>
            <option value="9">Arya Vysya</option>
            <option value="10">Others</option>
        </select>
        <select name="pref_cast" size="5" multiple class="FormInput" id="Muslim" style="">
            
            <option  value="328">Ehle Hadith</option>
            <option value="329">Gulf Muslims</option>
            <option value="330">Memon</option>
            <option value="331">Ansari</option>
            <option value="332">Arain</option>
            <option value="333">Awan</option>
            <option value="334">Bengali</option>
            <option value="357">Others</option>
        </select>
        <select class="FormInput" multiple size="5" id="Christian" style="display: none;" name="">
            
          <option value="358">Born Again</option>
            <option value="359">Bretheren</option>
            <option value="360">CMS</option>
            <option value="361">CNI</option>
            <option value="362">CSI</option>
            <option value="363">Catholic</option>
            <option value="364">Roman Catholic</option>
            <option value="365">Evangelical</option>
            <option value="376">Others</option>
        </select>
      </div></div>
     <div class="span1 thrdreg4">
<a class="btn1 btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add1" >Add </a><br/>
    <a class="btn1 btn-small" href="JavaScript:void(0);" id="btn-remove1"> Remove</a></div>
 
  <div class="span3">
    <select name="pref_cast[]" id="select-to1" multiple size="5">
      
    </select>
 
  </fieldset> </div>
    </div>  
    
    
    
      <div class="span12 thrdreg3"> 
  <div class="span3 adinput2">
   <label>Star:</label></div>
    <div class="span3">
   
    <fieldset>
 
    <select name="pref_star" id="select-from2" multiple size="5">
    
											
											<option style="" value="1">Aswathi</option><option style="" value="2">Bharani</option><option style="" value="3">Krithiga</option><option style="" value="4">Rohini</option><option style="" value="5">Makayiram</option><option style="" value="6">Thiruvathira</option><option style="" value="7">Punartham</option><option style="" value="8">Pooyam</option><option style="" value="9">Ayilyam</option><option style="" value="10">Magam</option><option style="" value="11">Pooram</option><option style="" value="12">Uthram</option><option style="" value="13">Atham</option><option style="" value="14">Chithira</option><option style="" value="15">Chothi</option><option style="" value="16">Visakham</option><option style="" value="17">Anizham</option><option style="" value="18">Ketta</option><option style="" value="19">Moolam</option><option style="" value="20">Pooradam</option><option style="" value="21">Uthiradam</option><option style="" value="22">Thiruvonam</option><option style="" value="23">Avittam</option><option style="" value="24">Chadayam</option><option style="" value="25">Pooruttathi</option><option style="" value="26">Uthirattathi</option><option style="" value="27">Revathi</option>										
    </select></div>
     <div class="span1 thrdreg4">
<a class="btn1 btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add2" >Add </a><br/>
    <a class="btn1 btn-small" href="JavaScript:void(0);" id="btn-remove2"> Remove</a></div>
 
  <div class="span3">
    <select name="pref_star[]" id="select-to2" multiple size="5">
      
    </select>
 
  </fieldset> </div>
    </div>   
  
  
  <div class="span12 thrdreg3">   
   <div class="span3 adinput2"><label class="radio-inline">Eating Habits :</label></div>
  <div class="span8"><div class="span2"><input type="radio" name="pref_eating" id="inlineRadio1 " value="Vegetarian" style="margin:2px 7px 0 0 ;">Vegetarian</div>
  
 <div class="span3"> <input type="radio" name="pref_eating" id="inlineRadio1" value="Non vegitarian" style="margin:2px 7px 0 0 ;">Non vegitarian</div>
 <div class="span3">
<input type="radio" name="pref_eating" id="inlineRadio1" value="Eggetarian" style="margin:2px 7px 0 0 ;">Eggetarian</div> 
  
  <div class="span3">
<input type="radio" name="pref_eating" id="inlineRadio1" value="Dosn't Matter" style="margin:2px 7px 0 0 ;">Doesnt matter</div> 
  	</div>
	</div>
  
 
 
 <div class="span12 thrdreg3">   
   <div class="span3 adinput2"><label class="radio-inline">Drinking Habits :</label></div>
  <div class="span9"><div class="span3"><input type="radio" name="pref_drinking" id="inlineRadio1 " value="Doesnt matter" style="margin:2px 7px 0 0 ;">Doesnt matter</div>
  
 <div class="span3"> <input type="radio" name="pref_drinking" id="inlineRadio1" value="Non drinker" style="margin:2px 7px 0 0 ;">Non drinker</div>
 <div class="span3">
<input type="radio" name="pref_drinking" id="inlineRadio1" value="Light / Social drinker" style="margin:2px 7px 0 0 ;">Light / Social drinker</div> 
  
  <div class="span3">
<input type="radio" name="pref_drinking" id="inlineRadio1" value="Regular drinker" style="margin:2px 7px 0 0 ;">Regular drinker</div> 
  	</div>
	</div> 
      
      
      
      <div class="span12 thrdreg3">   
   <div class="span3 adinput2"><label class="radio-inline">Smoking Habits :</label></div>
  <div class="span9"><div class="span3"><input type="radio" name="pref_smoking" id="inlineRadio1 " value="Doesnt matter" style="margin:2px 7px 0 0 ;" />Doesnt matter</div>
  
 <div class="span3"> <input type="radio" name="pref_smoking" id="inlineRadio1" value="Non smoker" style="margin:2px 7px 0 0 ;">Non smoker</div>
 <div class="span3">
<input type="radio" name="pref_smoking" id="inlineRadio1" value="Light / Social smoker" style="margin:2px 7px 0 0 ;">Light/Social smoker</div> 
  
  <div class="span3">
<input type="radio" name="pref_smoking" id="inlineRadio1" value="Regular smoker" style="margin:2px 7px 0 0 ;">Regular smoker</div> 
  	</div>
	</div>
 
 
 <div class="span12 thrdreg3"> 
  <div class="span3 adinput2">
   <label>Country living in :</label></div>
    <div class="span3">
   
    <fieldset>
 
    <select name="" id="select-from3" multiple size="5">
     	<option value="AFG">Afghanistan</option>
	<option value="ALA">Åland Islands</option>
	<option value="ALB">Albania</option>
	<option value="DZA">Algeria</option>
	<option value="ASM">American Samoa</option>
	<option value="AND">Andorra</option>
	<option value="AGO">Angola</option>
	<option value="AIA">Anguilla</option>
	<option value="ATA">Antarctica</option>
	<option value="ATG">Antigua and Barbuda</option>
	<option value="ARG">Argentina</option>
	<option value="ARM">Armenia</option>
	<option value="ABW">Aruba</option>
	<option value="AUS">Australia</option>
	<option value="AUT">Austria</option>
	<option value="AZE">Azerbaijan</option>
	<option value="BHS">Bahamas</option>
	<option value="BHR">Bahrain</option>
	<option value="BGD">Bangladesh</option>
	<option value="BRB">Barbados</option>
	<option value="BLR">Belarus</option>
	<option value="BEL">Belgium</option>
	<option value="BLZ">Belize</option>
	<option value="BEN">Benin</option>
	<option value="BMU">Bermuda</option>
	<option value="BTN">Bhutan</option>
	<option value="BOL">Bolivia, Plurinational State of</option>
	<option value="BES">Bonaire, Sint Eustatius and Saba</option>
	<option value="BIH">Bosnia and Herzegovina</option>
	<option value="BWA">Botswana</option>
	<option value="BVT">Bouvet Island</option>
	<option value="BRA">Brazil</option>
	<option value="IOT">British Indian Ocean Territory</option>
	<option value="BRN">Brunei Darussalam</option>
	<option value="BGR">Bulgaria</option>
	<option value="BFA">Burkina Faso</option>
	<option value="BDI">Burundi</option>
	<option value="KHM">Cambodia</option>
	<option value="CMR">Cameroon</option>
	<option value="CAN">Canada</option>
	<option value="CPV">Cape Verde</option>
	<option value="CYM">Cayman Islands</option>
	<option value="CAF">Central African Republic</option>
	<option value="TCD">Chad</option>
	<option value="CHL">Chile</option>
	<option value="CHN">China</option>
	<option value="CXR">Christmas Island</option>
	<option value="CCK">Cocos (Keeling) Islands</option>
	<option value="COL">Colombia</option>
	<option value="COM">Comoros</option>
	<option value="COG">Congo</option>
	<option value="COD">Congo, the Democratic Republic of the</option>
	<option value="COK">Cook Islands</option>
	<option value="CRI">Costa Rica</option>
	<option value="CIV">Côte d'Ivoire</option>
	<option value="HRV">Croatia</option>
	<option value="CUB">Cuba</option>
	<option value="CUW">Curaçao</option>
	<option value="CYP">Cyprus</option>
	<option value="CZE">Czech Republic</option>
	<option value="DNK">Denmark</option>
	<option value="DJI">Djibouti</option>
	<option value="DMA">Dominica</option>
	<option value="DOM">Dominican Republic</option>
	<option value="ECU">Ecuador</option>
	<option value="EGY">Egypt</option>
	<option value="SLV">El Salvador</option>
	<option value="GNQ">Equatorial Guinea</option>
	<option value="ERI">Eritrea</option>
	<option value="EST">Estonia</option>
	<option value="ETH">Ethiopia</option>
	<option value="FLK">Falkland Islands (Malvinas)</option>
	<option value="FRO">Faroe Islands</option>
	<option value="FJI">Fiji</option>
	<option value="FIN">Finland</option>
	<option value="FRA">France</option>
	<option value="GUF">French Guiana</option>
	<option value="PYF">French Polynesia</option>
	<option value="ATF">French Southern Territories</option>
	<option value="GAB">Gabon</option>
	<option value="GMB">Gambia</option>
	<option value="GEO">Georgia</option>
	<option value="DEU">Germany</option>
	<option value="GHA">Ghana</option>
	<option value="GIB">Gibraltar</option>
	<option value="GRC">Greece</option>
	<option value="GRL">Greenland</option>
	<option value="GRD">Grenada</option>
	<option value="GLP">Guadeloupe</option>
	<option value="GUM">Guam</option>
	<option value="GTM">Guatemala</option>
	<option value="GGY">Guernsey</option>
	<option value="GIN">Guinea</option>
	<option value="GNB">Guinea-Bissau</option>
	<option value="GUY">Guyana</option>
	<option value="HTI">Haiti</option>
	<option value="HMD">Heard Island and McDonald Islands</option>
	<option value="VAT">Holy See (Vatican City State)</option>
	<option value="HND">Honduras</option>
	<option value="HKG">Hong Kong</option>
	<option value="HUN">Hungary</option>
	<option value="ISL">Iceland</option>
	<option value="IND">India</option>
	<option value="IDN">Indonesia</option>
	<option value="IRN">Iran, Islamic Republic of</option>
	<option value="IRQ">Iraq</option>
	<option value="IRL">Ireland</option>
	<option value="IMN">Isle of Man</option>
	<option value="ISR">Israel</option>
	<option value="ITA">Italy</option>
	<option value="JAM">Jamaica</option>
	<option value="JPN">Japan</option>
	<option value="JEY">Jersey</option>
	<option value="JOR">Jordan</option>
	<option value="KAZ">Kazakhstan</option>
	<option value="KEN">Kenya</option>
	<option value="KIR">Kiribati</option>
	<option value="PRK">Korea, Democratic People's Republic of</option>
	<option value="KOR">Korea, Republic of</option>
	<option value="KWT">Kuwait</option>
	<option value="KGZ">Kyrgyzstan</option>
	<option value="LAO">Lao People's Democratic Republic</option>
	<option value="LVA">Latvia</option>
	<option value="LBN">Lebanon</option>
	<option value="LSO">Lesotho</option>
	<option value="LBR">Liberia</option>
	<option value="LBY">Libya</option>
	<option value="LIE">Liechtenstein</option>
	<option value="LTU">Lithuania</option>
	<option value="LUX">Luxembourg</option>
	<option value="MAC">Macao</option>
	<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
	<option value="MDG">Madagascar</option>
	<option value="MWI">Malawi</option>
	<option value="MYS">Malaysia</option>
	<option value="MDV">Maldives</option>
	<option value="MLI">Mali</option>
	<option value="MLT">Malta</option>
	<option value="MHL">Marshall Islands</option>
	<option value="MTQ">Martinique</option>
	<option value="MRT">Mauritania</option>
	<option value="MUS">Mauritius</option>
	<option value="MYT">Mayotte</option>
	<option value="MEX">Mexico</option>
	<option value="FSM">Micronesia, Federated States of</option>
	<option value="MDA">Moldova, Republic of</option>
	<option value="MCO">Monaco</option>
	<option value="MNG">Mongolia</option>
	<option value="MNE">Montenegro</option>
	<option value="MSR">Montserrat</option>
	<option value="MAR">Morocco</option>
	<option value="MOZ">Mozambique</option>
	<option value="MMR">Myanmar</option>
	<option value="NAM">Namibia</option>
	<option value="NRU">Nauru</option>
	<option value="NPL">Nepal</option>
	<option value="NLD">Netherlands</option>
	<option value="NCL">New Caledonia</option>
	<option value="NZL">New Zealand</option>
	<option value="NIC">Nicaragua</option>
	<option value="NER">Niger</option>
	<option value="NGA">Nigeria</option>
	<option value="NIU">Niue</option>
	<option value="NFK">Norfolk Island</option>
	<option value="MNP">Northern Mariana Islands</option>
	<option value="NOR">Norway</option>
	<option value="OMN">Oman</option>
	<option value="PAK">Pakistan</option>
	<option value="PLW">Palau</option>
	<option value="PSE">Palestinian Territory, Occupied</option>
	<option value="PAN">Panama</option>
	<option value="PNG">Papua New Guinea</option>
	<option value="PRY">Paraguay</option>
	<option value="PER">Peru</option>
	<option value="PHL">Philippines</option>
	<option value="PCN">Pitcairn</option>
	<option value="POL">Poland</option>
	<option value="PRT">Portugal</option>
	<option value="PRI">Puerto Rico</option>
	<option value="QAT">Qatar</option>
	<option value="REU">Réunion</option>
	<option value="ROU">Romania</option>
	<option value="RUS">Russian Federation</option>
	<option value="RWA">Rwanda</option>
	<option value="BLM">Saint Barthélemy</option>
	<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KNA">Saint Kitts and Nevis</option>
	<option value="LCA">Saint Lucia</option>
	<option value="MAF">Saint Martin (French part)</option>
	<option value="SPM">Saint Pierre and Miquelon</option>
	<option value="VCT">Saint Vincent and the Grenadines</option>
	<option value="WSM">Samoa</option>
	<option value="SMR">San Marino</option>
	<option value="STP">Sao Tome and Principe</option>
	<option value="SAU">Saudi Arabia</option>
	<option value="SEN">Senegal</option>
	<option value="SRB">Serbia</option>
	<option value="SYC">Seychelles</option>
	<option value="SLE">Sierra Leone</option>
	<option value="SGP">Singapore</option>
	<option value="SXM">Sint Maarten (Dutch part)</option>
	<option value="SVK">Slovakia</option>
	<option value="SVN">Slovenia</option>
	<option value="SLB">Solomon Islands</option>
	<option value="SOM">Somalia</option>
	<option value="ZAF">South Africa</option>
	<option value="SGS">South Georgia and the South Sandwich Islands</option>
	<option value="SSD">South Sudan</option>
	<option value="ESP">Spain</option>
	<option value="LKA">Sri Lanka</option>
	<option value="SDN">Sudan</option>
	<option value="SUR">Suriname</option>
	<option value="SJM">Svalbard and Jan Mayen</option>
	<option value="SWZ">Swaziland</option>
	<option value="SWE">Sweden</option>
	<option value="CHE">Switzerland</option>
	<option value="SYR">Syrian Arab Republic</option>
	<option value="TWN">Taiwan, Province of China</option>
	<option value="TJK">Tajikistan</option>
	<option value="TZA">Tanzania, United Republic of</option>
	<option value="THA">Thailand</option>
	<option value="TLS">Timor-Leste</option>
	<option value="TGO">Togo</option>
	<option value="TKL">Tokelau</option>
	<option value="TON">Tonga</option>
	<option value="TTO">Trinidad and Tobago</option>
	<option value="TUN">Tunisia</option>
	<option value="TUR">Turkey</option>
	<option value="TKM">Turkmenistan</option>
	<option value="TCA">Turks and Caicos Islands</option>
	<option value="TUV">Tuvalu</option>
	<option value="UGA">Uganda</option>
	<option value="UKR">Ukraine</option>
	<option value="ARE">United Arab Emirates</option>
	<option value="GBR">United Kingdom</option>
	<option value="USA">United States</option>
	<option value="UMI">United States Minor Outlying Islands</option>
	<option value="URY">Uruguay</option>
	<option value="UZB">Uzbekistan</option>
	<option value="VUT">Vanuatu</option>
	<option value="VEN">Venezuela, Bolivarian Republic of</option>
	<option value="VNM">Viet Nam</option>
	<option value="VGB">Virgin Islands, British</option>
	<option value="VIR">Virgin Islands, U.S.</option>
	<option value="WLF">Wallis and Futuna</option>
	<option value="ESH">Western Sahara</option>
	<option value="YEM">Yemen</option>
	<option value="ZMB">Zambia</option>
	<option value="ZWE">Zimbabwe</option>
    </select></div>
     <div class="span1 thrdreg4">
<a class="btn1 btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add3" >Add </a><br/>
    <a class="btn1 btn-small" href="JavaScript:void(0);" id="btn-remove3"> Remove</a></div>
 
  <div class="span3">
    <select name="pref_country[]" id="select-to3" multiple size="5">
      
    </select>
 
  </fieldset> </div>
    </div>    
 
 
 
 
 
    
    
  <div class="span12 thrdreg3"> 
  <div class="span3 adinput2">
   <label>Education:</label></div>
    <div class="span3">
   
    <fieldset>
      <select name="selectfrom4" id="select-from4" multiple size="5">
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
     <div class="span1 thrdreg4">
<a class="btn1 btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add4" >Add </a><br/>
    <a class="btn1 btn-small" href="JavaScript:void(0);" id="btn-remove4"> Remove</a></div>
 
  <div class="span3">
    <select name="pref_education[]" id="select-to4" multiple size="5">
      
    </select>
 
  </fieldset> </div>
    </div>    
    
    
    <div class="span12 thrdreg3"> 
  <div class="span3 adinput2">
   <label>Occupation :</label></div>
    <div class="span3">
   
    <fieldset>
 
    <select name="selectfrom5" id="select-from5" multiple size="5">
    <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ADMIN --" class="a"><option value="49">Manager</option><option value="48">Supervisor</option><option value="47">Officer</option><option value="39">Administrative Professional</option><option value="50">Executive</option><option value="46">Clerk</option><option value="63">Human Resources Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AGRICULTURE --" class="a"><option value="37">Agriculture &amp; Farming Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AIRLINE --" class="a"><option value="30">Pilot</option><option value="28">Air Hostess</option><option value="29">Airline Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ARCHITECT &amp; DESIGN --" class="a"><option value="19">Architect</option><option value="20">Interior Designer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BANKING &amp; FINANCE --" class="a"><option value="7">Chartered Accountant</option><option value="10">Company Secretary</option><option value="8">Accounts/Finance Professional</option><option value="16">Banking Service Professional</option><option value="9">Auditor</option><option value="69">Financial Accountant</option><option value="64">Financial Analyst / Planning</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BEAUTY &amp; FASHION --" class="a"><option value="25">Fashion Designer</option><option value="33">Beautician</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- CIVIL SERVICES --" class="a"><option value="52">Civil Services (IAS/IPS/IRS/IES/IFS)</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- DEFENCE --" class="a"><option value="53">Army</option><option value="54">Navy</option><option value="55">Airforce</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- EDUCATION --" class="a"><option value="5">Professor / Lecturer</option><option value="4">Teaching / Academician</option><option value="6">Education Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- HOSPITALITY --" class="a"><option value="34">Hotel / Hospitality Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- IT &amp; ENGINEERING --" class="a"><option value="1">Software Professional</option><option value="2">Hardware Professional</option><option value="3">Engineer - Non IT</option><option value="65">Designer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LEGAL --" class="a"><option value="17">Lawyer &amp; Legal Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LAW ENFORCEMENT --" class="a"><option value="18">Law Enforcement Officer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDICAL --" class="a"><option value="12">Doctor</option><option value="14">Health Care Professional</option><option value="15">Paramedical Professional</option><option value="13">Nurse</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MARKETING &amp; SALES --" class="a"><option value="42">Marketing Professional</option><option value="43">Sales Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDIA &amp; ENTERTAINMENT --" class="a"><option value="27">Journalist</option><option value="22">Media Professional</option><option value="24">Entertainment Professional</option><option value="26">Event Management Professional</option><option value="21">Advertising / PR Professional</option><option value="66">Designer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MERCHANT NAVY --" class="a"><option value="32">Mariner / Merchant Navy</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- SCIENTIST --" class="a"><option value="35">Scientist / Researcher</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- TOP MANAGEMENT --" class="a"><option value="41">CXO / President, Director, Chairman</option><option value="70">Business Analyst</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- OTHERS --" class="a"><option value="45">Consultant</option><option value="40">Customer Care Professional</option><option value="36">Social Worker</option><option value="51">Sportsman</option><option value="44">Technician</option><option value="38">Arts &amp; Craftsman</option><option value="67">Student</option><option value="68">Librarian</option><option value="888">Not Working</option></optgroup>	
    </select></div>
     <div class="span1 thrdreg4">
<a class="btn1 btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add5" >Add </a><br/>
    <a class="btn1 btn-small" href="JavaScript:void(0);" id="btn-remove5"> Remove</a></div>
 
  <div class="span3">
    <select name="pref_occupation[]" id="select-to5" multiple size="5">
      
    </select>
 
  </fieldset> </div>
    </div>    
    
  
  
  
  <div class="span12 thrdreg3"> 
  <div class="span3 adinput2">
   <label>Annual income:</label></div>
    <div class="span3"><div class="controls">
      <input type="text" style="border: 2px solid #fff; margin-top:0px;color:#000; font-weight:100" class="input_feild" name="pref_income" id="inputEmail">    </div></div>
    </div>
 
 
 
 
 <div class="span12 thrdreg3"> 
  <div class="span3 adinput2">
   <label>Partner 
discription :</label></div>
    <div class="span3">
    <textarea class="form-control textnew thrdreg7" rows="4" name="partner_disc" style="margin-top:0px; padding-left:10px;"></textarea><br/><span style=" color:#FFFFFF;">Describe your expectation</span><br/><br/>
    </div>
   </div> 
  
    
                
                </div>
                <button type="submit" class="btn1 btn-large thrdreg6">Update</button>
                
                </form>
                </div>
                
 <div id="abc">
<div id="popupContact">
<form action="#" id="form" method="post" name="form">
<img id="close" src="<?php echo base_url();?>file/img/first-registration22_05.png" onclick ="div_hide()">
<h2>Are you sure...?</h2>
<p>If you dont add your partner preferences,your matches may not
contact you</p>
<a href="#"><input type="button" id="button" value="I dont want to add details now" style="margin-right:10px;"/></a>
<a href="#"><input type="button" id="button" value="Let me add details"/></a>
</form>
</div>
</div>  
 <a href="#" id="popup" onClick="div_show()"><p>Skip this page>>>></p></a>      
      </div> 
	</div>
</div>