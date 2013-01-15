<?php 
	if(mysql_query('INSERT INTO persons (firstname,lastname,age) VALUES ("Ali","Ahmadi","20")'))
		echo '</br> Ali`s information inserted ';
	else die(mysql_error());
	if(mysql_query('INSERT INTO persons (firstname,lastname,age) VALUES ("Hassan","Ahmadi","28")'))
		echo '</br> Hassan`s information inserted ';
	else die(mysql_error());
 ?>