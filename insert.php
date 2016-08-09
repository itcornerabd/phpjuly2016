<?php 
require('./constr.php');
 if(isset($_POST['name']))
 {
 	$name = $_POST['name'];
 	$contact=$_POST['contact'];
 	$email=$_POST['email'];
 	$address=nl2br($_POST['address']);


$query = "insert into tbl_info (name,contact,email,address,status) values('$name','$contact','$email','$address','YES') ";

$result = mysqli_query($con,$query);

	if(!$result)
	{
		die("some error occured");
	}
	else
	{
		header("location:db.php?msg=record inserted");
	}
	


 }
 ?>

<html>
	<head>
		<link rel="stylesheet" href="./css/table.css">
	</head>
	<body>
		

<form action="insert.php" method="POST" name="form1" id="form1">

		<table>
			<tr>
				<td>Name</td>
				<td >
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td>Contact</td>
				<td>
					<input type="text" name="contact">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" ></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<textarea name="address" ></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <input type="submit" value="ADD"> </td>
				 
			</tr>
		</table>
		



	</form>

	</body>
</html>
