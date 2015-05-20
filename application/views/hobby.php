<?php $this->load->view("header"); ?>
<link href="<?php echo base_url();?>file/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/styleh.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/baseh.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>file/css/style1.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url();?>file/css/elements.css" rel="stylesheet">
<script src="<?php echo base_url();?>file/js/my_js.js"></script>

<script src="<?php echo base_url();?>file/js/bootstrap.js"></script>
<style>
hr {
    height:1px;
    border:none;
    background-color:rgb(220,220,220)
}

.answer {
    display:none;
}


#wrapper #main .containerr #faq-list h2 .close1
{
	float:left;
	
}
.span12 h2 {
color: #991248;
font-family: 'Open Sans', sans-serif;
margin-bottom: 0px;
margin-top: 0px; 
}
h2 {
    line-height:24px;
    font-size:18px;
    font-weight:700;
    color:rgb(100,150,200);
    padding-left:24px;
    cursor:pointer;
	margin-left:15px;
    background-image:url('<?php echo base_url(); ?>file/img/12_06.png');
    background-position:left;

    background-repeat:no-repeat;
	clear: both;
}

 h2.close1 {
	 margin-left:15px;
    background-image:url('<?php echo base_url(); ?>file/img/1_03.png');
}

</style>
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/baseh.css" />
    <link rel="stylesheet" href="css/styleh.css" />

    
    <script>
        $(document).ready(function() {
            $('#faq-list h2').click(function() {
                
                $(this).next('.answer').slideToggle(500);
                $(this).toggleClass('close1');
                
            });
        }); // end ready
    </script>

<div class="row-fluid content">
	<div class="container">
            <div class="span12 hobby" style="border:2px solid #cfcece; border-radius:2px;">
            <a href="<?php echo site_url("myhome/index/procedtohome") ?>" id="popup" >
  <p>Skip to home>>>></p>
  </a>
            	<h1 style="color:#656565;">Share your personal details</h1>
                <h3 style="font-size: 21px;">Find a soulmate based on hobbies & interests</h3>
                
                
                	<div class="span1 hobby3" ></div>
                    
                    
                    
 
                    <div class="span8 hobby1" >
  
  
  <form action="<?php echo base_url();?>index.php/hobby/insert_hobby" method="post" name="form">                
 <div id="wrapper">
	<div id="main">
    	<div class="containerr">
        
        
        

            
           
            <section id="faq-list">
                
                <h2>Hobbies</h2>
                
                <div class="answer"> 
                      
        <table>
        
                <tr>
                	<td width="10%">
                    <input type="hidden" name="user_id" value="<?php echo $user_id ?>"><input name="hobby[]" value="acting" class="check " type="checkbox" style="margin-right:10px;">Acting</td><td width="1%">&nbsp;</td>
                	<td width="4%"><input class="check " name="hobby[]" value="numerology" type="checkbox" style="margin-right:10px;">Numerology</td><td width="1%">&nbsp;</td>
                	<td width="4%"><input class="check " type="checkbox"  name="hobby[]" value="art"style="margin-right:10px;">Art / handicraft</td><td width="1%">&nbsp;</td>
                    
                    
                </tr>  
                <tr>
                	<td ><input class="check " name="hobby[]" value="coollectbles" type="checkbox" style="margin-right:10px;">Collectibles</td><td width="1%">&nbsp;</td>
                	<td ><input class="check " name="hobby[]" value="photography" type="checkbox" style="margin-right:10px;">Photography</td><td width="1%">&nbsp;</td>
                	<td ><input class="check " name="hobby[]" value="dancing" type="checkbox" style="margin-right:10px;">Dancing</td><td width="1%">&nbsp;</td>
                    
                
                </tr>     
      		    <tr>
                	<td><input name="hobby[]" value="film making" class="check " type="checkbox" style="margin-right:10px;">Film making</td><td width="1%">&nbsp;</td>
                	<td><input class="check " name="hobby[]" value="astrology" type="checkbox" style="margin-right:10px;">Astrology</td><td width="1%">&nbsp;</td>
                	<td><input class="check "  name="hobby[]" value="graphology"type="checkbox" style="margin-right:10px;">Graphology</td><td width="1%">&nbsp;</td>
                </tr>   
                <tr>
                	<td><input  name="hobby[]" value="nature"class="check " type="checkbox" style="margin-right:10px;">Nature </td><td width="1%">&nbsp;</td>
                	<td><input name="hobby[]" value="crosswords" class="check " type="checkbox" style="margin-right:10px;">Crosswords</td><td width="1%">&nbsp;</td>
                	<td><input  name="hobby[]" value="palmistry" class="check " type="checkbox" style="margin-right:10px;">Palmistry</td>          <td width="1%">&nbsp;</td>      
                </tr> 
                <tr>
                	<td><input name="hobby[]" value="pets" class="check " type="checkbox" style="margin-right:10px;">Pets </td><td width="1%">&nbsp;</td>
                	<td><input name="hobby[]" value="astronomy" class="check " type="checkbox" style="margin-right:10px;">Astronomy</td><td width="1%">&nbsp;</td>
                	               
                </tr> 
                <tr>
                
                <td><input name="intrest[]" value="playing music" class="check " type="checkbox" style="margin-right:10px;">Playing musical instruments</td><td width="1%">&nbsp;</td>
                	<td><input class="check" name="hobby[]" value="puzzles" type="checkbox" style="margin-right:10px;">Puzzles</td><td width="1%">&nbsp;</td>
                   
                
                </tr>
                <tr>
                
           <td width="10%"><input name="hobby[]" value="cooking" class="check " type="checkbox" style="margin-right:10px;">Cooking</td><td width="1%">&nbsp;</td>
                
                	<td><input class="check " name="hobby[]" value="gardening/landscaping" type="checkbox" style="margin-right:10px;">Gardening/Landscaping</td><td width="1%">&nbsp;</td>
                	     
                
                </tr>
                <tr>
                
               	<td ><input class="check " value="fishing" name="hobby[]" type="checkbox" style="margin-right:10px;">Fishing</td><td width="1%">&nbsp;</td>
                	<td><input class="check " name="hobby[]" value="painting" type="checkbox" style="margin-right:10px;">Painting</td><td width="1%">&nbsp;</td>
                	    
                
                </tr> 
   
         </table>           
    <div class="span12 hobby2">            
                    		
  		</div>               
                   
    <div class="span12"> </div>                   
               
                  
                   
                </div>
       <p></p>      
            
                <h2>Interests</h2>
                <div class="answer"> 
                      
        <table>
        
                <tr>
                	<td width="8%"><input name="intrest[]" value="painting" class="check " type="checkbox" style="margin-right:10px;">Painting</td><td width="1%">&nbsp;</td>
                	<td width="10%"><input name="intrest[]" value="puzzles" class="check " type="checkbox" style="margin-right:10px;">Puzzles</td><td width="1%">&nbsp;</td>
                	<td width="4%"><input name="intrest[]" value="gardening/Landscaping" class="check " type="checkbox" style="margin-right:10px;">Gardening/Landscaping</td><td width="1%">&nbsp;</td>
                    <td width="17%"><input name="intrest[]" value="learning new languages" class="check " type="checkbox" style="margin-right:10px;">Learning new languages</td>
                    
                </tr>  
                <tr>
                	<td ><input name="intrest[]" value="internet" class="check " type="checkbox" style="margin-right:10px;">Internet</td><td width="1%">&nbsp;</td>
                	<td ><input name="intrest[]" value="fishing" class="check " type="checkbox" style="margin-right:10px;">Fishing</td><td width="1%">&nbsp;</td>
                	<td ><input name="intrest[]"  value="adventure sports"class="check " type="checkbox" style="margin-right:10px;">Adventure sports</td><td width="1%">&nbsp;</td>
                    <td ><input name="intrest[]" value="playing music" class="check " type="checkbox" style="margin-right:10px;">Playing musical instruments</td>
                
                </tr>     
      		    <tr>
                	<td><input name="intrest[]" value="politics" class="check " type="checkbox" style="margin-right:10px;">Politics</td><td width="1%">&nbsp;</td>
                	<td><input name="intrest[]" value="numerology" class="check " type="checkbox" style="margin-right:10px;">Numerology</td><td width="1%">&nbsp;</td>
                	<td><input name="intrest[]" value="art/handicraft" class="check " type="checkbox" style="margin-right:10px;">Art / handicraft</td><td width="1%">&nbsp;</td>
                </tr>   
                <tr>
                	<td><input name="intrest[]" value="television"  class="check " type="checkbox" style="margin-right:10px;">Television </td><td width="1%">&nbsp;</td>
                	<td><input name="intrest[]" value="photogrphy" class="check " type="checkbox" style="margin-right:10px;">Photography</td><td width="1%">&nbsp;</td>
                	<td><input name="intrest[]" value="dancing" class="check " type="checkbox" style="margin-right:10px;">Dancing</td>          <td width="1%">&nbsp;</td>      
                </tr> 
                <tr>
                	<td><input name="intrest[]" value="yoga" class="check " type="checkbox" style="margin-right:10px;">Yoga </td><td width="1%">&nbsp;</td>
                	<td><input name="intrest[]"vvalue="astrology" class="check " type="checkbox" style="margin-right:10px;">Astrology</td><td width="1%">&nbsp;</td>
                	<td><input name="intrest[]" value="graphology" class="check " type="checkbox" style="margin-right:10px;">Graphology</td>                
                </tr> 
                <tr>
                
                <td><input name="intrest[]" value="book club" class="check " type="checkbox" style="margin-right:10px;">Book clubs </td><td width="1%">&nbsp;</td>
                	<td><input name="intrest[]"  value="crosswords" class="check " type="checkbox" style="margin-right:10px;">Crosswords</td><td width="1%">&nbsp;</td>
                	<td><input name="intrest[]" value="palmistry" class="check " type="checkbox" style="margin-right:10px;">Palmistry</td>       
                
                </tr> 
   
         </table>           
    <div class="span12 hobby2">            
                    		
  		</div>               
                   
    <div class="span12"> </div>                   
               
                  
                   
                </div>
  <p></p>            
            
            
            
            
            
                         
                           <h2>Favourite reads</h2>
                <div class="answer"> 
                      
        <table>
        
                <tr>
                	<td width="15%"><input value="Actualy a book worm" name="fav_reads[]" class="check " type="checkbox" style="margin-right:10px;">Actualy a book worm</td><td width="1%">&nbsp;</td>
                	<td width="15%"><input value="Fantasy" name="fav_reads[]" class="check " type="checkbox" style="margin-right:10px;">Fantasy</td><td width="1%">&nbsp;</td>
                	<td width="15%"><input value="Philosophy / Spiritual" name="fav_reads[]" class="check " type="checkbox" style="margin-right:10px;">Philosophy / Spiritual</td>
                    <td width="1%">&nbsp;</td>
                    <td width="1%">&nbsp;</td>
                    
                </tr>  
                <tr>
                	<td ><input name="fav_reads[]" value="Comics" class="check " type="checkbox" style="margin-right:10px;">Comics</td><td width="1%">&nbsp;</td>
                	<td ><input name="fav_reads[]" value="Magazines" class="check " type="checkbox" style="margin-right:10px;">Magazines / Newspapers</td><td width="1%">&nbsp;</td>
                	<td ><input name="fav_reads[]" value="Self - Help" class="check " type="checkbox" style="margin-right:10px;">Self - Help</td><td width="1%">&nbsp;</td>
                    <td ></td>
                
                </tr>     
      		    <tr>
                	<td><input name="fav_reads[]" value="Literature" class="check " type="checkbox" style="margin-right:10px;">Literature</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_reads[]" value="Science fiction" class="check " type="checkbox" style="margin-right:10px;">Science fiction</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_reads[]" value="Classics" class="check " type="checkbox" style="margin-right:10px;">Classics</td><td width="1%">&nbsp;</td>
                </tr>   
                <tr>
                	<td><input name="fav_reads[]" value="Romance" class="check " type="checkbox" style="margin-right:10px;">Romance </td><td width="1%">&nbsp;</td>
                	<td><input name="fav_reads[]" value="Thriller / Suspense" class="check " type="checkbox" style="margin-right:10px;">Thriller / Suspense</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_reads[]" value="Humor" class="check " type="checkbox" style="margin-right:10px;">Humor</td>          <td width="1%">&nbsp;</td>      
                </tr> 
                <tr>
                	<td><input name="fav_reads[]" value="Stay away from books" class="check " type="checkbox" style="margin-right:10px;">Stay away from books </td>
                    <td width="1%">&nbsp;</td>
                	<td><input name="fav_reads[]" value="Buisness / occupational" class="check " type="checkbox" style="margin-right:10px;">Buisness / occupational</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_reads[]" value="Poetry" class="check " type="checkbox" style="margin-right:10px;">Poetry</td>                
                </tr> 
                <tr>
                
                <td><input name="fav_reads[]"  value="Biographies"class="check " type="checkbox" style="margin-right:10px;">Biographies</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_reads[]" value="History" class="check " type="checkbox" style="margin-right:10px;">History</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_reads[]" value="Short storys" class="check " type="checkbox" style="margin-right:10px;">Short storys</td>       
                
                </tr> 
   
         </table>           
    <div class="span12 hobby2">            
                    		
  		</div>               
                   
    <div class="span12"> </div>                   
               
                  
                   
                </div>
  <p></p>            
            

                            <h2>Favourite music</h2>
                <div class="answer"> 
                      
        <table>
        
                <tr>
                	<td width="3%"><input value="Blues" name="fav_musics[]" class="check " type="checkbox" style="margin-right:10px;">Blues</td><td width="1%">&nbsp;</td>
                	<td width="7%"><input value="Devotional" name="fav_musics[]" class="check " type="checkbox" style="margin-right:10px;">Devotional</td><td width="1%">&nbsp;</td>
                	<td width="6%"><input value="Heavy metal" name="fav_musics[]" class="check " type="checkbox" style="margin-right:10px;">Heavy metal</td><td width="1%">&nbsp;</td>
                    <td width="7%"><input name="fav_musics[]" value="Pop" class="check " type="checkbox" style="margin-right:10px;">Pop</td>
                    
                </tr>  
                <tr>
                	<td ><input name="fav_musics[]" value="Ghazals" class="check " type="checkbox" style="margin-right:10px;">Ghazals</td><td width="1%">&nbsp;</td>
                	<td ><input name="fav_musics[]" value="Hip - Hop" class="check " type="checkbox" style="margin-right:10px;">Hip - Hop</td><td width="1%">&nbsp;</td>
                	<td ><input name="fav_musics[]" value="Jazz" class="check " type="checkbox" style="margin-right:10px;">Jazz</td><td width="1%">&nbsp;</td>
                    <td ><input name="fav_musics[]" value="Sulfi instruments" class="check " type="checkbox" style="margin-right:10px;">Sulfi instruments</td>
                
                </tr>     
      		    <tr>
                	<td><input name="fav_musics[]" value="Indian  classical" class="check " type="checkbox" style="margin-right:10px;">Indian  classical</td><td width="1%">&nbsp;</td>
                	<td><input  name="fav_musics[]"  value="Indipop" class="check " type="checkbox" style="margin-right:10px;">Indipop</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_musics[]" value="Reggae" class="check " type="checkbox" style="margin-right:10px;">Reggae</td><td width="1%">&nbsp;</td>
                </tr>   
                <tr>
                	<td><input name="fav_musics[]" value="Qawalis" class="check " type="checkbox" style="margin-right:10px;">Qawalis</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_musics[]" value="Rap" class="check " type="checkbox" style="margin-right:10px;">Rap</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_musics[]" value="I am not a music fan" class="check " type="checkbox" style="margin-right:10px;">Not a music fan</td>          <td width="1%">&nbsp;</td>      
                </tr> 
                <tr>
                	<td><input name="fav_musics[]" value="Techno" class="check " type="checkbox" style="margin-right:10px;">Techno </td><td width="1%">&nbsp;</td>
                	<td><input name="fav_musics[]" value="Western classical" class="check " type="checkbox" style="margin-right:10px;">Western classical</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_musics[]" value="Film songs" class="check " type="checkbox" style="margin-right:10px;">Film songs</td>                
                </tr> 
                <tr>
                
                <td><input name="fav_musics[]" value="Biographies" class="check " type="checkbox" style="margin-right:10px;">Biographies</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_musics[]" value="Disco" class="check " type="checkbox" style="margin-right:10px;">Disco</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_musics[]" value="House music" class="check " type="checkbox" style="margin-right:10px;">House music</td>       
                
                </tr> 
   
         </table>           
    <div class="span12 hobby2">            
                    		
  		</div>               
                   
    <div class="span12"> </div>                   
               
                  
                   
                </div>
  <p></p>            
            
            
            
            
            
               <h2>Prefered movies</h2>
      <div class="answer"> 
                      
        <table>
        
                <tr>
                	<td width="3%"><input name="preferd_movies[]" value="Action / Suspense" class="check " type="checkbox" style="margin-right:10px;">Action / Suspense</td><td width="1%">&nbsp;</td>
                	<td width="7%"><input name="preferd_movies[]" class="check " value="Sci-fi & fantasy" type="checkbox" style="margin-right:10px;">Sci-fi & fantasy</td><td width="1%">&nbsp;</td>
                	<td width="6%"><input name="preferd_movies[]" class="check " value="Romantic" type="checkbox" style="margin-right:10px;">Romantic</td><td width="1%">&nbsp;</td>
                    <td width="7%">&nbsp;</td>
                    
                </tr>  
                <tr>
                	<td ><input name="preferd_movies[]" value="Documenteries" class="check " type="checkbox" style="margin-right:10px;">Documenteries</td><td width="1%">&nbsp;</td>
                	<td ><input name="preferd_movies[]" value="Movie fantastic" class="check " type="checkbox" style="margin-right:10px;">Movie fantastic</td><td width="1%">&nbsp;</td>
                	<td ><input  name="preferd_movies[]" value="Non commercial / art" class="check " type="checkbox" style="margin-right:10px;">Non commercial / art</td><td width="1%">&nbsp;</td>
                    <td >&nbsp;</td>
                
                </tr>     
      		    <tr>
                	<td><input name="preferd_movies[]" value="Short films" class="check " type="checkbox" style="margin-right:10px;">Short films</td><td width="1%">&nbsp;</td>
                	<td><input name="preferd_movies[]" value="Classics" class="check " type="checkbox" style="margin-right:10px;">Classics</td><td width="1%">&nbsp;</td>
                	<td>&nbsp;</td><td width="1%">&nbsp;</td>
                </tr>   
                <tr>
                	<td><input name="preferd_movies[]" value="World cinema" class="check " type="checkbox" style="margin-right:10px;">World cinema</td><td width="1%">&nbsp;</td>
                	<td><input name="preferd_movies[]" value="Horror" class="check " type="checkbox" style="margin-right:10px;">Horror</td><td width="1%">&nbsp;</td>
                	<td>&nbsp;</td>          
                    <td width="1%">&nbsp;</td>      
                </tr> 
                <tr>
                	<td><input name="preferd_movies[]" value="Comedy" class="check " type="checkbox" style="margin-right:10px;">Comedy </td><td width="1%">&nbsp;</td>
                	<td><input name="preferd_movies[]" value="Not into movies" class="check " type="checkbox" style="margin-right:10px;">Not into movies</td><td width="1%">&nbsp;</td>
                	<td>&nbsp;</td>                
                </tr> 
                <tr>
                
                <td><input name="preferd_movies[]" value="Epics" class="check " type="checkbox" style="margin-right:10px;">Epics</td><td width="1%">&nbsp;</td>
                	<td><input  name="preferd_movies[]" value="Drama" class="check " type="checkbox" style="margin-right:10px;">Drama</td><td width="1%">&nbsp;</td>
                	<td>&nbsp;</td>       
                
                </tr> 
   
         </table>           
    <div class="span12 hobby2">            
                    		
  		</div>               
                   
    <div class="span12"> </div>                   
               
                  
                   
                </div>
  <p></p>                     
               
               
                  <h2>Sports /Fitness activities</h2>
               <div class="answer"> 
                      
        <table>
        
                <tr>
                	<td width="3%"><input value="Aerobics" name="sports[]" class="check " type="checkbox" style="margin-right:10px;">Aerobics</td><td width="1%">&nbsp;</td>
                	<td width="3%"><input value="Adventure sports" name="sports[]" class="check " type="checkbox" style="margin-right:10px;">Adventure sports</td><td width="1%">&nbsp;</td>
                	<td width="4%"><input value="Basketball" name="sports[]" class="check " type="checkbox" style="margin-right:10px;">Basketball</td><td width="1%">&nbsp;</td>
                    <td width="4%"><input name="sports[]" value="Badminton" class="check " type="checkbox" style="margin-right:10px;">Badminton</td>
                    
                </tr>  
                <tr>
                	<td ><input name="sports[]" value="Bowling" class="check " type="checkbox" style="margin-right:10px;">Bowling</td><td width="1%">&nbsp;</td>
                	<td ><input name="sports[]" value="Billards/snoker/pool" class="check " type="checkbox" style="margin-right:10px;">Billards/snoker/pool</td><td width="1%">&nbsp;</td>
                	<td ><input name="sports[]" value="Cricket" class="check " type="checkbox" style="margin-right:10px;">Cricket</td><td width="1%">&nbsp;</td>
                    <td ><input name="sports[]" value="Cycling" class="check " type="checkbox" style="margin-right:10px;">Cycling</td>
                
                </tr>     
      		    <tr>
                	<td><input name="sports[]" value="Card games" class="check " type="checkbox" style="margin-right:10px;">Card games</td><td width="1%">&nbsp;</td>
                	<td><input name="sports[]" value="Carrom" class="check " type="checkbox" style="margin-right:10px;">Carrom</td><td width="1%">&nbsp;</td>
                	<td><input name="sports[]" value="Chess" class="check " type="checkbox" style="margin-right:10px;">Chess</td><td width="1%">&nbsp;</td>
                	<td><input name="sports[]" value="Football" class="check " type="checkbox" style="margin-right:10px;">Football</td>
                </tr>   
                <tr>
                	<td><input name="sports[]" value="Golf" class="check " type="checkbox" style="margin-right:10px;">Golf</td><td width="1%">&nbsp;</td>
                	<td><input name="sports[]" value="Hockey" class="check " type="checkbox" style="margin-right:10px;">Hockey</td><td width="1%">&nbsp;</td>
                	<td><input name="sports[]" value="Jogging / walking" class="check " type="checkbox" style="margin-right:10px;">Jogging / walking</td>          <td width="1%">&nbsp;</td>      
                	<td><input name="sports[]" value="Martial arts" class="check " type="checkbox" style="margin-right:10px;">Martial arts</td>
                </tr> 
                <tr>
                	<td><input name="sports[]" value="Scrabble" class="check " type="checkbox" style="margin-right:10px;">Scrabble </td><td width="1%">&nbsp;</td>
                	<td><input name="sports[]" value="Swiming / water sports" class="check " type="checkbox" style="margin-right:10px;">Swiming / water sports</td><td width="1%">&nbsp;</td>
                	<td><input name="sports[]" value="Squash" class="check " type="checkbox" style="margin-right:10px;">Squash</td><td width="1%">&nbsp;</td>                
                	<td><input name="sports[]" value="Table- tennis" class="check " type="checkbox" style="margin-right:10px;">Table- tennis</td>
                </tr> 
                <tr>
                
                	<td><input name="sports[]" value="Tennis" class="check " type="checkbox" style="margin-right:10px;">Tennis</td><td width="1%">&nbsp;</td>
                	<td><input name="sports[]" value="Volley ball" class="check " type="checkbox" style="margin-right:10px;">Volley ball</td><td width="1%">&nbsp;</td>
                	<td><input value="Weight lifting" name="sports[]" class="check " type="checkbox" style="margin-right:10px;">Weight lifting</td> <td width="1%">&nbsp;</td>      
                	<td><input name="sports[]" value="meditation" class="check " type="checkbox" style="margin-right:10px;">Yoga / meditation</td>
                </tr> 
   
         </table>           
    <div class="span12 hobby2">            
                    	
  		</div>               
                   
    <div class="span12"> </div>                   
               
                  
                   
                </div>
  <p></p>            
            

               <h2>Favourite cuisine</h2>
      <div class="answer"> 
                      
        <table>
        
                <tr>
                	<td width="3%"><input name="fav_cousin[]" value="Arabic" class="check " type="checkbox" style="margin-right:10px;">Arabic</td><td width="1%">&nbsp;</td>
                	<td width="7%"><input name="fav_cousin[]"  class="check " value="Not a foodie" type="checkbox" style="margin-right:10px;">Not a foodie</td><td width="1%">&nbsp;</td>
                	<td width="6%"><input name="fav_cousin[]" value="Continental" class="check " type="checkbox" style="margin-right:10px;">Continental</td><td width="1%">&nbsp;</td>
                    <td width="7%">&nbsp;</td>
                    
                </tr>  
                <tr>
                	<td ><input name="fav_cousin[]" value="Gujarathi" class="check " type="checkbox" style="margin-right:10px;">Gujarathi</td><td width="1%">&nbsp;</td>
                	<td ><input name="fav_cousin[]" value="Sushi" class="check " type="checkbox" style="margin-right:10px;">Sushi</td><td width="1%">&nbsp;</td>
                	<td ><input name="fav_cousin[]" value="Mexican" class="check " type="checkbox" style="margin-right:10px;">Mexican</td><td width="1%">&nbsp;</td>
                    <td >&nbsp;</td>
                
                </tr>     
      		    <tr>
                	<td><input name="fav_cousin[]" value="Moghalai" class="check " type="checkbox" style="margin-right:10px;">Moghalai</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_cousin[]" value="Chinese" class="check " type="checkbox" style="margin-right:10px;">Chinese</td><td width="1%">&nbsp;</td>
                	<td ><input name="fav_cousin[]" value="Rajasthani" class="check " type="checkbox" style="margin-right:10px;">Rajasthani</td>
                </tr>   
                <tr>
                	<td><input name="fav_cousin[]" value="South indian" class="check " type="checkbox" style="margin-right:10px;">South indian</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_cousin[]" value="Konkan" class="check " type="checkbox" style="margin-right:10px;">Konkan</td><td width="1%">&nbsp;</td>
                	<td ><input name="fav_cousin[]" value="I am  a foodie" class="check " type="checkbox" style="margin-right:10px;">I am  a foodie</td>        
                    <td width="1%">&nbsp;</td>      
                </tr> 
                <tr>
                	<td><input name="fav_cousin[]"  value="Bengali" class="check " type="checkbox" style="margin-right:10px;">Bengali </td><td width="1%">&nbsp;</td>
                	<td><input name="fav_cousin[]" value="Punjabi" class="check " type="checkbox" style="margin-right:10px;">Punjabi</td><td width="1%">&nbsp;</td>
                	<td>&nbsp;</td>                
                </tr> 
                <tr>
                
                <td><input name="fav_cousin[]" value="Italian" class="check " type="checkbox" style="margin-right:10px;">Italian</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_cousin[]" value="Thali" class="check " type="checkbox" style="margin-right:10px;">Thali</td><td width="1%">&nbsp;</td>
                	<td>&nbsp;</td>       
                
                </tr> 
   
         </table>           
    <div class="span12 hobby2">            
                    		
  		</div>               
                   
    <div class="span12"> </div>                   
               
                  
                   
                </div>
             <p></p> 
<h2>Preffered dress style</h2>
      <div class="answer"> 
                      
        <table>
        
                <tr>
                	<td width="3%"><input value="Casual wear" name="fav_dress[]" class="check " type="checkbox" style="margin-right:10px;">Casual wear</td><td width="1%">&nbsp;</td>
                	<td width="7%"><input value="Indian / Ethnic wear"  name="fav_dress[]" class="check " type="checkbox" style="margin-right:10px;">Indian / Ethnic wear</td><td width="1%">&nbsp;</td>
                	
                    <td width="7%">&nbsp;</td>
                    
                </tr>  
                <tr>
                	<td ><input name="fav_dress[]" value="Designer wear" class="check " type="checkbox" style="margin-right:10px;">Designer wear</td><td width="1%">&nbsp;</td>
                	<td ><input name="fav_dress[]"  value="Western formal wear"class="check " type="checkbox" style="margin-right:10px;">Western formal wear</td><td width="1%">&nbsp;</td>
                	
                    <td >&nbsp;</td>
                
                </tr>     
      		       
                
   
         </table>           
    <div class="span12 hobby2">            
                    		
  		</div>               
                   
    <div class="span12"> </div>                   
               
                  
                   
                </div>
  <p></p>                     
        
        
        
        
        
        
        
        
        
        
                <h2 style="height:50px;">Spoken languages</h2>
               <div class="answer"> 
                      
        <table>
        
                <tr>
                	<td width="3%"><input name="fav_languages[]" value="Arabic" class="check " type="checkbox" style="margin-right:10px;">Arabic</td><td width="1%">&nbsp;</td>
                	<td width="3%"><input name="fav_languages[]" value="Kannada" class="check " type="checkbox" style="margin-right:10px;">Kannada</td><td width="1%">&nbsp;</td>
                	<td width="1%"><input name="fav_languages[]" value="Marathi" class="check " type="checkbox" style="margin-right:10px;">Marathi</td><td width="1%">&nbsp;</td>
                    <td width="4%"><input name="fav_languages[]"  value="Tamil"class="check " type="checkbox" style="margin-right:10px;">Tamil</td>
                    
                </tr>  
                <tr>
                	<td ><input name="fav_languages[]" value="Hindi" class="check " type="checkbox" style="margin-right:10px;">Hindi</td><td width="1%">&nbsp;</td>
                	<td ><input name="fav_languages[]" value="Malayalam" class="check " type="checkbox" style="margin-right:10px;">Malayalam</td><td width="1%">&nbsp;</td>
                	<td ><input name="fav_languages[]" value="Sindhi" class="check " type="checkbox" style="margin-right:10px;">Sindhi</td><td width="1%">&nbsp;</td>
                    
                
                </tr>     
      		    <tr>
                	<td><input name="fav_languages[]" value="Kutchi" class="check " type="checkbox" style="margin-right:10px;">Kutchi</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_languages[]" value="Punjabi" class="check " type="checkbox" style="margin-right:10px;">Punjabi</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_languages[]" value="Urdhu" class="check " type="checkbox" style="margin-right:10px;">Urdhu</td><td width="1%">&nbsp;</td>
                	
                </tr>   
                <tr>
                	<td><input name="fav_languages[]" value="Oriya" class="check " type="checkbox" style="margin-right:10px;">Oriya</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_languages[]" value="Tulu" class="check " type="checkbox" style="margin-right:10px;">Tulu</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_languages[]" value="Gujarathi" class="check " type="checkbox" style="margin-right:10px;">Gujarathi</td>          <td width="1%">&nbsp;</td>      
                	
                </tr> 
                <tr>
                	<td><input name="fav_languages[]" value="Telungu" class="check " type="checkbox" style="margin-right:10px;">Telungu </td><td width="1%">&nbsp;</td>
                	<td><input name="fav_languages[]" value="English"  class="check " type="checkbox" style="margin-right:10px;">English</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_languages[]" value="Konkani" class="check " type="checkbox" style="margin-right:10px;">Konkani</td><td width="1%">&nbsp;</td>                
                	
                </tr> 
                <tr>
                
                	<td><input name="fav_languages[]"  value="Bengali" class="check " type="checkbox" style="margin-right:10px;">Bengali</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_languages[]" value="Kashmiri" class="check " type="checkbox" style="margin-right:10px;">Kashmiri</td><td width="1%">&nbsp;</td>
                	<td><input name="fav_languages[]" value="Marwadi" class="check " type="checkbox" style="margin-right:10px;">Marwadi</td> <td width="1%">&nbsp;</td>      
                	
                </tr> 
   
         </table>           
    <div class="span12 hobby2">            
                    		
  		</div>               
                   
    <div class="span12"> </div>                   
               
                  
                   
                </div>
                <div>  &nbsp;</div>
                <p></p>
              
              
     </section>

        
    </div>
   
</div>
</div>
            
            
               <button type="submit" style="background:#42b8b6; margin-left: 42%; color:#fff;" class="btn1 btn-large hobby5">SUBMIT</button>     
              </form>     
              
                    
                    
                    
                 </div> 
            <div class="span6" style="width: 300px; margin-top: 48px; height:500px;  float:left;">
        <div class="span12"><img src="<?php echo base_url(); ?>file/img/offer/offer1.jpg" /></div>
        <div class="span12" style="margin-left:0px; margin-top:30px;"><img src="<?php echo base_url(); ?>file/img/offer/offer2.jpg" /></div>
        <div class="span12" style="margin-left:0px; margin-top:30px;"><img src="<?php echo base_url(); ?>file/img/offer/offer3.jpg" /></div>
      </div>
                
             	
            </div>
    </div>
</div>