<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/common.js"></script>


<?php if($this->session->userdata('logged_in'))
 {
	 ?>	
     &nbsp;
     <?php  }
 else
 {?>
     
<a name="aaaa" id="aaaa"></a>
<div class="row-fluid reg">
     	<div class="container">
        <div class="row show-grid">
                <div class="span3" data-original-title="" title=""></div>  <div class="span2" data-original-title="" title=""></div><div class="span5" data-original-title="" title=""><h2>REGISTER NOW</h2>
                </div>
          </div>
           <script>

function validateForm1() {
	var T = document.forms["frm1"]["profile_for"].value;
    if (T==null || T=="") {
        alert("Select for whom you are registering the profile");
        return false;
    }
	
	var x = document.forms["frm1"]["name"].value;
    if (x==null || x=="") {
        alert("Name must be filled out");
        return false;
    }
	var A = document.forms["frm1"]["gender"].value;
    if (A==null || A=="") {
        alert("Select a gender");
        return false;
    }
	var month = document.forms["frm1"]["month"].value;
	var day = document.forms["frm1"]["day"].value;
	var year = document.forms["frm1"]["year"].value;
	if (A=="male"&&month==""&&day==""&&year=="") {
        alert("Select date of birth of Groom");
        return false;
    }
	if (A=="female"&&month==""&&day==""&&year=="") {
        alert("Select date of birth of Bride");
        return false;
    }
	
	if (day==null || day=="") {
        alert("Select  day");
        return false;
    }
    if (month==null || month=="") {
        alert("Select  month");
        return false;
    }
	
    
	 if (year==null || year=="") {
        alert("Select  year");
        return false;
    }
	var religion=document.forms["frm1"]["religion"].value
	if (religion==null || religion=="-1") {
        alert("Select  a religion");
        return false;
    }
	/*var cast=document.forms["frm1"]["cast"].value
	if (religion=="15" || religion=="16") {
       
    }
	if (cast==null || cast=="-1") {
        alert("Select  a cast");
        return false;
    }*/
	var mother_tongue=document.forms["frm1"]["mother_tongue"].value
	if (mother_tongue==null || mother_tongue=="") {
        alert("Select  a Mothertongu");
        return false;
    }
	var nationality=document.forms["frm1"]["nationality"].value
	if (nationality==null || nationality=="") {
        alert("Select  a nationality");
        return false;
    }
	
	
	var password=document.forms["frm1"]["password"].value
	if (password==null || password=="") {
        alert("The password feild must be filled out");
        return false;
    }
	if (password.length<6) {
        alert("The password contail only 6-20 charecters");
        return false;
    }
	
    
	/*var dropdown = document.getElementById("Zdd_1");
dropdown.onchange = function(event){
    if(dropdown.value=="Yes"){
        alert("Your message")
    }
}*/
   
    
		if (document.forms["frm1"]["mobile"].value.length != 10)
	
	  {   
	
		alert("Invalid phone number");
		return false;
	
	  }
  var phoneno = /^\d{10}$/;  
  if(document.forms["frm1"]["mobile"].value.match(phoneno))  
        {  
      return true;  
        }  
      else  
        {  
        alert("Invalid mobile number");  
        return false;  
        }  
  
   var y = document.forms["frm1"]["email"].value;
    var atpos = y.indexOf("@");
    var dotpos = y.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=y.length) {
        alert("Not a valid e-mail address");
        return false;
    }/**/


}  
</script>
<form class="form-horizontal" name="frm1"  action="<?php echo base_url();?>index.php/insert_reg" onsubmit="return validateForm1()" method="post">

          <div class="row-fluid register1">
        <div class="span4">
         
          <p>
          
  <div class="control-group">
    <label class="control-label" for="inputEmail">PROFILE FOR :</label>
    <div class="controls">
    <script>
    function change() {
        var select = document.getElementById("slct");
        var divv = document.getElementById("prof");
		var divg = document.getElementById("gend");
		
        var value = select.value;
		if (value == "") {
            toAppend = "<label class='radio-inline'><input type='radio'  name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio'   name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>"; divg.innerHTML=toAppend; return;
            }
    		if (value == "Son") {
            
			toAppend = "<label class='radio-inline'><input type='radio' checked='checked'  name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio'  disabled='disabled'  name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>";
				 divg.innerHTML=toAppend;
			 return;
            }
            if (value == "Daughter") {
                toAppend = "<label class='radio-inline'><input type='radio'   name='gender'  id='inlineRadio1' disabled='disabled' style=' margin-right:5px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio' checked='checked'   name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>";divg.innerHTML = toAppend;  return;
            }
            if (value =="Brother") {
                toAppend = "<label class='radio-inline'><input type='radio' checked='checked'  name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio' disabled='disabled'    name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>";divg.innerHTML = toAppend;  return;

            }
			if (value =="Sister") {
                toAppend = "<label class='radio-inline'><input type='radio'   name='gender'  id='inlineRadio1' style=' disabled='disabled' margin-right:5px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio' checked='checked'   name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>";divg.innerHTML = toAppend;  return;

         	}
			if (value =="Myself") {
                toAppend = "<label class='radio-inline'><input type='radio'  name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio'   name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>:";divg.innerHTML = toAppend;  return;

            }
			if (value =="Relative") {
                toAppend = "<label class='radio-inline'><input type='radio'  name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio'   name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>:";divg.innerHTML = toAppend;  return;

            }
			if (value =="Friend") {
                toAppend = "<label class='radio-inline'><input type='radio'  name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio'   name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>:";divg.innerHTML = toAppend;  return;

            }
   }
</script>

  <div id="container"></div>
 
    <select id="slct" onchange="change();" name="profile_for"  class="selectpicker select_select">
			<option value="">Select Matrimony Profile for</option>
			<option value="Myself">Myself</option>
			<option value="Son">Son</option>
			<option value="Daughter">Daughter</option>
			<option value="Brother">Brother</option>
			<option value="Sister">Sister</option>
			<option value="Relative">Relative</option>
			<option value="Friend">Friend</option>
  </select>
    </div>
  </div>
  <div class="control-group">
   
  <label class="control-label" for="inputEmail">DATE OF BIRTH : </label>
    <div class="controls">
    <select name="day" class="selectpicker day" >
    <option value="">DD</option>
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
  <option value="">MM</option>
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
  <option value="">YYYY</option>
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
    </div>
  </div>
  <script>
$(document).ready(function() {
    /// make loader hidden in start
    $('#Loading').hide();    
 
    $('#email').blur(function(){
    var a = $("#email").val();
    var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
       // check if email is valid
    if(filter.test(a)){
                // show loader 
        $('#Loading').show();
        $.post("<?php echo base_url()?>index.php/insert_reg/check_email_availablity", {
            email: $('#email').val()
        }, function(response){
                        //#emailInfo is a span which will show you message
            $('#Loading').hide();
            setTimeout("finishAjax('Loading', '"+escape(response)+"')", 400);
        });
        return false;
    }
});
function finishAjax(id, response){
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn();
} 
</script>
<div class="control-group">
 
    <label class="control-label" for="inputEmail">MOTHER TONGUE : </label>
    <div class="controls">
 
    <select class="selectpicker select_select" name="mother_tongue">

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
  
  <div class="control-group">
    <label class="control-label" for="inputEmail">E-MAIL :</label>
    <div class="controls">
      <input type="text" class="input_feild" style="height: 20px;" value="<?php echo set_value('email'); ?>" name="email" id="email">
       <?php echo form_error('email'); ?>
  
       
    </div>
  </div>
  
 </p>
         
        </div>
        <div class="span4">
         
          <p>
            <div class="control-group">
    <label class="control-label" id="prof" for="inputEmail"><div id="prof">NAME:</div></label>
    <div class="controls">
      <input type="text" class="input_feild" style="height: 20px;" name="name" value="<?php echo set_value('name'); ?>" id="inputEmail">
      <?php echo form_error('name'); ?>
    </div>
  </div>
  <?php
			if($list->num_rows > 0){
				?>
  <div class="control-group">
    <label class="control-label" for="inputEmail">RELIGION : </label>
    <div class="controls">
    <select  class="selectpicker select_select" name="religion" onchange="selectState(this.options[this.selectedIndex].value)">
								<option value="-1">Select Religion</option>
								<?php
								foreach($list->result() as $listElement){
									?>
									<option value="<?php echo $listElement->religion_id?>"><?php echo $listElement->religion_name?></option>
									<?php
								}
								?>
							</select>
    
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">NATIONALITY :</label>
    <div class="controls">
    <select class="selectpicker select_select" name="nationality">
<option value="">Select A Country</option>
<?php
								foreach($country as $count){
									?>
									<option value="<?php echo $count->country_name;?>"><?php echo $count->country_name;?></option>
									<?php
								}
								?>
  </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label"  for="inputEmail">MOBILE NO :</label>
    <div class="controls">
      <input type="text" class="input_feild" style="height: 20px;" value="<?php echo set_value('mobile'); ?>" name="mobile" id="inputEmail" >  <?php echo form_error('mobile'); ?>
    </div>
  </div>
   
  
  
 </p>
         
        </div>
        <div class="span4">
         
          <p>
           <div class="control-group">
   <label class="control-label" for="inputEmail">GENDER :</label>
    <div class="controls"> <div id="gend">
    <label class='radio-inline'>
    <input type='radio'  name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>
    MALE</label>
    <label class='radio-inline'>
    <input type='radio'   name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>
    </div>
    

    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">CAST/DIVISION : </label>
    <div class="controls">
     <select name="cast" class="selectpicker select_select" id="state_dropdown" onchange="selectCity(this.options[this.selectedIndex].value)">
								<option value="-1">Select Cast</option>
							</select>
							<span id="state_loader"></span>
    
    </div>
  </div>
   <?php
			}else{
				echo 'No Country Name Found';
			}
			?>
  <div class="control-group">
    <label class="control-label" for="inputEmail">LOGIN  PASSWORD :</label>
    <div class="controls">
      <input name="password" class="input_feild" style="height: 20px;" type="password" id="inputEmail">  <?php echo form_error('password'); ?>
    </div>
  </div>
  
 </p>
         
        </div>
      </div>
       <div class="row-fluid">
        <div class="span4"></div><div class="span1"></div>
         <div class="span4 butten"><div class="control-group"><button type="submit" style="background-color:#FFF;" class="btn1 btn-large">REGISTER FREE</button>
    <div class="controls">
    
      
    </div>
  </div></div></div>
          <div class="span4"></div>
      </form>
     		</div>
     </div>
     <?php } ?>
      <div class="row-fluid feutured"><div class="container">
        <div class="row show-grid">
                <div class="span3" data-original-title="" title=""></div>  <div class="span2" data-original-title="" title=""></div><div class="span5 feutured" data-original-title="" title=""><h3>PROFILE VIEWS</h3>
                </div>
          </div>
          <div class="row show-grid">
          
          	<div class="container fet">
            <div class="span2"><img src="<?php echo base_url();?>file/img/images/fet1_23.jpg"><h5 class="disc">ID:EJK12586
27,CASTE,PLACE
CIVIL ENGINEER</h5>
<div class="span2"></div><button type="submit" class="btn-danger">View Profile</button></div>
            <div class="span2"><img src="<?php echo base_url();?>file/img/images/fet1_23.jpg"><h5 class="disc">ID:EJK12586
27,CASTE,PLACE
CIVIL ENGINEER</h5>
<div class="span2"></div><button type="submit" class="btn-danger">View Profile</button>
</div>
            <div class="span2"><img src="<?php echo base_url();?>file/img/images/fet1_23.jpg"><h5 class="disc">ID:EJK12586
27,CASTE,PLACE
CIVIL ENGINEER</h5>
<div class="span2"></div><button type="submit" class="btn-danger">View Profile</button>
</div>
            <div class="span2"><img src="<?php echo base_url();?>file/img/images/fet1_23.jpg"><h5 class="disc">ID:EJK12586
27,CASTE,PLACE
CIVIL ENGINEER</h5>
<div class="span2"></div><button type="submit" class="btn-danger">View Profile</button>
</div>
            <div class="span2"><img src="<?php echo base_url();?>file/img/images/fet1_23.jpg"><h5 class="disc">ID:EJK12586
27,CASTE,PLACE
CIVIL ENGINEER</h5>
<div class="span2"></div><button type="submit" class="btn-danger">View Profile</button>
</div>
            <div class="span2"><img src="<?php echo base_url();?>file/img/images/fet1_23.jpg"><h5 class="disc">ID:EJK12586
27,CASTE,PLACE
CIVIL ENGINEER</h5>
<div class="span2"></div><button type="submit" class="btn-danger">View Profile</button>
</div>
          		</div>
          	</div>
            <div class="row show-grid">
          	<div class="container">
            <div class="span6 happy_feed">
            <div class="span9 happy_feutured" data-original-title="" title=""><h3 class="happy_head">HAPPY FEEDBACK</h3></div>
            <div class="span6"><img src="<?php echo base_url();?>file/img/images/feedback_image_07.jpg">
            </div>
            <div class="span5">
            <h4 class="feed_head">THARUN & THAMANNA
JAN 23 / 2014</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                 </p>
                                                 <button type="submit" class="btn-info">More</button>
            </div>
        
                </div>
             
          <div class="span6 happy_feed plans">
            <div class="span9 happy_feutured" data-original-title="" title=""><h3 class="happy_head1">OUR PLANS</h3></div>
            <div class="span6"><img src="<?php echo base_url();?>file/img/images/plans_09.jpg">
            </div>
            <div class="span5">
            <h4 class="feed_head">PREMIUM PLUS</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.labore et dolore magna aliqua.
                                                 </p>
                                                 
                                                 <button type="submit" class="btn-info">More</button>
            </div>
        
                </div>
          		</div>
          	</div>
          </div>
          </div>
          