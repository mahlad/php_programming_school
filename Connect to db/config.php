<?php 
$host_Name='localhost';
$host_User='admin';
$host_Pass='admin';
$config=mysql_connect($host_Name,$host_User,$host_Pass);
if(!$config)
	die(mysql_error());
else {
	echo'conected to DB successfuly';
	/*----craete db----*/
	
	// if(mysql_query('CREATE DATABASE phpClass'))
	// 	echo "</br>your db:phpClass created successfuly";
	// else
	// 	echo '</br>db:phpClass NOt craeted beacuse of: '.mysql_error();
	
	/*----select db----*/
	// mysql_select_db('phpClass',$config);
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

	/*----Insert into table----*/
	// mysql_select_db('phpClass',$config);
	// if(mysql_query('INSERT INTO persons (firstname,lastname,age) VALUES ("Ali","Ahmadi","20")'))
	// 	echo '</br> Ali`s information inserted ';
	// else die(mysql_error());
	// if(mysql_query('INSERT INTO persons (firstname,lastname,age) VALUES ("Hassan","Ahmadi","28")'))
	// 	echo '</br> Hassan`s information inserted ';
	// else die(mysql_error());
	
	/*----select from table----*/
	// mysql_select_db('phpClass',$config);
	// $resule=mysql_query('SELECT * FROM persons');
	// while ($row=mysql_fetch_array($resule)) {
	// 	echo '</br>'.$row['firstname'].' '.$row['lastname'].' is '.$row['age'].' years old';
	// }
	}

mysql_close($config);

 ?>