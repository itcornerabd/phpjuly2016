<?php require('constr.php');  ?>
<html>
<head>
	<title>Details</title>
</head>
<body>
<?php 

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
		echo $rs['name'];

	}
	else
	{
		echo "record not found";

	}


 ?>
</body>
</html>