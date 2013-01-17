<?php 
include 'head.php';
 ?>
<form  action="check_login.php" method="post">
		<table>
	    	<caption>فرم ورود</caption>
        	<tr>
            	<td>نام کاربری:</td>
                <td><input type="text" name="username" size="30"/></td>
            </tr>
            <tr>
            	<td>کلمه عبور:</td>
                <td><input type="password"  name="password" size="30" /></td>
            </tr>
            <tr>
            	<td></td>
		        <td><input type="submit" name="login" value="ورود" /></td>
            </tr>
        </table>
  </form>
<?php 
include 'footer.php';
 ?>