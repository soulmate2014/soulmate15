<?php $this->load->view('header');?> 
<link href="<?php echo base_url(); ?>file/css/about.css" rel="stylesheet" type="text/css" />
<style>
.faq{
	
	color:#4cbcba;
	 font-size:18px;
	  padding-bottom:10px;
	
}
.ans{
	color:#656565; 
	font-size:16px;
	 padding-bottom:10px;
}
h2{
	color:#4cbcba;

}
</style>
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
<div class="row-fluid content">

	<div class="container">
    <div class="span12">
      <h2 style="margin-bottom: 30px;padding-bottom: 10px; border-bottom:#656565 2px solid;padding-left: 0px;
  margin-top: 20px;">Registration</h2>
  <li class="faq" >How do I register on soulmatematrimony.com?</li>
  <div class="ans"  >Login to www.soulmatematrimony.com<br />
  
You can choose to register either as a free member or as a paid member.</div>
 <li class="faq" style="list-style:none; margin-left:15px;" >Free member</li>
 <div class="ans"  >Provide name, age, gender, e-mail ID and mobile number.
Click on Register link and you will have to enter on a couple of pages the details of the person intending to get married.
After you submit your information, your profile will be automatically created and you shall be given a ' Soulmate ID' generated for future references and login purposes.
</div>

<li class="faq" style="list-style:none; margin-left:15px;" >Paid member</li>
 <div class="ans"  >Provide name, age, gender, e-mail ID and mobile number.
Click on Register link and you will have to enter details of the person intending to get married.
Choose package for the required period and pay.
You shall have a ' Soulmate ID' generated for further references and login purposes.

</div>
<li class="faq" >Why should I register on soulmatematrimony.com ?
</li>
  <div class="ans" >Soulmatematrimony is an exclusive online platform for people to meet prospective soulmates. When you register on the site, your profile gets searched by thousands of members of the site.You can receive messages from interested members, and can send interests to them.
You can also request for photos, videos and horoscopes.</div>
    </div>
   <li class="faq">Should I complete the forms on registration for being a member of the site?
</li>
  <div class="ans"  >Soulmatematrimony is an exclusive online platform for people to meet prospective soulmates. When you register on the site, your profile gets searched by thousands of members of the site.You can receive messages from interested members, and can send interests to them.
You can also request for photos, videos and horoscopes.</div>

    
    
    
    
    <li class="faq">Why should I give my email ID and contact details when I am registering on soulmatematrimony.com?
</li>
  <div class="ans" >The email ID that you specify is the one on which Soulmatematrimony will send you all communication from prospective partners. You can receive match watch mails and mail received alerts on your inbox. This email ID will not shared with anyone. The contact details that you provide will be shared only with subscribers to the site who are interested in your profile as a prospective partner. </div>
    
    <li class="faq">How do I verify my contact number? 
</li>
  <div class="ans">You will get a  security code as an SMS on your given number during registration which can be entered on the site to verify your number. Else if you skip this verification, our team will contact you to verify. </div>
 
    <li class="faq">How do I add photos on the site?
</li>
  <div class="ans"  >You can add up to 4 photos with your profile. You can add your photos along with the registration process. If you do not do this at the time of registration, you may do so from your My Account Page. A profile with photos generates more interest and increases your chances of getting contacted. However, You can also set privacy for your photos.</div>
 
    <li class="faq">How do I add video on the site?
</li>
  <div class="ans"  >You can add only 1 video with your profile. You can add video  along with the registration process. If you do not do this at the time of registration, you may do so from your My Account Page. You can also set privacy for your video.</div>

    <li class="faq">How do I add Horoscopes with my profile?
</li>
  <div class="ans"  >You can upload your horoscope to your profile during the registration process. You can also choose to generate your horoscope free of cost on the site by entering the required fields on the Astroprofile tab during the registration process.  </div>

    <li class="faq">Why do I need to add a partner profile in my registration?
</li>
  <div class="ans"  >It is very important that you add your partner profile. This will give members an idea whether they do fit in with your requirements. More importantly, your periodical match watch alerts and new match alerts are built on the information you give in your partner profile. </div>

    <li class="faq">What do I enter in the field About Me?
</li>
  <div class="ans"  >The About Me field is where you can enter a description of yourself. Most members who view your profile get a picture of you based on what you enter here. You can add what kind of a person you are, job profile and interests and personality details etc. here. All content in this space is screened for objectionable matter like contact details. </div>

    <li class="faq">What happens if there is objectionable content in any of the matter I have entered?
</li>
  <div class="ans"  >If by chance any/all of the fields have objectionable content, the admin rejects entries in the field and sends you an email showing the reason why it has been rejected. You can change the matter and enter the fresh content using the link in your Edit my profile page. The new entry will be screened and approved by the admin.</div>

    
     <h2 style="margin-bottom: 30px;padding-bottom: 10px; border-bottom:#656565 2px solid;padding-left: 0px;
  margin-top: 20px;">Managing Profiles</h2>
    <li class="faq">How do I log on to soulmatematrimony.com?
</li>
  <div class="ans"  >You can log on to soulmatematrimony.com using your user ID and password. If you forget your password, you can click on the link and you will be guided on the procedure to retrieve the password. You can also change your password using the link on My Accounts Page.</div>

    <li class="faq">What is my Profile ID?
</li>
  <div class="ans"  >The profile ID is a unique number that is attached to your profile. This number will be displayed against your profile whenever it is viewed. The number can be entered in the search option -Search profile by ID, to find the profile you want.</div>

    <li class="faq">How do I logout from soulmatematrimony.com?
</li>
  <div class="ans"  >You can use the button on the top right hand corner to log out of soulmatematrimony.com. It is important that you do so. The special privileges that you have can be misused by someone else if you do not log out.</div>

    <li class="faq">How can I change the information I submitted at registration?
</li>
  <div class="ans"  >You can change information added at registration by clicking the Edit my Profile.</div>

    <li class="faq">Can I change my password that I have submitted at Registration?
</li>
  <div class="ans"  >You can do that by logging on to the site and using the link on My Account page.</div>

    <li class="faq">Why can't I view all the information that I have entered on my profile?
</li>
  <div class="ans"  >Many of the fields on which you have provided information are screened for objectionable content. This may pertain to specific commercial uses; comments that hurt religious and social sentiments, obscene matter and contact information entered in fields other than those specified for it.</div>
  
 <h2 style="margin-bottom: 30px;padding-bottom: 10px; border-bottom:#656565 2px solid;padding-left: 0px;
  margin-top: 20px;">Search</h2>
  
    <li class="faq">How do I search for my partner on soulmatematrimony.com?
</li>
  <div class="ans"  >You can search for your partner on soulmatematrimony.com using the simple search. You can also use the advanced search to broaden the search criteria. The search results can be further filtered by a number of parameters.</div>
  
  <li class="faq">What are the other search options I have on soulmatematrimony.com?
</li>
  <div class="ans"  >You can add as many parameters or filters as you can when you search on soulmatematrimony.com. You can define your search on Location, Profession, Personality etc. You can also use the powerful keyword search options.</div>

  <li class="faq"> Can I save my search results?
</li>
  <div class="ans"  >You can use the Favorites feature to save profiles to your list. You can also add specific comments to the favorites, the icon and comment will be displayed by the side of the profile when you see this in future.</div>
    
     <li class="faq">are new matches that I see displayed in My accounts page?
</li>
  <div class="ans"  >The new matches is a free service provided by soulmatematrimony.com  to identify profiles that best match your requirements. The new match service is based on partner profiles. It's a periodic mail that is sent to members.</div>
  
      <li class="faq">What are new matches that I see displayed in My accounts page?
</li>
  <div class="ans"  >The new matches is a free service provided by soulmatematrimony.com  to identify profiles that best match your requirements. The new match service is based on partner profiles. It's a periodic mail that is sent to members.</div>
  
       <li class="faq">How do I know if other visitors have viewed my profile?
</li>
  <div class="ans"  >You can keep track of your profile views in your my Account Page.</div>
  
       <li class="faq">I do if I am getting match watch profiles which don't fit in with my criteria?
</li>
  <div class="ans"  >Please check the information that you have provided on your Partner profile. If this is too broad, then you may get a lot of response that does not specifically match your requirements. On the other hand, if you have defined it too narrow, you may miss out on prospective partners.</div>
  
  <li class="faq">How can I retrieve profiles that I have Liked?
</li>
  <div class="ans"  >You can find it on your my Account page. The link gives you the complete profiles of all members you have liked.</div>
  
   <h2 style="margin-bottom: 30px;padding-bottom: 10px; border-bottom:#656565 2px solid;padding-left: 0px;
  margin-top: 20px;">Features</h2>
  
    <li class="faq">What are the attachments that I can include in my Profile?
</li>
  <div class="ans">You can have a host of valuable attachments with your profiles. These are photos,video, and horoscopes </div>
  
      <li class="faq">Why should I include my photo with the profile?
</li>
  <div class="ans">Adding your photo to your profile would typically increase response to your profile. You can add upto five photos. </div>
  
    <li class="faq">How can I add photos to my profile?
</li>
  <div class="ans">You can add photos to your profile as soon as you register your profile. You can also opt to add photos from your My Account Page. </div>
  
    <li class="faq">How do ensure safety for my photos?
</li>
  <div class="ans">You can choose to password protect your photos. You can send the password on a request based on your approval of the member who sends the request. </div>
  
    <li class="faq">Can I change the photos that I have uploaded?
</li>
  <div class="ans">You can change the photos you have attached by using the link on Edit my photo page. </div>
  
  
    <li class="faq">How can I add video to my profile?
</li>
  <div class="ans">You can add video to your profile as soon as you register your profile. You can also opt to add video  from your My Account Page. </div>


    <li class="faq">How do ensure safety for my video?
</li>
  <div class="ans">You can choose to password protect your video. You can send the password on a request based on your approval of the member who sends the request.</div>
  
      <li class="faq">Can I change the video that I have uploaded?
</li>
  <div class="ans">You can change the video  you have attached by using the link on Edit my video page.</div>
  
        <li class="faq">Can I change the video that I have uploaded?
</li>
  <div class="ans">You can change the video  you have attached by using the link on Edit my video page.</div>
  
        <li class="faq">How can I add a horoscope with my photo?
</li>
  <div class="ans">You can add a horoscope to your photo by using the link on Edit my horoscope page. You can also generate a horoscope free either at registration or later by giving the essential information on the Astropage. </div>
  
      <li class="faq">Are the attachments with the profile validated?
</li>
  <div class="ans">All attachments are screened manually before they are updated. This may be a reason why you can't view uploads immediately. Please avoid objectionable content in your attachments. Please refer to our terms of use for pointers on what is objectionable. </div>
  
      <li class="faq">Why can't I view my attachments immediately?
</li>
  <div class="ans">All attachments are screened manually before they are updated. This may be a reason why you can't view uploads immediately. Please avoid objectionable content in your attachments. Please refer to our terms of use for pointers on what is objectionable.</div>
  
        <li class="faq">What is the Express Interest Feature?
</li>
  <div class="ans">The express interest feature allows you to express your interest in the profile that you are viewing. You can send this if you are a registered member of the site. The member can then accept or reject the interest based on their interests. Similarly, other members can send you messages that you can choose to accept or reject. This is a free communication built in on soulmatematrimony.com for all registered users. You can choose the message you want to send and then forward that to the member. Your my Account page has a list of interests that were sent by you and their status, whether it has been accepted or rejected, or whether the interest is pending (which means you are yet to take an action on the interest). The page also has a list of interests sent by you, and whether the user has accepted, rejected the interest or whether it is still pending action (which means the user has not yet acted on the interest).</div>
  
  
        <li class="faq">What are personal mails?
</li>
  <div class="ans">Subscribers to soulmatematrimony.com have a special privilege of sending personalised messages to other members. These mails can have your details as well as any content that you may need to discuss with other members. You can track your messages sent and received in your my Accounts page.</div>
  
          <li class="faq">What is Astromatch?
</li>
  <div class="ans">Astromatch is a premium service offered by soulmatematrimony.com. The Astro match is a paid service that members can subscribe to. The Astromatch offers users the advantage of matching profiles online. Astromatch can be done on any two profiles for which horoscopes are generated on soulmatematrimony.com. Astro match cannot be done if any of the profiles do not have horoscopes or if any has an attached image file as a horoscope. Horoscopes can be generated free with all profiles. </div>
  
          <li class="faq">How do I match profiles with Astromatch?
</li>
  <div class="ans">To use Astromatch, you need to subscribe to the service. Once you have, you just have to enter the profile id of the profile with which you would like to check your astro compatibility. The match report is generated immediately.</div>
  
  
   <li class="faq">What are the formats in which I should upload my attachments?
</li>
  <div class="ans">For photos, you can upload files upto 2 MB, in either of these formats: jpg, gif or bmp. For Horoscope files you can upload files upto 2 MB, either as a jpg, gif or bmp.</div>
  
     <h2 style="margin-bottom: 30px;padding-bottom: 10px; border-bottom:#656565 2px solid;padding-left: 0px;
  margin-top: 20px;">Contact</h2>
  
    <li class="faq">How do I contact members on soulmatematrimony.com?
</li>
  <div class="ans">To contact members on soulmatematrimony.com you need to be a registered user of the site. As a registered user you can express interest in a profile by clicking on the option along with the detailed profile of a member. You can also send personalised mails/messages toa member if you are a subscriber.</div>\
  
    <li class="faq">What are accept and reject interests?
</li>
  <div class="ans">When you receive an interest from a member on soulmatematrimony.com, you can choose the action you want to take based on your interest in the member. When you accept the interest it implies that you are open to further communication from the member. You can also choose to reject the interest if you are not interested in the member. You can send an interest to a rejected member if you change your mind later.</div>
  
     <li class="faq">How do I contact members on soulmatematrimony.com?
</li>
  <div class="ans">To contact members on soulmatematrimony.com you need to be a registered user of the site. As a registered user you can express interest in a profile by clicking on the option along with the detailed profile of a member. You can also send personalised mails/messages toa member if you are a subscriber.</div>
  
       <li class="faq">Where do I find interests sent to me?
</li>
  <div class="ans">You can track your entire communication at your personal My Accounts page. This page has your interests/mails/requests sent/received etc. When you log in to the site, this is the page you are taken to.</div>
  
       <li class="faq">How does the My Account page help me manage my membership on soulmatematrimony.com?
</li>
  <div class="ans">The my account page is your personal dashboard of activity on soulmatematrimony.com. You can track your communication to and from members on this page. You can also edit profile features from the page. Your new matches are also displayed on the same page. This is the default page you are taken to, when you log on to soulmatematrimony.com.</div>
  
  <li class="faq">Can I write personalised messages to any members?
</li>
  <div class="ans">If you are a subscriber to the site you can write a personalised message to any member regardless of whether he/she is a registered user or a subscriber to the site.</div>
  
  
    <li class="faq">Can members respond to me if they are not subscribers to the site?
</li>
  <div class="ans">All registered users can respond to personalised messages from subscribers, irrespective of whether they are registered members or subscribed members.</div>
  
    <li class="faq">Can soulmatematrimony.com customer support help me contact a member on the site?
</li>
  <div class="ans">Soulmatematrimony.com offline customer assistance centres help members who are not regularly online to manage their subscriptions. If you are a subscriber of the site, you can choose to contact any of our offices to seek assistance in managing your account. </div>
  
      <li class="faq">How do I know when a member contacts me?
</li>
  <div class="ans">Soulmatematrimony.com has a great tool to let members know when they have received an interest/message/request or a reply to interests/messages/requests sent to them. This is immediately intimated to the member through mail. This information is also immediately available in your My Account page. </div>
  
      <h2 style="margin-bottom: 30px;padding-bottom: 10px; border-bottom:#656565 2px solid;padding-left: 0px;
  margin-top: 20px;">Memberships</h2>
  
  
        <li class="faq">What are the various types of memberships on soulmatematrimony.com?
</li>
  <div class="ans">All members who have their profiles on soulmatematrimony.com are registered members of the site. They can post and view complete profiles. Subscriptions to soulmatematrimony.com brings its own special privileges like access to contact details and sending personalised messages.  </div>
  
  
   <li class="faq">What are the subscriptions offered on soulmatematrimony.com?
</li>
  <div class="ans">There are five  packages currently offered to members on soulmatematrimony.com. Each package can be accessed for three different timeframes- Three months, Six months and Nine months. Benefits includes: You can send personalised e-mails to members you like instead of sending Express Interest.You can protect your photo, video and horoscope.You can view the contact details of the referees.You can view the contact number of members you like.</div>
  
  
   <li class="faq">How do I decide which membership is best for me?</li>
  <div class="ans">You can choose a membership package that is best suited to your needs by comparing the features available in various membership types.  </div>
 
    <li class="faq">How can I renew/upgrade memberships?</li>
  <div class="ans">You can choose to upgrade membership by clicking on Membership from the My Account page. You can renew your current membership only a couple of weeks from the time of expiry of the current one. </div>
 
 
    <li class="faq">Can I buy an Astropack if I exhaust my limit/ need to buy if I have current subscription?
  <div class="ans">You can choose to buy Astropack alone. To purchase Astropack,  </div>
  
     <li class="faq">How do I pay for Subscriptions?</li>
  <div class="ans"> You can pay for your subscriptions online through: Credit Cards You can choose to pay by cash at any of our offline support centers  </div>
  
  
     <li class="faq">Is my credit card payment on soulmatematrimony.com  secure?</li>
  <div class="ans">Yes, your credit card information on soulmatematrimony.com  is perfectly secure. We have an encryption software that prevents misuse of the information. This encrypted information is passed on the payment gateway. Credit card info is entered only on the Verisign Certified secure server. 128 bit SSL encryption deployed. We can process Visa and MasterCard credit cards issued around the globe. Real time authorization happens to the information. For extra level of protection, our payment gateway also supports "Verified by VISA" and "MasterCard Secure Code" services. </div>
  
     <li class="faq">What type of credit cards are processed on soulmatematrimony.com?</li>
  <div class="ans">Visa and master card credit cards issued across the globe are process on soulmatematrimony.com </div>
  
  <li class="faq">How soon will my membership be processed when I make payment?</li>
  <div class="ans">Your subscription is activated immediately when you make online payment.</div>
  
    <li class="faq">What is the refund policy of soulmatematrimony.com?</li>
  <div class="ans">You can start enjoying the benefits of a subscription immediately on making payment, hence generally payment once made is not refunded. Any exceptions to this rule are generally at the prerogative of the company.</div>
  
  
        <h2 style="margin-bottom: 30px;padding-bottom: 10px; border-bottom:#656565 2px solid;padding-left: 0px;
  margin-top: 20px;">Soulmatematrimony.com Wedding features</h2>
  
  
      <li class="faq">What are the additional features on soulmatematrimony.com?</li>
  <div class="ans">Soulmatematrimony.com offers you an exclusive content section that helps you plan a perfect wedding.</div>
  
      <li class="faq">How do I let soulmatematrimony.com know if I find a partner on the site?</li>
  <div class="ans">Soulmatematrimony.com would really welcome your story when you find a partner on the site. We shall share this information to all the members through the Success Stories feature. You can submit your success story here, you can view all success stories on the relevant section </div>
  
  <h2 style="margin-bottom: 30px;padding-bottom: 10px; border-bottom:#656565 2px solid;padding-left: 0px;
  margin-top: 20px;">Privacy Concerns</h2>
  
  	 <li class="faq">How do I ensure that my profile is safeguarded on soulmatematrimony.com?</li>
  <div class="ans">Soulmatematrimony.com tries to protect the user's privacy at every stage. You can choose to provide as much or as little information on soulmatematrimony as you choose. You have options to set passwords for your contact information, photos, video and horoscopes. You can approve a request before the information is send to other members. All image files are also watermarked to prevent misuse. This feature is available to all members regardless to whether they are free users of the site or subscribers.</div>
  
  
   <li class="faq">How do I report if I get unwanted messages from any members?</li>
  <div class="ans">You can choose to ignore members who send unwanted messages. You can also report abuse/obscene content sent by any member by forwarding the same to support@soulmatematrimony.com. We will look into the matter immediately.</div>
  
  
   <li class="faq">What do I do if I see any objectionable content on the site?</li>
  <div class="ans">Soulmatematrimony.com manually screens all text entries and images to ensure that objectionable matter does not appear on the site. Just in case it has slipped our notice, please send a mail with the problem to support@soulmatematrimony.com. </div>
  
   <li class="faq">How can I send in my suggestions for site improvement?</li>
  <div class="ans">Soulmatematrimony.com is dedicated to create the most comprehensive platform for people to meet online for matrimonial purposes. It is your suggestion and support that shall enable us to do so. Please mail your comments/suggestions to support@soulmatematrimony.com. We shall revert to you on the same.</div>
  
   <li class="faq">How sure can I be of information entered in profiles on soulmatematrimony.com?</li>
  <div class="ans">Soulmatematrimony.com does not offer a profile validation service currently. The user posts the information on the profiles and members are advised due diligence on all profiles before they proceed further. Please report any issues that you have in this regard on support@soulmatematrimony.com. </div>
  
     </div>
    </div>
  
      <?php $this->load->view('footer');?> 