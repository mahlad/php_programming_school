<?php
	$server='localhost';
	$db_user='admin';
	$db_pass='admin';
	$db_name='telephone_book';
	$t_user='3_users';
	
	$link=mysql_connect($server,$db_user,$db_pass)or die(mysql_error());
	mysql_select_db($db_name,$link) or die(mysql_error());
	$select_user="select * from 3_users ";
	$result_user=mysql_db_query($db_name,$select_user,$link) or die(mysql_error());
	$aray_user=mysql_fetch_array($result_user);
	
	
?>