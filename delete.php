<?php require('constr.php');  ?>
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
			//"delete from tbl_info where id=$id ";
		  $query  = "update tbl_info set status='NO' where id=$id ";

 	     	$result= mysqli_query($con,$query);

 	     	if(!$result)
 	     	{
 	     		die("error in deletion");
 	     	}
 	     	else
 	     	{
 	     		// echo "sucessfuly deleted";
 	     		header("location:db.php?msg=Sucessfuly Deleted");
 	     	}


	}
	else
	{
		die("record not found");
	}


 ?>