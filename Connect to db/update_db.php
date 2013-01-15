<?php 
	/*----update a field----*/
	if(mysql_query('UPDATE persons SET firstname="Hasan" WHERE age="28"'))
		echo '</br>changed successfully';
	else echo mysql_error();
 ?>