<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="search">
	<fieldset>
		<legend>Search</legend>
		<form name="search" action="<?php base_url(); ?>index.php/parent/index/" method='post'>
		<table>
			<tr>
				<td>Clientname</td>
				<td>Group</td>					
				<td>Remarks</td>
			</tr>
			<tr>
				<td><input name="clientname" type='text' value='<?php echo $clientname; ?>'></td>					
				<td><input name="group" type='text' value='<?php echo $group; ?>'></td>					
				<td><input name="remarks" type='text' value='<?php echo $remarks; ?>'></td>
				<td><input type='submit' name='search' value='Search'></td>
			</tr>
		</table>
		</form>
	</fieldset>
</div>
<div class="content">
	<h3>Parent Details</h3>
	<br />				
	<div class="data"><?php echo $table; ?></div>
	<div class="paging"><?php echo $pagination; ?></div>
</div>
</body>
</html>