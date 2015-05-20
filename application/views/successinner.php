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
  <?php foreach($story as $str){}?>
  <div class="container">
    <div class="span12">
      <h2 class="head" style="font-size:26px; margin-bottom: 5px;  padding-left: 0px; width:500px; text-transform:uppercase;"><?php echo $str->bname;?>& <?php echo $str->game;?> | <span style="font-size:18px;"><?php echo $str->user_id;?></span></h2>
      <div class="span6" style="margin-left:0px; text-transform:uppercase; margin-bottom:20px;">PLACE : <?php echo $str->country;?>  /   MARRIAGE DATE : <?php echo $str->mdate;?></div>
    </div>
    <form  method="post" enctype="multipart/form-data">
      <div class="span8 abtreg" style="color:#FFF; background-color:#FFF; padding-left:0px; padding-top:0px;">

        <div class="span5" style="background-color:#42b8b6;">
          <div class="span12"><img src="<?php echo base_url()?>success_story/<?php echo $str->userfile;?>" width="100%" /></div>
          
          
        </div>
        <div class="span6" style="color:#000; text-align:justify;">We're so happy to inform you that we found a good partner for our son. The search features helped in getting the perfect daughter in law for us. Thanks Soulmate Matrimony</div>
       
        
        
        
        
        
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