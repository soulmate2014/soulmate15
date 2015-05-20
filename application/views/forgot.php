<?php $this->load->view('profile_header');?>
<div class="row-fluid content">
	<div class="container">
    <h3>Forgot Password</h3>

<table width="200" border="0">
<tr>
    <td>User Id</td>
    <td>&nbsp;</td>
    <td><?php echo $id; ?></td>
  </tr>
  <tr>
    <td>Tocken</td>
    <td>&nbsp;</td>
    <td><?php echo $tocken; ?></td>
  </tr>

</table>


<div class="tutorialWrapper" style="color:#000;">
    <form action="<?php echo base_url();?>index.php/forgot/forgotupdate" method="post">
        <div class="fieldWrapper">
            <label for="pass1" style="width:150px;color:#000;">New Password:</label>
            <input type="hidden" name="uid" value="<?php echo $id; ?>" >
            <input type="hidden" name="tocken" value="<?php echo $tocken; ?>">
            <input type="password" name="password" id="pass1" style=" color:#000;border:solid 2px #600;">
        </div>
        <div class="fieldWrapper">
            <label for="pass2" style="width:150px; color:#000;">Confirm Password:</label>
            <input type="password" name="password2" id="pass2" onkeyup="checkPass(); return false;" style="border:solid 2px #600; color:#000;">
            <span id="confirmMessage" class="confirmMessage"></span>
        </div>
        <div class="fieldWrapper">
            <label for="pass2"></label>
            <input type="submit" name="submit" class="btn">
        </div>
    </form>
</div>
</div>
</div>
<script>
function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
</script>