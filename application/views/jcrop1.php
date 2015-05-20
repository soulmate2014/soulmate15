<?php $this->load->view('header'); ?>
  <script src="<?php echo base_url();?>file/js/jquery.Jcrop.js"></script>
<script src="<?php echo base_url();?>file/js/jquery.min.map"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>file/css/jquery.Jcrop.css" type="text/css" />

        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
        
    <script type="text/javascript">
        $(function(){
            $('#cropbox').Jcrop({
                aspectRatio: 1,
                setSelect: [0,0,<?php echo $targ_w.','.$targ_w;?>],
                onSelect: updateCoords,
                onChange: updateCoords
            });
        });
 
        function updateCoords(c)
        {
            showPreview(c);
            $("#x").val(c.x);
            $("#y").val(c.y);
            $("#w").val(c.w);
            $("#h").val(c.h);
        }
 
        function showPreview(coords)
        {
            var rx = <?php echo $targ_w;?> / coords.w;
            var ry = <?php echo $targ_h;?> / coords.h;
 
            $("#preview img").css({
                width: Math.round(rx*<?php echo $orig_w;?>)+'px',
                height: Math.round(ry*<?php echo $orig_h;?>)+'px',
                marginLeft:'-'+  Math.round(rx*coords.x)+'px',
                marginTop: '-'+ Math.round(ry*coords.y)+'px'
            });
        }
    </script>
    <style type="text/css">
        #preview
        {
            width: <?php echo $targ_w?>px;
            height: <?php echo $targ_h?>px;
            overflow:hidden;
        }
		img {
 
  max-width:none;

}
    </style>
    </head>
 
    <body>
    <div class="row-fluid content" style="margin-bottom:30px;">
  <div class="container">
 <div class="span12">
 <div class="span3"></div>
 <div class="span8">
        <h3>Crop Your Photo</h3>
        <table>
            <tr>
                <td style="border:6px #666 solid; border-radius:5px;">
           <span>
                    <img src="<?php echo base_url() . 'files/' . $path ?>"   id="cropbox" alt="cropbox" />
           </span>
 
 
                </td>
                <td valign="top">
                   
                    <div id="preview" style="border:6px #666 solid; border-radius:5px; margin-left:20px;" >
                        <img src="<?php echo base_url() . 'files/' . $path ?>" alt="thumb" />
                    </div>
                    <div style="margin-top:100px;margin-left:20px;">
                    <form action="<?php echo site_url() . '/gallery1/crop' ?>" method="post">
            <p>
                <input type="hidden" style="color:#000;" id="file_name" name="file_name" value="<?php echo $path?>" />
                <input type="hidden" style="color:#000;" id="x" name="x" />
                <input type="hidden" style="color:#000;" id="y" name="y" />
                <input type="hidden" style="color:#000;" id="w" name="w" />
                <input type="hidden" style="color:#000;" id="h" name="h" />
                <input type="submit" id="submit" class="btn" style="border-radius:5px; height:40px;" name="submit" value="Crop Image" />
            </p>
        </form></div>
                </td>
            </tr>
        </table>
 
        
        </div>
        </div>
        </div>
        </div>
        
         <div class="row-fluid footer">
           <div class="container">
    <div class="span6 footer_manu feutured1">
     <?php if($this->session->userdata('logged_in'))
 {
	 ?>
           <a href="<?php echo base_url();?>index.php/myhome">HOME</a> / 
         
            <a href="<?php echo base_url();?>index.php/myaccount">MY ACCOUNT</a> /
             <a href="<?php echo base_url();?>index.php/searching">SEARCH</a>  / 
           
            <?php } else { ?>
            
             <a href="<?php echo base_url();?>">HOME</a> /
               <a href="<?php echo base_url(); ?>index.php/staticcontent/about">ABOUTUS</a> /
             <a href="<?php echo base_url();?>index.php/home/register">REGISTER</a> /
            
              <?php } ?>
             <a href="<?php echo base_url();?>index.php/payment">UP GRADE</a> / 
             <a href="#">CONTACT US</a> / 
             <a href="#">HELP</a>
             </div>
             <div class="span3"></div>
             <div class="span3 feutured1"> <div class="span4"><label class="control-label" for="inputEmail" style="padding-top:10px;">FOLLOW US </label></div>
                               <ul> <li><a href="#"><img src="<?php echo base_url();?>file/img/images/facebook_25.jpg"></a></li>
                                <li><a href="#"><img src="<?php echo base_url();?>file/img/images/twitter_25.jpg"></a></li>
                                <li><a href="#"><img src="<?php echo base_url();?>file/img/images/google_25.jpg"></a></li> </ul>
                              
                            </div>
             </div>
             </div>

   
        
           
</body>
</html>