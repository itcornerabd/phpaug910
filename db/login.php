<?php 
session_start();
require 'constr.php';
	if(isset($_POST['username']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		$query= "select * from login where username = '$username' and password ='$password'  ";

		$rows= mysqli_query($con,$query);
		if(!$rows)
			die("error");	

		if($rs=mysqli_fetch_array($rows))
		{
			$_SESSION['username']=$username;
			$_SESSION['userid']=$rs['id'];
			header("location:table.php");
			//echo "valid";

		}
		else
		{
			echo "Invalid ";
		}




	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form method="POST" >
<table>
	<tr>
		<td>Username</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit"  name="" value="Login">
		</td>
	</tr>
</table>
</form>
</body>
</html>
<?php require 'closestr.php'; ?>