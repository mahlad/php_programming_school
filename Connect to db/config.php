<?php 
$host_Name='localhost';
$host_User='admin';
$host_Pass='admin';
$config=mysql_connect($host_Name,$host_User,$host_Pass);
if(!$config)
	die(mysql_error());
else 
	echo'conected to DB successfuly';
mysql_close($config);
 ?>