<table border="1">
<form action="userinfo.php" method="get">
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name"/></td>
	</tr>
	<tr>
		<td rowspan="2">Sex:</td>
		<td><input type="radio" name="sex" value="mail"/>Mail</td>
	</tr>
	<tr>
		<td><input type="radio" name="sex" value="femail"/>Femail</td>
	</tr>
	<tr>
		<td>Education:</td>
		<td>
			<select name="education" multiple>
				<option value="diploma">Diploma</option>
				<option value="bachelor">Bachelor</option>
				<option value="ma">MA</option>			
				<option value="phd">PhD</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit" value="save"/></td>
	</tr>
</form>
</table>