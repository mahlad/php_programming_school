<?php
include 'header.php';

if(isset($_POST['Register']))
{
	$fname=$_POST['firstname'];	
	$lname=$_POST['lastname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$jobTitle=$_POST['jobTitle'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$adress=$_POST['adress'];
	include'config.php';
	$QI_user=mysql_query("INSERT INTO users (FirstName,LastName,Username,Password,JobTitle,Phone,Email,Address) VALUES ('$fname','$lname','$username','$password','$jobTitle','$phone','$email','$adress')");
	
		if($QI_user)
		{
			
			$QS_user=mysql_query("SELECT UserID FROM users WHERE FirstName='".$fname."' AND LastName='".$lname."'");
			$ar_QS_user=mysql_fetch_array($QS_user);
			session_start();
			$_SESSION['user_id']=$ar_QS_user['UserID'];
			echo $_SESSION['user_id'];
			echo 'yes';
		 }
	else
	{
		die(mysql_error());
		//$_SESSION['login']='none';
	}
	
}
	
echo '<form action="#" method="post">';
	echo '<table border="1" dir="rtl">';
		echo '<caption style="color:#666666;margin:0;">فرم عضویت</caption>';
		echo '<tr>';
			echo '<td>نام:</td>';
			echo '<td><input type="text" name="firstname" size="20"/><br/></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>نام خانوادگی:</td>';
			echo '<td><input type="text" name="lastname" size="20"/><br/></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>نام کاربری :</td>';
			echo '<td><input type="text" name="username" size="20" /></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>پسورد :</td>';
			echo '<td><input type="password" name="password" size="20" /></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>عنوان شغلی:</td>';
			echo '<td><input type="text" name="jobTitle" size="20"/><br/></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>تلفن:</td>';
			echo '<td><input type="text" name="phone" size="20"/><br/></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>ایمیل :</td>';
			echo '<td><input type="text" name="email" size="15"</td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>آدرس :</td>';
			echo '<td><textarea name="adress" rows="10" cols="15"></textarea></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td><input type="submit" name="Register" value="ثبت نام" /></td>';
		echo '</tr>';
	echo '</table>';
echo '</form>';
  ?>
