<?php 
if(isset($_GET['submit'])){
		echo 'your information has been sent successfully</br>';
		$name=$_GET['name'];
		$sex=$_GET['sex'];
		$education=$_GET['education'];
		echo 'Your name: '.$name;
		echo '</br>Your sex: '.$sex;
		echo '</br>Your education: ' .$education;
	}
 ?>