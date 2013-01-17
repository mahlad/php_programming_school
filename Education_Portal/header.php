<?php 
session_start();
include 'head.php';
 ?>
<nav>
	<ul class="menu">
		<li><a href="./">صفحه اصلی</a></li>
		
		<?php 
		if(isset($_SESSION['user_id'])){
			echo "<li><a href='user_profile.php'>پروفایل کاربر</a></li>";
			echo "<li><a href='logout.php'>خروج</a></li>";
		}else
			echo "<li><a href='register.php'>ثبت نام</a></li>";
		 ?>
		
	</ul>
</nav>