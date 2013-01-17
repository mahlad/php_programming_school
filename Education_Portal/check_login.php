<?php
include 'head.php';
		if(isset($_POST['login']))
		{
			$user=$_POST['username'];	
			$pass=$_POST['password'];
			//echo 'kjhk';			
		
			include'config.php';
			$QS_login=mysql_query("SELECT * FROM users WHERE Username='".$user."'AND Password='".$pass."'");
			
			if($QS_login)
			{
				$ar_QS_login=mysql_fetch_array($QS_login);
				session_start();
				$_SESSION['user_id']=$ar_QS_login['UserID'];
				header ('location:index.php');
				echo $_SESSION['user_id']; 
				//echo 'خوش آمدید: '.$ar_QS_login['LastName'];
			}
				else echo 'اطلاعات غلط است';
				
			
		}
		else echo 'لطفا وارد شوید';
		?>