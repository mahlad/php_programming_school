<html>
<body>
<?php 

		if(isset($_GET['task']))
		{
			$c_id=$_GET['id'];
			include './config.php';
			$query="select * from 3_contact where id=$c_id";
			$result=mysql_db_query($db_name,$query,$link);
			$row=mysql_fetch_array($result);
			$c_name=$row['c_name'];
			$c_phon=$row['c_phon'];
			//$data.="document.contacts.contact.value='".$c_name."'";
			//$data.="document.contacts.phon.value='".$c_phon."'";
			if($_GET['task']=='delete')
				{
					$query1="delete from 3_contact where id=$c_id";
					if(mysql_db_query($db_name,$query1,$link)) echo'delete contact ok';
					else die(mysql_error());
				}else
			if (isset($_POST['submit'])&($_GET['task']=='edit'))
			{
				$name=$_POST['contact'];
				$phon=$_POST['phon'];
				if($_GET['task']=='edit')
				{
				
					$query="update 3_contact set c_name='$name', c_phon='$phon' where id=$c_id";
					if(mysql_db_query($db_name,$query,$link)) echo'edit contact ok';
					else die(mysql_error());
				}
			}else
			
			{
		  
			echo'<form action="" method="post" name="contacts">';
			echo'Contact:<input type="text" name="contact" size="20" value='.$c_name.'><br>';
			echo'Phone:<input type="text" name="phon" size="20" value='.$c_phon.'><br>';
			echo'<input type="submit" name="submit" value="submit">';
			echo'</form>';
			}
		}
		//if(!empty($data))
		//echo $data;
?>
</body>
</html>
