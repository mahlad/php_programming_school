<?php 
	if(isset($_POST['submit'])){
		echo 'your information has been sent successfully';
		$name=$_POST['name'];
		$sex=$_POST['sex'];
		$education=$_POST['education'];
		if($sex=='male'){
			$male_status='checked';
			$female_status='';
		} 
		if($sex=='female'){
			$female_status='checked';
			$male_status='';
		}
	}else{
		$name='';
		$sex='';
		$education='';
		$male_status='';
		$female_status='';
	}
	echo $name;
		echo '<table border="1">';
		echo '<form action="" method="post">';
			echo '<tr>';
				echo '<td>Name:</td>';
				echo '<td><input type="text" name="name" value="'.$name.'"/></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td rowspan="2">Sex:</td>';
				echo '<td><input type="radio" name="sex" value="male" '.$male_status.'/>Male</td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td><input type="radio" name="sex" value="female" '.$female_status.'/>Female</td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td>Education:</td>';
				echo '<td>';
					echo '<select name="education" multiple>';
						echo '<option value="diploma">Diploma</option>';
						echo '<option value="bachelor">Bachelor</option>';
						echo '<option value="ma">MA</option>';	
						echo '<option value="phd">PhD</option>';
					echo '</select>';
				echo '</td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td colspan="2"><input type="submit" name="submit" value="save"/></td>';
			echo '</tr>';
		echo '</form>';
		echo '</table>';
	
 ?>
