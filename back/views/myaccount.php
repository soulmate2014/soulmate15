<?php $this->load->view('header');?>
   	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"> </script>
<link href="<?php echo base_url();?>file/css/myaccount.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo base_url();?>file/js/script.js"></script>
        <link href="<?php echo base_url();?>file/css/popup.css" rel="stylesheet" type="text/css" media="all" />
        
        
<script>
$(document).ready(function() {
 
    $('#btn-add').click(function(){
        $('#select-from option:selected').each( function() {
                $('#select-to').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
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
 
    $('#btn-add7').click(function(){
        $('#select-from7 option:selected').each( function() {
                $('#select-to7').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove7').click(function(){
        $('#select-to7 option:selected').each( function() {
            $('#select-from7').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>       
       
<script>
$(document).ready(function() {
 
    $('#btn-add8').click(function(){
        $('#select-from8 option:selected').each( function() {
                $('#select-to8').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove8').click(function(){
        $('#select-to8 option:selected').each( function() {
            $('#select-from8').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>      
<style>
.span4 .imagemy img{
	width:150px;
	height:150px
}
</style>    
   	<div class="center"><?php foreach($query1 as $row){ ?>
           <div class="row-fluid content">
				<div class="container">
    				<div class="span12">
                    	 <h2>MY ACCOUNT <?php echo $row->pref_age_from; ?></h2>
                    		<div class="span7 ">
                            <div class="profile">
                            	<div class="span12">
                                	<div class="span4 imagemy"><?php if($file_name=='')
									{ ?><img src="<?php echo base_url();?>uploads/noimage.jpg" width="150" height="150" /><!--<form action="<?php echo base_url();?>index.php/upload_myaccount_controller/do_upload" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                    <input type="hidden" name="email" value="<?php echo $username; ?>" /><input type="file" /><input type="submit" class="btn" value="upload" name="Submit" />
                                    </form>-->
                                    <?php }
									else
									{
										?>
                                    <img src="<?php echo base_url();?>uploads/<?php echo $row->file_name; ?>" width="150" height="150" /><?php } ?></div>
                            		<div class="span8">
                                    	<div class="loader"><p>your profile is </p>
                                    		<div class="span3"><div class="progress">
                                            
  <div class="bar" style="width:<?php echo $progress; ?>%;"><?php echo $progress; ?>%</div>
</div></div>
                                      <p>completed</p>     
                                        
                                        </div>
                                    </div>
								</div> 
                                </div>                           
        					
                       
                           <div class="personal">
                            <div class="span11">
                            <h2>Personal Information</h2>
                             <div class="personal">
                          <div class="span10">
                          <div class="span12" >
                          
                          <ul class="nav">
                         <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon_07.jpg" /></li>
                <li ><h3>myself</h3></li>
                <li style="border:none;" ><h3><a href="#" class="topopup" style="text-decoration:none; color:inherit;">edit</a></h3></li>
                            </ul>
                            
                            
                            
                            
                            <div id="toPopup"> 
    	
        <div class="close2"></div>
       
		<div id="popup_content"> <!--your content start-->
        <h2>myself</h2>
           <form action="<?php echo base_url();?>index.php/profile_edit/" method="post"><textarea name="about_us">
<?php echo $row->about_us; ?>
            </textarea>
             
       <input type="hidden" name="uid" value="<?php echo $row->uid; ?>" />
        <input type="submit" class="ppbutton" value="update"/></form>
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
    
	<div class="loaderr"></div>
   	<div id="backgroundPopup"></div>
                            
                            
                            
                            
                            
                            </div>
                            </div>
                             </div>
   
                            <div class="paragraph">
                              <div class="span12">
                    <p><?php echo $row->about_us; ?> </p>
                             </div>
                            </div> 
               </div>
                    </div>
                    
                    <div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span10">
                          <div class="span12" >
                         
                          <ul class="nav">
                 <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-2_11.jpg" /></li>          
                <li ><h3>Basic Details</h3></li>
                <li style="border:none;" ><h3><a href="#" class="topopup1" style="text-decoration:none; color:inherit;">edit</a></h3></li>
                            </ul>
                            
                            
                            
   <div id="toPopup1"> 
    	
        <div class="close2"></div>
       
		<div id="popup_content1"> <!--your content start-->
        <h2>Basic Details</h2>
           <table class="new2 ">
                   
  							<tr >
                            	<td >profile created for :</td>
                                <td ><select name="profile_for" class="selectpicker select_select" style="color:#000;border-color:#991248;font-weight: 100;">
<option value="0">Select Matrimony Profile for</option>
			<option value="Myself">Myself</option>
			<option value="Son">Son</option>
			<option value="Daughter">Daughter</option>
			<option value="Brother">Brother</option>
			<option value="Sister">Sister</option>
			<option value="Relative">Relative</option>
			<option value="Friend">Friend</option>
  </select></td>
                                <td class="new">name:</td>
                                <td ><input type="text" value="jaison k mathew" style="color:#000; border-color:#991248;font-weight: 100;"/></td>
                               
                                
                              </tr>
                              <tr>
                                <td>body Type/Completion :</td>
                                <td><div class="controls ">
     				
  						<input type="radio" name="body_type" id="inlineRadio1" style=" margin-right:5px;" class="radio1 " value="slim">
  						Slim
  						<input type="radio" name="body_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="average">
  						Average
  						<input type="radio" name="body_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="athletic">
         Athletic
         <input type="radio" name="body_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="heavy">
         Heavy</label>


    </div></td>
                                 <td class="new">date of birth:</td>
                                <td><div class="controls">
    <select name="day" class="selectpicker day ppcolor" style="border-color:#991248;font-weight: 100;">
    <option value="0">DD</option>
  <option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
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
  </select>
  <select name="month" class="selectpicker day ppcolor" style="border-color:#991248;font-weight: 100;">
  <option>MM</option>
 <option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
  </select>
 <select name="year" class="selectpicker day ppcolor" style="border-color:#991248;font-weight: 100;">
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
    </div></td>
                                
                                </tr>
                           	<tr>
                            	<td>Physical Status :</td>
                               <td>
                               <input type="radio" name="inlineRadioOptions" id="inlineRadio1 " value="option1" style="margin:2px 7px 0 0 ;">Normal
  
 <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;">Physically challenged

<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;"> Doesnt matter 
  </td>
                               <td class="new">height :</td>
                                <td><select name="height" class="selectpicker day" style="color:#000;border-color:#991248;font-weight: 100;">
									<option value="0">- Cms -</option>
									<option value="137">137cm</option><option value="138">138cm</option><option value="139">139cm</option><option value="140">140cm</option><option value="141">141cm</option><option value="142">142cm</option><option value="143">143cm</option><option value="144">144cm</option><option value="145">145cm</option><option value="146">146cm</option><option value="147">147cm</option><option value="148">148cm</option><option value="149">149cm</option><option value="150">150cm</option><option value="151">151cm</option><option value="152">152cm</option><option value="153">153cm</option><option value="154">154cm</option><option value="155">155cm</option><option value="156">156cm</option><option value="157">157cm</option><option value="158">158cm</option><option value="159">159cm</option><option value="160">160cm</option><option value="161">161cm</option><option value="162">162cm</option><option value="163">163cm</option><option value="164">164cm</option><option value="165">165cm</option><option value="166">166cm</option><option value="167">167cm</option><option value="168">168cm</option><option value="169">169cm</option><option value="170">170cm</option><option value="171">171cm</option><option value="172">172cm</option><option value="173">173cm</option><option value="174">174cm</option><option value="175">175cm</option><option value="176">176cm</option><option value="177">177cm</option><option value="178">178cm</option><option value="179">179cm</option><option value="180">180cm</option><option value="181">181cm</option><option value="182">182cm</option><option value="183">183cm</option><option value="184">184cm</option><option value="185">185cm</option><option value="186">186cm</option><option value="187">187cm</option><option value="188">188cm</option><option value="189">189cm</option><option value="190">190cm</option><option value="191">191cm</option><option value="192">192cm</option><option value="193">193cm</option><option value="194">194cm</option><option value="195">195cm</option><option value="196">196cm</option><option value="197">197cm</option><option value="198">198cm</option><option value="199">199cm</option><option value="200">200cm</option><option value="201">201cm</option><option value="202">202cm</option><option value="203">203cm</option><option value="204">204cm</option><option value="205">205cm</option><option value="206">206cm</option><option value="207">207cm</option><option value="208">208cm</option><option value="209">209cm</option><option value="210">210cm</option><option value="211">211cm</option><option value="212">212cm</option><option value="213">213cm</option>								</select></td>
                             </tr>
                             <tr> 
                               <td>Weight :</td>
                               <td><select name="weight" class="selectpicker day" style="color:#000;border-color:#991248;font-weight: 100;">

									<option value="0">- Kgs -</option>
									<option value="41">41 kg</option><option value="42">42 kg</option><option value="43">43 kg</option><option value="44">44 kg</option><option value="45">45 kg</option><option value="46">46 kg</option><option value="47">47 kg</option><option value="48">48 kg</option><option value="49">49 kg</option><option value="50">50 kg</option><option value="51">51 kg</option><option value="52">52 kg</option><option value="53">53 kg</option><option value="54">54 kg</option><option value="55">55 kg</option><option value="56">56 kg</option><option value="57">57 kg</option><option value="58">58 kg</option><option value="59">59 kg</option><option value="60">60 kg</option><option value="61">61 kg</option><option value="62">62 kg</option><option value="63">63 kg</option><option value="64">64 kg</option><option value="65">65 kg</option><option value="66">66 kg</option><option value="67">67 kg</option><option value="68">68 kg</option><option value="69">69 kg</option><option value="70">70 kg</option><option value="71">71 kg</option><option value="72">72 kg</option><option value="73">73 kg</option><option value="74">74 kg</option><option value="75">75 kg</option><option value="76">76 kg</option><option value="77">77 kg</option><option value="78">78 kg</option><option value="79">79 kg</option><option value="80">80 kg</option><option value="81">81 kg</option><option value="82">82 kg</option><option value="83">83 kg</option><option value="84">84 kg</option><option value="85">85 kg</option><option value="86">86 kg</option><option value="87">87 kg</option><option value="88">88 kg</option><option value="89">89 kg</option><option value="90">90 kg</option><option value="91">91 kg</option><option value="92">92 kg</option><option value="93">93 kg</option><option value="94">94 kg</option><option value="95">95 kg</option><option value="96">96 kg</option><option value="97">97 kg</option><option value="98">98 kg</option><option value="99">99 kg</option><option value="100">100 kg</option><option value="101">101 kg</option><option value="102">102 kg</option><option value="103">103 kg</option><option value="104">104 kg</option><option value="105">105 kg</option><option value="106">106 kg</option><option value="107">107 kg</option><option value="108">108 kg</option><option value="109">109 kg</option><option value="110">110 kg</option><option value="111">111 kg</option><option value="112">112 kg</option><option value="113">113 kg</option><option value="114">114 kg</option><option value="115">115 kg</option><option value="116">116 kg</option><option value="117">117 kg</option><option value="118">118 kg</option><option value="119">119 kg</option><option value="120">120 kg</option><option value="121">121 kg</option><option value="122">122 kg</option><option value="123">123 kg</option><option value="124">124 kg</option><option value="125">125 kg</option><option value="126">126 kg</option><option value="127">127 kg</option><option value="128">128 kg</option><option value="129">129 kg</option><option value="130">130 kg</option><option value="131">131 kg</option><option value="132">132 kg</option><option value="133">133 kg</option><option value="134">134 kg</option><option value="135">135 kg</option><option value="136">136 kg</option><option value="137">137 kg</option><option value="138">138 kg</option><option value="139">139 kg</option><option value="140">140 kg</option>									</select></td>
                               <td class="new">Mother Tounge:</td>
                                <td><select class="selectpicker select_select" name="mother_tongue" style="color:#000;border-color:#991248;font-weight: 100;">

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
  </select></td>
                             </tr>
                   </table >
            
            <a href="#"><input type="button" class="ppbutton" value="update"/></a>
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
    
	<div class="loaderr1"></div>
   	<div id="backgroundPopup1"></div>                         
                            
                            
                            
                            
                            </div>
                            </div>
                             </div>
                            <div class="tble ">
                              <div class="span12">
                    <table class="new2 ">
                   
  							<tr >
                            	<td >profile created for :</td>
                                <td ><?php echo $row->profile_for; ?></td>
                                <td class="new">name:</td>
                                <td ><?php echo $row->name; ?></td>
                               
                                
                              </tr>
                              <tr>
                                <td>body Type/Completion :</td>
                                <td><?php echo $row->body_type; ?></td>
                                 <td class="new">age :</td>
                                <td><?php echo $age; ?></td>
                                
                                </tr>
                           	<tr>
                            	<td>Physical Status :</td>
                               <td>Normal</td>
                               <td class="new">height :</td>
                                <td><?php echo $row->height; ?>cm</td>
                             </tr>
                             <tr> 
                               <td>Weight :</td>
                               <td><?php echo $row->weight; ?>kg</td>
                               <td class="new">Mother Tounge:</td>
                                <td><?php echo $row->mother_tongue; ?></td>
                             </tr>
                   </table >
                   
                             
                             
						</div>
                            </div> 
                             </div>
                  
                    </div>
                    
                    
                    
                    
                    
                    
 <div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span10">
                          <div class="span12" >
                          
                          <ul class="nav">
                 <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-2_16.jpg" /></li> 
                <li ><h3>Religious Information</h3></li>
                <li style="border:none;" ><h3><a href="#" class="topopup2" style="text-decoration:none; color:inherit;">edit</a></h3></li>
                            </ul>
                            
                            
 
 
 <div id="toPopup2"> 
    	
        <div class="close2"></div>
       
		<div id="popup_content2"> <!--your content start-->
        <h2>Religious Information</h2>
            <table class="new2 ">
                   
  							<tr >
                            	<td >Religion :</td>
                                <td >
<select class="selectpicker select_select" name="religion" style="color:#000;border-color:#991248;font-weight: 100;">
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
  </select></td>
 </tr>
 <tr> 
  
  
  <td >Caste /Sub Caste :</td>
                                <td >
<select class="selectpicker select_select" name="religion" style="color:#000;border-color:#991248;font-weight: 100;">
   <option value="0" selected="">cast</option>
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
  </select></td>
  </tr>
  <tr>
  		 <td >star :</td>
		<td>  
  		<select name="star" class="selectpicker select_select" style="color:#000;border-color:#991248;font-weight: 100;">
											<option value="0" selected="selected">- Optional -</option>
											<option style="" value="1">Aswathi</option><option style="" value="2">Bharani</option><option style="" value="3">Krithiga</option><option style="" value="4">Rohini</option><option style="" value="5">Makayiram</option><option style="" value="6">Thiruvathira</option><option style="" value="7">Punartham</option><option style="" value="8">Pooyam</option><option style="" value="9">Ayilyam</option><option style="" value="10">Magam</option><option style="" value="11">Pooram</option><option style="" value="12">Uthram</option><option style="" value="13">Atham</option><option style="" value="14">Chithira</option><option style="" value="15">Chothi</option><option style="" value="16">Visakham</option><option style="" value="17">Anizham</option><option style="" value="18">Ketta</option><option style="" value="19">Moolam</option><option style="" value="20">Pooradam</option><option style="" value="21">Uthiradam</option><option style="" value="22">Thiruvonam</option><option style="" value="23">Avittam</option><option style="" value="24">Chadayam</option><option style="" value="25">Pooruttathi</option><option style="" value="26">Uthirattathi</option><option style="" value="27">Revathi</option>										</select></td>
  </tr>
  
  <tr>
	<td>Shudha Jadakam :</td>
    <td>
  						<input type="radio" name="sudha_jadakam" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="yes">
  						Yes
 						<input type="radio" name="sudha_jadakam" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="yes">
 						No
  						<input type="radio" name="sudha_jadakam" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Don't Know">
         Don't Know
					</label></td>
</tr> 
  </table>
            
            <a href="#"><input type="button" class="ppbutton" value="update"/></a>
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
    
	<div class="loaderr2"></div>
   	<div id="backgroundPopup2"></div>
                                                       
                            
                            
                            
                            
                            
                            </div>
                            </div>
                             </div>
                            <div class="tble">
                              <div class="span12">
                    <table class="new2 ">
                   
  							<tr >
                            	<td >Religion :</td>
                                <td ><?php echo $row->religion; ?></td>
                             
                              </tr>
                              <tr>
                                <td>Caste /Sub Caste :</td>
                                <td><?php echo $row->cast; ?></td>
                                
                                </tr>
                           	<tr>
                            	<td>Star </td>
                               <td><?php echo $row->star; ?></td>
                               
                             </tr>
                             <tr> 
                               <td>Shudha Jdakam :</td>
                               <td><?php echo $row->sudha_jadakam; ?></td>
                              
                             </tr>
                   </table >
                   
                             
                             
						</div>
                            </div> 
                             </div>
                  
                    </div>                   
                    
                    
                    <div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span10">
                          <div class="span12" >
                          
                          <ul class="nav">
                 <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-3_16.jpg" /></li> 
                <li ><h3>Location</h3></li>
                <li style="border:none;" ><h3><a href="#" class="topopup3" style="text-decoration:none; color:inherit;">edit</a></h3></li>
                            </ul>
                            
                            
      
      
      <div id="toPopup3"> 
    	
        <div class="close3"></div>
       
		<div id="popup_content3"> <!--your content start-->
        <h2>Location</h2>
        
        
        <table class="new2 ">
                   
  							<tr >
                            	<td >Country :</td>
                                <td ><select onchange="print_state('state',this.selectedIndex);" class="selectpicker select_select" id="country" name="country" style="color:#000;border-color:#991248;font-weight: 100;">
 <option value="">Select Country</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antartica">Antartica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Ashmore and Cartier Island">Ashmore and Cartier Island</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Clipperton Island">Clipperton Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option><option value="Congo, Republic of the">Congo, Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czeck Republic">Czeck Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Europa Island">Europa Island</option><option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option><option value="Gabon">Gabon</option><option value="Gambia, The">Gambia, The</option><option value="Gaza Strip">Gaza Strip</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Glorioso Islands">Glorioso Islands</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Holy See (Vatican City)">Holy See (Vatican City)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Howland Island">Howland Island</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Ireland, Northern">Ireland, Northern</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jan Mayen">Jan Mayen</option><option value="Japan">Japan</option><option value="Jarvis Island">Jarvis Island</option><option value="Jersey">Jersey</option><option value="Johnston Atoll">Johnston Atoll</option><option value="Jordan">Jordan</option><option value="Juan de Nova Island">Juan de Nova Island</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav Republic of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Man, Isle of">Man, Isle of</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Midway Islands">Midway Islands</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcaim Islands">Pitcaim Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romainia">Romainia</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Scotland">Scotland</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option><option value="Spain">Spain</option><option value="Spratly Islands">Spratly Islands</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Tobago">Tobago</option><option value="Toga">Toga</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad">Trinidad</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands">Virgin Islands</option><option value="Wales">Wales</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="West Bank">West Bank</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select></td>
                        
                                <td class="new">State :</td>
                                <td><select  class="selectpicker select_select" id="state" name="state" style="color:#000;border-color:#991248;font-weight: 100;">
    <option value="0">kerala</option>
  <option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
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
  </select></td>
                                
                                </tr>
                           	<tr>
                            	<td>City:</td>
                               <td><input type="text" value="city"  style="color:#000;border-color:#991248;font-weight: 100;"/></td>
                         
                               <td class="new">citizenship:</td>
                               <td><select onchange="print_state('state',this.selectedIndex);" class="selectpicker select_select" id="country" name="country" style="color:#000;border-color:#991248;font-weight: 100;">
 <option value="">Select Country</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antartica">Antartica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Ashmore and Cartier Island">Ashmore and Cartier Island</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Clipperton Island">Clipperton Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option><option value="Congo, Republic of the">Congo, Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czeck Republic">Czeck Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Europa Island">Europa Island</option><option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option><option value="Gabon">Gabon</option><option value="Gambia, The">Gambia, The</option><option value="Gaza Strip">Gaza Strip</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Glorioso Islands">Glorioso Islands</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Holy See (Vatican City)">Holy See (Vatican City)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Howland Island">Howland Island</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Ireland, Northern">Ireland, Northern</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jan Mayen">Jan Mayen</option><option value="Japan">Japan</option><option value="Jarvis Island">Jarvis Island</option><option value="Jersey">Jersey</option><option value="Johnston Atoll">Johnston Atoll</option><option value="Jordan">Jordan</option><option value="Juan de Nova Island">Juan de Nova Island</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav Republic of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Man, Isle of">Man, Isle of</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Midway Islands">Midway Islands</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcaim Islands">Pitcaim Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romainia">Romainia</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Scotland">Scotland</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option><option value="Spain">Spain</option><option value="Spratly Islands">Spratly Islands</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Tobago">Tobago</option><option value="Toga">Toga</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad">Trinidad</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands">Virgin Islands</option><option value="Wales">Wales</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="West Bank">West Bank</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select></td>
                              
                             </tr>
                   </table >
            
            <a href="#"><input type="button" class="ppbutton" value="update"/></a>
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
    
	<div class="loaderr3"></div>
   	<div id="backgroundPopup3"></div>
                            
      
      
      
                            
                            
                            
                            </div>
                            </div>
                             </div>
                            <div class="tble">
                              <div class="span12">
                    <table class="new2 ">
                   
  							<tr >
                            	<td >Country :</td>
                                <td ><?php echo $row->country; ?></td>
                        
                                <td class="new">State :</td>
                                <td><?php echo $row->state; ?></td>
                                
                                </tr>
                           	<tr>
                            	<td>City:</td>
                               <td><?php echo $row->city; ?></td>
                         
                               <td class="new">citizenship:</td>
                               <td><?php echo $row->country; ?>n</td>
                              
                             </tr>
                   </table >
                   
                             
                             
						</div>
                            </div> 
                             </div>
                  
                    </div>
                    



<div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span10">
                          <div class="span12" >
                          
                          <ul class="nav">
                 <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-4_16.jpg" /></li> 
                <li ><h3>Profesional Information</h3></li>
                <li style="border:none;" ><h3><a href="#" class="topopup4" style="text-decoration:none; color:inherit;">edit</a></h3></li>
                            </ul>
                            
                            
   <div id="toPopup4"> 
    	
        <div class="close4"></div>
       
		<div id="popup_content4"> <!--your content start-->
        <h2>Profesional Information</h2>
           <table class="new2 ">
                   
  							<tr >
                            	<td >Education :</td>
                                <td ><select name="education" class="selectpicker select_select" style="color:#000;border-color:#991248;font-weight: 100;">
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
								</select></td>
                                <td class="new">Occupation In Detail :</td>
                                <td ><select name="education" class="selectpicker select_select" style="color:#000;border-color:#991248;font-weight: 100;">
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
								</select></td>
                               
                                
                              </tr>
                              <tr>
                                <td>college:</td>
                                <td><input type="text" value="rajagiri"  style="color:#000;border-color:#991248;font-weight: 100;"/></td>
                                 <td class="new">Employed In :</td>
                                <td><input type="text" value="eranakulam"  style="color:#000;border-color:#991248;font-weight: 100;"/></td>
                                
                                </tr>
                           	<tr>
                            	<td>Occupation :</td>
                               <td><select name="occupation" class="selectpicker select_select" style="color:#000;border-color:#991248;font-weight: 100;">
									<option value="0">- Select -</option>
									<optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ADMIN --" class="a"><option value="49">Manager</option><option value="48">Supervisor</option><option value="47">Officer</option><option value="39">Administrative Professional</option><option value="50">Executive</option><option value="46">Clerk</option><option value="63">Human Resources Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AGRICULTURE --" class="a"><option value="37">Agriculture &amp; Farming Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- AIRLINE --" class="a"><option value="30">Pilot</option><option value="28">Air Hostess</option><option value="29">Airline Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- ARCHITECT &amp; DESIGN --" class="a"><option value="19">Architect</option><option value="20">Interior Designer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BANKING &amp; FINANCE --" class="a"><option value="7">Chartered Accountant</option><option value="10">Company Secretary</option><option value="8">Accounts/Finance Professional</option><option value="16">Banking Service Professional</option><option value="9">Auditor</option><option value="69">Financial Accountant</option><option value="64">Financial Analyst / Planning</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- BEAUTY &amp; FASHION --" class="a"><option value="25">Fashion Designer</option><option value="33">Beautician</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- CIVIL SERVICES --" class="a"><option value="52">Civil Services (IAS/IPS/IRS/IES/IFS)</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- DEFENCE --" class="a"><option value="53">Army</option><option value="54">Navy</option><option value="55">Airforce</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- EDUCATION --" class="a"><option value="5">Professor / Lecturer</option><option value="4">Teaching / Academician</option><option value="6">Education Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- HOSPITALITY --" class="a"><option value="34">Hotel / Hospitality Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- IT &amp; ENGINEERING --" class="a"><option value="1">Software Professional</option><option value="2">Hardware Professional</option><option value="3">Engineer - Non IT</option><option value="65">Designer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LEGAL --" class="a"><option value="17">Lawyer &amp; Legal Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- LAW ENFORCEMENT --" class="a"><option value="18">Law Enforcement Officer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDICAL --" class="a"><option value="12">Doctor</option><option value="14">Health Care Professional</option><option value="15">Paramedical Professional</option><option value="13">Nurse</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MARKETING &amp; SALES --" class="a"><option value="42">Marketing Professional</option><option value="43">Sales Professional</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MEDIA &amp; ENTERTAINMENT --" class="a"><option value="27">Journalist</option><option value="22">Media Professional</option><option value="24">Entertainment Professional</option><option value="26">Event Management Professional</option><option value="21">Advertising / PR Professional</option><option value="66">Designer</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- MERCHANT NAVY --" class="a"><option value="32">Mariner / Merchant Navy</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- SCIENTIST --" class="a"><option value="35">Scientist / Researcher</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- TOP MANAGEMENT --" class="a"><option value="41">CXO / President, Director, Chairman</option><option value="70">Business Analyst</option></optgroup><optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- OTHERS --" class="a"><option value="45">Consultant</option><option value="40">Customer Care Professional</option><option value="36">Social Worker</option><option value="51">Sportsman</option><option value="44">Technician</option><option value="38">Arts &amp; Craftsman</option><option value="67">Student</option><option value="68">Librarian</option><option value="888">Not Working</option></optgroup>								</select></td>
                               <td class="new">Anual Income :</td>
                                <td><div class="controls">
             <select name="inc_currency" class="selectpicker day" style="color:#000;border-color:#991248;font-weight: 100;">
									<option value="0">- Select Currency -</option>
									<script language="javascript" type="text/javascript"> incomecurr [1] ="AFA"; incomecurr [2] ="ALL"; incomecurr [3] ="DZD"; incomecurr [4] ="USD"; incomecurr [5] ="EUR"; incomecurr [6] ="AON"; incomecurr [7] ="XCD"; incomecurr [8] ="XCD"; incomecurr [9] ="XCD"; incomecurr [10] ="ARS"; incomecurr [11] ="AMD"; incomecurr [12] ="AWG"; incomecurr [13] ="AUD"; incomecurr [14] ="EUR"; incomecurr [15] ="AZM"; incomecurr [16] ="BSD"; incomecurr [17] ="BHD"; incomecurr [18] ="BDT"; incomecurr [19] ="BBD"; incomecurr [20] ="BYB"; incomecurr [21] ="EUR"; incomecurr [22] ="BZD"; incomecurr [23] ="XOF"; incomecurr [24] ="BMD"; incomecurr [25] ="BTN"; incomecurr [26] ="BOB"; incomecurr [27] ="BAM"; incomecurr [28] ="BWP"; incomecurr [29] ="NOK"; incomecurr [30] ="BRL"; incomecurr [31] ="USD"; incomecurr [32] ="USD"; incomecurr [33] ="BND"; incomecurr [34] ="BGL"; incomecurr [35] ="XOF"; incomecurr [36] ="BIF"; incomecurr [37] ="KHR"; incomecurr [38] ="XAF"; incomecurr [39] ="CAD"; incomecurr [40] ="CVE"; incomecurr [41] ="KYD"; incomecurr [42] ="XAF"; incomecurr [43] ="XAF"; incomecurr [44] ="CLP"; incomecurr [45] ="CNY"; incomecurr [46] ="AUD"; incomecurr [47] ="AUD"; incomecurr [48] ="COP"; incomecurr [49] ="KMF"; incomecurr [50] ="XAF"; incomecurr [51] ="NZD"; incomecurr [52] ="CRC"; incomecurr [53] ="HRK"; incomecurr [54] ="CUP"; incomecurr [55] ="CYP"; incomecurr [56] ="CZK"; incomecurr [57] ="DKK"; incomecurr [58] ="DJF"; incomecurr [59] ="XCD"; incomecurr [60] ="DOP"; incomecurr [61] ="TPE"; incomecurr [62] ="ECS"; incomecurr [63] ="EGP"; incomecurr [64] ="SVC"; incomecurr [65] ="XAF"; incomecurr [66] ="ERN"; incomecurr [67] ="EEK"; incomecurr [68] ="ETB"; incomecurr [69] ="FKP"; incomecurr [70] ="DKK"; incomecurr [71] ="FJD"; incomecurr [72] ="EUR"; incomecurr [73] ="EUR"; incomecurr [74] ="EUR"; incomecurr [75] ="XPF"; incomecurr [76] ="EUR"; incomecurr [77] ="XAF"; incomecurr [78] ="GMD"; incomecurr [79] ="GEL"; incomecurr [80] ="EUR"; incomecurr [81] ="GHC"; incomecurr [82] ="GIP"; incomecurr [83] ="EUR"; incomecurr [84] ="DKK"; incomecurr [85] ="XCD"; incomecurr [86] ="EUR"; incomecurr [87] ="USD"; incomecurr [88] ="QTQ"; incomecurr [89] ="GNF"; incomecurr [90] ="GWP"; incomecurr [91] ="GYD"; incomecurr [92] ="HTG"; incomecurr [93] ="AUD"; incomecurr [94] ="HNL"; incomecurr [95] ="HKD"; incomecurr [96] ="HUF"; incomecurr [97] ="ISK"; incomecurr [98] ="Rs."; incomecurr [99] ="IDR"; incomecurr [100] ="IRR"; incomecurr [101] ="IQD"; incomecurr [102] ="EUR"; incomecurr [103] ="ILS"; incomecurr [104] ="EUR"; incomecurr [105] ="XOF"; incomecurr [106] ="JMD"; incomecurr [107] ="JPY"; incomecurr [108] ="JOD"; incomecurr [109] ="KZT"; incomecurr [110] ="KES"; incomecurr [111] ="AUD"; incomecurr [112] ="KPW"; incomecurr [113] ="KRW"; incomecurr [114] ="KWD"; incomecurr [115] ="KGS"; incomecurr [116] ="LAK"; incomecurr [117] ="LVL"; incomecurr [118] ="LBP"; incomecurr [119] ="LSL"; incomecurr [120] ="LRD"; incomecurr [121] ="LYD"; incomecurr [122] ="CHF"; incomecurr [123] ="LTL"; incomecurr [124] ="EUR"; incomecurr [125] ="MOP"; incomecurr [126] ="MKD"; incomecurr [127] ="MGF"; incomecurr [128] ="MWK"; incomecurr [129] ="MYR"; incomecurr [130] ="MVR"; incomecurr [131] ="XOF"; incomecurr [132] ="MTL"; incomecurr [133] ="USD"; incomecurr [134] ="EUR"; incomecurr [135] ="MRO"; incomecurr [136] ="MUR"; incomecurr [137] ="EUR"; incomecurr [138] ="MXN"; incomecurr [139] ="USD"; incomecurr [140] ="MDL"; incomecurr [141] ="EUR"; incomecurr [142] ="MNT"; incomecurr [143] ="XCD"; incomecurr [144] ="MAD"; incomecurr [145] ="MZM"; incomecurr [146] ="MMK"; incomecurr [147] ="NAD"; incomecurr [148] ="AUD"; incomecurr [149] ="NPR"; incomecurr [150] ="EUR"; incomecurr [151] ="ANG"; incomecurr [152] ="XPF"; incomecurr [153] ="NZD"; incomecurr [154] ="NIC"; incomecurr [155] ="XOF"; incomecurr [156] ="NGN"; incomecurr [157] ="NZD"; incomecurr [158] ="AUD"; incomecurr [159] ="USD"; incomecurr [160] ="NOK"; incomecurr [161] ="OMR"; incomecurr [162] ="PKR"; incomecurr [163] ="USD"; incomecurr [164] ="PAB"; incomecurr [165] ="PGK"; incomecurr [166] ="PYG"; incomecurr [167] ="PEN"; incomecurr [168] ="PHP"; incomecurr [169] ="NZD"; incomecurr [170] ="PLZ"; incomecurr [171] ="EUR"; incomecurr [172] ="USD"; incomecurr [173] ="QAR"; incomecurr [174] ="EUR"; incomecurr [175] ="ROL"; incomecurr [176] ="RUR"; incomecurr [177] ="RWF"; incomecurr [178] ="GBP"; incomecurr [179] ="XCD"; incomecurr [180] ="XCD"; incomecurr [181] ="XCD"; incomecurr [182] ="WST"; incomecurr [183] ="ITL"; incomecurr [184] ="STD"; incomecurr [185] ="SAR"; incomecurr [186] ="XOF"; incomecurr [187] ="SCR"; incomecurr [188] ="SLL"; incomecurr [189] ="SGD"; incomecurr [190] ="SKK"; incomecurr [191] ="SIT"; incomecurr [192] ="SOD"; incomecurr [193] ="ZAR"; incomecurr [194] ="EUR"; incomecurr [195] ="LKR"; incomecurr [196] ="SHP"; incomecurr [197] ="EUR"; incomecurr [198] ="SDD"; incomecurr [199] ="SRG"; incomecurr [200] ="NOK"; incomecurr [201] ="SZL"; incomecurr [202] ="SEK"; incomecurr [203] ="CHF"; incomecurr [204] ="SYP"; incomecurr [205] ="TWD"; incomecurr [206] ="TJR"; incomecurr [207] ="TZS"; incomecurr [208] ="THB"; incomecurr [209] ="XOF"; incomecurr [210] ="NZD"; incomecurr [211] ="TOP"; incomecurr [212] ="TTD"; incomecurr [213] ="TND"; incomecurr [214] ="TRL"; incomecurr [215] ="TMM"; incomecurr [216] ="USD"; incomecurr [217] ="AUD"; incomecurr [218] ="UGS"; incomecurr [219] ="UAG"; incomecurr [220] ="AED"; incomecurr [221] ="GBP"; incomecurr [222] ="USD"; incomecurr [223] ="UYP"; incomecurr [224] ="UZS"; incomecurr [225] ="VUV"; incomecurr [226] ="EUR"; incomecurr [227] ="VUB"; incomecurr [228] ="VND"; incomecurr [229] ="USD"; incomecurr [230] ="XPF"; incomecurr [231] ="MAD"; incomecurr [232] ="YER"; incomecurr [233] ="YUN"; incomecurr [234] ="CDF"; incomecurr [235] ="ZMK"; incomecurr [236] ="ZWD"; incomecurr [237] ="XAF";
                                    </script><option value="98" style="color: rgb(0, 79, 0);">India - Rs.</option>									<option value="222" style="color: rgb(0, 79, 0);">United States of America - USD</option>									<option value="220" style="color: rgb(0, 79, 0);">United Arab Emirates - AED</option>									<option value="221" style="color: rgb(0, 79, 0);">United Kingdom - GBP</option>									<option value="13" style="color: rgb(0, 79, 0);">Australia - AUD</option>									<option value="189" style="color: rgb(0, 79, 0);">Singapore - SGD</option>									<option value="39" style="color: rgb(0, 79, 0);">Canada - CAD</option>									<option value="173" style="color: rgb(0, 79, 0);">Qatar - QAR</option>									<option value="114" style="color: rgb(0, 79, 0);">Kuwait - KWD</option>									<option value="161" style="color: rgb(0, 79, 0);">Oman - OMR</option>									<option value="17" style="color: rgb(0, 79, 0);">Bahrain - BHD</option>									<option value="185" style="color: rgb(0, 79, 0);">Saudi Arabia - SAR</option>									<option value="129" style="color: rgb(0, 79, 0);">Malaysia - MYR</option>									<option value="80" style="color: rgb(0, 79, 0);">Germany - EUR</option>									<option value="153" style="color: rgb(0, 79, 0);">New Zealand - NZD</option>									<option value="73" style="color: rgb(0, 79, 0);">France - EUR</option>									<option value="102" style="color: rgb(0, 79, 0);">Ireland - EUR</option>									<option value="203" style="color: rgb(0, 79, 0);">Switzerland - CHF</option>									<option value="193" style="color: rgb(0, 79, 0);">South Africa - ZAR</option>									<option value="195" style="color: rgb(0, 79, 0);">Sri Lanka - LKR</option>									<option value="99" style="color: rgb(0, 79, 0);">Indonesia - IDR</option>									<option value="149" style="color: rgb(0, 79, 0);">Nepal - NPR</option>									<option value="162" style="color: rgb(0, 79, 0);">Pakistan - PKR</option>									<option value="18" style="color: rgb(0, 79, 0);">Bangladesh - BDT</option>									<option value="1" style="color: rgb(0, 79, 0);">Afghanistan - AFA</option>																		<option value="more" style="color: rgb(0, 79, 0);">Show more options</option>
									</select>
  &nbsp;<input type="text" style="border: 2px solid #991248;
color: #000;
font-weight: 100;" class="input_feild day" name="income" id="inputEmail"> 
    </div></td>
                             </tr>
                            
                   </table >
            
            <a href="#"><input type="button" class="ppbutton" value="update"/></a>
        </div> <!--your content end-->
    
    </div>                         
<div class="loaderr"></div>
   	<div id="backgroundPopup"></div>                            
    
                            
                            
                            
                            
                            
                            
                            </div>
                            </div>
                             </div>
                            <div class="tble">
                              <div class="span12">
                    <table class="new2 ">
                   
  							<tr >
                            	<td >Education :</td>
                                <td ><?php echo $row->education; ?></td>
                                <td class="new">Occupation In Detail :</td>
                                <td ><?php echo $row->occupation; ?></td>
                               
                                
                              </tr>
                              <tr>
                                <td>college:</td>
                                <td>Not Mensioned</td>
                                 <td class="new">Employed In :</td>
                                <td>Not Mensioned</td>
                                
                                </tr>
                           	<tr>
                            	<td>Occupation :</td>
                               <td><?php echo $row->occupation; ?></td>
                               <td class="new">Anual Income :</td>
                                <td><?php echo $row->income; ?></td>
                             </tr>
                            
                   </table >
                   
                             
                             <?php echo $row->family_value; ?>
						</div>
                       </div> 
                       </div>
                  </div>





<div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span10">
                          <div class="span12" >
                          
                          <ul class="nav">
                 <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-5_16_16.jpg" /></li> 
                <li ><h3>Family Details</h3></li>
                <li style="border:none;" ><h3><a href="#" class="topopup5" style="text-decoration:none; color:inherit;">edit</a></h3></li>
                            </ul>
                            
                            
                            
                            
                            
                            
  <div id="toPopup5"> 
    	
        <div class="close5"></div>
       
		<div id="popup_content5"> <!--your content start-->
        <h2>Family Details</h2>
           
           
           <table class="new2 ">
                   
  							<tr >
                            	<td >Family Value :</td>
                                <td >
  						<input type="radio" name="family_value" style=" margin-right:5px;" class="radio1" value="orthodex">Orthodex
 						<input type="radio" name="family_value" style="margin-left:10px; margin-right:5px;" class="radio1" value="traditional">Traditional
  						<input type="radio" name="family_value" style="margin-left:10px; margin-right:5px;" class="radio1" value="moderate">
         Moderate
         <input type="radio" name="family_value" style="margin-left:10px; margin-right:5px;" class="radio1" value="Liberal">
         Liberal
					</label></td>
                                <td  class="new">No:Of Brothers(s):</td>
                                <td ><select name="brothers" class="selectpicker day ppcolor" style="border-color:#991248;font-weight: 100;">
    <option value="0">0</option>
  <option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
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
  </select></td>
                               
                                
                              </tr>
                              <tr>
                                <td>Family Status :</td>
                                <td>
  						<input type="radio" name="family_statas" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="Middle class">Middle Class
 						<input type="radio" name="family_statas" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="upper class">Upper Class
  						<input type="radio" name="family_statas" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="rich">
         Rich
         <input type="radio" name="family_status" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="affluent">
         Affluent
					</label></td>
                                 <td class="new">Mother Status :</td>
                                <td><input type="text" value="homemaker"  style="color:#000;border-color:#991248;font-weight: 100;"/></td>
                                
                                </tr>
                           	<tr>
                            	<td>Father Status:</td>
                               <td><input type="text" value="business"  style="color:#000;border-color:#991248;font-weight: 100;"/></td>
                               <td class="new">No:Of Sister(s):</td>
                                <td><select name="brothers" class="selectpicker day ppcolor" style="border-color:#991248;font-weight: 100;">
    <option value="0">0</option>
  <option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
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
  </select></td>
                             </tr>
                           
                   </table >
           
           
            <a href="#"><input type="button" class="ppbutton" value="update"/></a>
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
    
	<div class="loaderr5"></div>
   	<div id="backgroundPopup5"></div>
   
                            </div>
                            </div>
                             </div>
                            <div class="tble">
                              <div class="span12">
                    <table class="new2 ">
                   
  							<tr >
                            	<td >Family Value :</td>
                                <td > <?php echo $row->family_value; ?></td>
                                <td  class="new">No:Of Brothers(s):</td>
                                <td >Not Mensioned</td>
                               
                                
                              </tr>
                              <tr>
                                <td>Family Status :</td>
                                <td><?php echo $row->family_statas; ?></td>
                                 <td class="new">Mother Status :</td>
                                <td>Not Mensioned</td>
                                
                                </tr>
                           	<tr>
                            	<td>Father Status:</td>
                               <td>Not Mensioned</td>
                               <td class="new">No:Of Sister(s):</td>
                                <td>Not Mensioned</td>
                             </tr>
                           
                   </table >
                   
                             
                             
						</div>
                       </div> 
                       </div>
                  </div>
           
</div>

                 <div class="span5">
                 			
                            
                            <div class="search">
                            	<div class="span12">
                                <h3>Search by ID</h3>
                                <div class="span11">
                                
                                <form class="navbar-form pull-left form-search">
                                <input type="text" class="form-control">
       				 <button class="btn">Search</button>
  						</form>
                            	</div>	
								
                                </div>
                              </div>
                              
                              
                              
                              
                               <div class="matches">
                            	<div class="span12">
                                	<h3>Your matches</h3>
                                		<div class="span10">
                                        	<div class="span11">  <img src="<?php echo base_url();?>file/img/images/images/my-account_03.jpg" /></div>
                                        <div class="span9">
                                        <h4>Tharunima</h4>
                                        <h5>S189599</h5>
                                        <h5>Trichur</h5>
                                        </div>
                                        </div>
                                <div class="span5"> 
       				<button type="submit" style="background-color:#FFF;" class="btn1 btn-large match">More</button>

                                </div>
                             
                                </div>
                                </div>
                                
                                <div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span12">
                          <div class="span12" >
                         <div class="adjest"> 
                          <ul class="nav">
                 <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon_07.jpg"/></li> 
                <li ><h3>Basic & Religious Preferences</h3></li>
                <li style="border:none;" ><h3><a href="#" class="topopup6" style="text-decoration:none; color:inherit;">edit</a></h3></li>
                            </ul>
                            
                            
<div id="toPopup6"> 
    	
        <div class="close6"></div>
       
		<div id="popup_content6"> <!--your content start-->
        <h2>Basic & Religious Preferences</h2>
           
           
           <table class="new2 ">
                   
  							<tr >
                            	<td >Age :</td>
                                <td ><select name="month" class="selectpicker day" style="margin-right:7px;color:#000;border-color:#991248;font-weight: 100;">
  <option>18</option>
 <option value="01">18</option>
<option value="02">19</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
  </select>to
 <select name="year" class="selectpicker day" style="margin-left:7px;margin-right:7px;color:#000;border-color:#991248;font-weight: 100;" >
  <option>25</option>
   	<option value="2007">26</option>
	<option value="2006">27</option>
	<option value="2005">2012</option> 
	<option value="2004">2011</option>
	<option value="2003">2010</option>
	<option value="2002">2009</option>
  </select>years</td>
                             
                              </tr>
                              <tr>
                                 <td>height :</td>
                                <td><select name="month" class="selectpicker day" style="margin-right:7px;color:#000;border-color:#991248;font-weight: 100;">
  <option>4ft 10in</option>
 <option value="01">4ft 10in</option>
<option value="02">4ft 10in</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
  </select>to
 <select name="year" class="selectpicker day" style="margin-left:7px;margin-right:7px;color:#000;border-color:#991248;font-weight: 100;">
  <option>5ft 10in</option>
   	<option value="2007">5ft 10in</option>
	<option value="2006">5ft 10in</option>
	<option value="2005">2012</option> 
	<option value="2004">2011</option>
	<option value="2003">2010</option>
	<option value="2002">2009</option>
  </select></td>
                                
                                </tr>
                           	<tr>
                            	<td>Marital Status :</td>
                               <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1 " value="option1" style="margin:2px 7px 0 0 ;">Any
  
 <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;">Unmarried
<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;"> widow 
  
<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;"> Divorsed 
  	
    </td>
                               
                             </tr>
                             <tr> 
                               <td>Physical Status :</td>
                               <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1 " value="option1" style="margin:2px 7px 0 0 ;">Normal
  
 <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;">Physically challenged

<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="margin:2px 7px 0 0 ;"> Doesnt matter 
  	</td>
                              
                             </tr>
                             <tr> 
                               <td>Religion :</td>
                               <td><select class="selectpicker" placeholder="Select Religion" style="color:#000;border-color:#991248;font-weight: 100;">
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
  
  </select></td>
                              
                             </tr>
                             <tr> 
                               <td>Mother Toungue :</td>
                               <td><div class="span12"> 
 
    <div class="span5">
   
    <fieldset>
 
    <select name="selectfrom" id="select-from" multiple="" size="5">
      <option value="1">Any</option>
      <option value="2">Angika</option>
      <option value="3">Arunachali</option>
      <option value="4">Assamese</option>
      <option value="5">Awadhi</option>
      <option value="6">Item 6</option>
      <option value="7">Item 7</option>
    </select></fieldset></div>
     <div class="span2 thrdreg4">
<a class="btn btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add">Add </a><br>
    <a class="btn btn-small" href="JavaScript:void(0);" id="btn-remove"> Remove</a></div>
 
  <div class="span4">
    <select name="selectto" id="select-to" multiple="" size="5">
      
    </select>
 
   </div>
    </div></td>
                              
                             </tr>
                             <tr> 
                               <td>Cast / Religion :</td>
                               <td><div class="span12"> 
  
    <div class="span5">
   
    <fieldset>
 
    <select name="selectfrom7" id="select-from7" multiple="" size="5">
      <option value="1">Any</option>
      <option value="2">Angika</option>
      <option value="3">Arunachali</option>
      <option value="4">Assamese</option>
      <option value="5">Awadhi</option>
      <option value="6">Item 6</option>
      <option value="7">Item 7</option>
    </select></fieldset></div>
     <div class="span2 thrdreg4">
<a class="btn btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add7">Add </a><br>
    <a class="btn btn-small" href="JavaScript:void(0);" id="btn-remove7"> Remove</a></div>
 
  <div class="span4">
    <select name="selectto7" id="select-to7" multiple="" size="5">
      
    </select>
 
   </div>
    </div></td>
                              
                             </tr>
                              <tr> 
                               <td>Star :</td>
                               <td><div class="span12"> 
  
    <div class="span5">
   
    <fieldset>
 
    <select name="selectfrom8" id="select-from8" multiple="" size="5">
      <option value="1">Any</option>
      <option value="2">Angika</option>
      <option value="3">Arunachali</option>
      <option value="4">Assamese</option>
      <option value="5">Awadhi</option>
      <option value="6">Item 6</option>
      <option value="7">Item 7</option>
    </select></fieldset></div>
     <div class="span2 thrdreg4">
<a class="btn btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add8">Add </a><br>
    <a class="btn btn-small" href="JavaScript:void(0);" id="btn-remove8"> Remove</a></div>
 
  <div class="span4">
    <select name="selectto8" id="select-to8" multiple="" size="5">
      
    </select>
 
   </div>
    </div></td>
                              
                             </tr>
                   </table >
           
           
            <a href="#"><input type="button" class="ppbutton" value="update"/></a>
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
    
	<div class="loaderr6"></div>
   	<div id="backgroundPopup6"></div>
                                     
                            
                            
                            
                            
                            
                            
                            
                            </div>
                            </div>
                            </div>
                             </div>
                            <div class="tble">
                              <div class="span12">
                    <table class="new2 ">
                   
  							<tr >
                            	<td >Age :</td>
                                <td ><?php echo $row->pref_age_from; ?>&nbsp;to&nbsp;<?php echo $row->Pref_age_to; ?></td>
                             
                              </tr>
                              <tr>
                                <td>height :</td>
                                <td><?php echo $row->pref_height_from; ?>&nbsp;to&nbsp;<?php echo $row->pref_height_to; ?></td>
                                
                                </tr>
                           	<tr>
                            	<td>Marital Status :
.</td>
                               <td><?php echo $row->pref_status; ?></td>
                               
                             </tr>
                             <tr> 
                               <td>Physical Status :</td>
                               <td><?php echo $row->pref_physical_status; ?></td>
                              
                             </tr>
                             <tr> 
                               <td>Religion :</td>
                               <td><?php echo $row->pref_religion; ?></td>
                              
                             </tr>
                             <tr> 
                               <td>Mother Toungue :</td>
                               <td><?php echo $row->pref_mother; ?></td>
                              
                             </tr>
                             <tr> 
                               <td>Cast / Religion :</td>
                               <td><?php echo $row->pref_cast; ?></td>
                              
                             </tr>
                              <tr> 
                               <td>Star :</td>
                               <td><?php if($row->pref_star=='')
								   echo $not_mention;
								   else
								   echo $pref_star;
							
								   ?></td>
                              
                             </tr>
                   </table >
                   
                             
                             
						</div>
                            </div> 
                             </div>
                  
                    </div>
                    
                    
                    
                    
                    
                    <div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span12">
                          <div class="span12" >
                          <div class="adjest"> 
                          <ul class="nav">
                 <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-4_16.jpg" /></li> 
                <li ><h3>Professional Preferences</h3></li>
                <li style="border:none;" ><h3><a href="#" class="topopup7" style="text-decoration:none; color:inherit;">edit</a></h3></li>
                            </ul>
                            
                            
                            
                            
     <div id="toPopup7"> 
    	
        <div class="close7"></div>
       
		<div id="popup_content7"> <!--your content start-->
        <h2>Professional Preferences</h2>
            <table class="new2 ">
                   
  							<tr >
                            	
                            	<td >Education :</td>
                                <td ><select name="education" class="selectpicker select_select" style="color:#000;border-color:#991248;font-weight: 100;">
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
								</select></td>
                                
                                
                               
                                
                              </td>
                             
                              </tr>
                              <tr>
                                <td>Occupation :</td>
                                <td><select name="education" class="selectpicker select_select" style="color:#000;border-color:#991248;font-weight: 100;">
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
								</select></td>
                                
                                </tr>
                           	<tr>
                            	<td>Annual Income :
</td>
                               <td><div class="controls">
             <select name="inc_currency" class="selectpicker day" style="color:#000;border-color:#991248;font-weight: 100;">
									<option value="0">- Select Currency -</option>
									<script language="javascript" type="text/javascript"> incomecurr [1] ="AFA"; incomecurr [2] ="ALL"; incomecurr [3] ="DZD"; incomecurr [4] ="USD"; incomecurr [5] ="EUR"; incomecurr [6] ="AON"; incomecurr [7] ="XCD"; incomecurr [8] ="XCD"; incomecurr [9] ="XCD"; incomecurr [10] ="ARS"; incomecurr [11] ="AMD"; incomecurr [12] ="AWG"; incomecurr [13] ="AUD"; incomecurr [14] ="EUR"; incomecurr [15] ="AZM"; incomecurr [16] ="BSD"; incomecurr [17] ="BHD"; incomecurr [18] ="BDT"; incomecurr [19] ="BBD"; incomecurr [20] ="BYB"; incomecurr [21] ="EUR"; incomecurr [22] ="BZD"; incomecurr [23] ="XOF"; incomecurr [24] ="BMD"; incomecurr [25] ="BTN"; incomecurr [26] ="BOB"; incomecurr [27] ="BAM"; incomecurr [28] ="BWP"; incomecurr [29] ="NOK"; incomecurr [30] ="BRL"; incomecurr [31] ="USD"; incomecurr [32] ="USD"; incomecurr [33] ="BND"; incomecurr [34] ="BGL"; incomecurr [35] ="XOF"; incomecurr [36] ="BIF"; incomecurr [37] ="KHR"; incomecurr [38] ="XAF"; incomecurr [39] ="CAD"; incomecurr [40] ="CVE"; incomecurr [41] ="KYD"; incomecurr [42] ="XAF"; incomecurr [43] ="XAF"; incomecurr [44] ="CLP"; incomecurr [45] ="CNY"; incomecurr [46] ="AUD"; incomecurr [47] ="AUD"; incomecurr [48] ="COP"; incomecurr [49] ="KMF"; incomecurr [50] ="XAF"; incomecurr [51] ="NZD"; incomecurr [52] ="CRC"; incomecurr [53] ="HRK"; incomecurr [54] ="CUP"; incomecurr [55] ="CYP"; incomecurr [56] ="CZK"; incomecurr [57] ="DKK"; incomecurr [58] ="DJF"; incomecurr [59] ="XCD"; incomecurr [60] ="DOP"; incomecurr [61] ="TPE"; incomecurr [62] ="ECS"; incomecurr [63] ="EGP"; incomecurr [64] ="SVC"; incomecurr [65] ="XAF"; incomecurr [66] ="ERN"; incomecurr [67] ="EEK"; incomecurr [68] ="ETB"; incomecurr [69] ="FKP"; incomecurr [70] ="DKK"; incomecurr [71] ="FJD"; incomecurr [72] ="EUR"; incomecurr [73] ="EUR"; incomecurr [74] ="EUR"; incomecurr [75] ="XPF"; incomecurr [76] ="EUR"; incomecurr [77] ="XAF"; incomecurr [78] ="GMD"; incomecurr [79] ="GEL"; incomecurr [80] ="EUR"; incomecurr [81] ="GHC"; incomecurr [82] ="GIP"; incomecurr [83] ="EUR"; incomecurr [84] ="DKK"; incomecurr [85] ="XCD"; incomecurr [86] ="EUR"; incomecurr [87] ="USD"; incomecurr [88] ="QTQ"; incomecurr [89] ="GNF"; incomecurr [90] ="GWP"; incomecurr [91] ="GYD"; incomecurr [92] ="HTG"; incomecurr [93] ="AUD"; incomecurr [94] ="HNL"; incomecurr [95] ="HKD"; incomecurr [96] ="HUF"; incomecurr [97] ="ISK"; incomecurr [98] ="Rs."; incomecurr [99] ="IDR"; incomecurr [100] ="IRR"; incomecurr [101] ="IQD"; incomecurr [102] ="EUR"; incomecurr [103] ="ILS"; incomecurr [104] ="EUR"; incomecurr [105] ="XOF"; incomecurr [106] ="JMD"; incomecurr [107] ="JPY"; incomecurr [108] ="JOD"; incomecurr [109] ="KZT"; incomecurr [110] ="KES"; incomecurr [111] ="AUD"; incomecurr [112] ="KPW"; incomecurr [113] ="KRW"; incomecurr [114] ="KWD"; incomecurr [115] ="KGS"; incomecurr [116] ="LAK"; incomecurr [117] ="LVL"; incomecurr [118] ="LBP"; incomecurr [119] ="LSL"; incomecurr [120] ="LRD"; incomecurr [121] ="LYD"; incomecurr [122] ="CHF"; incomecurr [123] ="LTL"; incomecurr [124] ="EUR"; incomecurr [125] ="MOP"; incomecurr [126] ="MKD"; incomecurr [127] ="MGF"; incomecurr [128] ="MWK"; incomecurr [129] ="MYR"; incomecurr [130] ="MVR"; incomecurr [131] ="XOF"; incomecurr [132] ="MTL"; incomecurr [133] ="USD"; incomecurr [134] ="EUR"; incomecurr [135] ="MRO"; incomecurr [136] ="MUR"; incomecurr [137] ="EUR"; incomecurr [138] ="MXN"; incomecurr [139] ="USD"; incomecurr [140] ="MDL"; incomecurr [141] ="EUR"; incomecurr [142] ="MNT"; incomecurr [143] ="XCD"; incomecurr [144] ="MAD"; incomecurr [145] ="MZM"; incomecurr [146] ="MMK"; incomecurr [147] ="NAD"; incomecurr [148] ="AUD"; incomecurr [149] ="NPR"; incomecurr [150] ="EUR"; incomecurr [151] ="ANG"; incomecurr [152] ="XPF"; incomecurr [153] ="NZD"; incomecurr [154] ="NIC"; incomecurr [155] ="XOF"; incomecurr [156] ="NGN"; incomecurr [157] ="NZD"; incomecurr [158] ="AUD"; incomecurr [159] ="USD"; incomecurr [160] ="NOK"; incomecurr [161] ="OMR"; incomecurr [162] ="PKR"; incomecurr [163] ="USD"; incomecurr [164] ="PAB"; incomecurr [165] ="PGK"; incomecurr [166] ="PYG"; incomecurr [167] ="PEN"; incomecurr [168] ="PHP"; incomecurr [169] ="NZD"; incomecurr [170] ="PLZ"; incomecurr [171] ="EUR"; incomecurr [172] ="USD"; incomecurr [173] ="QAR"; incomecurr [174] ="EUR"; incomecurr [175] ="ROL"; incomecurr [176] ="RUR"; incomecurr [177] ="RWF"; incomecurr [178] ="GBP"; incomecurr [179] ="XCD"; incomecurr [180] ="XCD"; incomecurr [181] ="XCD"; incomecurr [182] ="WST"; incomecurr [183] ="ITL"; incomecurr [184] ="STD"; incomecurr [185] ="SAR"; incomecurr [186] ="XOF"; incomecurr [187] ="SCR"; incomecurr [188] ="SLL"; incomecurr [189] ="SGD"; incomecurr [190] ="SKK"; incomecurr [191] ="SIT"; incomecurr [192] ="SOD"; incomecurr [193] ="ZAR"; incomecurr [194] ="EUR"; incomecurr [195] ="LKR"; incomecurr [196] ="SHP"; incomecurr [197] ="EUR"; incomecurr [198] ="SDD"; incomecurr [199] ="SRG"; incomecurr [200] ="NOK"; incomecurr [201] ="SZL"; incomecurr [202] ="SEK"; incomecurr [203] ="CHF"; incomecurr [204] ="SYP"; incomecurr [205] ="TWD"; incomecurr [206] ="TJR"; incomecurr [207] ="TZS"; incomecurr [208] ="THB"; incomecurr [209] ="XOF"; incomecurr [210] ="NZD"; incomecurr [211] ="TOP"; incomecurr [212] ="TTD"; incomecurr [213] ="TND"; incomecurr [214] ="TRL"; incomecurr [215] ="TMM"; incomecurr [216] ="USD"; incomecurr [217] ="AUD"; incomecurr [218] ="UGS"; incomecurr [219] ="UAG"; incomecurr [220] ="AED"; incomecurr [221] ="GBP"; incomecurr [222] ="USD"; incomecurr [223] ="UYP"; incomecurr [224] ="UZS"; incomecurr [225] ="VUV"; incomecurr [226] ="EUR"; incomecurr [227] ="VUB"; incomecurr [228] ="VND"; incomecurr [229] ="USD"; incomecurr [230] ="XPF"; incomecurr [231] ="MAD"; incomecurr [232] ="YER"; incomecurr [233] ="YUN"; incomecurr [234] ="CDF"; incomecurr [235] ="ZMK"; incomecurr [236] ="ZWD"; incomecurr [237] ="XAF";
                                    </script><option value="98" style="color: rgb(0, 79, 0);">India - Rs.</option>									<option value="222" style="color: rgb(0, 79, 0);">United States of America - USD</option>									<option value="220" style="color: rgb(0, 79, 0);">United Arab Emirates - AED</option>									<option value="221" style="color: rgb(0, 79, 0);">United Kingdom - GBP</option>									<option value="13" style="color: rgb(0, 79, 0);">Australia - AUD</option>									<option value="189" style="color: rgb(0, 79, 0);">Singapore - SGD</option>									<option value="39" style="color: rgb(0, 79, 0);">Canada - CAD</option>									<option value="173" style="color: rgb(0, 79, 0);">Qatar - QAR</option>									<option value="114" style="color: rgb(0, 79, 0);">Kuwait - KWD</option>									<option value="161" style="color: rgb(0, 79, 0);">Oman - OMR</option>									<option value="17" style="color: rgb(0, 79, 0);">Bahrain - BHD</option>									<option value="185" style="color: rgb(0, 79, 0);">Saudi Arabia - SAR</option>									<option value="129" style="color: rgb(0, 79, 0);">Malaysia - MYR</option>									<option value="80" style="color: rgb(0, 79, 0);">Germany - EUR</option>									<option value="153" style="color: rgb(0, 79, 0);">New Zealand - NZD</option>									<option value="73" style="color: rgb(0, 79, 0);">France - EUR</option>									<option value="102" style="color: rgb(0, 79, 0);">Ireland - EUR</option>									<option value="203" style="color: rgb(0, 79, 0);">Switzerland - CHF</option>									<option value="193" style="color: rgb(0, 79, 0);">South Africa - ZAR</option>									<option value="195" style="color: rgb(0, 79, 0);">Sri Lanka - LKR</option>									<option value="99" style="color: rgb(0, 79, 0);">Indonesia - IDR</option>									<option value="149" style="color: rgb(0, 79, 0);">Nepal - NPR</option>									<option value="162" style="color: rgb(0, 79, 0);">Pakistan - PKR</option>									<option value="18" style="color: rgb(0, 79, 0);">Bangladesh - BDT</option>									<option value="1" style="color: rgb(0, 79, 0);">Afghanistan - AFA</option>																		<option value="more" style="color: rgb(0, 79, 0);">Show more options</option>
									</select>
  &nbsp;<input type="text" style="border: 2px solid #991248;
color: #000;
font-weight: 100;" class="input_feild day" name="income" id="inputEmail"> 
    </div></td>
                               
                             </tr>
                            
                   </table >
            
            <a href="#"><input type="button" class="ppbutton" value="update"/></a>
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
    
	<div class="loaderr7"></div>
   	<div id="backgroundPopup7"></div>                       
                            
                            
                            
                            
                            
                            
                            
                            
                            </div>
                            </div>
                            </div>
                             </div>
                            <div class="tble">
                              <div class="span12">
                    <table class="new2 ">
                   
  							<tr >
                            	<td >Education :</td>
                                <td ><?php echo $row->pref_education; ?></td>
                             
                              </tr>
                              <tr>
                                <td>Occupation :</td>
                                <td><?php echo $row->pref_occupation; ?></td>
                                
                                </tr>
                           	<tr>
                            	<td>Annual Income :
</td>
                               <td><?php echo $row->pref_income; ?></td>
                               
                             </tr>
                            
                   </table >
                   
                             
                             
						</div>
                            </div> 
                             </div>
                  
                    </div>
                    
                    
                    <div class="personal">
                            <div class="span11">
                           
                             <div class="personal">
                          <div class="span12">
                          <div class="span12" >
                          <ul class="nav">
                          <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-6_17.jpg" /></li> 
               <li><h3>Location Preferences</h3></li>
                <li style="border:none;" ><h3><a href="#" class="topopup8" style="text-decoration:none; color:inherit;">edit</a></h3></li>
               				</ul>
                          
                          
                          
                          
                          
                          
       <div id="toPopup8"> 
    	
        <div class="close8"></div>
       
		<div id="popup_content8"> <!--your content start-->
        <h2>Location Preferences</h2>
           <table class="new2 ">
                   
  							<tr >
                            	<td >Country:</td>
                                <td ><select onchange="print_state('state',this.selectedIndex);" class="selectpicker select_select" id="country" name="country" style="color:#000;border-color:#991248;font-weight: 100;">
 <option value="">Select Country</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antartica">Antartica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Ashmore and Cartier Island">Ashmore and Cartier Island</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Clipperton Island">Clipperton Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option><option value="Congo, Republic of the">Congo, Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czeck Republic">Czeck Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Europa Island">Europa Island</option><option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option><option value="Gabon">Gabon</option><option value="Gambia, The">Gambia, The</option><option value="Gaza Strip">Gaza Strip</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Glorioso Islands">Glorioso Islands</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Holy See (Vatican City)">Holy See (Vatican City)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Howland Island">Howland Island</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Ireland, Northern">Ireland, Northern</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jan Mayen">Jan Mayen</option><option value="Japan">Japan</option><option value="Jarvis Island">Jarvis Island</option><option value="Jersey">Jersey</option><option value="Johnston Atoll">Johnston Atoll</option><option value="Jordan">Jordan</option><option value="Juan de Nova Island">Juan de Nova Island</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav Republic of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Man, Isle of">Man, Isle of</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Midway Islands">Midway Islands</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcaim Islands">Pitcaim Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romainia">Romainia</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Scotland">Scotland</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option><option value="Spain">Spain</option><option value="Spratly Islands">Spratly Islands</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Tobago">Tobago</option><option value="Toga">Toga</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad">Trinidad</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands">Virgin Islands</option><option value="Wales">Wales</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="West Bank">West Bank</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select></td>
                             
                              </tr>
                              <tr>
                                <td>State :</td>
                                <td><select  class="selectpicker select_select" id="state" name="state" style="color:#000;border-color:#991248;font-weight: 100;">
    <option value="0">kerala</option>
  <option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
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
  </select></td>
                                
                                </tr>
                           	<tr>
                            	<td>City :
</td>
                               <td><input type="text" value="city"  style="color:#000;border-color:#991248;font-weight: 100;"/></td>
                               
                             </tr>
                            
                   </table >
            <a href="#"><input type="button" class="ppbutton" value="update"/></a>
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
    
	<div class="loaderr8"></div>
   	<div id="backgroundPopup8"></div>
                                               
                          
                          
                          
                          
                          
                          
                          
                          
                          
                            </div>
                            </div>
                             </div>
                            <div class="tble">
                              <div class="span12">
                    <table class="new2 ">
                   
  							<tr >
                            	<td >Country:</td>
                                <td ><?php echo $row->pref_country; ?></td>
                             
                              </tr>
                              <tr>
                                <td>State :</td>
                                <td>Any</td>
                                
                                </tr>
                           	<tr>
                            	<td>City :
</td>
                               <td>Any</td>
                               
                             </tr>
                            
                   </table >
                   
                             
                             
						</div>
                            </div> 
                             </div>
                  
                    </div>
  
   </div>
   </div>
   
   </div>
   </div>
  <?php }?>
   </div>
   
   
   
   

  
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url();?>file/js/bootstrap.js"></script>
   <?php $this->load->view('footer'); ?>