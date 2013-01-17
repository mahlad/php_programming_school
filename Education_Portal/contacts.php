<html>
<body>
<?php 

	if (isset($_POST['submit']))
	{
		$c_name=$_POST['contact'];
		$c_phon=$_POST['phon'];
		$id=$_GET['id'];
		include "./config.php";
		$query_contact="insert into 3_contact (c_name,c_phon,u_id) values('$c_name','$c_phon','$id')";
		if(mysql_query($query_contact,$link))
		{
			echo' Recorded the contact successfuly';
		}
		else
		{
			die (mysql_error());
		}
	}
	else
	{
		include "./c_form.php";
	}

?>
	
</body>
</html>