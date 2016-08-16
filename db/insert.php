<?php 
require('./constr.php');
$name=$contact=$email=$address="";
$id=0;
$pagename="insert.php";

 if(isset($_POST['name']))
 {
 	$name = $_POST['name'];
 	$contact=$_POST['contact'];
 	$email=$_POST['email'];
 	$address=$_POST['address'];


$query = "insert into tbl_info (name,contact,email,address,status) values('$name','$contact','$email','$address','YES') ";

$result = mysqli_query($con,$query);

	if(!$result)
	{
		die("some error occured".mysqli_error($con));
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
		
	<?php require 'form.php' ?>
		



	</form>

	</body>
</html>
