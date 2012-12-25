<html>
<head>
	<title>Files</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php 
/*----just read----*/
echo '<h3 class="title">just read the exictence file</h3>';
$read_file=fopen('Massages.txt','r+');
while (!feof($read_file)) {
	echo fgets($read_file).'</br>';
}

fclose($read_file);

/*----creat and write----*/
echo '<h3 class="title">creat and write the file</h3>';
$write_file=fopen('myfile.txt','w+');
$content="EXISTENT:\n";
fwrite($write_file,$content);
$arry=array('Flowers','Animals','Plants');
$counter=3;
while ($counter!=0) {
	$counter--;
	fwrite($write_file,$arry[$counter]."\n");
	
}
echo 'file created successfully';
fclose($write_file);

/*----read from file created----*/
echo '<h3 class="title">read from created file</h3>';
$read_file2=fopen('myfile.txt','r+');
while (!feof($read_file2)) {
	echo fgets($read_file2).'</br>';
}
fclose($read_file2);

/*----write on file with content(overwrite)----*/
echo '<h3 class="title">write on file with content then read it</h3>';
$write_file2=fopen('myfile.txt','w+');
$content="\n COLORS: \n";
fwrite($write_file2,$content);
$arry=array('yellow','blue','red');
$counter=3;
while ($counter!=0) {
	$counter--;
	fwrite($write_file2,$arry[$counter]."\n");
	
}

$read_file2=fopen('myfile.txt','r+');
while (!feof($read_file2)) {
	echo fgets($read_file2).'</br>';
}
echo '<p class="alert">It is overwrited</p>';
fclose($read_file2);

/*----write on file with content(append)----*/
// echo '<h3 class="title">write on file with content then read it</h3>';
// $write_file2=fopen('myfile.txt','a');
// $content="\n COLORS: \n";
// fwrite($write_file2,$content);
// $arry=array('yellow','blue','red');
// $counter=3;
// while ($counter!=0) {
// 	$counter--;
// 	fwrite($write_file2,$arry[$counter]."\n");
	
// }
// $read_file2=fopen('myfile.txt','r+');
// while (!feof($read_file2)) {
// 	echo fgets($read_file2).'</br>';
// }
// echo '<p class="alert">It is appended</p>';
// fclose($read_file2);
 ?>
</body>
</html>