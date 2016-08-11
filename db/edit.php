<?php require('constr.php');  ?>
<?php 

var_dump($_POST);
var_dump($_GET);
	
	if(isset($_POST['name']))
	{
		$name = input('name');
		$email = input('email');
		$address = input('address');
		$contact = input('contact');
		$id=input('id');

		$query = "update tbl_info set name ='$name' , email = '$email' , address='$address', contact='$contact' where id='$id' ";

		$result = mysqli_query($con,$query);
		if(!$result)
		{
			die("error in update".mysqli_error($con));
		}
		else
		{

			 header("location:db.php?msg=record updated");
		}
	}

	if(isset($_GET['id']))
	{
		$id= $_GET['id'];
		$query = "select * from tbl_info where id=$id";

		$rows= mysqli_query($con,$query);
		if(!$rows)
		{
			die("error occured");
		}

		if($rs=mysqli_fetch_array($rows))
		{
			 $name =$rs['name'];
			 $address=$rs['address'];
			 $contact=$rs['contact'];
			 $email=$rs['email'];
		}
		else
		{
			die("record not found");
		}
	}
	else
	{
		die("Selected record not found");
	}
	
$pagename="edit.php";

 ?>

<html>
	<head>
		<title>Edit</title>
		<link rel="stylesheet" href="./css/table.css">
	</head>

	<body>
		<?php require 'form.php' ?>
	</body>
</html>