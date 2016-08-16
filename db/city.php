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
$state=input('state');

if(!empty($name))
{

	$query = "insert into tbl_city (name,stateid,status) values('$name','$state','YES') ";

 
	$result = mysqli_query($con,$query);

	if(!$result)
	{
		die("error in insertion");
	}

}



 



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
			<td>State</td>
			<td>
				<select name="state" id="state" required>
					<option value="">--select state</option>
					<?php 
						$query = "select * from tbl_state order by name "; 

						$rows= mysqli_query($con,$query);
						if(!$rows)
							die("error occured");

						while($rs=mysqli_fetch_array($rows))
						{
							printf('<option value="%s" >%s</option> ',$rs['id'] ,$rs['name']);
						}		




					 ?>


				</select>
			</td>
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
 			<th>State</th>
 			<th>Edit</th>
 			<th>Delete</th>
 		</tr>	
 		<?php 
 				$query = "select c.id , c.name , c.status, s.name as statename from tbl_city as c  , tbl_state as s where  c.stateid = s.id ";
 				$rows = mysqli_query($con,$query);

		 		if(!$rows)
		 		die("some error occured" . mysqli_error($con)  );

		 	while($rs=mysqli_fetch_array($rows))
		 	{
 		 ?>
	 		<tr>	
	 			<td><?php echo $rs['id']; ?></td>
	 			<td><?php echo $rs['name']; ?></td>
	 			<td><?php echo $rs['statename']; ?></td>
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