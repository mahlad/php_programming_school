<?php 
if(mysql_query('DELETE FROM persons WHERE age="20"'))
		echo '</br>deleted successfully';
	else echo mysql_error();
 ?>