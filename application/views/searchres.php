<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<table>
	<?php if($query==NULL)
			{
	?>
	<tr>
    	<td>No Result Is Found</td>
    </tr>
	<?php 	} 
			else
			{
	?>
	<tr>
    	<th>ID</th>
        <th>Book</th>
        <th>Author</th>
        <th>Published</th>
        <th>User_id</th>
    </tr>
	<?php foreach($query as $item):?>
	<tr>
		<td><?php echo $item->uid ?></td>
		<td><?php echo $item->name ?></td>
		<td><?php echo $item->profile_for ?></td>
		<td><?php echo $item->gender ?></td>
		<td><?php echo $item->user_id ?></td>
		</tr>
	<?php endforeach; }?>
</table>
</body>
</html>