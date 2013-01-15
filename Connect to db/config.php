<?php 
$host_Name='localhost';
$host_User='admin';
$host_Pass='admin';
$config=mysql_connect($host_Name,$host_User,$host_Pass);
if(!$config)
	die(mysql_error());
else {
	echo'conected to DB successfuly';
	
	/*----craete db-just one time run----*/
	// if(mysql_query('CREATE DATABASE phpClass'))
	// 		echo "</br>your db:phpClass created successfuly";
	// 	else
	// 		echo '</br>db:phpClass NOt craeted beacuse of: '.mysql_error();

	/*----select db----*/
	mysql_select_db('phpClass',$config);

	/*----craete table-just one time run----*/ 
	 // $query='CREATE TABLE persons(
		// 	id int not null auto_increment,
		// 	primary key(id),
		// 	firstname varchar(20),
		// 	lastname varchar(20),
		// 	age int
		// 	)';
		// if(mysql_query($query))
		// 	echo '</br>"persons" table create successfuly';
		// else echo '</br>"persons" table not created beacuse of: '.mysql_error();
	
	

	}



 ?>