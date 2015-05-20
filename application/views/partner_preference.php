<?php $this->load->view("header"); ?>
<title><?php echo $user_id; ?></title>
<link href="<?php echo base_url();?>file/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/styleh.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/baseh.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/style1.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url();?>file/css/elements.css" rel="stylesheet">
<script src="<?php echo base_url();?>file/js/my_js.js"></script>
<script src="<?php echo base_url();?>file/js/jquery-1.9.1.min.js"></script>
<link href="<?php echo base_url();?>file/css/elements.css" rel="stylesheet">
<script src="<?php echo base_url();?>file/js/my_js.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/common1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/common2.js"></script>
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
        $('#state_dropdown1 option:selected').each( function() {
                $('#select-to1').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove1').click(function(){
        $('#select-to1 option:selected').each( function() {
            $('#state_dropdown1').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
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
<script>
$(document).ready(function() {
 
    $('#btn-add6').click(function(){
        $('#state_dropdown option:selected').each( function() {
                $('#select-to6').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
          
        });
    });
    $('#btn-remove6').click(function(){
        $('#select-to6 option:selected').each( function() {
            $('#state_dropdown').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>
<script>
$(document).ready(function() {
 
    $('#btn-add7').click(function(){
        $('#city_dropdown option:selected').each( function() {
                $('#select-to7').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove7').click(function(){
        $('#select-to7 option:selected').each( function() {
            $('#city_dropdown7').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>
<script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(function(){
    $('#age_to').change(function(){
       var selectedMaxValue = Number($(this).val());
       var selectedMinValue = Number($('#age_from').val());
        
       if( selectedMaxValue > 0  && selectedMinValue > selectedMaxValue) {
           alert('age selection does not exist');
           $(this).find('option:first').attr('selected', 'selected');
       }
       else if( selectedMaxValue > 0 && selectedMinValue === 0) {
           alert('Please select age from option first');
           $(this).find('option:first').attr('selected', 'selected');
       }       
       
    });
})
});//]]>  
</script>
<script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(function(){
    $('#height_to').change(function(){
       var selectedMaxValue = Number($(this).val());
       var selectedMinValue = Number($('#height_from').val());
        
       if( selectedMaxValue > 0  && selectedMinValue > selectedMaxValue) {
           alert('Height option does not exist');
           $(this).find('option:first').attr('selected', 'selected');
       }
       else if( selectedMaxValue > 0 && selectedMinValue === 0) {
           alert('Please select height option first');
           $(this).find('option:first').attr('selected', 'selected');
       }       
       
    });
})
});//]]>  
</script>

<script>
function validateForm1() {
	var about=document.forms["form"]["partner_disc"].value
	if (about==null || about=="") {
        alert("Please tell about your partner");
        return false;
    }

		if (document.forms["form"]["partner_disc"].value.length <= 50)
	
	  {   
	
		alert("This feild contain atleast 50 character");
		return false;
	
	  }
}
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.js"></script>
<style>
option {
	background-color: #3c8483;
}
</style>
<div class="row-fluid content">
  <div class="container">
  <div class="span12 thrdreg">
  <a href="#" id="popup" onClick="div_show()">
  <p>Skip this page>>>></p>
  </a>
  <h3>Complete your partner preferences to find your Soulmate.</h3>
<!--  <h4 style="padding-bottom:25px;">Here you can custamize your partner preference.you will receive matches by your e-mail</h4>-->
  <div class="span10 thrdreg1">
  <div class="span11 thrdreg2">
  <form  action="<?php echo base_url();?>index.php/insert_partner_pref" onsubmit="return validateForm1()"  method="post">
    <div class="span12">
      <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
      <div class="span3 thrdreg3" style="margin-left:0px;">
        <label>Prefered age :</label>
      </div>
      <div class="span8 thrdreg3">
        <select name="pref_age_from" id="age_from" class="selectpicker day2" style="margin-right:7px;">
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
        </select>
        to
        <select name="pref_age_to" class="selectpicker day2" id="age_to" style="margin-left:7px;margin-right:7px;">
          <option value="0">select option</option>
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
        </select>
        years</div>
    </div>
    <div class="span12 thrdreg3">
      <div class="span3 adinput2">
        <label class="radio-inline">Marital Status :</label>
      </div>
      <div class="span8">
        <div class="span2">
          <input type="radio" name="pref_merital" id="inlineRadio1 " value="any" style="margin:2px 7px 0 0 ;">
          Any</div>
        <div class="span3">
          <input type="radio" name="pref_merital" id="unmarried" value="option1" style="margin:2px 7px 0 0 ;">
          Unmarried</div>
        <div class="span2">
          <input type="radio" name="pref_merital" id="inlineRadio1" value="widow" style="margin:2px 7px 0 0 ;">
          widow </div>
        <div class="span3">
          <input type="radio" name="pref_merital" id="inlineRadio1" value="Divorced" style="margin:2px 7px 0 0 ;">
          Divorsed</div>
      </div>
    </div>
    <div class="span12 thrdreg3">
      <div class="span3">
        <label>Height :</label>
      </div>
      <div class="span8 thrdreg3">
        <select name="pref_height_from" id="height_from" class="selectpicker day2" style="margin-right:7px;">
          <option value="0">- Cms -</option>
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
        </select>
        to
        <select name="pref_height_to" class="selectpicker day2" id="height_to" style="margin-left:7px;margin-right:7px;">
          <option value="0">- Cms -</option>
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
      </div>
    </div>
    <div class="span12 thrdreg3">
      <div class="span3 adinput2">
        <label class="radio-inline">Physical Status :</label>
      </div>
      <div class="span8">
        <div class="span2">
          <input type="radio" name="pref_physical_status" id="inlineRadio1 " value="Normal" style="margin:2px 7px 0 0 ;">
          Normal</div>
        <div class="span4">
          <input type="radio" name="pref_physical_status" id="inlineRadio1" value="Physically challenged" style="margin:2px 7px 0 0 ;">
          Physically challenged</div>
        <div class="span3">
          <input type="radio" name="pref_physical_status" id="inlineRadio1" value="Doesnt matter" style="margin:2px 7px 0 0 ;">
          Doesnt matter </div>
      </div>
    </div>
    <?php
			if($religion->num_rows > 0){
				?>
    <div class="span12 thrdreg3">
      <div class="span3 adinput2">
        <label>Religion</label>
      </div>
      <div class="span8">
        <select id="Religion"  class="selectpicker FormInput" name="pref_religion" onchange="selectState1(this.options[this.selectedIndex].value)">
          <option value="-1">Select Religion</option>
          <?php
								foreach($religion->result() as $listElement){
									?>
          <option value="<?php echo $listElement->religion_id?>"><?php echo $listElement->religion_name?></option>
          <?php
								}
								?>
        </select>
      </div>
    </div>
    <div class="span12 thrdreg3">
      <div class="span3 adinput2">
        <label>Caste:</label>
      </div>
      <div class="span3">
        <div id="CasteList">
          <select name="cast" size="5" multiple="multiple" class="selectpicker FormInput" id="state_dropdown1" onchange="selectCity1(this.options[this.selectedIndex].value)">
            <option value="-1">Select Cast</option>
          </select>
          <span id="state_loader"></span> </div>
      </div>
      <div class="span1 thrdreg4"> <a class="btn1 btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add1" >Add </a><br/>
        <a class="btn1 btn-small" href="JavaScript:void(0);" id="btn-remove1"> Remove</a></div>
      <div class="span3">
        <select name="pref_cast[]" id="select-to1" multiple size="5">
        </select>
      </div>
    </div>
    <?php
			}else{
				echo 'No Country Name Found';
			}
			?>
    <div class="span12 thrdreg3">
    <div class="span3 adinput2">
      <label>Mother Tongue:</label>
    </div>
    <div class="span3">
    <fieldset>
      <select class="FormInput" id="SelectCaste" disabled="disabled" name="" style="display: none;">
      </select>
      <select  id="select-from" multiple size="5">
        <?php if($mother->num_rows > 0) {?>
        <?php foreach ($mother->result() as $val){?>
        <option  value="<?php echo $val->mother_id ?>"><?php echo $val->mother_tongue_name ?></option>
        <?php }}?>
      </select>
      </div>
      <div class="span1 thrdreg4"> <a class="btn1 btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add" >Add </a><br/>
        <a class="btn1 btn-small" href="JavaScript:void(0);" id="btn-remove"> Remove</a></div>
      <div class="span3">
        <select  name="pref_mothertounge[]" id="select-to" multiple size="5">
        </select>
      </div>
      </div>
      <div class="span12 thrdreg3">
        <div class="span3 adinput2">
          <label>Star:</label>
        </div>
        <div class="span3">
        <fieldset>
          <select name="pref_star" id="select-from2" multiple size="5">
            <?php if($star->num_rows > 0) {?>
            <?php foreach ($star->result() as $val){?>
            <option  value="<?php echo $val->star_id ?>"><?php echo $val->star_name; ?> </option>
            <?php }}?>
          </select>
          </div>
          <div class="span1 thrdreg4"> <a class="btn1 btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add2" >Add </a><br/>
            <a class="btn1 btn-small" href="JavaScript:void(0);" id="btn-remove2"> Remove</a></div>
          <div class="span3">
          <select name="pref_star[]" id="select-to2" multiple size="5">
          </select>
        </fieldset>
      </div>
      </div>
      <div class="span12 thrdreg3">
        <div class="span3 adinput2">
          <label class="radio-inline">Eating Habits :</label>
        </div>
        <div class="span8">
          <div class="span3">
            <input type="radio" name="pref_eating" id="inlineRadio1 " value="Vegetarian" style="margin:2px 7px 0 0 ;">
            Vegetarian</div>
          <div class="span3">
            <input type="radio" name="pref_eating" id="inlineRadio1" value="Non vegitarian" style="margin:2px 7px 0 0 ;">
            Non vegitarian</div>
          <div class="span3">
            <input type="radio" name="pref_eating" id="inlineRadio1" value="Eggetarian" style="margin:2px 7px 0 0 ;">
            Eggetarian</div>
          <div class="span3">
            <input type="radio" name="pref_eating" id="inlineRadio1" value="Dosn't Matter" style="margin:2px 7px 0 0 ;">
            Doesnt matter</div>
        </div>
      </div>
      <div class="span12 thrdreg3">
        <div class="span3 adinput2">
          <label class="radio-inline">Drinking Habits :</label>
        </div>
        <div class="span9">
          <div class="span3">
            <input type="radio" name="pref_drinking" id="inlineRadio1 " value="Doesnt matter" style="margin:2px 7px 0 0 ;">
            Doesnt matter</div>
          <div class="span3" style="margin-left:0px;">
            <input type="radio" name="pref_drinking" id="inlineRadio1" value="Non drinker" style="margin:2px 7px 0 0 ;">
            Non drinker</div>
          <div class="span3" style="margin-left:0px;">
            <input type="radio" name="pref_drinking" id="inlineRadio1" value="Light / Social drinker" style="margin:2px 7px 0 0 ;">
            Light / Social drinker</div>
          <div class="span3" style="margin-left:0px;">
            <input type="radio" name="pref_drinking" id="inlineRadio1" value="Regular drinker" style="margin:2px 7px 0 0 ;">
            Regular drinker</div>
        </div>
      </div>
      <div class="span12 thrdreg3">
        <div class="span3 adinput2">
          <label class="radio-inline">Smoking Habits :</label>
        </div>
        <div class="span9">
          <div class="span3">
            <input type="radio" name="pref_smoking" id="inlineRadio1 " value="Doesnt matter" style="margin:2px 7px 0 0 ;" />
            Doesnt matter</div>
          <div class="span3" style="margin-left:0px;">
            <input type="radio" name="pref_smoking" id="inlineRadio1" value="Non smoker" style="margin:2px 7px 0 0 ;">
            Non smoker</div>
          <div class="span3" style="margin-left:0px;">
            <input type="radio" name="pref_smoking" id="inlineRadio1" value="Light / Social smoker" style="margin:2px 7px 0 0 ;">
            Light/Social smoker</div>
          <div class="span3" style="margin-left:0px;">
            <input type="radio" name="pref_smoking" id="inlineRadio1" value="Regular smoker" style="margin:2px 7px 0 0 ;">
            Regular smoker</div>
        </div>
      </div>
      <?php
			if($list->num_rows > 0){
				?>
      <div class="span12 thrdreg3">
        <div class="span3 adinput2">
          <label>Prefered countries :</label>
        </div>
        <div class="span3">
          <fieldset>
            <select name="" id="select-from3" multiple size="5" onchange="selectState(this.options[this.selectedIndex].value)">
              <option value="-1">Select country</option>
              <?php
								foreach($list->result() as $listElement){
									?>
              <option value="<?php echo $listElement->iso3?>"><?php echo $listElement->country_name?></option>
              <?php
								}
								?>
            </select>
          </fieldset>
        </div>
        <div class="span1 thrdreg4"> <a class="btn1 btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add3" >Add </a><br/>
          <a class="btn1 btn-small" href="JavaScript:void(0);" id="btn-remove3"> Remove</a></div>
        <div class="span3">
          <fieldset>
            <select name="pref_country[]" id="select-to3" multiple size="5">
            </select>
          </fieldset>
        </div>
      </div>
      <div class="span12 thrdreg3">
        <div class="span3 adinput2">
          <label>Prefered States :</label>
        </div>
        <div class="span3">
          <fieldset>
            <select name=""   id="state_dropdown" multiple size="5" onchange="selectCity(this.options[this.selectedIndex].value)">
              <option value="-1">Select state</option>
            </select>
            <span id="state_loader"></span>
          </fieldset>
        </div>
        <div class="span1 thrdreg4"> <a class="btn1 btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add6" >Add </a><br/>
          <a class="btn1 btn-small" href="JavaScript:void(0);" id="btn-remove6"> Remove</a></div>
        <div class="span3">
          <select name="pref_state[]" id="select-to6" multiple size="5">
          </select>
        </div>
      </div>
      <div class="span12 thrdreg3">
        <div class="span3 adinput2">
          <label>Prefered Cities :</label>
        </div>
        <div class="span3">
          <fieldset>
            <select name="" multiple size="5" id="city_dropdown">
              <option value="-1">Select city</option>
            </select>
            <span id="city_loader"></span>
          </fieldset>
        </div>
        <div class="span1 thrdreg4"> <a class="btn1 btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add7" >Add </a><br/>
          <a class="btn1 btn-small" href="JavaScript:void(0);" id="btn-remove7"> Remove</a></div>
        <div class="span3">
          <select name="pref_city[]" id="select-to7" multiple size="5">
          </select>
        </div>
      </div>
      <?php
			}else{
				echo 'No Country Name Found';
			}
			?>
      <div class="span12 thrdreg3">
      <div class="span3 adinput2">
        <label>Education:</label>
      </div>
      <div class="span3">
        <fieldset>
          <select name="selectfrom4" id="select-from4" multiple size="5">
            <?php if($education->num_rows > 0) {?>
            <?php foreach ($education->result() as $val){?>
            <option  value="<?php echo $val->education_id; ?>"><?php echo $val->education_name;?></option>
            <?php }}?>
          </select>
        </fieldset>
      </div>
      <div class="span1 thrdreg4"> <a class="btn1 btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add4" >Add </a><br/>
        <a class="btn1 btn-small" href="JavaScript:void(0);" id="btn-remove4"> Remove</a></div>
      <div class="span3">
        <fieldset>
          <select name="pref_education[]" id="select-to4" multiple size="5">
          </select>
        </fieldset>
      </div>
      <div class="span12 thrdreg3">
      <div class="span3 adinput2">
        <label>Occupation :</label>
      </div>
      <div class="span3">
        <fieldset>
          <select name="selectfrom5" id="select-from5" multiple size="5">
            <?php if($occupation->num_rows > 0) {?>
            <?php foreach ($occupation->result() as $val){?>
            <option  value="<?php echo $val->occupation_id; ?>"><?php echo $val->occupation_name;?></option>
            <?php }}?>
          </select>
        </fieldset>
      </div>
      <div class="span1 thrdreg4"> <a class="btn1 btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add5" >Add </a><br/>
        <a class="btn1 btn-small" href="JavaScript:void(0);" id="btn-remove5"> Remove</a></div>
      <div class="span3">
      <select name="pref_occupation[]" id="select-to5" multiple size="5">
      </select>
    </fieldset>
    </div>
    </div>
    <div class="span12 thrdreg3">
      <div class="span3 adinput2">
        <label>Monthly income:</label>
      </div>
      <div class="span6">
        <div class="controls">
          <select name="pref_income_currency" class="selectpicker day2" style="margin-right:7px; width:100px;">
            <?php if($currency->num_rows > 0) {?>
            <?php foreach ($currency->result() as $val){?>
            <option  value="<?php echo $val->id_currency ?>"><?php echo $val->currency_country_name ?>-<?php echo $val->currrency_symbol ?></option>
            <?php }}?>
          </select>
          <input type="text" style="border: 2px solid #fff; height:30px; margin-top:0px;color:#000; font-weight:100" class="input_feild" name="pref_income" id="inputEmail">
        </div>
      </div>
    </div>
    <div class="span12 thrdreg3">
      <div class="span3 adinput2">
        <label>Partner 
          description :</label>
      </div>
      <div class="span3">
        <textarea class="form-control textnew thrdreg7" rows="4" name="partner_disc" style="margin-top:0px; padding-left:10px;"></textarea>
        <br/>
        <span style=" color:#FFFFFF;">Describe your expectation</span><br/>
        <br/>
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
      <a href="<?php echo base_url();?>index.php/hobby">
      <input type="button" onclick="" id="button" value="I dont want to add details now" style="margin-right:10px;"/>
      </a> <a href="<?php echo base_url();?>index.php/partnerpref/partner">
      <input type="button" id="button" value="Let me add details"/>
      </a>
    </form>
  </div>
</div>
<a href="#" id="popup" onClick="div_show()">
<p>Skip this page>>>></p>
</a>
</div>
</div>
</div>
