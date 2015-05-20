<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.js"></script>

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
          
<form class="form-horizontal" action="<?php echo base_url();?>index.php/insert_reg" method="post">

          <div class="row-fluid register1">
        <div class="span4">
         
          <p>
  <div class="control-group">
    <label class="control-label" for="inputEmail">PROFILE FOR :</label>
    <div class="controls">
 
    <select name="profile_for" class="selectpicker select_select">
<option value="0">Select Matrimony Profile for</option>
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

			<option value="0" selected="">Select Mother Tongue</option>
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
      <input type="text" class="input_feild" name="email" id="email">
      <?php echo form_error('email'); ?>
       
    </div>
  </div>
  
 </p>
         
        </div>
        <div class="span4">
         
          <p>
            <div class="control-group">
    <label class="control-label" for="inputEmail">NAME :</label>
    <div class="controls">
      <input type="text" class="input_feild" name="name" id="inputEmail">
      <?php echo form_error('name'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">RELIGION : </label>
    <div class="controls">
    <select class="selectpicker select_select" name="religion" id="Religion">
   <option value="0" selected="">Select Religion</option>
   <option label="Hindu" value="1">Hindu</option>
            <option label="Muslim" value="2">Muslim</option>
            <option label="Christian" value="3">Christian</option>
  
  </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">COUNTRY LIVING IN :</label>
    <div class="controls">
 
    <select class="selectpicker select_select" name="country">
<option value="0">Select A Country</option>
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
  </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label"  for="inputEmail">MOBILE NO :</label>
    <div class="controls">
      <input type="text" class="input_feild" name="mobile" id="inputEmail" ><?php echo form_error('mobile'); ?>
    </div>
  </div>
   
  
  
 </p>
         
        </div>
        <div class="span4">
         
          <p>
           <div class="control-group">
   <label class="control-label" for="inputEmail">GENDER :</label>
    <div class="controls">
     <label class="radio-inline">
  <input type="radio"  name="gender" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="male">MALE</label>
  <label class="radio-inline"><input type="radio" name="gender" id="inlineRadio1" style="margin-left:10px; margin-right:5px;" class="radio1" value="female">FEMALE
</label>

    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">CAST/DIVISION : </label>
    <div class="controls">
    <select name="cast" class="selectpicker select_select" id="Hindu" style="display: none;">
            
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
        <select name="cast" class="selectpicker select_select" id="Muslim"  style="display: none;">
            
            <option  value="328">Ehle Hadith</option>
            <option value="329">Gulf Muslims</option>
            <option value="330">Memon</option>
            <option value="331">Ansari</option>
            <option value="332">Arain</option>
            <option value="333">Awan</option>
            <option value="334">Bengali</option>
            <option value="357">Others</option>
        </select>
        <select name="cast" class="selectpicker select_select" id="Christian" style="display: none;" >
            
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
    
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="inputEmail">LOGIN  PASSWORD :</label>
    <div class="controls">
      <input name="password" class="input_feild" type="password" id="inputEmail"><?php echo form_error('password'); ?>
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
  </div></div>
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
          