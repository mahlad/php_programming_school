<?php 
	/*----select fields form table and order----*/
	$result_row=mysql_query('SELECT firstname,age FROM persons WHERE lastname="Ahmadi" ORDER BY age DESC');
	while ($row=mysql_fetch_array($result_row)) {
		echo '</br>his name is: '.$row['firstname'].'.He is '.$row['age'];
	}
 ?>