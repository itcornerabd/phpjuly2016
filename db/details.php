<?php require('constr.php');  ?>
<?php 
echo $_SESSION['username'];
echo $_SESSION['userid'];

	if(isset($_GET['id']))
	{
		$id= $_GET['id'];
	}
	else
	{
		die("Selected record not found");
	}
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


 ?>


<html>
<head>
	<title>Details</title>
	<link rel="stylesheet" href="./css/table.css">
</head>
<body>




 
<table>
				<tr>
					<td>ID</td>
					<td><?php echo $id; ?></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><?php echo $name; ?></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><?php echo $contact ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $email; ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $address; ?></td>
				</tr>
			</table>
 
</body>
</html>