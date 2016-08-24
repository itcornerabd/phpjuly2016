<?php 
require('./constr.php');
$name=$contact=$email=$address="";
$id=0;

$token = 'asdasdasd';

$_SESSION['token']= $token;


$pagename="insert.php";

 if(isset($_POST['name']))
 {
 	$name = $_POST['name'];
 	$contact=$_POST['contact'];
 	$email=$_POST['email'];
 	$address=$_POST['address'];
 	$form_token= $_POST['token'];
 	$session_token = $_SESSION['token'];

 
if($session_token==$form_token )
{
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
else
{
	die("invalid token");
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
