<?php $this->load->view('header'); ?>
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
</style>
<link href="<?php echo base_url(); ?>file/css/contact.css" rel="stylesheet" type="text/css" />
<div class="row-fluid content">
  <div class="container">
    <div class="span12">
      <h2 class="head" style="  padding-left: 0px; width:500px;">POST YOUR SUCCESS STORY </h2>
    </div>
    <form action="<?php echo site_url('succes/successpost'); ?>" method="post" enctype="multipart/form-data">
      <div class="span7 abtreg" style="color:#FFF;">
        <table>
          <tr>
            <td width="40%">Bride Name(Female)</td>
            <td width="20%">:</td>
            <td width="40%"> <input required="required" type="text" id="inputEmail" name="bname"></td>
          </tr>
          <tr>
            <td>Groom Name</td>
            <td>:</td>
            <td> <input required="required" type="text" id="inputEmail" name="game"></td>
          </tr>
          <tr>
            <td>Your soulmate ID</td>
            <td>:</td>
            <td>
            <?php $session_data = $this->session->userdata('logged_in');?><input type="text" id="inputEmail" value="<?php echo $session_data['user_id']; ?>" name="user_id"></td>
          </tr>
          <tr>
            <td>Your partners soulmate ID </td>
            <td>:</td>
            <td><input type="text" id="inputEmail" name="psid"></td>
          </tr>
          <tr>
            <td>E-mail</td>
            <td>:</td>
            <td><input required="required" type="text" id="inputEmail" name="email"></td>
          </tr>
          <tr>
            <td>Engagement Date</td>
            <td>:</td>
            <td><input type="date" id="inputEmail" name="edate"></td>
          </tr>
          <tr>
            <td>Marriage Date</td>
            <td>:</td>
            <td><input required="required" type="date" id="inputEmail" name="mdate"></td>
          </tr>
          <tr>
            <td>Upload photo</td>
            <td>:</td>
            <td><input required="required" type="file" name="userfile"  class="filestyle" data-icon="false"></td>
          </tr>
          <tr>
            <td>Address</td>
            <td>:</td>
            <td><textarea required="required" name="address" style="width: 327px;"  rows="5"></textarea></td>
          </tr>
          
          <tr>
            <td>Country Living </td>
            <td>:</td>
            <td><select  name="country" class="selectpicker">
             <option value="0">Select Country</option>
                 <?php foreach($country as $cnt){?>
                 <option value="<?php echo $cnt->nicename;?>"><?php echo $cnt->nicename;?></option>
                 <?php } ?>
                </select></td>
          </tr>
          
          <tr>
            <td>Country Code</td>
            <td>:</td>
            <td><select name="ccode" class="selectpicker">
                  <option value="0">Select Country Code</option>
                  <?php foreach($country as $cnt){?>
                 <option value="<?php echo $cnt->phonecode;?>"><?php $cnt->iso3;?> +<?php echo $cnt->phonecode;?></option>
                 <?php } ?>
                </select></td>
          </tr>
          <tr>
            <td>Telephone</td>
            <td>:</td>
            <td><input required="required" type="text" id="inputEmail" name="mobile"></td>
          </tr>
          <tr>
            <td>Success Story</td>
            <td>:</td>
            <td><textarea required="required" style="width: 327px;"  name="sstory" rows="5"></textarea></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td ><input type="submit" value="Submit" class="btn1 btn-large" name="submit" /></td>
          </tr>
        </table>
        
      </div>
    </form>
    <div class="span4 adreg" style="background-color:#FFF; padding-top:0px;">
      <div class="matches">
        <div class="span12" style="background-color:#FFF;  margin-top: 0px; overflow:hidden;"> <img src="<?php echo base_url()?>/file/add/individual page2.jpg"> </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>
<script src="http://code.jquery.com/jquery.js"></script>
</body></html>