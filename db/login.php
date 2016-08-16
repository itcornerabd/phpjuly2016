<?php 
	require('constr.php');


	$username = input('username');
	$password =input('password');

	if(!empty($username))
	{

		$query = "select * from tbl_login where username ='$username' and password ='$password' ";

		$rows= mysqli_query($con,$query);
		if(!$rows)
			die("error");

		if($rs=mysqli_fetch_array($rows))
		{
			$_SESSION['username']=$username;
			$_SESSION['userid']=$rs['id'];

			header("location:db.php");

		}
		else
		{
			echo "invalid";

		}
	}
 ?>

<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="./css/table.css">
	</head>
	<body>
			<form action="" method="POST">
			<table>
				<tr>
					<td>Username</td>
					<td>
						<input type="text" name="username">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="login">
					</td>
					
				</tr>
			</table>
			</form>
	</body>
</html>

<?php require('closestr.php'); ?>