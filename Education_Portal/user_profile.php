<?php
include 'header.php';
include'config.php';
$user_id=$_SESSION['user_id'];
if(isset($_POST['edit']))
{
	$fname=$_POST['firstname'];	
	$lname=$_POST['lastname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$jobTitle=$_POST['jobTitle'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$adress=$_POST['adress'];
	
	$QU_user=mysql_query("UPDATE users SET FirstName='$fname',LastName='$lname',Username='$username',Password='$password',JobTitle='$jobTitle',Phone='$phone',Email='$email',Address='$adress' WHERE UserID='$user_id'");
	
		if($QU_user)
		{
			echo 'اطلاعات با موفقیت ویرایش شد';
		 }
	else
	{
		die(mysql_error());
		//$_SESSION['login']='none';
	}
	
}else{
	echo $user_id;
	$QS_user_info=mysql_query("SELECT * FROM users WHERE UserID='$user_id'");
	while ($ar_QS_user_info=mysql_fetch_array($QS_user_info)) {
		$fname=$ar_QS_user_info['FirstName'];
		$lname=$ar_QS_user_info['LastName'];
		$username=$ar_QS_user_info['Username'];
		$password=$ar_QS_user_info['Password'];
		$jobTitle=$ar_QS_user_info['JobTitle'];
		$phone=$ar_QS_user_info['Phone'];
		$email=$ar_QS_user_info['Email'];
		$adress=$ar_QS_user_info['Address'];
	}
	
}
	
echo '<form action="#" method="post">';
	echo '<table border="1" dir="rtl">';
		echo '<caption style="color:#666666;margin:0;">فرم عضویت</caption>';
		echo '<tr>';
			echo '<td>نام:</td>';
			echo '<td><input type="text" name="firstname" size="20" value="'.$fname.'"/><br/></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>نام خانوادگی:</td>';
			echo '<td><input type="text" name="lastname" size="20" value="'.$lname.'"/><br/></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>نام کاربری :</td>';
			echo '<td><input type="text" name="username" size="20" value="'.$username.'"/></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>پسورد :</td>';
			echo '<td><input type="password" name="password" size="20" value="'.$password.'"/></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>عنوان شغلی:</td>';
			echo '<td><input type="text" name="jobTitle" size="20" value="'.$jobTitle.'"/><br/></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>تلفن:</td>';
			echo '<td><input type="text" name="phone" size="20" value="'.$phone.'"/><br/></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>ایمیل :</td>';
			echo '<td><input type="text" name="email" size="15" value="'.$email.'"/></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>آدرس :</td>';
			echo '<td><textarea name="adress" rows="10" cols="15">'.$adress.'</textarea></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td><input type="submit" name="edit" value="ویرایش" /></td>';
		echo '</tr>';
	echo '</table>';
echo '</form>';
  ?>
