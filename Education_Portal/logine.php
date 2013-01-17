<html>
<body>
<?php 
	if (isset($_POST['submit']))
	{
		$n_user=$_POST['username'];
		$p_user=$_POST['password'];
		
		include "./config.php";
		if (($n_user==$aray_user['username'])&($p_user==$aray_user['password']))
		{
			$id=$aray_user['id'];
			echo 'user_id='.$id;
			echo '<h3>Welcom'.$n_user.'</h3>';
			echo'<a href="contacts.php?task=record&id='.$id.'">record contact</a><br>';
			echo'<a href="c_view.php?task=view&id='.$id.'">view contact</a>';
		}
		else
		{
			echo'your information is incorect';
		}
		
	}
	else
	{
		
		echo'<form action="" method="post" align="center">';
		echo'username:<input type="text" name="username" size="20"><br>';
		echo'password:<input type="password" name="password" value="password"><br>';
		echo'<input type="submit" name="submit" value="send">';
		echo'</form>';
	}
?>
	
</body>
</html>