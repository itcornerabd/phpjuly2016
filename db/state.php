<?php 
require('constr.php');
// 1. db connection 
 // 2. query prepare
 // 3 . query execute 
 //  4. check result and read  
//error_reporting(0);
if(!isset($_SESSION['username']))
{
header("location:login.php");
}


$name = input('name');

if(!empty($name))
{

	$query = "insert into tbl_state (name,status) values('$name','YES') ";

 
	$result = mysqli_query($con,$query);

	if(!$result)
	{
		die("error in insertion");
	}

}



 
$query = "select * from tbl_state  ";


 ?>
 <html>
 <head>
 	<title>Database Demo</title>
 
 <link rel="stylesheet" href="./css/table.css">
 </head>
 <body>
	
	<a href="insert.php">Add new </a>

	<a href="logout.php">logout </a>
	
	<form action="" method="POST">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td colspan="2" >
				<input type="submit" value="SAVE">
			</td>
		</tr>
	</table>
	</form>
 	<table align="center">
 		<tr>	
 			<th>ID</th>
 			<th>Name</th>
 			<th>Edit</th>
 			<th>Delete</th>
 		</tr>	
 		<?php 
 				$rows = mysqli_query($con,$query);

		 		if(!$rows)
		 		die("some error occured" . mysqli_error($con)  );

		 	while($rs=mysqli_fetch_array($rows))
		 	{
 		 ?>
	 		<tr>	
	 			<td><?php echo $rs['id']; ?></td>
	 			<td><?php echo $rs['name']; ?></td>
	 			<td> <a href="edit.php?id=<?php echo $rs['id']; ?>">  Edit </a></td>
	 			<td> <a href="details.php?id=<?php echo $rs['id']; ?>">  Details </a></td>
				<?php if($rs['status']=='YES') { ?>
	 			<td> <a href="delete.php?id=<?php echo $rs['id']; ?>">  delete </a></td>
			 	<?php } else{ ?>
				<td> <a href="revert.php?id=<?php echo $rs['id']; ?>">  revert </a></td>
				<?php } ?>	


	 		</tr>	

 		<?php 
 			}
 		 ?>
 	</table>
 
 </body>
 </html>
 <?php 
 	require('/closestr.php')
  ?>