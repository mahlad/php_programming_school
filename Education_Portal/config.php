<?php
	$server='localhost';
	$db_user='admin';
	$db_pass='admin';
	$db_name='portal';
	$link=mysql_connect($server,$db_user,$db_pass)or die(mysql_error());
	mysql_set_charset("utf8",$link); 
	mysql_select_db($db_name,$link) or die(mysql_error());

?>