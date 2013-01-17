<?php
include 'header.php';
if(isset($_SESSION['user_id']))
	echo 'خوش آمدید'.$_SESSION['user_id'];
	//echo $_SESSION['user_id'];
	else 
		include 'login.php';
//session_destroy();

 ?>
