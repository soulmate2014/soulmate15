<html>
    <head>
        <title>Insert Data Into Database Using CodeIgniter Form</title>
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter/css/styles.css"/>
            </head>
            <style>
            #container {
width:960px;
height:610px;
margin:50px auto
}
.error {
color:red;
font-size:13px;
margin-bottom:-1px
}
form {
width:345px;
padding:0 50px 20px;
background:linear-gradient(#fff,#FF94BB);
border:1px solid #ccc;
box-shadow:0 0 5px;
font-family:'Marcellus',serif;
float:left;
margin-top:10px
}
h1 {
text-align:center;
font-size:28px
}
hr {
border:0;
border-bottom:1.5px solid #ccc;
margin-top:-10px;
margin-bottom:30px
}
label {
font-size:17px
}
input {
width:100%;
padding:10px;
margin:6px 0 20px;
border:none;
box-shadow:0 0 5px
}
input#submit {
margin-top:20px;
font-size:18px;
background:linear-gradient(#22abe9 5%,#36caf0 100%);
border:1px solid #0F799E;
color:#fff;
font-weight:700;
cursor:pointer;
text-shadow:0 1px 0 #13506D
}
input#submit:hover {
background:linear-gradient(#36caf0 5%,#22abe9 100%)
}</style>

<body>
<div id="container">

<?php echo form_open('insert_ctrl'); ?>
<h1>Insert Data Into Database Using CodeIgniter</h1>

	<label for="title">Student<?php echo form_error('dname'); ?></label>
	<input type="dname" name="dname" />
<label for="title">Email<?php echo form_error('demail'); ?></label>
	<input type="demail" name="demail" />
    <label for="title">Mobile<?php echo form_error('dmobile'); ?></label>
	<input type="dmobile" name="dmobile" />
    <label for="title">Address<?php echo form_error('daddress'); ?></label>
	<input type="daddress" name="daddress" />
    
	

	<input type="submit" name="submit" value="Submit" />
<div class="error">Data Submitted Success Fully.</div>
</form>

</div>
</body>
</html>