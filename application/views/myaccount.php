<?php if($this->session->userdata('logged_in'))
 {
	 
	 ?>
<?php $this->load->view('header');?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"> </script>
<link href="<?php echo base_url();?>file/css/myaccount.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>file/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/common1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>file/js/common2.js"></script>
 <script src="<?php echo base_url(); ?>file/js/jquery.min.js"></script>
   
<link href="<?php echo base_url();?>file/css/popup.css" rel="stylesheet" type="text/css" media="all" />
<script>
$(document).ready(function() {
 
    $('#btn-add17').click(function(){
        $('#select-from17 option:selected').each( function() {
                $('#select-to17').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
          
        });
    });
    $('#btn-remove17').click(function(){
        $('#select-to17 option:selected').each( function() {
            $('#select-from17').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>
<script>
$(document).ready(function() {
 
    $('#btn-add18').click(function(){
        $('#state_dropdown4 option:selected').each( function() {
                $('#select-to18').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
          
        });
    });
    $('#btn-remove18').click(function(){
        $('#select-to18 option:selected').each( function() {
            $('#state_dropdown4').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>
<script>
$(document).ready(function() {
 
    $('#btn-add19').click(function(){
        $('#city_dropdown4 option:selected').each( function() {
                $('#select-to19').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
          
        });
    });
    $('#btn-remove19').click(function(){
        $('#select-to19 option:selected').each( function() {
            $('#city_dropdown4').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>
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
 
    $('#btn-add12').click(function(){
        $('#select-from12 option:selected').each( function() {
                $('select#select-to12').append("<option selected='selected'  value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove12').click(function(){
        $('#select-to12 option:selected').each( function() {
            $('#select-from12').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>
<script>
$(document).ready(function() {
 
    $('#btn-add13').click(function(){
        $('#select-from13 option:selected').each( function() {
                $('#select-to13').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove13').click(function(){
        $('#select-to13 option:selected').each( function() {
            $('#select-from13').append("<option  value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>
<script>
$(document).ready(function() {
 
    $('#btn-add7').click(function(){
        $('#select-from7 option:selected').each( function() {
                $('#select-to7').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
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
                $('#select-to8').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
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
<script>
$(document).ready(function() {
 
    $('#btn-add9').click(function(){
        $('#state_dropdown2 option:selected').each( function() {
                $('#select-to10').append("<option selected='selected' value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove9').click(function(){
        $('#select-to10 option:selected').each( function() {
            $('#state_dropdown2').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
 
});</script>
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
                Hindu.prop('name','Cast');
            }
            else if(sReligion=="2") {
                Muslim.show();
                Muslim.prop('name','Cast');
            }
            else if(sReligion=="3") {
                Christian.show();
                Christian.prop('name','Cast');
            }
    });
});
});//]]>  

</script>

<div class="center">
<?php foreach($query1 as $row){ ?>
<div class="row-fluid content">
<div class="container">
<div class="span12">
<h2>MY ACCOUNT(<?php echo $row->user_id; ?>)</h2>
<div class="modal fade hide" id="mobilepro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Myself</h3>
                </div>
                <form action="<?php echo base_url();?>index.php/profile_edit/" method="post">
                  <textarea name="about_us" style="color:#000;  border-color: #666;  font-size: 12px;">
<?php echo $row->about_us; ?>
            </textarea>
                  <input type="hidden" name="uid" value="<?php echo $row->uid; ?>" />
                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
              </div>
           
<div class="span7 ">
  <div class="profile">
    <div class="span12">
      <div class="span4 imagemy">
        <div class="myaccountprofpicmain">
       
        <?php
		$session_data = $this->session->userdata('logged_in');
$user_id= $session_data['user_id'];
		 if($session_data['file_name']=="")
		{
			?>
            <img src="<?php echo base_url();?>file/img/profile237x224.jpg" />
            <?php } 
			else
			{
				?>
          <div class="myaccountprofpic">
<div id="myCarousel" class="carousel slide">
   <!-- Carousel indicators -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>   
   <!-- Carousel items -->
   <div class="carousel-inner">
      <div class="item active">
         <img src="<?php echo base_url();?>uploads/<?php echo $row->file_name; ?>" />
      </div>
      <div class="item">
         <img src="<?php echo base_url();?>uploads/<?php echo $row->file_name; ?>" />
      </div>
      <div class="item">
         <img src="<?php echo base_url();?>uploads/<?php echo $row->file_name; ?>" />
      </div>
   </div>
   <!-- Carousel nav -->
   
</div>
          </div>
          <a href="<?php echo site_url("managephoto/"); ?>">Add/Edit Photos</a>
          <?php } ?>
        </div>
      </div>
      <!--<div class="span3" style="margin-top:20px;"><?php echo form_open_multipart('upload_myaccount_controller/do_upload');?>
        <input class="input-file uniform_on" id="fileInput"  name="userfile" type="file">
        <input type="hidden" name="email" value="<?php echo $row->email; ?>"  />
        <input type="submit" class="btn" value="upload" />
        </form>
      </div>-->
      <div class="span5">
        <div class="loader">
          <p>Your profile is </p>
          <div class="span3">
            <div class="progress">
              <div class="bar" style="width:<?php echo $progress; ?>%;"><?php echo $progress; ?>%</div>
            </div>
          </div>
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
              <li >
                <h3>Myself</h3>
              </li>
              <li style="border:none;" >
              <!--  <h3><a data-toggle="modal" data-target="#mobilepro" href="">edit</a></h3>-->
              <h3><a href="#" class="topopup" style="text-decoration:none; color:inherit;">edit</a></h3>
              </li>
            </ul>
            <div id="toPopup">
              <div class="close2"></div>
              <div id="popup_content"> <!--your content start-->
                <h2>Myself</h2>
                <form action="<?php echo base_url();?>index.php/profile_edit/" method="post">
                  <textarea name="about_us">
<?php echo $row->about_us; ?>
            </textarea>
                  <input type="hidden" name="uid" value="<?php echo $row->uid; ?>" />
                  <input type="submit" class="ppbutton" value="update"/>
                </form>
              </div>
              <!--your content end--> 
              
            </div>
            <!--toPopup end-->
            
            <div class="loaderr"></div>
            <div id="backgroundPopup"></div>
          </div>
        </div>
      </div>
      <div class="paragraph">
        <div class="span12">
          <p>
            <?php if($row->uid==NULL){
						echo "No about us is mentioned"; }else{ echo $row->about_us; }?>
          </p>
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
              <li >
                <h3>Basic Details</h3>
              </li>
              <li style="border:none;" >
                <h3><a href="#" class="topopup1" style="text-decoration:none; color:inherit;">edit</a></h3>
              </li>
            </ul>
            <div id="toPopup1">
              <div class="close2"></div>
              <div id="popup_content1"> <!--your content start-->
                <form action="<?php echo base_url(); ?>index.php/profile_edit/basic" method="post">
                  <h2>Basic Details</h2>
                  <table class="new2 ">
                    <tr >
                      <td >Profile created for :</td>
                      <td ><input type="hidden" name="uid" value="<?php echo $row->uid; ?>" />
                        <?php echo $row->profile_for; ?></td>
                      <td class="new">Name:</td>
                      <td ><?php echo $row->name; ?></td>
                    </tr>
                    <tr>
                      <td>Body Type/Complexion :</td>
                      <td><div class="controls ">
                          <input type="radio"  name="body_type" id="inlineRadio1" style=" margin-right:5px;" class="radio1 " value="slim" <?php echo ($row->body_type == "slim" ? 'checked="checked"': ''); ?>>
                          Slim
                          <input type="radio" name="body_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="average" <?php echo ($row->body_type == "average" ? 'checked="checked"': ''); ?>>
                          Average
                          <input type="radio" name="body_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="athletic" <?php echo ($row->body_type == "athletic" ? 'checked="checked"': ''); ?> >
                          Athletic
                          <input type="radio" name="body_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="heavy" <?php echo ($row->body_type == "heavy" ? 'checked="checked"': ''); ?>>
                          Heavy
                          </label>
                        </div></td>
                      <td class="new">Date of birth:</td>
                      <td><div class="controls">
                          <select name="day" class="selectpicker day ppcolor" style="border-color:#42b8b6;font-weight: 100;">
                            <option value="<?php echo $row->day; ?>"><?php echo $row->day; ?></option>
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
                          <select name="month" class="selectpicker day ppcolor" style="border-color:#42b8b6;font-weight: 100;">
                            <option value="<?php echo $row->month; ?>"><?php echo $row->month; ?></option>
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
                          <select name="year" class="selectpicker day ppcolor" style="border-color:#42b8b6;font-weight: 100;">
                            <option value="<?php echo $row->year; ?>"><?php echo $row->year; ?></option>
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
                      <td><input type="radio" name="physical_status" id="inlineRadio1 " value="Normal" style="margin:2px 7px 0 0 ;" <?php echo ($row->physical_status == "Normal" ? 'checked="checked"': ''); ?>>
                        Normal
                        <input type="radio" name="physical_status" id="inlineRadio1" value="Physically challenged" style="margin:2px 7px 0 0 ;"<?php echo ($row->physical_status == "Physically challenged" ? 'checked="checked"': ''); ?>>
                        Physically challenged </td>
                      <td class="new">Height :</td>
                      <td><select name="height" class="selectpicker day" style="color:#000;border-color:#42b8b6;font-weight: 100;">
                          <option value="<?php echo $row->height; ?>"><?php echo $row->height; ?></option>
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
                        </select></td>
                    </tr>
                    <tr>
                      <td>Weight :</td>
                      <td><select name="weight" class="selectpicker day" style="color:#000;border-color:#42b8b6;font-weight: 100;">
                          <option value="<?php echo $row->weight; ?>"><?php echo $row->weight; ?></option>
                          <option value="41">41 kg</option>
                          <option value="42">42 kg</option>
                          <option value="43">43 kg</option>
                          <option value="44">44 kg</option>
                          <option value="45">45 kg</option>
                          <option value="46">46 kg</option>
                          <option value="47">47 kg</option>
                          <option value="48">48 kg</option>
                          <option value="49">49 kg</option>
                          <option value="50">50 kg</option>
                          <option value="51">51 kg</option>
                          <option value="52">52 kg</option>
                          <option value="53">53 kg</option>
                          <option value="54">54 kg</option>
                          <option value="55">55 kg</option>
                          <option value="56">56 kg</option>
                          <option value="57">57 kg</option>
                          <option value="58">58 kg</option>
                          <option value="59">59 kg</option>
                          <option value="60">60 kg</option>
                          <option value="61">61 kg</option>
                          <option value="62">62 kg</option>
                          <option value="63">63 kg</option>
                          <option value="64">64 kg</option>
                          <option value="65">65 kg</option>
                          <option value="66">66 kg</option>
                          <option value="67">67 kg</option>
                          <option value="68">68 kg</option>
                          <option value="69">69 kg</option>
                          <option value="70">70 kg</option>
                          <option value="71">71 kg</option>
                          <option value="72">72 kg</option>
                          <option value="73">73 kg</option>
                          <option value="74">74 kg</option>
                          <option value="75">75 kg</option>
                          <option value="76">76 kg</option>
                          <option value="77">77 kg</option>
                          <option value="78">78 kg</option>
                          <option value="79">79 kg</option>
                          <option value="80">80 kg</option>
                          <option value="81">81 kg</option>
                          <option value="82">82 kg</option>
                          <option value="83">83 kg</option>
                          <option value="84">84 kg</option>
                          <option value="85">85 kg</option>
                          <option value="86">86 kg</option>
                          <option value="87">87 kg</option>
                          <option value="88">88 kg</option>
                          <option value="89">89 kg</option>
                          <option value="90">90 kg</option>
                          <option value="91">91 kg</option>
                          <option value="92">92 kg</option>
                          <option value="93">93 kg</option>
                          <option value="94">94 kg</option>
                          <option value="95">95 kg</option>
                          <option value="96">96 kg</option>
                          <option value="97">97 kg</option>
                          <option value="98">98 kg</option>
                          <option value="99">99 kg</option>
                          <option value="100">100 kg</option>
                          <option value="101">101 kg</option>
                          <option value="102">102 kg</option>
                          <option value="103">103 kg</option>
                          <option value="104">104 kg</option>
                          <option value="105">105 kg</option>
                          <option value="106">106 kg</option>
                          <option value="107">107 kg</option>
                          <option value="108">108 kg</option>
                          <option value="109">109 kg</option>
                          <option value="110">110 kg</option>
                          <option value="111">111 kg</option>
                          <option value="112">112 kg</option>
                          <option value="113">113 kg</option>
                          <option value="114">114 kg</option>
                          <option value="115">115 kg</option>
                          <option value="116">116 kg</option>
                          <option value="117">117 kg</option>
                          <option value="118">118 kg</option>
                          <option value="119">119 kg</option>
                          <option value="120">120 kg</option>
                          <option value="121">121 kg</option>
                          <option value="122">122 kg</option>
                          <option value="123">123 kg</option>
                          <option value="124">124 kg</option>
                          <option value="125">125 kg</option>
                          <option value="126">126 kg</option>
                          <option value="127">127 kg</option>
                          <option value="128">128 kg</option>
                          <option value="129">129 kg</option>
                          <option value="130">130 kg</option>
                          <option value="131">131 kg</option>
                          <option value="132">132 kg</option>
                          <option value="133">133 kg</option>
                          <option value="134">134 kg</option>
                          <option value="135">135 kg</option>
                          <option value="136">136 kg</option>
                          <option value="137">137 kg</option>
                          <option value="138">138 kg</option>
                          <option value="139">139 kg</option>
                          <option value="140">140 kg</option>
                        </select></td>
                      <td class="new">Mother Tongue:</td>
                      <td><?php if( $row->mother_tongue==''){ echo 'Not mentioned'; }else { ?>
                        <?php echo $row->mother_tongue_name; }?></td>
                    </tr>
                  </table >
                  <a href="#">
                  <input type="submit" class="ppbutton" value="update"/>
                  </a>
                </form>
              </div>
              <!--your content end--> 
              
            </div>
            <!--toPopup end-->
            
            <div class="loaderr1"></div>
            <div id="backgroundPopup1"></div>
          </div>
        </div>
      </div>
      <div class="tble ">
        <div class="span12">
          <table class="new2 ">
            <tr >
              <td  >Profile created for </td>
              <td width="10px">:</td>
              <td class="new"><?php if( $row->profile_for==''||/*$row->profile_for==0||*/$row->profile_for==-1){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->profile_for; }?></td>
              <td >Name</td>
              <td width="10px">:</td>
              <td  class="new"><?php if($row->name==''||$row->name==-1){echo 'Not mentioned';
								}else { ?>
                <?php echo $row->name; }?></td>
            </tr>
            <tr>
              <td >Body Type/Complexion </td>
              <td width="10px">:</td>
              <td class="new"><?php if( $row->body_type==''){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->body_type;} ?></td>
              <td >Age</td>
              <td width="10px">:</td>
              <td class="new"><?php if( $row->age==''){ echo 'Not mentioned'; }else { ?>
                <?php echo $age; }?></td>
            </tr>
            <tr>
              <td >Physical Status </td>
              <td width="10px">:</td>
              <td class="new"><?php if($row->physical_status==''){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->physical_status;} ?></td>
              <td >Height </td>
              <td width="10px">:</td>
              <td class="new"><?php if($row->height==0){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->height;echo"cm"; }?></td>
            </tr>
            <tr>
              <td >Weight </td>
              <td width="10px">:</td>
              <td class="new"><?php if( $row->weight==0){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->weight;echo"kg"; }?></td>
              <td >Mother Tongue</td>
              <td width="10px">:</td>
              <td  class="new"><?php if( $row->mother_tongue==''){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->mother_tongue_name; }?></td>
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
              <li >
                <h3>Religious Information</h3>
              </li>
              <li style="border:none;" >
                <h3><a href="#" class="topopup2" style="text-decoration:none; color:inherit;">edit</a></h3>
              </li>
            </ul>
            <div id="toPopup2">
              <div class="close2"></div>
              <div id="popup_content2"> <!--your content start-->
                <form action="<?php echo base_url();?>index.php/profile_edit/religious" method="post">
                  <h2>Religious Information</h2>
                  <table class="new2 ">
                    <?php
			if($list1->num_rows > 0){
				?>
                    <tr >
                      <td >Religion :</td>
                      <td ><input type="hidden" name="uid" value="<?php echo $row->uid; ?>" />
                        <?php if( $row->religion==-1){ echo 'Not mentioned'; }else { ?>
                        <?php echo $row->religion_name;} ?></td>
                    </tr>
                    <tr>
                      <td >Caste /Sub Caste :</td>
                      <td ><div id="CasteList">
                          <?php if($row->cast==-1){ echo 'Not mentioned'; }else { ?>
                          <?php echo $row->cast_name; }?></div></td>
                    </tr>
                    <?php
			}else{
				echo 'No Country Name Found';
			}
			?>
                    <tr>
                      <?php
			if($star->num_rows > 0){
				?>
                      <td class="new">Star:</td>
                      <td><select class="selectpicker select_select" name="star" style="color:#000;border-color:#42b8b6;font-weight: 100;">
                          <option value="<?php echo $row->star_id; ?>"><?php echo $row->star_name; ?></option>
                          <?php
								foreach($star->result() as $star){
								?>
                          <option value="<?php echo $star->star_id?>"><?php echo $star->star_name?></option>
                          <?php
								}}
								?>
                        </select></td>
                    </tr>
                    <tr>
                      <td>Shudha Jadakam :</td>
                      <td><input type="radio" name="sudha_jadakam" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="yes" <?php echo ($row->sudha_jadakam == "Yes" ? 'checked="checked"': ''); ?>>
                        Yes
                        <input type="radio" name="sudha_jadakam" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="No" <?php echo ($row->sudha_jadakam == "No" ? 'checked="checked"': ''); ?>>
                        No
                        <input type="radio" name="sudha_jadakam" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="Don't Know" <?php echo ($row->sudha_jadakam == "Don't Know" ? 'checked="checked"': ''); ?>>
                        Don't Know
                        </label></td>
                    </tr>
                  </table>
                  <a href="#">
                  <input type="submit" class="ppbutton" value="update"/>
                  </a>
                </form>
              </div>
              <!--your content end--> 
              
            </div>
            <!--toPopup end-->
            
            <div class="loaderr2"></div>
            <div id="backgroundPopup2"></div>
          </div>
        </div>
      </div>
      <div class="tble">
        <div class="span12">
          <table class="new2 ">
            <tr >
              <td >Religion </td>
              <td width="10px">:</td>
              <td ><?php if( $row->religion==-1){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->religion_name;} ?></td>
            </tr>
            <tr>
              <td>Caste /Sub Caste:</td>
              <td width="10px">:</td>
              <td><?php if($row->cast==-1){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->cast_name; }?></td>
            </tr>
            <tr>
              <td>Star </td>
              <td width="10px">:</td>
              <td><?php if( $row->star==0){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->star_name; }?></td>
            </tr>
            <tr>
              <td>Shudha Jadakam </td>
              <td width="10px">:</td>
              <td><?php if($row->sudha_jadakam===0){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->sudha_jadakam;} ?></td>
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
              <li >
                <h3>Location</h3>
              </li>
              <li style="border:none;" >
                <h3><a href="#" class="topopup3" style="text-decoration:none; color:inherit;">edit</a></h3>
              </li>
            </ul>
            <div id="toPopup3">
              <div class="close3"></div>
              <div id="popup_content3"> <!--your content start-->
                <h2>Location</h2>
                <form action="<?php echo base_url();?>index.php/profile_edit/location" method="post" name="form">
                  <table class="new2 ">
                    <?php
			if($list->num_rows > 0){
				?>
                    <tr>
                      <td >Country </td>
                      <td class="new">:</td>
                      <td><input type="hidden" name="uid" value="<?php echo $row->uid; ?>" />
                        <select name="country" style="color:#000;border-color:#42b8b6;font-weight: 100;" onchange="selectState(this.options[this.selectedIndex].value)">
                          <option value="<?php echo $row->iso3; ?>"><?php echo $row->country_name; ?></option>
                          <?php echo $row->iso3; ?>
                          <?php
								foreach($list->result() as $listElement){
									?>
                          <option value="<?php echo $listElement->iso3?>"><?php echo $listElement->country_name?></option>
                          <?php
								}
								?>
                        </select></td>
                      <td class="new">State</td>
                      <td class="new">:</td>
                      <td><select name="state"  style="color:#000;border-color:#42b8b6;font-weight: 100;"  id="state_dropdown"onchange="selectCity(this.options[this.selectedIndex].value)">
                          <option value="<?php echo $row->state; ?>"><?php echo $row->state; ?></option>
                        </select>
                        <span id="state_loader"></span></td>
                    </tr>
                    <tr>
                      <td>City</td>
                      <td class="new">:</td>
                      <td><select name="city" style="color:#000;border-color:#42b8b6;font-weight: 100;"  id="city_dropdown">
                          <option value="<?php echo $row->city; ?>"><?php echo $row->city;?></option>
                        </select></td>
                      <?php
			}else{
				echo 'No Country Name Found';
			}
			?>
                      <td class="new">Citizenship</td>
                      <td class="new">:</td>
                      <td><select onchange="print_state('state',this.selectedIndex);" class="selectpicker select_select" id="country" name="nationality" style="color:#000;border-color:#42b8b6;font-weight: 100;">
                          <option <?php echo $row->nationality; ?> value="<?php echo $row->nationality; ?>"><?php echo $row->nationality; ?></option>
                          <?php
								foreach($list->result() as $listElement){
									?>
                          <option value="<?php echo $listElement->country_name?>"><?php echo $listElement->country_name?></option>
                          <?php
								}
								?>
                        </select></td>
                    </tr>
                  </table >
                  <a href="#">
                  <input type="submit" class="ppbutton" value="update"/>
                  </a>
                </form>
              </div>
              <!--your content end--> 
              
            </div>
            <!--toPopup end-->
            
            <div class="loaderr3"></div>
            <div id="backgroundPopup3"></div>
          </div>
        </div>
      </div>
      <div class="tble">
        <div class="span12">
          <table class="new2 ">
            <tr >
              <td >Country </td>
              <td width="10px">:</td>
              <td ><?php if($row->country==-1){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->country_name; }?></td>
              <td class="new">State </td>
              <td width="10px">:</td>
              <td><?php if($row->state==-1){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->state;} ?></td>
            </tr>
            <tr>
              <td>City</td>
              <td width="10px">:</td>
              <td><?php if( $row->city==-1){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->city;} ?></td>
              <td class="new">Citizenship</td>
              <td width="10px">:</td>
              <td><?php if($row->nationality==''){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->nationality;} ?></td>
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
              <li >
                <h3>Professional Information</h3>
              </li>
              <li style="border:none;" >
                <h3><a href="#" class="topopup4" style="text-decoration:none; color:inherit;">edit</a></h3>
              </li>
            </ul>
            <div id="toPopup4">
              <div class="close4"></div>
              <div id="popup_content4"> <!--your content start-->
                <h2>Professional Information</h2>
                <form action="<?php echo base_url();?>index.php/profile_edit/professional" method="post" name="form">
                  <table class="new2 ">
                    <tr >
                      <td >Education </td>
                      <td class="new">:</td>
                      <td ><input type="hidden" name="uid" value="<?php echo $row->uid; ?>" />
                        <?php
								foreach($education1->result() as $listElement){
									}?>
                                    <?php if($row->education==""){?>
                                    <select name="education" required="required" class="selectpicker select_select" style="color:#000;border-color:#42b8b6;font-weight: 100;">
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
                                <?php } else{
									 ?>
                                     <input type="hidden" name="education" value="<?php echo $row->education;?>" />
                        <?php echo $listElement->education_name;?>
                        <?php } ?>
                        </td>
                    </tr>
                    <tr>
                      <td>College</td>
                      <td width="10px">:</td>
                      <td><input type="text" name="collage_name" value="<?php echo $row->collage_name; ?>"   style="color:#000;border-color:#42b8b6;font-weight: 100;"/></td>
                    </tr>
                    <tr>
                      <td>Occupation </td>
                      <td width="10px">:</td>
                      <td><select onchange="print_state('state',this.selectedIndex);" name="occupation" class="selectpicker select_select" style="color:#000;border-color:#42b8b6;font-weight: 100;">
                          <option <?php echo $row->occupation_id; ?> value="<?php echo $row->occupation_id; ?>"><?php echo $row->occupation_name; ?></option>
                          <?php
								foreach($occupation->result() as $listElement){
									?>
                          <option value="<?php echo $listElement->occupation_id?>"><?php echo $listElement->occupation_name?></option>
                          <?php
								}
								?>
                        </select></td>
                    </tr>
                    <tr>
                      <td >Occupation In Detail</td>
                      <td width="10px">:</td>
                      <td ><input type="text" name="occupation_details" value="<?php echo $row->occupation_details; ?>"  style="color:#000;border-color:#42b8b6;font-weight: 100;"/></td>
                    </tr>
                    <tr>
                      <td >Employed In</td>
                      <td width="10px">:</td>
                      <td><input type="radio" name="employed_type" id="inlineRadio1" style=" margin-right:5px;margin-top: 0px;" class="radio1" value="Government" <?php echo ($row->employed_type == "Government" ? 'checked="checked"': ''); ?>>
                        Government
                        <input type="radio" name="employed_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;margin-top: 0px;" class="radio1" value="Private" <?php echo ($row->employed_type == "Private" ? 'checked="checked"': ''); ?>>
                        Private
                        <input type="radio" name="employed_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;margin-top: 0px;" class="radio1" value="Business" <?php echo ($row->employed_type == "Business" ? 'checked="checked"': ''); ?>>
                        Business
                        <input type="radio" name="employed_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;margin-top: 0px;" class="radio1" value="Defence" <?php echo ($row->employed_type == "Defence" ? 'checked="checked"': ''); ?>>
                        Defence
                        <input type="radio" name="employed_type" id="inlineRadio2" style="margin-left:10px; margin-right:5px;margin-top: 0px;" class="radio1" value="Self Employed" <?php echo ($row->employed_type == "Self Employed" ? 'checked="checked"': ''); ?>>
                        Self Employed </td>
                    </tr>
                    <tr>
                      <td >Annual Income </td>
                      <td width="10px">:</td>
                      <td><div class="controls">
                          <select onchange="print_state('state',this.selectedIndex);" name="inc_currency" class="selectpicker day" style="color:#000;border-color:#42b8b6;font-weight: 100;">
                            <option <?php echo $row->occupation_id; ?> value="<?php echo $row->id_currency; ?>"><?php echo $row->currency_country_name; ?>-<?php echo $row->currrency_symbol; ?></option>
                            <?php
								foreach($currency->result() as $listElement){
									?>
                            <option value="<?php echo $listElement->id_currency?>"><?php echo $listElement->currency_country_name?>-<?php echo $listElement->currrency_symbol?></option>
                            <?php
								}
								?>
                          </select>
                          &nbsp;
                          <input type="text" style="border: 2px solid #42b8b6;
color: #000;
font-weight: 100;" class="input_feild day" value="<?php echo $row->income; ?>" name="income" id="inputEmail">
                        </div></td>
                    </tr>
                  </table >
                  <a href="#">
                  <input type="submit" class="ppbutton" value="update"/>
                  </a>
                </form>
              </div>
              <!--your content end--> 
              
            </div>
            <div class="loaderr4"></div>
            <div id="backgroundPopup4"></div>
          </div>
        </div>
      </div>
      <div class="tble">
        <div class="span12">
          <table class="new2 ">
            <tr >
              <td >Education </td>
              <td width="10px">:</td>
              <td ><?php if( $row->education==''){
									echo 'Not mentioned'; }else { ?>
                <?php echo $row->education_name; }?></td>
              <td class="new">Occupation In Detail </td>
              <td width="10px">:</td>
              <td ><?php if($row->occupation_details===""){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->occupation_details;} ?></td>
            </tr>
            <tr>
              <td>College</td>
              <td width="10px">:</td>
              <td><?php if( $row->collage_name==''){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->collage_name; } ?></td>
              <td class="new">Employed In </td>
              <td width="10px">:</td>
              <td><?php if( $row->employed_type==''){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->employed_type; }?></td>
            </tr>
            <tr>
              <td>Occupation </td>
              <td width="10px">:</td>
              <td><?php if( $row->occupation==''){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->occupation_name; }?></td>
              <td class="new">Anual Income </td>
              <td width="10px">:</td>
              <td><?php if( $row->income==0){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->currrency_symbol; ?>.<?php echo $row->income; } ?></td>
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
              <li style="border:none;margin-top:10px;"> <img src="<?php echo base_url();?>file/img/images/images/images/icon-5_16_16.jpg" /></li>
              <li >
                <h3>Family Details</h3>
              </li>
              <li style="border:none;" >
                <h3><a href="#" class="topopup5" style="text-decoration:none; color:inherit;">edit</a></h3>
              </li>
            </ul>
            <div id="toPopup5">
              <div class="close5"></div>
              <div id="popup_content5"> <!--your content start-->
                <h2>Family Details</h2>
                <script src="http://code.jquery.com/jquery-1.10.1.js"></script> 
                <script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(function(){
    $('#ddlMaxExp').change(function(){
       var selectedMaxValue = Number($(this).val());
       var selectedMinValue = Number($('#ddlMinExp').val());
        
       if( selectedMaxValue > 0  && selectedMinValue < selectedMaxValue) {
           alert('select option brother and brothers married does not exist');
           $(this).find('option:first').attr('selected', 'selected');
       }
       else if( selectedMaxValue > 0 && selectedMinValue === 0) {
           alert('Please select no.of brother option first');
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
        
       if( selectedMaxValue > 0  && selectedMinValue < selectedMaxValue) {
           alert('select option sister and sisters married does not exist');
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
                <script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(function(){
    $('#agem').change(function(){
       var selectedMaxValue = Number($(this).val());
       var selectedMinValue = Number($('#age').val());
        
       if( selectedMaxValue > 0  && selectedMinValue > selectedMaxValue) {
           alert('age selection are not exist');
           $(this).find('option:first').attr('selected', 'selected');
       }
       else if( selectedMaxValue > 0 && selectedMinValue === 0) {
           alert('Please select age from first');
           $(this).find('option:first').attr('selected', 'selected');
       }       
       
    });
})
});//]]>  
</script> 
                <script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(function(){
    $('#heightm').change(function(){
       var selectedMaxValue = Number($(this).val());
       var selectedMinValue = Number($('#height').val());
        
       if( selectedMaxValue > 0  && selectedMinValue > selectedMaxValue) {
           alert('Height selection are  not exist');
           $(this).find('option:first').attr('selected', 'selected');
       }
       else if( selectedMaxValue > 0 && selectedMinValue === 0) {
           alert('Please select height from first');
           $(this).find('option:first').attr('selected', 'selected');
       }       
       
    });
})
});//]]>  
</script>
                <form action="<?php echo base_url();?>index.php/profile_edit/family" method="post" name="form">
                  <table class="new2 ">
                    <tr >
                      <td width="49" >Family Value </td>
                      <td width="172" >:</td>
                      <td width="101" ><input type="hidden" name="uid" value="<?php echo $row->uid; ?>" />
                        <input type="radio" name="family_value" style=" margin-right:5px;" class="radio1" value="orthodex" <?php echo ($row->family_value == "orthodex" ? 'checked="checked"': ''); ?>>
                        Orthodex
                        <input type="radio" name="family_value" style="margin-left:10px; margin-right:5px;" class="radio1" value="traditional" <?php echo ($row->family_value == "traditional" ? 'checked="checked"': ''); ?>>
                        Traditional
                        <input type="radio" name="family_value" style="margin-left:10px; margin-right:5px;" class="radio1" value="moderate" <?php echo ($row->family_value == "moderate" ? 'checked="checked"': ''); ?>>
                        Moderate
                        <input type="radio" name="family_value" style="margin-left:10px; margin-right:5px;" class="radio1" value="Liberal" <?php echo ($row->family_value == "Liberal" ? 'checked="checked"': ''); ?>>
                        Liberal
                        </label></td>
                      <td width="104"  class="new">No:Of Brothers(s):</td>
                      <td width="104" ><select id="ddlMinExp" name="no_brothers" class="selectpicker day ppcolor" style="border-color:#42b8b6;font-weight: 100;">
                          <option value="<?php echo $row->no_brothers; ?>"><?php echo $row->no_brothers; ?></option>
                          <option value="0">- Optional -</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5+</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td>Family Status </td>
                      <td width="10px">:</td>
                      <td><input type="radio" name="family_statas" id="inlineRadio1" style=" margin-right:5px;" class="radio1" value="Middle class" <?php echo ($row->family_statas == "Middle class" ? 'checked="checked"': ''); ?>>
                        Middle Class
                        <input type="radio" name="family_statas" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="upper class" <?php echo ($row->family_statas == "upper class" ? 'checked="checked"': ''); ?>>
                        Upper Class
                        <input type="radio" name="family_statas" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="rich" <?php echo ($row->family_statas == "rich" ? 'checked="checked"': ''); ?>>
                        Rich
                        <input type="radio" name="family_status" id="inlineRadio2" style="margin-left:10px; margin-right:5px;" class="radio1" value="affluent" <?php echo ($row->family_statas == "affluent" ? 'checked="checked"': ''); ?>>
                        Affluent
                        </label></td>
                      <td class="new">No:Of Sister(s)</td>
                      <td width="10px">:</td>
                      <td><select id="sister" name="no_sisters" class="selectpicker day ppcolor" style="border-color:#42b8b6;font-weight: 100;">
                          <option value="<?php echo $row->no_sisters; ?>"><?php echo $row->no_sisters; ?></option>
                          <option value="0">- Optional -</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5+</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td>Father Status</td>
                      <td width="10px">:</td>
                      <td><input type="text"  name="f_occupation"value="<?php echo $row->f_occupation; ?>"  style="color:#000;border-color:#42b8b6;font-weight: 100;"/></td>
                      <td class="new">No:Of brother Married</td>
                      <td width="10px">:</td>
                      <td><select id="ddlMaxExp" name="b_married" class="selectpicker day ppcolor" style="border-color:#42b8b6;font-weight: 100;">
                          <option value="<?php echo $row->b_married; ?>"><?php echo $row->b_married; ?></option>
                          <option value="0">- Optional -</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5+</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td >Mother Status </td>
                      <td width="10px">:</td>
                      <td><input type="text" name="m_occupation" value="<?php echo $row->m_occupation; ?>"  style="color:#000;border-color:#42b8b6;font-weight: 100;"/></td>
                      <td class="new">No:Of Sister Married</td>
                      <td width="10px">:</td>
                      <td><select id="sisterm" name="s_married" class="selectpicker day ppcolor" style="border-color:#42b8b6;font-weight: 100;">
                          <option value="<?php echo $row->s_married; ?>"><?php echo $row->s_married; ?></option>
                          <option value="0">- Optional -</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5+</option>
                        </select></td>
                    </tr>
                  </table >
                  <a href="#">
                  <input type="submit" class="ppbutton" value="update"/>
                  </a>
                </form>
              </div>
              <!--your content end--> 
              
            </div>
            <!--toPopup end-->
            
            <div class="loaderr5"></div>
            <div id="backgroundPopup5"></div>
          </div>
        </div>
      </div>
      <div class="tble">
        <div class="span12">
          <table class="new2 ">
            <tr >
              <td >Family Value </td>
              <td width="10px">:</td>
              <td ><?php if( $row->family_value==''||$row->family_value===0){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->family_value; }?></td>
              <td  class="new">No:Of Brothers(s)</td>
              <td width="10px">:</td>
              <td ><?php if( $row->b_married==''||$row->b_married===0){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->no_brothers; ?>/<?php echo $row->b_married; echo "married"; }?></td>
            </tr>
            <tr>
              <td>Family Status </td>
              <td width="10px">:</td>
              <td><?php if( $row->family_statas==''||$row->family_statas===0){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->family_statas; }?></td>
              <td class="new">Mother Status </td>
              <td width="10px">:</td>
              <td><?php if( $row->m_occupation==''||$row->m_occupation===0){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->m_occupation; }?></td>
            </tr>
            <tr>
              <td>Father Status</td>
              <td width="10px">:</td>
              <td><?php if( $row->f_occupation==''||$row->f_occupation===0){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->f_occupation; }?></td>
              <td class="new">No:Of Sister(s)</td>
              <td width="10px">:</td>
              <td><?php if($row->s_married===0||$row->s_married==''){ echo 'Not mentioned'; }else { ?>
                <?php echo $row->no_sisters; ?>/<?php echo $row->s_married; echo" married"; }?></td>
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
      <form action="<?php echo base_url(); ?>index.php/searching/search_id" method="post" class="navbar-form pull-left form-search">
        <input type="text" name="user_id"  class="form-control">
        <button type="submit" class="btn">search</button>
      </form>
    </div>
  </div>
</div>
<div class="matches">
                            	<div class="span12" style="background-color:#FFF; overflow:hidden;">
                                	 <img src="<?php echo base_url(); ?>file/add/individual page2.jpg">
                                
                             
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
              <li >
                <h3>Basic & Religious Preferences</h3>
              </li>
              <li style="border:none;" >
                <h3><a href="#" class="topopup6" style="text-decoration:none; color:inherit;">edit</a></h3>
              </li>
            </ul>
            <div id="toPopup6">
              <div class="close6"></div>
              <div id="popup_content6"> <!--your content start-->
                <h2>Basic & Religious Preferences</h2>
                <form action="<?php echo base_url();?>index.php/profile_edit/basic_pref" method="post" name="form">
                  <table class="new2 ">
                    <tr >
                      <td  width="150px">Age :</td>
                      <td ><input type="hidden" name="user_id" value="<?php echo $row->user_id;?>" />
                        <select id="age" name="pref_age_from"  class="selectpicker day" style="margin-right:7px;color:#000;border-color:#42b8b6;font-weight: 100;">
                          <option value=" <?php echo $pref_age_from; ?>"> <?php echo $pref_age_from; ?></option>
                          <option value="0">- Optional -</option>
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
                        to
                        <select name="pref_age_to" id="agem" class="selectpicker day" style="margin-left:7px;margin-right:7px;color:#000;border-color:#42b8b6;font-weight: 100;" >
                          <option value="<?php echo $row->Pref_age_to; ?>"> <?php echo $row->Pref_age_to; ?></option>
                          <option value="0">- Optional -</option>
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
                        years</td>
                    </tr>
                    <tr>
                      <td>Height :</td>
                      <td><select id="height" name="pref_height_from" class="selectpicker day" style="margin-right:7px;color:#000;border-color:#42b8b6;font-weight: 100;">
                          <option value="<?php echo $row->pref_height_from; ?>"><?php echo $row->pref_height_from; ?></option>
                          <option value="0">- Optional -</option>
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
                        to
                        <select name="pref_height_to" id="heightm" class="selectpicker day" style="margin-left:7px;margin-right:7px;color:#000;border-color:#42b8b6;font-weight: 100;">
                          <option value="<?php echo $row->pref_height_to; ?>"><?php echo $row->pref_height_to; ?></option>
                          <option value="0">- Optional -</option>
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
                        </select></td>
                    </tr>
                    <tr>
                      <td>Marital Status :</td>
                      <td><input type="radio" name="pref_status" id="inlineRadio1 " value="any" style="margin:2px 7px 0 0 ;" <?php echo ($row->pref_status == "any" ? 'checked="checked"': ''); ?>>
                        Any
                        <input type="radio" name="pref_status" id="inlineRadio1" value="Unmarried" style="margin:2px 7px 0 0 ;" <?php echo ($row->pref_status == "Unmarried" ? 'checked="checked"': ''); ?>>
                        Unmarried
                        <input type="radio" name="pref_status" id="inlineRadio1" value="widow" style="margin:2px 7px 0 0 ;" <?php echo ($row->pref_status == "widow" ? 'checked="checked"': ''); ?>>
                        widow
                        <input type="radio" name="pref_status" id="inlineRadio1" value="Divorsed" style="margin:2px 7px 0 0 ;" <?php echo ($row->pref_status == "Divorsed" ? 'checked="checked"': ''); ?>>
                        Divorsed </td>
                    </tr>
                    <tr>
                      <td>Physical Status :</td>
                      <td><input type="radio" name="pref_physical_status" id="inlineRadio1 " value="Normal" style="margin:2px 7px 0 0 ;"  <?php echo ($row->pref_physical_status == "Normal" ? 'checked="checked"': ''); ?>>
                        Normal
                        <input type="radio" name="pref_physical_status" id="inlineRadio1" value="Physically challenged" style="margin:2px 7px 0 0 ;"  <?php echo ($row->pref_physical_status == "Physically challenged" ? 'checked="checked"': ''); ?>>
                        Physically challenged
                        <input type="radio" name="pref_physical_status" id="inlineRadio1" value="Doesnt matter" style="margin:2px 7px 0 0 ;"  <?php echo ($row->pref_physical_status == "Doesnt matter" ? 'checked="checked"': ''); ?>>
                        Doesnt matter </td>
                    </tr>
                    <?php
			if($list1->num_rows > 0){
				?>
                    <tr >
                      <td >Religion :</td>
                      <td ><select  class="selectpicker select_select" style="color:#000;border-color:#42b8b6;font-weight: 100;" name="pref_religion" onchange="selectState2(this.options[this.selectedIndex].value)">
                          <option value="">Select Religion</option>
                          <?php
								foreach($list1->result() as $listElement){
									?>
                          <option value="<?php echo $listElement->religion_id?>"><?php echo $listElement->religion_name?></option>
                          <?php
								}
								?>
                        </select></td>
                    </tr>
                    <tr >
                      <td >Caste /Sub Caste :</td>
                      <td ><div class="span12">
                          <div class="span5">
                            <select name="cast" size="5" multiple="multiple"  id="state_dropdown2" style="color:#000;border-color:#42b8b6;font-weight: 100;" onchange="selectCity(this.options[this.selectedIndex].value)">
                              <option value="">Select Cast</option>
                            </select>
                          </div>
                          <div class="span2 thrdreg4"> <a class="btn btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add9">Add </a><br>
                            <a class="btn btn-small" href="JavaScript:void(0);" id="btn-remove9"> Remove</a></div>
                          <div class="span4">
                            <select name="pref_cast[]" id="select-to10" multiple="" size="5">
                              <?php if($value->num_rows > 0) {?>
                              <?php foreach ($prefcast->result() as $val){?>
                              <option selected="selected" value="<?php echo $val->cast_id ?>"><?php echo $val->cast_name ?></option>
                              <?php }}?>
                            </select>
                          </div>
                        </div></td>
                    </tr>
                    <?php
			}else{
				echo 'No Country Name Found';
			}
			?>
                    <?php
			if($mother1->num_rows > 0){
				?>
                    <tr >
                      <td>Mother Toungue :</td>
                      <td ><div class="span12">
                          <div class="span5">
                            <select   style="color:#000;border-color:#42b8b6;font-weight: 100;" name="selectfrom" id="select-from" multiple="" size="5">
                              <option value="">Select Religion</option>
                              <?php
								foreach($mother1->result() as $listElement){
									?>
                              <option value="<?php echo $listElement->mother_id?>"><?php echo $listElement->mother_tongue_name?></option>
                              <?php
								}
								?>
                            </select>
                          </div>
                          <div class="span2 thrdreg4"> <a class="btn btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add">Add </a><br>
                            <a class="btn btn-small" href="JavaScript:void(0);" id="btn-remove"> Remove</a></div>
                          <div class="span4">
                            <select name="pref_mother[]" id="select-to" multiple="" size="5">
                              <?php if($value->num_rows > 0) {?>
                              <?php foreach ($value->result() as $val){?>
                              <option selected="selected" value="<?php echo $val->mother_id ?>"><?php echo $val->mother_tongue_name ?></option>
                              <?php }}?>
                            </select>
                          </div>
                        </div></td>
                    </tr>
                    <?php
			}else{
				echo 'No Country Name Found';
			}
			?>
                    <tr>
                    <tr></tr>
                    
                      <td >Star :</td>
                      <td><div class="span12">
                          <div class="span5">
                            <select name="selectfrom8" style="color:#000;border-color:#42b8b6;font-weight: 100;" id="select-from8" multiple="" size="5">
                              <?php if($star1->num_rows > 0) {?>
                              <?php foreach ($star1->result() as $val3){?>
                              <option value="<?php echo $val3->star_id ?>"><?php echo $val3->star_name ?></option>
                              <?php }}?>
                            </select>
                          </div>
                          <div class="span2 thrdreg4"> <a class="btn btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add8">Add </a><br>
                            <a class="btn btn-small" href="JavaScript:void(0);" id="btn-remove8"> Remove</a></div>
                          <div class="span4">
                            <select name="pref_star[]" id="select-to8" multiple="" size="5">
                              <?php if($prefstar->num_rows > 0) {?>
                              <?php foreach ($prefstar->result() as $val3){?>
                              <option selected="selected" value="<?php echo $val3->star_id ?>"><?php echo $val3->star_name ?></option>
                              <?php }}?>
                            </select>
                          </div>
                        </div></td>
                    </tr>
                  </table >
                  <a href="#">
                  <input type="submit" class="ppbutton" value="update"/>
                  </a>
                </form>
              </div>
              <!--your content end--> 
              
            </div>
            <!--toPopup end-->
            
            <div class="loaderr6"></div>
            <div id="backgroundPopup6"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="tble">
      <div class="span12">
        <table class="new2 " width="100%">
          <tr >
            <td width="110px" >Age</td>
             <td width="10px">:</td>
            <td width="75px" ><?php if($row->pref_age_from==''){ echo 'Not mentioned'; }else { ?>
              <?php echo $row->pref_age_from; ?>&nbsp;to&nbsp;<?php echo $row->Pref_age_to; }?></td>
          </tr>
          <tr>
            <td>Height </td>
             <td width="10px">:</td>
            <td><?php if( $row->pref_height_from==''||$row->pref_height_from==0||$row->pref_height_from==-1/**/){ echo 'Not mentioned'; }else { ?>
              <?php echo $row->pref_height_from; ?>&nbsp;to&nbsp;<?php echo $row->pref_height_to;} ?></td>
          </tr>
          <tr>
            <td>Marital Status
              	</td>
                 <td width="10px">:</td>
            <td><?php if( $row->pref_status==''||$row->pref_status===0){ echo 'Not mentioned'; }else { ?>
              <?php echo $row->pref_status;} ?></td>
          </tr>
          <tr>
            <td>Physical Status </td>
             <td width="10px">:</td>
            <td><?php if( $row->pref_physical_status==''||$row->pref_physical_status===0){ echo 'Not mentioned'; }else { ?>
              <?php echo $row->pref_physical_status; }?></td>
          </tr>
          <tr>
            <td>Religion </td>
             <td width="10px">:</td>
            <td><?php if( $row->religion_name==''||$row->religion_name===0){ echo 'Not mentioned'; }else { ?>
              <?php echo $row->religion_name; }?></td>
          </tr>
          <tr>
            <td style="vertical-align:top">Mother Toungue </td>
             <td width="10px">:</td>
            <td ><?php if($value->num_rows > 0) {?>
              <?php foreach ($value->result() as $val){?>
              <?php echo $val->mother_tongue_name ?>,
              <?php }}?></td>
          </tr>
          <tr>
            <td style="vertical-align:top">Caste/Religion </td>
             <td width="10px">:</td>
            <td><?php if($prefcast->num_rows > 0) {?>
              <?php foreach ($prefcast->result() as $val){?>
              <?php echo $val->cast_name ?>,
              <?php }}?></td>
          </tr>
          <tr>
            <td style="vertical-align:top">Star </td>
             <td width="10px">:</td>
            <td><?php if($prefstar->num_rows > 0) {?>
              <?php foreach ($prefstar->result() as $val){?>
              <?php echo $val->star_name; ?>,
              <?php }}
							
							 else 
							 {
							 
							 echo 'Not mentioned';
							 }
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
              <li>
                <h3>Professional Preferences</h3>
              </li>
              <li style="border:none;" >
                <h3><a href="#" class="topopup7" style="text-decoration:none; color:inherit;">edit</a></h3>
              </li>
            </ul>
            <div id="toPopup7">
              <div class="close7"></div>
              <div id="popup_content7"> <!--your content start-->
                <h2>Professional Preferences</h2>
                <form action="<?php echo base_url();?>index.php/profile_edit/professional_pref" method="post" name="form">
                  <table class="new2 ">
                    <tr >
                      <td >Education :</td>
                      <td ><div class="span12">
                          <div class="span5">
                            <fieldset style="margin-top: 12px;">
                              <input type="hidden" name="user_id" value="<?php echo $row->user_id;?>" />
                              <select name="selectfrom12" id="select-from12" multiple="" size="5">
                                <option <?php echo $row->education_id; ?> value="<?php echo $row->education_id; ?>"><?php echo $row->education_name; ?></option>
                                <?php
								foreach($education->result() as $listElement){
									?>
                                <option value="<?php echo $listElement->education_id?>"><?php echo $listElement->education_name?></option>
                                <?php
								}
								?>
                              </select>
                            </fieldset>
                          </div>
                          <div class="span2 thrdreg4"> <a class="btn btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add12">Add </a><br>
                            <a class="btn btn-small" href="JavaScript:void(0);" id="btn-remove12"> Remove</a></div>
                          <div class="span4">
                            <select name="pref_education[]" id="select-to12" multiple="" size="5" style="margin-top: 12px;">
                              <?php if($prefedu->num_rows > 0) {?>
                              <?php foreach ($prefedu->result() as $val3){?>
                              <option selected="selected" value="<?php echo $val3->education_id ?>"><?php echo $val3->education_name ?></option>
                              <?php }}?>
                            </select>
                          </div>
                        </div></td>
                        </td>
                    </tr>
                    <tr>
                      <td>Occupation :</td>
                      <td><div class="span12" style="height: 120px;">
                          <div class="span5">
                            <fieldset style="margin-top: 12px;">
                              <select name="pref_occupation[]" id="select-from13" multiple="" size="5">
                                <option <?php echo $row->occupation_id; ?> value="<?php echo $row->occupation_id; ?>"><?php echo $row->occupation_name; ?></option>
                                <?php
								foreach($occupation->result() as $listElement){
									?>
                                <option value="<?php echo $listElement->occupation_id?>"><?php echo $listElement->occupation_name?></option>
                                <?php
								}
								?>
                              </select>
                            </fieldset>
                          </div>
                          <div class="span2 thrdreg4"> <a class="btn btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add13">Add </a><br>
                            <a class="btn btn-small" href="JavaScript:void(0);" id="btn-remove13"> Remove</a></div>
                          <div class="span4">
                            <select name="pref_occupation[]" id="select-to13" multiple="" size="5" style="margin-top: 12px;">
                              <?php if($prefoccupation->num_rows > 0) {?>
                              <?php foreach ($prefoccupation->result() as $val3){?>
                              <option selected="selected" value="<?php echo $val3->occupation_id ?>"><?php echo $val3->occupation_name ?></option>
                              <?php }}?>
                            </select>
                          </div>
                        </div></td>
                    </tr>
                    <tr>
                      <td>Annual Income : </td>
                      <td><div class="controls">
                          <select onchange="print_state('state',this.selectedIndex);" name="pref_income_currency" class="selectpicker day" style="color:#000;border-color:#42b8b6;font-weight: 100;">
                            <option <?php echo $row->occupation_id; ?> value="<?php echo $row->id_currency; ?>"><?php echo $row->currency_country_name; ?>-<?php echo $row->currrency_symbol; ?></option>
                            <?php
								foreach($currency->result() as $listElement){
									?>
                            <option value="<?php echo $listElement->id_currency?>"><?php echo $listElement->currency_country_name?>-<?php echo $listElement->currrency_symbol?></option>
                            <?php
								}
								?>
                          </select>
                          <input type="text" style="border: 2px solid #42b8b6;
color: #000;
font-weight: 100;" class="input_feild day" value="<?php echo $row->pref_income ?>" placeholder="income" name="pref_income" id="inputEmail">
                        </div></td>
                    </tr>
                  </table >
                  <a href="#">
                  <input type="submit" class="ppbutton" value="update"/>
                  </a>
                </form>
              </div>
              <!--your content end--> 
              
            </div>
            <!--toPopup end-->
            
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
            <td  width="160px">Education </td>
            <td width="10px">:</td>
            <td ><?php if($prefedu->num_rows > 0) {?>
              <?php foreach ($prefedu->result() as $val){?>
              <?php echo $val->education_name ?>,
              <?php }}
							 
							 else
							 {
								 echo"Not mentioned";
							 }?></td>
          </tr>
          <tr>
            <td valign="top">Occupation </td>
            <td width="10px">:</td>
            <td><?php if($prefoccupation->num_rows > 0) {?>
              <?php foreach ($prefoccupation->result() as $val){?>
              <?php echo $val->occupation_name ?>,
              <?php }}
							 else
							 {
								 echo"Not mentioned";
							 }?></td>
          </tr>
          <tr>
            <td>Annual Income </td>
            <td width="10px">:</td>
            <td><?php if( $row->pref_income===0){ echo 'Not mentioned'; }else { ?>
              <?php echo $row->currrency_symbol; ?>.<?php echo $row->pref_income; }?></td>
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
  <li>
    <h3>Location Preferences</h3>
  </li>
  <li style="border:none;" >
    <h3><a href="#" class="topopup8" style="text-decoration:none; color:inherit;">edit</a></h3>
  </li>
</ul>
<div id="toPopup8">
<div class="close8"></div>
<div id="popup_content8">
<!--your content start-->
<h2>Location Preferences</h2>
<form action="<?php echo base_url();?>index.php/profile_edit/location_pref" method="post" name="form">
<table class="new2 ">
  <?php
			if($list->num_rows > 0){
				?>
  <tr >
    <td >Country:</td>
    <td ><div class="span12">
        <div class="span5">
          <input type="hidden" name="user_id" value="<?php echo $row->user_id;?>" />
          <fieldset style="margin-top: 12px;">
            <select id="select-from17"  multiple="" size="5"name="" style="color:#000;border-color:#42b8b6;font-weight: 100;" onchange="selectState4(this.options[this.selectedIndex].value)">
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
        <div class="span2 thrdreg4"> <a class="btn btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add17">Add </a><br>
          <a class="btn btn-small" href="JavaScript:void(0);" id="btn-remove17"> Remove</a></div>
        <div class="span4">
          <select name="pref_country[]" id="select-to17" multiple="" size="5" style="margin-top: 12px;">
            <?php if($prefcountry->num_rows > 0) {?>
            <?php foreach ($prefcountry->result() as $val3){?>
            <option selected="selected" value="<?php echo $val3->iso3 ?>"><?php echo $val3->nicename ?></option>
            <?php }}?>
          </select>
        </div>
      </div></td>
  </tr>
  <tr>
    <td>State :</td>
    <td><div class="span12">
        <div class="span5">
          <fieldset style="margin-top: 12px;">
            <select  multiple=""   size="5"name=""  style="color:#000;border-color:#42b8b6;font-weight: 100;"  id="state_dropdown4"onchange="selectCity4(this.options[this.selectedIndex].value)">
              <option value="-1">Select state</option>
            </select>
          </fieldset>
        </div>
        <div class="span2 thrdreg4"> <a class="btn btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add18">Add </a><br>
          <a class="btn btn-small" href="JavaScript:void(0);" id="btn-remove18"> Remove</a></div>
        <div class="span4">
          <select name="pref_state[]" id="select-to18" multiple="" size="5" style="margin-top: 12px;">
            <?php if($prefstate->num_rows > 0) {?>
            <?php foreach ($prefstate->result() as $val3){?>
            <option selected="selected" value="<?php echo $val3->state_name ?>"><?php echo $val3->state_name ?></option>
            <?php }}?>
          </select>
        </div>
      </div></td>
  </tr>
  <tr>
    <td>City : </td>
    <td><div class="span12">
        <div class="span5">
          <fieldset style="margin-top: 12px;">
            <select  multiple=""  size="5"name="" style="color:#000;border-color:#42b8b6;font-weight: 100;"  id="city_dropdown4">
              <option value="-1">Select city</option>
            </select>
          </fieldset>
        </div>
        <div class="span2 thrdreg4"> <a class="btn btn-small thrdreg5" href="JavaScript:void(0);" id="btn-add19">Add </a><br>
          <a class="btn btn-small" href="JavaScript:void(0);" id="btn-remove19"> Remove</a></div>
        <div class="span4">
          <select name="pref_city[]" id="select-to19" multiple="" size="5"  style="margin-top: 12px;">
            <?php if($prefcity->num_rows > 0) {?>
            <?php foreach ($prefcity->result() as $val3){?>
            <option selected="selected" value="<?php echo $val3->city_name ?>"><?php echo $val3->city_name ?></option>
            <?php }}?>
          </select>
        </div>
      </div></td>
  </tr>
  <?php
			}else{
				echo 'No Country Name Found';
			}
			?>
</table >
<a href="#">
<input type="submit" class="ppbutton" value="update"/>
</a>
<form>
</div>
<!--your content end-->

</div>
<!--toPopup end-->

<div class="loaderr8"></div>
<div id="backgroundPopup8"></div>
</div>
</div>
</div>
<div class="tble">
  <div class="span12">
    <table class="new2 ">
      <tr >
        <td >Country</td>
        <td width="10px">:</td>
        <td ><?php if($prefcountry->num_rows > 0) {?>
          <?php foreach ($prefcountry->result() as $val){?>
          <?php echo $val->nicename ?>,
          <?php }}
							 
							 else
							 {
								 echo "Not mentioned";
							 }?></td>
      </tr>
      <tr>
        <td>State </td>
        <td width="10px">:</td>
        <td><?php if( $row->pref_state==''||/*$row->profile_for==0||*/$row->pref_state==-1){ echo 'Not mentioned'; }else { ?>
          <?php echo $row->pref_state; } ?></td>
      </tr>
      <tr>
        <td>City  </td>
        <td width="10px">:</td>
        <td><?php if( $row->pref_state==''||/*$row->profile_for==0||*/$row->pref_state==-1){ echo 'Not mentioned'; }else { ?>
          <?php echo $row->pref_city;echo ",";}?></td>
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
<?php ?>
</div>
<script src="http://code.jquery.com/jquery.js"></script> 
<?php $this->load->view('footer'); }?>
<?php }
	else
	{
		 redirect('home/', 'refresh');
	}
							
?>
