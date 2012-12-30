<?php 
if(isset($_POST['submit'])){
	if($_FILES['file']['error']>0){
		echo 'You have this error:'.$_FILES['file']['error'];
	}else{
		//print_r($_FILES['file']);
		echo 'Name: '.$_FILES['file']['name'].'</br>';
		echo 'Size: '.($_FILES['file']['size']/ 1024).'kb</br>';
		echo 'Type: '.$_FILES['file']['type'].'</br>';
		echo 'Store in: '.$_FILES['file']['tmp_name'].'</br>';
		$path='upload/';
		if(move_uploaded_file($_FILES['file']['tmp_name'], $path.$_FILES['file']['name']))
			echo 'Your file uploaded successfully.';
		else echo'Not Upload';
	//if()
	//$file_name=end(explode('.', $_FILES['file']['name']));
	}

	

}
 ?>