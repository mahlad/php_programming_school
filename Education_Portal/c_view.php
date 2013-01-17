<html>
<body>
<?php 

	include "./config.php";
	$id=$_GET['id'];
	$query_contact="select * from 3_contact where u_id=$id";
	$result=mysql_db_query($db_name,$query_contact,$link) or die(mysql_error());
	echo'<table border=1 cellspacing=10 cellpadding=10 align=center>';
	echo'<tr>';
		echo'<td>contact</td>';
		echo'<td>phone</td>';
		echo'<td>Edit</td>';
		echo'<td>Delete</td>';
	echo'</tr>';
	while($araay=mysql_fetch_array($result) or die(mysql_error()))
	{
		echo'<tr>';
		echo'<td>'.$araay['c_name'].'</td>';
		echo'<td>'.$araay['c_phon'].'</td>';
		echo'<td><a href="c_form.php?task=edit&id='.$araay['id'].'">edit</a></td>';
		echo'<td><a href="c_form.php?task=delete&id='.$araay['id'].'">delete</a></td>';
		echo'</tr>';
	}
	echo'</table>';

			
?>
</body>
</html>
