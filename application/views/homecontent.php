<?php if($this->session->userdata('logged_in'))
 {
	 redirect('login');
 }
 else
 {
	 ?>
<!DOCTYPE html>
<html>
<head>
<title>Soulmate</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url(); ?>file/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>file/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url();?>file/css/elements.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>file/css/home.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>file/css/jquery.jscrollpane.css" media="all" />
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>file/js/my_js.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/common.js"></script>

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
<script >
$(document).ready(function(){
     $('#email1').blur(function(){
	
  var email = $("#email1").val();
var dataString = 'email='+email;
 $.ajax({
           type: "POST",
           url: "<?php echo site_url("celibrity_insert/check_email_availablity");?>",
           data: dataString,
		   cache: false,
		   beforeSend: function() {
              $("#Loading2").show();
           },
		     success: function(data){
				  $("#Loading1").hide();
			    $("#successMessage").html(data);
			  
           },
        });

    });
});

</script>

<script >
$(document).ready(function(){
     $('#mobile1').blur(function(){
	
  var mobile = $("#mobile1").val();
var dataString = 'mobile='+mobile;
 $.ajax({
           type: "POST",
           url: "<?php echo site_url("celibrity_insert/check_mobile_availablity");?>",
           data: dataString,
		   cache: false,
		   beforeSend: function() {
              $("#Loading1").show();
           },
		     success: function(data){
				  $("#Loading2").hide();
			    $("#successMessage2").html(data);
			  
           },
        });

    });
});

</script>
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

		if (document.forms["frm1"]["mobile"].value.length <= 10)
		if (document.forms["frm1"]["mobile"].value.length >= 12)
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

function validateForm2() {
	var T = document.forms["frm2"]["profile_for"].value;
    if (T==null || T=="") {
        alert("Select for whom you are registering the profile");
        return false;
    }
	
	var x = document.forms["frm2"]["name"].value;
    if (x==null || x=="") {
        alert("Name must be filled out");
        return false;
    }
	var A = document.forms["frm2"]["gender"].value;
    if (A==null || A=="") {
        alert("Select a gender");
        return false;
    }
	var month = document.forms["frm2"]["month"].value;
	var day = document.forms["frm2"]["day"].value;
	var year = document.forms["frm2"]["year"].value;
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
	var religion=document.forms["frm2"]["religion"].value
	if (religion==null || religion=="-1") {
        alert("Select  a religion");
        return false;
    }
	var cast=document.forms["frm2"]["cast"].value
	/*if (religion=="15" || religion=="16") {
       
    }*/
	if (cast==null || cast=="-1") {
        alert("Select  a cast");
        return false;
    }
	var mother_tongue=document.forms["frm2"]["mother_tongue"].value
	if (mother_tongue==null || mother_tongue=="") {
        alert("Select  a Mothertongu");
        return false;
    }
	var nationality=document.forms["frm2"]["nationality"].value
	if (nationality==null || nationality=="") {
        alert("Select  a nationality");
        return false;
    }
	
	
	
	var residential_status=document.forms["frm2"]["residential_status"].value
	if (residential_status==null || residential_status=="") {
        alert("Select  a residential Status");
        return false;
    }
	
	
	   var y = document.forms["frm2"]["email"].value;
    var atpos = y.indexOf("@");
    var dotpos = y.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=y.length) {
        alert("Not a valid e-mail address");
        return false;
    }/**/
	var phonecode=document.forms["frm2"]["phonecode"].value
	if (phonecode==null || phonecode=="") {
        alert("Select  a phone code");
        return false;
    }

		if (document.forms["frm1"]["mobile"].value.length <= 10)
		if (document.forms["frm1"]["mobile"].value.length >= 12)
	
	  {   
	
		alert("Invalid phone number");
		return false;
	
	  }
  var phoneno = /^\d{10}$/;  
  if(document.forms["frm2"]["mobile"].value.match(phoneno))  
        {  
      return true;  
        }  
      else  
        {  
        alert("Invalid mobile number");  
        return false;  
        }  
  

	
	var password=document.forms["frm2"]["password"].value
	if (password==null || password=="") {
        alert("The password feild must be filled out");
        return false;
    }
	if (password.length<6) {
        alert("The password contail only 6-20 charecters");
        return false;
    }
	$.ajax({
type: "POST",
url: "<?php echo base_url(); ?>index.php/insert_reg",
data: "profile_for="+x+"&name="+x+"&gender="+A+"&month="+month+"&day="+day+"&year="+year+"&religion="+religion+"&mother_tongue="+mother_tongue+"&nationality="+nationality+"&residential_status="+residential_status+"&email="+email+"&phonecode="+phonecode+"&mobile="+mobile+"&password="+password,
cache: true,
success: function(html){
$("#show").after(html);

}  
});


}  
</script>

<script>

function validateForm3() {
	var T = document.forms["frm3"]["profile_for"].value;
    if (T==null || T=="") {
        alert("Select for whom you are registering the profile");
        return false;
    }
	
	var x = document.forms["frm3"]["name"].value;
    if (x==null || x=="") {
        alert("Name must be filled out");
        return false;
    }
	var A = document.forms["frm3"]["gender"].value;
    if (A==null || A=="") {
        alert("Select a gender");
        return false;
    }
	var month = document.forms["frm3"]["month"].value;
	var day = document.forms["frm3"]["day"].value;
	var year = document.forms["frm3"]["year"].value;
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
	var religion=document.forms["frm3"]["religion"].value
	if (religion==null || religion=="-1") {
        alert("Select  a religion");
        return false;
    }
	var cast=document.forms["frm3"]["cast"].value
	/*if (religion=="15" || religion=="16") {
       
    }*/
	if (cast==null || cast=="-1") {
        alert("Select  a cast");
        return false;
    }
	var mother_tongue=document.forms["frm3"]["mother_tongue"].value
	if (mother_tongue==null || mother_tongue=="") {
        alert("Select  a Mothertongu");
        return false;
    }
	var nationality=document.forms["frm3"]["nationality"].value
	if (nationality==null || nationality=="") {
        alert("Select  a nationality");
        return false;
    }
	
	
	
	var residential_status=document.forms["frm3"]["residential_status"].value
	if (residential_status==null || residential_status=="") {
        alert("Select  a residential Status");
        return false;
    }
	
	
	   var y = document.forms["frm3"]["email"].value;
    var atpos = y.indexOf("@");
    var dotpos = y.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=y.length) {
        alert("Not a valid e-mail address");
        return false;
    }/**/
	var phonecode=document.forms["frm3"]["phonecode"].value
	if (phonecode==null || phonecode=="") {
        alert("Select  a phone code");
        return false;
    }

		if (document.forms["frm1"]["mobile"].value.length <= 10)
		if (document.forms["frm1"]["mobile"].value.length >= 12)
	
	  {   
	
		alert("Invalid phone number");
		return false;
	
	  }
  var phoneno = /^\d{10}$/;  
  if(document.forms["frm3"]["mobile"].value.match(phoneno))  
        {  
      return true;  
        }  
      else  
        {  
        alert("Invalid mobile number");  
        return false;  
        }  
  

	
	var password=document.forms["frm3"]["password"].value
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
            toAppend = "<label class='radio-inline'><input type='radio'  name='gender'  id='inlineRadio1' style='margin-right:5px;  margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline' style='margin-left:10px;'><input type='radio'   name='gender'  id='inlineRadio1' style='margin-right:5px;  margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>"; divg.innerHTML=toAppend; return;
            }
    		if (value == "Son") {
            
			toAppend = "<label class='radio-inline'><input type='radio' checked='checked'  name='gender'  id='inlineRadio1' style='margin-right:5px;  margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline' style='margin-left:10px;'><input type='radio'  disabled='disabled'  name='gender'  id='inlineRadio1' style=' margin-right:5px;  margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>";
				 divg.innerHTML=toAppend;
			 return;
            }
            if (value == "Daughter") {
                toAppend = "<label class='radio-inline'><input type='radio'   name='gender'  id='inlineRadio1' disabled='disabled' style='margin-right:5px;  margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline' style='margin-left:10px;'><input type='radio' checked='checked'   name='gender'  id='inlineRadio1' style='margin-right:5px;  margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>";divg.innerHTML = toAppend;  return;
            }
            if (value =="Brother") {
                toAppend = "<label class='radio-inline'><input type='radio' checked='checked'  name='gender'  id='inlineRadio1' style='margin-right:5px;  margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline' style='margin-left:10px;'><input type='radio' disabled='disabled'    name='gender'  id='inlineRadio1' style='margin-right:5px;  margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>";divg.innerHTML = toAppend;  return;

            }
			if (value =="Sister") {
               toAppend = "<label class='radio-inline'><input type='radio'   name='gender'  id='inlineRadio1' disabled='disabled' style='margin-right:5px;  margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline' style='margin-left:10px;'><input type='radio' checked='checked'   name='gender'  id='inlineRadio1' style='margin-right:5px;  margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>";divg.innerHTML = toAppend;  return;

         	}
			if (value =="Myself") {
                toAppend = "<label class='radio-inline'><input type='radio'  name='gender'  id='inlineRadio1' style='margin-right:5px;  margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline' style='margin-left:10px;'><input type='radio'   name='gender'  id='inlineRadio1' style='margin-right:5px;  margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>:";divg.innerHTML = toAppend;  return;

            }
			if (value =="Relative") {
                toAppend = "<label class='radio-inline'><input type='radio'  name='gender'  id='inlineRadio1' style='margin-right:5px;  margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline' style='margin-left:10px;'><input type='radio'   name='gender'  id='inlineRadio1' style='margin-right:5px;  margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>:";divg.innerHTML = toAppend;  return;

            }
			if (value =="Friend") {
                toAppend = "<label class='radio-inline'><input type='radio'  name='gender'  id='inlineRadio1' style='margin-right:5px;  margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>MALE</label><label class='radio-inline' style='margin-left:10px;'><input type='radio'   name='gender'  id='inlineRadio1' style=' margin-right:5px;  margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>FEMALE</label>:";divg.innerHTML = toAppend;  return;

            }
   }
</script>
<link href="<?php echo base_url(); ?>file/style/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"> </script>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/script1.js"></script>
<style>
::-webkit-input-placeholder {
   color: red;
}
.nav-tabs {
	border-bottom: 0px solid #ddd;
	margin-top: 3%;
	margin-left: 6%;
}
.nav-tabs > li {
	margin-bottom: -1px;
	list-style: none;
	width: 47%;
	text-align: center;
}
.nav-tabs > li > a {
	padding-top: 11px;
	padding-bottom: 9px;
	color: #fff;
	cursor: default;
	/* background-color: #ffffff; */
	border: 1px solid #ddd;
	border-bottom-color: transparent;
	font-size: 18px;
	border: 1px solid #ddd;
	border-radius: 0px 0px 0 0;
}
.nav-tabs > li > a, .nav-pills > li > a {
	padding-right: 12px;
	padding-left: 12px;
	margin-right: 0px;
	line-height: 14px;
}
.nav-tabs > li > a:hover, .nav-tabs > li > a:focus {
	padding-top: 11px;
	padding-bottom: 11px;
	color: #555555;
	cursor: default;
	background-color: #ffffff;
	border: 0px solid #ddd;
	border-bottom-color: transparent;
	font-size: 18px;
}
.nav-tabs > .active > a, .nav-tabs > .active > a:hover, .nav-tabs > .active > a:focus {
	padding-top: 11px;
	padding-bottom: 11px;
	color: #42b8b6;
	cursor: default;
	background-color: #ffffff;
	border: 0px solid #ddd;
	border-bottom-color: transparent;
	font-size: 18px;
}
.form-horizontal .control-label {
	float: left;
	width: 150px;
	padding-top: 5px;
	text-align: left;
}
.err p{
	margin-top:0px;
	margin:0px 0px 0px;
}

</style>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function() {

	$(".tab_content").hide();
	$(".tab_content:first").show(); 

	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn(); 
	});
});

</script>
<script type="text/javascript">

$(document).ready(function() {

	$(".tab_content1").hide();
	$(".tab_content1:first").show(); 

	$("ul.tabs1 li").click(function() {
		$("ul.tabs1 li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content1").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn(); 
	});
});

</script>
<style type="text/css">
ul.tabs {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 32px;
	border-bottom: 0px solid #999999;
	border-left: 0px solid #999999;
	width: 100%;
}
ul.tabs li {
	float: left;
	width: 24%;
	text-align: center;
	margin: 0;
	cursor: pointer;
	padding: 0px 21px;
	height: 31px;
	line-height: 31px;
	border: 0px solid #999999;
	border-left: none;
	font-weight: bold;
	background: #e3e3e3;
	overflow: hidden;
	position: relative;
}
ul.tabs li:hover {
	background: #e3e3e3;
}
ul.tabs li.active {
	background: #42b8b6;
	border-bottom: 0px solid #FFFFFF;
	color: #fff;
}
.tab_container {
	border: 0px solid #999999;
	border-top: none;
	clear: both;
	float: left;
	width: 100%;
	background: #FFFFFF;
}
.tab_content {
	padding: 20px;
	font-size: 14px;
	display: none;
}
#container {
	width: 500px;
	margin: 0 auto;
}
#container1 {
	width: 600px;
	margin: 0 auto;
}
ul.tabs1 {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 32px;
	border-bottom: 0px solid #999999;
	border-left: 0px solid #999999;
	width: 100%;
}
ul.tabs1 li {
	float: left;
	width: 24%;
	text-align: center;
	margin: 0;
	cursor: pointer;
	padding: 0px 21px;
	height: 31px;
	line-height: 31px;
	border: 0px solid #999999;
	border-left: none;
	font-weight: bold;
	background: #e3e3e3;
	overflow: hidden;
	position: relative;
}
ul.tabs1 li:hover {
	background: #42b8b6;
}
ul.tabs1 li.active {
	background: #42b8b6;
	border-bottom: 0px solid #FFFFFF;
	color: #fff;
}
.tab_container1 {
	border: 0px solid #999999;
	border-top: none;
	clear: both;
	float: left;
	width: 100%;
	background-color: #42b8b6;
}
.tab_content1 {
	padding: 20px;
	font-size: 14px;
	display: none;
}
.lg1 {
	float: left;
	margin-left: 4%;
}
.po {
	background-color: #42b8b6;
	width: 73%;
}
.for a {
	color: #fff;
	text-decoration: none;
}
.form-horizontal .controls {
	margin-left: 200px;
}
</style>
</head>
<body>
<div class="modal fade hide" id="mobileupgrade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                  <h3 id="myModalLabel">CELEBRITY REGISTER</h3>
                </div>
              <form class="form-horizontal" action="<?php echo site_url('celibrity_insert');?>" name="frm3" onsubmit="return validateForm3()"  method="post">
              <div id="show" align="left"></div>
              <div class="span5 po" style="  width: 90%; margin-bottom:30px;">
                <p>
                <div class="control-group">
                  <label class="control-label nn" for="inputEmail">Profile for <span class="dt">:</span></label>
                  <div class="controls">
                    <select id="slct2" onchange="change();" name="profile_for" class="selectpicker">
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
                  <label class="control-label nn" for="inputEmail">Name <span class="dt">:</span></label>
                  <div class="controls">
                    <input type="text" style="height: 20px;" name="name" value="<?php echo set_value('name'); ?>" id="inputEmail">
                    <?php echo form_error('name'); ?> </div>
                </div>
                <div class="control-group">
                  <label class="control-label nn" for="inputEmail">Gender <span class="dt">:</span></label>
                  <div class="controls">
                    <label class="radio-inline">
                      <input type='radio'  name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>
                      MALE
                      <input type='radio'   name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>
                      FEMALE </label>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label nn" for="inputEmail">Date Of Birth <span class="dt">:</span></label>
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
                <div class="control-group">
                  <label class="control-label" for="inputEmail">Religion <span class="dt">:</span></label>
                  <div class="controls">
                    <select class="selectpicker" name="religion" onchange="selectState6(this.options[this.selectedIndex].value)">
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
                  <label class="control-label" for="inputEmail">Caste/Division <span class="dt">:</span></label>
                  <div class="controls">
                    <select name="cast" class="selectpicker" id="state_dropdown6" onchange="selectCity6(this.options[this.selectedIndex].value)">
                      <option value="-1">Select Cast</option>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="inputEmail">Mother Toungue <span class="dt">:</span></label>
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
                <div class="control-group">
                  <label class="control-label" for="inputEmail">Country Living in <span class="dt">:</span></label>
                  <div class="controls">
                    <select class="selectpicker" name="nationality">
                      <option value="">Select A Country</option>
                      <option value="INDIA">INDIA</option>
                  <option value="UNITED STATES">UNITED STATES</option>
                  <option value="UNITED KINGDOM">UNITED KINGDOM</option>
                  <option value="UNITED ARAB EMIRATES">UNITED ARAB EMIRATES</option>
                  <option value="SAUDI ARABIA">SAUDI ARABIA</option>
                  <option value="KUWAIT">KUWAIT</option>
                      <?php
								foreach($country as $count3){
									?>
                      <option value="<?php echo $count3->country_name;?>"><?php echo $count3->country_name;?></option>
                      <?php
								}
								?>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="inputEmail">Residential Status<span class="dt">:</span></label>
                  <div class="controls">
                    <select name="residential_status" class="selectpicker">
                      <option value="0">--Select Residential status--</option>
                      <option value="Ordinary Resident">Ordinary Resident</option>
                      <option value="NRI">NRI</option>
                      <option value="Not Ordinary Residetnt">Not Ordinary Residetnt</option>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="inputEmail">E-mail <span class="dt">:</span></label>
                  <div class="controls">
                    <input type="text"    value="<?php echo set_value('email'); ?>" name="email" id="email1">
                    <span id="successMessage" ></span>
                      <span id="Loading1" style="display:none;"><img src="<?php echo base_url()?>file/img/loading.gif" alt="Ajax Indicator" /></span>
					<?php echo form_error('email'); ?> 
                     </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="inputEmail">Mobile <span class="dt">:</span></label>
                  <div class="controls">
                    <select class="selectpicker day" name="phonecode" >
                      <option value="">Select A Country</option>
                      <option value="91">+91</option>
                      <option value="1">+1</option>
                      <option value="968">+968</option>
                      <option value="974">+974</option>
                      <option value="966">+966</option>
                      <option value="965">+965</option>
                      <option value="971">+971</option>
                      <option value="973">+973</option>
                      <option value="98">+98</option>
                      <option value="964">+964</option>
                      <?php
								foreach($country as $count6){
									?>
                      <option value="<?php echo $count6->phonecode;?>"><?php echo"+"; echo $count6->phonecode;?></option>
                      <?php
								}
								?>
                    </select>
                    <input type="text"  style="width: 132px;" value="<?php echo set_value('mobile'); ?>" name="mobile" id="mobile1" >
                    <span id="successMessage2" ></span>
                      <span id="Loading2" style="display:none;"><img src="<?php echo base_url()?>file/img/loading.gif" alt="Ajax Indicator" /></span>
                    <?php echo form_error('mobile'); ?> </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="inputEmail">Password <span class="dt">:</span></label>
                  <div class="controls">
                    <input name="password" class="input_feild" style="height: 20px;" type="password" id="inputEmail">
                    <?php echo form_error('password'); ?> </div>
                </div>
                <div class="row-fluid">
                  <div class="span4"></div>
                  <div class="span1"></div>
                  <div class="span4 butten11">
                    <div class="control-group">
                      <button type="submit" style="background-color:#FFF;" class="btn-large">REGISTER </button>
                      <div class="controls"> </div>
                    </div>
                  </div>
                  <div class="span4"></div>
                </div>
              </div>
            </form>
                
              </div>
<div class="top">
  <div class="span6 lg1"><img src="<?php echo base_url(); ?>file/img/images/lg_03.png" /></div>
<div class="span1 lg2">
    <div class="help">
      <div class="span1 phonelogo"> <img src="<?php echo base_url(); ?>file/img/phonelogo_03.png" /> </div>
      <div class="span1 helpline">
        <div class="span1 helpline1">HELPLINE</div>
        <div class="span1 helpline2">9965654858</div>
      </div>
    </div>
  </div>
  <div class="span5 offset0 n1">
    <div class="span3"></div>
   
    <div class="qimg"> <img src="<?php echo base_url(); ?>file/img/images/qu_09.png" /></div>
    <div class="ph"> <a style="color:#FFF;" href="<?php echo site_url('staticcontent/faq'); ?>">FAQ</a></div>
  </div>
</div>
<div class="header"><img src="<?php echo base_url(); ?>file/img/images/bg_14.jpg" width="100%">
  <div class="navbar-wrapper"> 
    <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
    <div class="container">
      <div class="row show-grid">
        <div class="span5 offset0 n" data-original-title="" title="">
          <?php if($this->session->userdata('logged_in'))
 {
	 ?>
          <div class="span4"></div>
          <a style="color:#fff; font-weight:bold;" href="index.php/login/logout">Logout</a>
          <?php  }
 else
 {?>
          <form action="<?php echo base_url();?>index.php/verifylogin" method="post" accept-charset="utf-8" class="form-inline">
            <div class="span2 forgot">
              <input type="text" value="<?php echo set_value('username'); ?>" class="input-medium email"  name="username"  placeholder="Email/Soulmate ID">
              &nbsp;<a href="#" id="popup" onClick="div_show()">Forgot password?</a> </div>
            <input type="password" class="input-medium email" name="password1"  placeholder="Password">
            <button type="submit" class="b">Log in</button>
            <?php echo form_error('username'); echo form_error('password1');?>
          </form>
          <?php } ?>
        </div>
      </div>
      <!-- /.navbar --> 
      
    </div>
    <!-- /.container --> 
  </div>
</div>
<div id="abc">
  <div id="popupContact">
    <?php
if(isset($error1))
{
?>
    <script language="Javascript">
<!--
alert ("Send you password reset link to your mail")
//-->
</script>
    <?php 
}
?>
    <?php
if(isset($error2))
{
?>
    <script language="Javascript">
<!--
alert ("The given email is does not exist .Please type a valid email")
//-->
</script>
    <?php 
}
?>
    <form action="<?php echo base_url();?>index.php/forgot" id="form" method="post" name="form">
      <img id="close" src="<?php echo base_url();?>file/img/first-registration22_05.png" onclick ="div_hide()">
      <h2>Forgot your password?</h2>
      <p>If you Forgot the password please enter the given email.We send a verification link to your mail.</p>
      <p>
        <input type="text" name="email" class="email .btn-danger" placeholder="Email" style=" color:#000;border: 2px solid #42b8b6;">
      </p>
      <?php echo form_error('email'); ?>
      <input value="submit" class="btn" name="submit" style="margin-right:10px;" type="submit">
    </form>
  </div>
</div>
<div class="row-fluid menu ">
  <div class="container">
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <div class="span3" data-original-title="" title=""></div>
          <ul class="nav">
            <li class="active"><a href="<?php echo base_url(); ?>">HOME</a></li>
            <li ><a  href="<?php echo base_url(); ?>index.php/staticcontent/about">ABOUT US</a></li>
            <?php if($this->session->userdata('logged_in'))
 {
	 ?>
            <li><a href="<?php echo base_url();?>index.php/login">MY ACCOUNT</a></li>
            <li><a href="<?php echo base_url();?>index.php/searching">SEARCH</a></li>
            <?php  }
 else
 {?>
            <li><a href="<?php echo base_url();?>index.php/home/register">REGISTER</a></li>
            <?php } ?>
            <li><a href="<?php echo base_url(); ?>index.php/payment">UPGRADE</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/staticcontent/contact">CONTACT US</a></li>
            <li style="border:none;"><a href="<?php echo base_url(); ?>index.php/staticcontent/help">HELP</a></li>
          </ul>
          <div class="span3" data-original-title="" title=""></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=" reg1">
  <div role="tabpanel"> 
    
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">REGISTER FREE</a></li>
      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">SEARCH</a></li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
        <div class="container1">
        <form class="form-horizontal" name="frm1"  action="<?php echo base_url();?>index.php/insert_reg" onsubmit="return validateForm1()" method="post">
          <div class="span5">
            <div class="control-group">
              <label class="control-label nn" for="inputEmail">Profile for <span class="dt">:</span></label>
              <div class="controls">
                <select id="slct" onchange="change();" name="profile_for" class="selectpicker">
                  <option value="">Matrimony Profile for</option>
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
              <label class="control-label nn" for="inputEmail">Name <span class="dt">:</span></label>
              <div class="controls">
                <input type="text" style="height: 20px;" name="name" value="<?php echo set_value('name'); ?>" id="inputEmail">
                <?php echo form_error('name'); ?> </div>
            </div>
            <div class="control-group">
              <label class="control-label nn" for="inputEmail">Gender <span class="dt">:</span></label>
              <div class="controls">
                <div id="gend">
                  <label class='radio-inline'>
                    <input type='radio'  name='gender'  id='inlineRadio1' style=' margin-right:5px;margin-top:0px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>
                    MALE</label>
                  <label class='radio-inline' style="margin-left:10px;">
                    <input type='radio'   name='gender'  id='inlineRadio1' style=' margin-right:5px; margin-top:0px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>
                    FEMALE</label>
                </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label nn" for="inputEmail">Date Of Birth <span class="dt">:</span></label>
              <div class="controls">
                <select name="day" style="width:60px;" class="selectpicker day" >
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
                  <option value='01'>Jan</option>
                  <option value='02'>Feb</option>
                  <option value='03'>Mar</option>
                  <option value='04'>Apr</option>
                  <option value='05'>May</option>
                  <option value='06'>Jun</option>
                  <option value='07'>Jul</option>
                  <option value='08'>Aug</option>
                  <option value='09'>Sep</option>
                  <option value='10'>Oct</option>
                  <option value='11'>Nov</option>
                  <option value='12'>Dec</option>
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
            <div class="control-group">
              <label class="control-label" for="inputEmail">Religion <span class="dt">:</span></label>
              <div class="controls">
                <select class="selectpicker" name="religion" onchange="selectState(this.options[this.selectedIndex].value)">
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
              <label class="control-label" for="inputEmail">Caste/Division <span class="dt">:</span></label>
              <div class="controls">
                <select name="cast" class="selectpicker" id="state_dropdown" onchange="selectCity(this.options[this.selectedIndex].value)">
                  <option value="-1">Select Caste</option>
                </select>
                <span id="state_loader"></span>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputEmail">Mother Tongue <span class="dt">:</span></label>
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
            <div class="control-group">
              <label class="control-label" for="inputEmail">Nationality <span class="dt">:</span></label>
              <div class="controls">
                <select class="selectpicker" name="nationality">
                  <option value="">Select Your Country</option>
                  <option value="INDIA">INDIA</option>
                  <option value="UNITED STATES">UNITED STATES</option>
                  <option value="UNITED KINGDOM">UNITED KINGDOM</option>
                  <option value="UNITED ARAB EMIRATES">UNITED ARAB EMIRATES</option>
                  <option value="SAUDI ARABIA">SAUDI ARABIA</option>
                  <option value="KUWAIT">KUWAIT</option>
                  <?php
								foreach($country as $count10){
									?>
                  <option value="<?php echo $count10->country_name;?>"><?php echo $count10->country_name;?></option>
                  <?php
								}
								?>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputEmail">Residential Status<span class="dt">:</span></label>
              <div class="controls">
                <select name="residential_status" class="selectpicker">
                  <option value="0">Select Residential status</option>
                  <option value="Ordinary Resident">Ordinary Resident</option>
                  <option value="NRI">NRI</option>
                  <option value="Not Ordinary Residetnt">Not Ordinary Residetnt</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputEmail">E-mail <span class="dt">:</span></label>
              <div class="controls">
                <input type="text"   value="<?php echo set_value('email'); ?>" name="email" id="email">
                <?php echo form_error('email'); ?> </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputEmail">Mobile <span class="dt">:</span></label>
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
								foreach($country as $count16){
									?>
                  <option value="<?php echo $count16->phonecode;?>"><?php echo $count16->nicename; echo" (+"; echo $count16->phonecode; echo ")"?></option>
                  <?php
								}
								?>
                </select>
                <input type="text"  style="width: 102px;" value="<?php echo set_value('mobile'); ?>" name="mobile" id="inputEmail" >
                <?php echo form_error('mobile'); ?> </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputEmail">Password <span class="dt">:</span></label>
              <div class="controls">
                <input name="password" class="input_feild" style="height: 20px;" type="password" id="inputEmail">
                <?php echo form_error('password'); ?> </div>
            </div>
          </div>
          </div>
          <div class="row-fluid">
          <div class="span4"></div>
          <div class="span1"></div>
          <div class="span4 butten11" style="margin-left:0px;">
            <div class="control-group">
              <button type="submit" style="background-color:#FFF; margin-left:0px;" class="btn1 btn-large">REGISTER </button>
              <div class="controls"> </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
      <div class="span4 ">
      <br />
      <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/searching/search_anonym" method="get">
        <div class="span5" style="margin-left:0px;">
          <div class="control-group">
            <div class="">
              <label class="radio-inline">
                <input type="radio" checked name="gender"  id="inlineRadio1" style=" margin-right:5px;margin-top:0px;" class="radio1" value="male">
                Bride
                <input type="radio" name="gender" id="inlineRadio2" style="margin-left:10px; margin-right:5px;margin-top:0px;" class="radio1" value="female">
                Groom </label>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputEmail">Age <span class="dt">:</span></label>
            <div class="controls">
              <select class=" day1" id="ddlMinExp" name="age_from" >
                <option value="">- Select -</option>
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
              <span style="color:#fff">to</span>
              <select class="selectpicker day1" id="ddlMaxExp" name="age_to">
                <option value="">- Select -</option>
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
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputEmail">Caste/Division <span class="dt">:</span></label>
            <div class="controls">
              <select class="selectpicker" name="cast">
                <option value="">--Select Caste--</option>
                <?php
								foreach($allcast as $all){
									?>
                <option value="<?php echo $all->cast_name;?>"><?php echo $all->cast_name;?></option>
                <?php
								}
								?>
              </select>
            </div>
          </div>
          
          
          <div class="control-group">
            <label class="control-label" for="inputEmail">Country <span class="dt">:</span></label>
            <div class="controls">
              <select class="selectpicker" name="mother_tounge">
                <option value="">--Select country--</option>
                <?php
								foreach($country as $country20){
									?>
                <option value="<?php echo $country20->iso3;?>"><?php echo $country20->country_name;?></option>
                <?php
								}
								?>
                <option value="-1">Other</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputEmail">Mother Tongue <span class="dt">:</span></label>
            <div class="controls">
              <select class="selectpicker" name="mother_tounge">
                <option value="">--Select Mother Tongue--</option>
                <?php
								foreach($mother as $mother1){
									?>
                <option value="<?php echo $mother1->mother_id;?>"><?php echo $mother1->mother_tongue_name;?></option>
                <?php
								}
								?>
                <option value="-1">Other</option>
              </select>
            </div>
          </div>
        </div>
        </div>
        <div class="row-fluid">
        <div class="span4"></div>
        <div class="span1"></div>
        <div class="span4 butten11">
        <div class="control-group">
        <button type="submit" style="background-color:#FFF;" class="btn1 btn-large">SEARCH</button>
      </form>
      <div class="controls"> </div>
    </div>
  </div>
  <div class="span4"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="toPopup1">
  <div class="close"></div>
  <div id="popup_content"> <!--your content start-->
    <div class="span7">
      <div id="container1">
        <ul class="tabs1">
          <li class="active" rel="tab4"> Register</li>
          <li rel="tab5"> Login</li>
        </ul>
        <div class="tab_container1">
          <div id="tab4" class="tab_content1">
            <form class="form-horizontal" name="frm2" onsubmit="return validateForm2()"  method="post">
              <div id="show" align="left"></div>
              <div class="span5 po">
                <p>
                <div class="control-group">
                  <label class="control-label nn" for="inputEmail">Profile for <span class="dt">:</span></label>
                  <div class="controls">
                    <select id="slct1" onchange="change();" name="profile_for" class="selectpicker">
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
                  <label class="control-label nn" for="inputEmail">Name <span class="dt">:</span></label>
                  <div class="controls">
                    <input type="text" style="height: 20px;" name="name" value="<?php echo set_value('name'); ?>" id="inputEmail">
                    <?php echo form_error('name'); ?> </div>
                </div>
                <div class="control-group">
                  <label class="control-label nn" for="inputEmail">Gender <span class="dt">:</span></label>
                  <div class="controls">
                    <label class="radio-inline">
                      <input type='radio'  name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='male' <?php echo set_radio('gender[]', 'male'); ?>>
                      MALE
                      <input type='radio'   name='gender'  id='inlineRadio1' style=' margin-right:5px;' class='radio1' value='female' <?php echo set_radio('gender[]', 'female'); ?>>
                      FEMALE </label>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label nn" for="inputEmail">Date Of Birth <span class="dt">:</span></label>
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
                <div class="control-group">
                  <label class="control-label" for="inputEmail">Religion <span class="dt">:</span></label>
                  <div class="controls">
                    <select class="selectpicker" name="religion" onchange="selectState6(this.options[this.selectedIndex].value)">
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
                  <label class="control-label" for="inputEmail">Caste/Division <span class="dt">:</span></label>
                  <div class="controls">
                    <select name="cast" class="selectpicker" id="state_dropdown6" onchange="selectCity6(this.options[this.selectedIndex].value)">
                      <option value="-1">Select Cast</option>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="inputEmail">Mother Toungue <span class="dt">:</span></label>
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
                <div class="control-group">
                  <label class="control-label" for="inputEmail">Country Living in <span class="dt">:</span></label>
                  <div class="controls">
                    <select class="selectpicker" name="nationality">
                      <option value="">Select A Country</option>
                      <option value="INDIA">INDIA</option>
                  <option value="UNITED STATES">UNITED STATES</option>
                  <option value="UNITED KINGDOM">UNITED KINGDOM</option>
                  <option value="UNITED ARAB EMIRATES">UNITED ARAB EMIRATES</option>
                  <option value="SAUDI ARABIA">SAUDI ARABIA</option>
                  <option value="KUWAIT">KUWAIT</option>
                      <?php
								foreach($country as $count50){
									?>
                      <option value="<?php echo $count50->country_name;?>"><?php echo $count50->country_name;?></option>
                      <?php
								}
								?>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="inputEmail">Residential Status<span class="dt">:</span></label>
                  <div class="controls">
                    <select name="residential_status" class="selectpicker">
                      <option value="0">--Select Residential status--</option>
                      <option value="Ordinary Resident">Ordinary Resident</option>
                      <option value="NRI">NRI</option>
                      <option value="Not Ordinary Residetnt">Not Ordinary Residetnt</option>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="inputEmail">E-mail <span class="dt">:</span></label>
                  <div class="controls">
                    <input type="text"   value="<?php echo set_value('email'); ?>" name="email" id="email">
                    <?php echo form_error('email'); ?> </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="inputEmail">Mobile <span class="dt">:</span></label>
                  <div class="controls">
                    <select class="selectpicker day" name="phonecode" >
                      <option value="">Select A Country</option>
                      <option value="91">+91</option>
                      <option value="1">+1</option>
                      <option value="968">+968</option>
                      <option value="974">+974</option>
                      <option value="966">+966</option>
                      <option value="965">+965</option>
                      <option value="971">+971</option>
                      <option value="973">+973</option>
                      <option value="98">+98</option>
                      <option value="964">+964</option>
                      <?php
								foreach($country as $count1){
									?>
                      <option value="<?php echo $count1->phonecode;?>"><?php echo"+"; echo $count1->phonecode;?></option>
                      <?php
								}
								?>
                    </select>
                    <input type="text"  style="width: 132px;" value="<?php echo set_value('mobile'); ?>" name="mobile" id="inputEmail" >
                    <?php echo form_error('mobile'); ?> </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="inputEmail">Password <span class="dt">:</span></label>
                  <div class="controls">
                    <input name="password" class="input_feild" style="height: 20px;" type="password" id="inputEmail">
                    <?php echo form_error('password'); ?> </div>
                </div>
                <div class="row-fluid">
                  <div class="span4"></div>
                  <div class="span1"></div>
                  <div class="span4 butten11">
                    <div class="control-group">
                      <button type="submit" style="background-color:#FFF;" class="btn-large">REGISTER </button>
                      <div class="controls"> </div>
                    </div>
                  </div>
                  <div class="span4"></div>
                </div>
              </div>
            </form>
          </div>
          <!-- #tab1 -->
          <div id="tab5" class="tab_content1">
            <form class="form-horizontal" action="<?php echo base_url();?>index.php/verifylogin" method="post" accept-charset="utf-8" >
              <div class="span8">
                <div class="control-group">
                  <label class="control-label" for="inputEmail">E-mail<span class="dt"> :</span></label>
                  <div class="controls">
                    <input type="text" class="input-medium email"  name="username"  placeholder="Email/Soulmate ID">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="inputEmail">Password <span class="dt">:</span></label>
                  <div class="controls">
                    <input type="password" class="input-medium email" name="password1"  placeholder="Password">
                  </div>
                </div>
              </div>
              <div class="span8">
                <div class="span3">
                  <div class="for">
                    <div class="control-group">
                      <div class="controls"> </div>
                    </div>
                  </div>
                </div>
                <div class="span4 butten11">
                  <div class="control-group">
                    <button type="submit"  class="b ">LOGIN </button>
                    <div class="controls"> </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!-- #tab2 -->
          <div id="tab6" class="tab_content1">
            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged </p>
          </div>
          <!-- #tab3 -->
          <div id="tab7" class="tab_content1">
            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged </p>
          </div>
          <!-- #tab4 --> 
          
        </div>
        <!-- .tab_container --> 
        
      </div>
    </div>
  </div>
  <!--your content end--> 
  
</div>
<!--your content end-->

<div class="loader"></div>
<div id="backgroundPopup"></div>
</div>
<div class="row-fluid feutured">
  <div class="row show-grid">
    <div class="container">
      <div class="span6 happy_feed1">
        <div class="span7 happy_feutured" data-original-title="" title="">
          <h3 class="happy_head">PRIME MEMBERS</h3>
        </div>
        <div class="span6">
          <div id="ca-container" class="ca-container">
            <div class="ca-wrapper">
            <?php foreach($prime as $prime)
			{ ?>
              <div class="ca-item">
                <div class="ca-item-main">   <?php if($prime->file_name==''&&$prime->gender=='male')
									{ ?>
            <img src="<?php echo base_url();?>file/img/avtr_men.jpg" width="150" height="150" />
            <?php } elseif($prime->file_name==''&&$prime->gender=='female')
			{?> 
            <img src="<?php echo base_url();?>file/img/avtr_women.jpg" width="150" height="150" /><?php } else { ?>
            <img src="<?php echo base_url(); ?>uploads/<?php echo $prime->file_name;?>" width="132px" height="115px" alt="">
            <?php } ?>
                   <div class="disc" style="min-width:135px; color: #000; margin-bottom:10px; margin-top:4px; height:10px; font-size:16px; font-weight:bold; line-height:20px;"> ID:<?php echo $prime->user_id; ?></div>
            <div class="disc1" style="min-width:135px; text-align: center; color: #000; min-height:50px;font-size:16px; font-weight:bold; line-height:20px;">
              <?php echo $prime->age; ?>,<?php echo $prime->cast_name; ?></div>
                  <div class="ca-more-wrap">
                  <a href="#" class="topopup1">
            <button type="submit" class="btn-danger">View Profile</button>
            </a>
                  </div>
                </div>
              </div>
             
              <?php }?>
            </div>
          </div>
        </div>
      </div>
      <div class="span6 happy_feed plans1">
        <div class="span12 happy_feutured" data-original-title="" title="">
          <h3 class="happy_head1">OUR PLANS</h3>
        </div>
        <div class="span9">
          <div id="container">
            <ul class="tabs">
              <li class="active" rel="tab1"> Start up</li>
              <li rel="tab2"> Standard</li>
              <li rel="tab3"> Premium</li>
            </ul>
            <div class="tab_container">
              <div id="tab1" class="tab_content">
                 <p><li>Send unlimited personalized massages</li>
                <li>View unlimited horoscopes</li>
               <li>View mobile numbers members to contact them directly</li>
                <li>priority over free members in search results</li>
                
                </p>
             
                 
              </div>
              <!-- #tab1 -->
              <div id="tab2" class="tab_content">
                <p> <li>view mobile numbers members to contact them directly</li>

<li>View unlimited horoscopes</li> 

<li>Profiles tagged as standard member for better prominence </li>

<li>Priority over Startup / free members in search results</li></p>
              </div>
              <!-- #tab2 -->
              <div id="tab3" class="tab_content">
                <p> <li>Enhanced background colour for better profile visibility</li>

<li>Send unlimited personalizes messages </li>

<li>Profile tagged as Premium members for better prominence</li> 

<li>View mobile numbers of members to contact them directly </li>

<li>View unlimited horoscopes</li></p>
              </div>
              <!-- #tab3 -->
              <div id="tab4" class="tab_content">
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged </p>
              </div>
              <!-- #tab4 --> 
              
            </div>
            <!-- .tab_container --> 
            
          </div>
          <div class="span12">
            <div class="span10"></div>
            <div class="span2">
              <button type="submit" class="btn-info">More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row-fluid feutured">
<div class="container">
<div class="row show-grid">
    <div class="span3" data-original-title="" title=""></div>
    <div class="span2" data-original-title="" title=""></div>
    <div class="span5 feutured" data-original-title="" title="">
      <h3> FEATURED PROFILE</h3>
    </div>
  </div>
<div class="row show-grid">
    <div class="container fet1">
      <div id="carousel" class='outerWrapper outerWrapper2'>
        <?php foreach($profile_highlight as $profile) {?>
        <div class="item">
          <div class="span8">
          <div class="" style="width:132px; height:132px; overflow:hidden;">
            <?php if($profile->file_name==''&&$profile->gender=='male')
									{ ?>
            <img src="<?php echo base_url();?>file/img/avtr_men.jpg" width="150" height="150" />
            <?php } elseif($profile->file_name==''&&$profile->gender=='female')
			{?> 
            <img src="<?php echo base_url();?>file/img/avtr_women.jpg" width="150" height="150" /><?php } else { ?>
            <img src="<?php echo base_url(); ?>uploads/<?php echo $profile->file_name;?>" width="132px" height="132px" alt="">
            <?php } ?>
            </div>
            <div class="disc" style="min-width:135px; color: #000; margin-bottom:10px; margin-top:4px; height:10px; font-size:16px; font-weight:bold; line-height:20px;"> ID:<?php echo $profile->user_id; ?></div>
            <div class="disc1" style="min-width:135px; text-align: center; color: #000; min-height:50px;font-size:16px; font-weight:bold; line-height:20px;">
              <?php echo $profile->age; ?>,<?php echo $profile->cast_name; ?></div>
            <div class=""><a href="#" class="topopup1">
            <button type="submit" class="btn-danger">View Profile</button>
            </a></div> </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="row show-grid">
    <div class="container">
    <div class="span6 ads" style="margin-top:25px;">
      <!--<div class="span6 happy_feed2">-->
      <img src="<?php echo base_url();?>file/img/soulmate_ads.jpg">
       <?php foreach($success as $suss)
	{?>
       <!-- <div class="span9 happy_feutured" data-original-title="" title="">
          <h3 class="happy_head">HAPPY FEEDBACK</h3>
        </div>
        <div class="span6"><img src="<?php echo base_url(); ?>success_story/<?php echo $suss->userfile;?>"> </div>
        <div class="span5" style="text-transform:uppercase;"> 
          <h4 class="feed_head"><?php echo $suss->bname;?> &<?php echo $suss->game;?></h4><h4 class="feed_head"><?php echo $suss->mdate; ?>
            </h4>
          <p><?php echo $suss->sstory;?> </p>
          <button type="submit" onClick="window.location.href = '<?php echo site_url('succes/successtory')?>'" class="btn-info">More</button>
        </div>-->
          <?php } ?>
      </div>
    
      <div class="span6 happy_feed2 plans">
        <div class="span12 happy_feutured" data-original-title="" title="">
          <h3 class="happy_head2"><img src="<?php echo base_url(); ?>file/img/images/nri_03.png"> CELEBRITY LOG IN</h3>
        </div>
        <div class="span12">
        <form action="<?php echo base_url();?>index.php/celibrityverifylogin" method="post" accept-charset="utf-8" class="form-horizontal">
     
            <div class="span8">
            <span class="err" style="color:#933;">
			<?php echo form_error('username'); echo form_error('password1');?></span>
              <div class="control-group" style="margin-bottom: 16px;">
                <label class="control-label" for="inputEmail">E-mail<span class="dt"> :</span></label>
                <div class="controls">
                 <input type="text" value="<?php echo set_value('username'); ?>"  name="username" id="inputEmail">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputEmail">Password <span class="dt">:</span></label>
                <div class="controls">
                  
                  <input name="password1" type="password"  style="margin-bottom:5px;"    >
                  <a data-toggle="modal" style="color:#FFF; font-weight:bold; font-size:14px;" data-target="#mobileupgrade" href="">Register?</a>
                </div>
              </div>
            </div>
            <div class="span4">
              <div class="span4 butten11">
                <div class="control-group">
                  <button type="submit"  class="bd ">LOGIN </button>
                   
                  <div class="controls"> </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row-fluid footer">
  <div class="container">
    <div class="span6 footer_manu feutured1"> <a href="">HOME</a> / <a href="<?php echo base_url(); ?>index.php/staticcontent/about">ABOUTUS</a>  / <a href="<?php echo base_url();?>index.php/home/register">REGISTER</a> / <a href="<?php echo base_url(); ?>index.php/payment">UP GRADE</a> / <a href="<?php echo base_url(); ?>index.php/staticcontent/contact">CONTACT US</a> / <a href="<?php echo base_url(); ?>index.php/staticcontent/help">HELP</a> </div>
    <div class="span3"></div>
    <div class="span3 feutured1" >
      <div class="span4" style="margin-left:42px;">
        <label class="control-label" for="inputEmail" style="margin-top:13px;">FOLLOW US </label>
      </div>
      <ul>
        <li><a href="#"><img src="<?php echo base_url(); ?>file/img/images/facebook_25.jpg"></a></li>
        <li><a href="#"><img src="<?php echo base_url(); ?>file/img/images/twitter_25.jpg"></a></li>
        <li><a href="#"><img src="<?php echo base_url(); ?>file/img/images/google_25.jpg"></a></li>
      </ul>
    </div>
  </div>
</div>
<script src="http://code.jquery.com/jquery.js"></script> 
<script src="<?php echo base_url(); ?>file/js/bootstrap.js"></script> 
<script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/jquery.easing.1.3.js"></script> 
<!-- the jScrollPane script --> 
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/jquery.mousewheel.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/jquery.contentcarousel.js"></script> 
<script type="text/javascript">

			$('#ca-container').contentcarousel({
			    // speed for the sliding animation
			    sliderSpeed     : 500,
			    // easing for the sliding animation
			    sliderEasing    : 'easeOutExpo',
			    // speed for the item animation (open / close)
			    itemSpeed       : 500,
			    // easing for the item animation (open / close)
			    itemEasing      : 'easeOutExpo',
			    // number of items to scroll at a time
			    scroll          : 3 
			});
		</script> 
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/waltzerjs.js"></script> 
<script type="text/javascript">

		$(document).ready(function() {

			$('#carousel').waltzer({
								auto:true,
								autoPause: 5000,
								scroll:5,
								offset:2
							});

		});

	</script>
    
    
</body>
</html>
<?php
 }
 ?>
