<?php $this->load->view('header'); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/common.js"></script>
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
	var cast=document.forms["frm1"]["cast"].value
	/*if (religion=="15" || religion=="16") {
       
    }*/
	if (cast==null || cast=="-1") {
        alert("Select  a cast");
        return false;
    }
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
	
	
	
	var residential_status=document.forms["frm1"]["residential_status"].value
	if (residential_status==null || residential_status=="") {
        alert("Select  a residential Status");
        return false;
    }
	
	
	   var y = document.forms["frm1"]["email"].value;
    var atpos = y.indexOf("@");
    var dotpos = y.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=y.length) {
        alert("Not a valid e-mail address");
        return false;
    }/**/
	var phonecode=document.forms["frm1"]["phonecode"].value
	if (phonecode==null || phonecode=="") {
        alert("Select  a phone code");
        return false;
    }

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
  

	
	var password=document.forms["frm1"]["password"].value
	if (password==null || password=="") {
        alert("The password feild must be filled out");
        return false;
    }
	if (password.length<6) {
        alert("The password contail only 6-20 charecters");
        return false;
    }


}  
</script>
<script>
    function change() {
        var select = document.getElementById("slct");
        var divv = document.getElementById("prof");
		var divg = document.getElementById("gend");
		
        var value = select.value;
		if (value == "") {
            toAppend = "<label class='radio-inline'><input type='radio'  name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio'   name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>"; divg.innerHTML=toAppend; return;
            }
    		if (value == "Son") {
            
			toAppend = "<label class='radio-inline'><input type='radio' checked='checked'  name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio'  disabled='disabled'  name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>";
				 divg.innerHTML=toAppend;
			 return;
            }
            if (value == "Daughter") {
                toAppend = "<label class='radio-inline'><input type='radio'   name='gender'  id='inlineRadio1' disabled='disabled' style=' margin-right:5px;margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio' checked='checked'   name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>";divg.innerHTML = toAppend;  return;
            }
            if (value =="Brother") {
                toAppend = "<label class='radio-inline'><input type='radio' checked='checked'  name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio' disabled='disabled'    name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>";divg.innerHTML = toAppend;  return;

            }
			if (value =="Sister") {
               toAppend = "<label class='radio-inline'><input type='radio'   name='gender'  id='inlineRadio1' disabled='disabled' style=' margin-right:5px;margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio' checked='checked'   name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>";
			   divg.innerHTML = toAppend;  return;

         	}
			if (value =="Myself") {
                toAppend = "<label class='radio-inline'><input type='radio'  name='gender'  id='inlineRadio1' style=' style=' margin-right:5px;margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio'   name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>:";divg.innerHTML = toAppend;  return;

            }
			if (value =="Relative") {
                toAppend = "<label class='radio-inline'><input type='radio'  name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio'   name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>:";divg.innerHTML = toAppend;  return;

            }
			if (value =="Friend") {
                toAppend = "<label class='radio-inline'><input type='radio'  name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline'><input type='radio'   name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>:";divg.innerHTML = toAppend;  return;

            }
   }
</script>
<style>
.textnew {
  width: 420px;
  display: inline-block;
  border: 2px solid #42b8b6;
  margin-bottom: 40px;
}
.first1 {
  width: 420px;
  display: inline-block;
  border: 2px solid #42b8b6;
  margin-bottom: 40px;
}
#email{
	color:#000;
 	
}
</style>
<link href="<?php echo base_url(); ?>file/css/contact.css" rel="stylesheet" type="text/css" />
<div class="row-fluid content">

	<div class="container">
    <div class="span12">
      <h2 class="head">CONTACT US </h2>
    </div>
    <div class="span7 ">
    <form action="<?php echo site_url('staticcontent/contactsend');?>" method="post">
    <table>
        <tr>
          <td> <label for="email" class="col-sm-2 ">NAME:</label></td>
          <td> <input type="text" required="required" style="border: 2px solid #42b8b6;" class=" textnew first1" id="email" name="name" value=""></td>
        </tr>
        <tr>
          <td>
          
           <label for="message" class="col-sm-2 ">ADDRESS:</label></td>
          <td>
          
          <textarea style="border: 2px solid #42b8b6;" id="email" class="form-control textnew first1" rows="4" required="required" name="address"></textarea>
          </td>
        </tr>
        <tr>
          <td>
            <label for="email" class="col-sm-2">CITY:</label></td>
          <td> <input style="border: 2px solid #42b8b6;" type="email" class="form-control textnew first1" id="email" name="city" required="required"  value=""></td>
        </tr>
       
        
        <tr>
          <td>
             <label for="email" class="col-sm-2">STATE:</label></td>
          <td><input style="border: 2px solid #42b8b6;" required="required" type="text" class="form-control textnew first1 " id="email" name="state" value=""></td>
        </tr>
        
        
        <tr>
          <td>
            <label for="email" class="col-sm-2 ">PHONE:</label></td>
          <td><input style="border: 2px solid #42b8b6;" required="required" type="number" class="form-control textnew first1 " id="email" name="phone"  value=""></td>
        </tr>
        
        
          <tr>
          <td>
           <label for="email" class="col-sm-2 ">E-MAIL:</label></td>
          <td> <input style="border: 2px solid #42b8b6;" type="email" class="form-control textnew first1 " id="email" name="email" required="required"  value=""></td>
        </tr>
        
          <tr>
          <td>
            <label for="message" class="col-sm-2 ">CONTACT REASON:</label></td>
          <td> <textarea style="border: 2px solid #42b8b6;" required="required" class="form-control textnew first1" id="email" rows="4" name="reason"></textarea></td>
        </tr>
        <tr>
          <td>
           </td>
          <td>
           <input id="submit" name="submit" type="reset" value="Cancel" class=" btn  bt">
           
           <input id="submit" name="submit" type="submit" value="Submit" class="btn  bt">
           </td>
           <td>
          
           </td>
        </tr>
      </table>
      </form>
       
            
           
    <!--<form class="form-horizontal" role="form" method="post" action="index.php">
    
    <div class="form-group">
    <table>
    <tr>
    <td>
    <label for="email" class="col-sm-2 ">NAME:</label>
    </td>
     <input type="email" class=" textnew first1" id="email" name="email" value="">
    <td>
    </td>
    
    </tr>
    <tr>
    </tr>
    <tr>
    </tr>
    <tr>
    </tr>
    <tr>
    </tr>
    <tr>
    </tr>
    </table>
        <label for="email" class="col-sm-2 ">NAME:</label>
       
               <span class="textnew first1"> <input type="email" class=" textnew first1" id="email" name="email" value=""></span>
       
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 ">ADDRESS:</label>
        <div class="col-sm-10">
            <textarea class="form-control textnew first1" rows="4" name="message"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2">CITY:</label>
        <div class="col-sm-10">
               <span class="textnew"> <input type="email" class="form-control textnew first1" id="email" name="email"  value=""></span>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2">STATE:</label>
        <div class="col-sm-10">
               <span class="textnew"> <input type="email" class="form-control textnew " id="email" name="email" value=""></span>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 ">PHONE:</label>
        <div class="col-sm-10">
               <span class="textnew"> <input type="email" class="form-control textnew " id="email" name="email"  value=""></span>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 ">E-MAIL:</label>
        <div class="col-sm-10">
               <span class="textnew"> <input type="email" class="form-control textnew " id="email" name="email"  value=""></span>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 ">CONTACT REASON:</label>
        <div class="col-sm-10">
            <textarea class="form-control textnew" rows="4" name="message"></textarea>
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
       
        <input id="submit" name="submit" type="submit" value="Cancel" class=" btn  bt">
             <input id="submit" name="submit" type="submit" value="Submit" class="btn  bt">
           
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>-->

    
    <div class="span12">
    <h2 class="head1">MEET US </h2>
    
    </div>
    <div class="span12">
<div class="span6"> SOULMATE MATRIMONY<br />
TMC - 1/723
9th CROSS , UDHAYA NAGAR <br />
POOKUNNAM,THRISSUR - 03<br />
Mobile No:+91 9946338398,+91 9400283695<br />
Email id: info@soulmatematrimony.com<br /><br />

</div>
<!--<div class="span6">  SOULMATE MATRIMONY(Head Office)<br />
SOULMATE Corporate EKMPIN- 680258<br />
Land Phone No: 04842259685,0484258755<br /> 
Mobile No: 9425225365,9446984521<br />
Email id: soulmate@gmail.com<br />
<br /></div>-->
</div>
   
    </div>
    <form  name="frm1"  action="<?php echo base_url();?>index.php/insert_reg" onsubmit="return validateForm1()" method="post" >
<div class="span4 abtreg" style="margin-left:50px;">
    <h2>REGISTER NOW</h2>
    <div class="text-center">
     <div class="span12"><div class="control-group">
    
    <div class="controls">
 
   <select id="slct" onchange="change();" name="profile_for" class="selectpicker">
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
  </div></div>
  
  <div class="span12 ">
     <div class="control-group">
   
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="name" name="name" value="<?php echo set_value('name'); ?>">
    </div>
  </div>
     </div>
  <div class="span12">
  <div class="control-group">
   
   
           
    		 <div class="controls" id="gend">
   
     
     <label class="radio-inline" for="inputEmail">GENDER :
  <input type="radio"   name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE
  <input type="radio"  name='gender'  id='inlineRadio1' style=' margin-right:5px; margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE
</label>

</div>
  
  </div>
  
  </div>
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
    </div></div>
    <div class="span12 ">
     	<div class="control-group">
             
              <div class="controls">
                <select class="selectpicker" name="religion" onchange="selectState(this.options[this.selectedIndex].value)">
                  <option value="-1">Select Religion</option>
                  <?php
								foreach($list->result() as $listElement){
									?>
                  <option value="<?php echo $listElement->religion_id?>"><?php echo $listElement->religion_name;?></option>
                  <?php
								}
								?>
                </select>
              </div>
            </div>
     </div>
     
     <div class="span12 ">
     	<div class="control-group">
             
              <div class="controls">
                 <select name="cast" class="selectpicker" id="state_dropdown" onchange="selectCity(this.options[this.selectedIndex].value)">
                  <option value="-1">Select Caste</option>
                </select>
              </div>
            </div>
     </div>
 
          
     
     
     
     <div class="span12 ">
     	 <div class="control-group">
    
    <div class="controls">
   <select class="selectpicker" name="mother_tongue">
                 

			
                  <option value="" selected="">Select Mother Tongue</option>
                     <option value="33" >Malayalam</option>
                      <option value="16" >Hindi</option>
                      <option value="23" >English</option>
                      <option value="48" >Tamil</option>
                      <option value="14" >Kannada</option>
                      <option value="49" >Telugu</option>
                      <option value="53" >Arabic</option>
                  <?php
								foreach($mother as $mother1){
									?>
                  <option value="<?php echo $mother1->mother_id;?>"><?php echo $mother1->mother_tongue_name;?></option>
                  <?php
								}
								?>
                </select>
    </div>
    </div>
  </div>
        <div class="span12">
     	<div class="control-group">
    
    <select class="selectpicker" name="nationality">
                  <option value="">Select Your Country</option>
                  <option value="INDIA">INDIA</option>
                  <option value="UNITED STATES">UNITED STATES</option>
                  <option value="UNITED KINGDOM">UNITED KINGDOM</option>
                  <option value="UNITED ARAB EMIRATES">UNITED ARAB EMIRATES</option>
                  <option value="SAUDI ARABIA">SAUDI ARABIA</option>
                  <option value="KUWAIT">KUWAIT</option>
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
     <div class="span12">
     	<div class="control-group">
    
   <select name="residential_status" class="selectpicker">
                  <option value="0">Select Residential status</option>
                  <option value="Ordinary Resident">Ordinary Resident</option>
                  <option value="NRI">NRI</option>
                  <option value="Not Ordinary Residetnt">Not Ordinary Residetnt</option>
                </select>
    </div>
  </div>
  
  
  <div class="span12">
     	<div class="control-group">
    
   <input type="text"   value="<?php echo set_value('email'); ?>" name="email" placeholder="email" id="email">
                <?php echo form_error('email'); ?>
    </div>
  </div>
  <div class="span12 ">
  <div class="control-group">
    
    <div class="controls">
    <select class="selectpicker day" style="width:100px; " name="phonecode" >
                  <option value="">Country</option>
                  <option value="91">India (+91)</option>
                  <option value="1">USA (+1)</option>
                  <option value="968">Oman (+968)</option>
                  <option value="974">Qatar (+974)</option>
                  <option value="966">Saudi Arabia (+966)</option>
                  <option value="965">Kuwait (+965)</option>
                  <option value="971">United Arab Emirats (+971)</option>
                  <option value="973">Bahrain (+973)</option>
                  <option value="98">Iran (+98)</option>
                  <option value="964">Iraq (+964)</option>
                  <?php
								foreach($country as $count){
									?>
                  <option value="<?php echo $count->phonecode;?>"><?php echo $count->nicename; echo" (+"; echo $count->phonecode; echo ")"?></option>
                  <?php
								}
								?>
                </select>
    <input type="text"  style="width: 223px;" value="<?php echo set_value('mobile'); ?>" name="mobile" id="inputEmail" >
                <?php echo form_error('mobile'); ?>
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
   <div class="span12 butten"><div class="control-group"> <div class="controls"><button type="submit" style="background-color:#FFF; margin-left:0px;" class="btn1 btn-large">REGISTER </button>

   
    
      
    </div>
  </div></div>
  </div>
  </div>
  </form>
  
     </div>
    </div>
  
          

  <?php $this->load->view('footer'); ?>
    <script src="http://code.jquery.com/jquery.js"></script>
        
        
        
</body>
</html>