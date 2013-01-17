<html>
<head>
	<title>Connect to db</title>
</head>
<body>
<?php 
	/*----connect to db and create table----*/
	include 'config.php';

	/*----insert into table-just one time run----*/
	//include 'insert_db.php';
	
	/*----select from table----*/
	include 'select_db.php';

	/*----select and order----*/
	include 'order_db.php';

	/*----update a field----*/
	include 'update_db.php';

	/*----delete a field----*/
	include 'delete_db.php';
 ?>
</body>
</html>