<html>
<head>
<title>Sign in</title>
</head>
<body>



<form method="post" action="loginchk.php" enctype="">
<fieldset>
<legend>Login</legend>
<table>
<tr>
<td>User Type</td>
</tr>
<tr>
<td>
<input type="radio" name="usertype" value="user" > User
<input type="radio" name="usertype" value="admin" > Admin
</td>

</tr>
<tr>
<td>User Id</td>
</tr>
<tr>
<td><input type="number" name="userid" value=""></td>
</tr>
<td>Password</td>
</tr>
<tr>
<td><input type="password" name="password" value=""></td>
</tr>
<tr>
<td><input type="submit" name="login" value="Login"> <a href="reg.php">Register</a></td>
</tr>



</table>
</fieldset>
</form>
</body>
</html>