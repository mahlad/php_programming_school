<?php 
if(isset($_POST['submit'])){
	if($_FILES['file']['error']>0){
		echo 'You have this error:'.$_FILES['file']['error'];
	}else{
		$path='upload/';
		$types=array('jpg','png');
		$image_type=end(explode('.', $_FILES['file']['name']));
		if(file_exists($path.$_FILES['file']['name'])){
			echo 'the file have been uploaded recently';
		}else{
			if(($_FILES['file']['type']=='image/jpg')
				||($_FILES['file']['type']=='image/png')
				){
				if($_FILES['file']['size']<50000){
					if(in_array($image_type,$types)){
						move_uploaded_file($_FILES['file']['tmp_name'], $path.$_FILES['file']['name']);
						echo 'Your file uploaded successfully.';
					}else echo 'your type of image is not jpg';
				}else echo 'size of image is: '.$_FILES['file']['size'].' higher than usual';
			}else echo 'type of file is not image';
			

			
		}
	}
}
 ?>
 