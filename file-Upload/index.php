<html>
<head>
	<title>File Upload</title>
</head>
<body>
	<table border="1">
		<form action="upload_ad.php" method="post" enctype="multipart/form-data">
		<tr>
			<td>
				<input type="hidden" name="Max_File_Size" value="300000"/>
				<input type="file" name="file" />
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="upload"/>
			</td>
			
		</tr>
		</form>
	</table>
</body>
</html>