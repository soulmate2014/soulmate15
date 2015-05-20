<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script  type="text/javascript">
jQuery(document).ready(function(){
jQuery('#buton').click(function(){
jQuery.ajax({
url: "<?php echo site_url('api/ajaxcall'); ?>",
type: 'POST',
data:{ id : 5 },
dataType: "json",
success: function(data){
var val = "<select name=\'user\'>"+"<option>Select from below</option>"+
"<option>"+data.id+"</option>"
"<option>"+data.name+"</option>"
"<option>"+data.age+"</option>"
"<option>"+data.sex+"</option>"
"</select>";
jQuery('#ans').html(val);
},
error: function(data){
alert(data);
}
});
return false;
});

});
</script>

<center>
<button id=”buton” >Click And Get Ajax Value</button>
<p id="ans"></p>
</center>

Now look how you can response according to the ajax request.This Code should be Paste on CodeIgniter Controller :

