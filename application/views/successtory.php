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
      <h2 class="head" style="  padding-left: 0px; width:500px;">SOULMATES</h2>
    </div>
    <form  method="post" enctype="multipart/form-data">
      <div class="span8 abtreg" style="color:#FFF; background-color:#FFF; padding-left:0px; padding-top:0px;">
      <?php foreach($story as $str){?>
      <?php $succesid=$str->success_id; ?>
        <div class="span4" style="background-color:#42b8b6;">
          <div class="span12"><img src="<?php echo base_url()?>success_story/<?php echo $str->userfile;?>" width="100%" /></div>
          
          <div class="span12"  style="margin-left:0px; margin-top:20px;"><div class="span12"  style="margin-left:0px; text-align:center;"><?php echo $str->user_id;?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $str->mdate;?></div>
          <div class="span12"  style="margin-left:0px; text-align:center; font-size:22px; "><?php echo $str->bname;?>& <?php echo $str->game;?></div>
          <div class="span12"  style="margin-left:40%; margin-bottom:20px;"><input type="button" onClick="window.location.href = '<?php echo site_url("succes/successinner/$succesid")?>'" value="More" class="btn1 btn-small" name="submit" /></div>
          </div>
        </div>
        <?php } ?>
        
        
        
        
        
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