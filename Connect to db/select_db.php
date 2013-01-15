<?php 
	/*----select all from a table----*/
	$result_all=mysql_query('SELECT * FROM persons');
	while ($row=mysql_fetch_array($result_all)) {
		echo '</br>'.$row['firstname'].' '.$row['lastname'].' is '.$row['age'].' years old';
	}

	/*----select a row form a table----*/
	$result_row=mysql_query('SELECT * FROM persons WHERE firstname="Ali"');
	while ($row=mysql_fetch_array($result_row)) {
		echo '</br>his family is: '.$row['lastname'].'.He is '.$row['age'];
	}

	/*----select a field form table----*/
	$result_row=mysql_query('SELECT age FROM persons WHERE firstname="Ali"');
	while ($row=mysql_fetch_array($result_row)) {
		echo '</br>his age is: '.$row['age'];
	}

	/*----select fields form table----*/
	$result_row=mysql_query('SELECT firstname,age FROM persons WHERE lastname="Ahmadi"');
	while ($row=mysql_fetch_array($result_row)) {
		echo '</br>his name is: '.$row['firstname'].'.He is '.$row['age'];
	}
	

 ?>