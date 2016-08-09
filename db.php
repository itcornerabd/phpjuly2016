<?php 
require('constr.php');
// 1. db connection 
 // 2. query prepare
 // 3 . query execute 
 //  4. check result and read  
//error_reporting(0);



$query = "select * from tbl_info  ";


 ?>
 <html>
 <head>
 	<title>Database Demo</title>
 
 <link rel="stylesheet" href="./css/table.css">
 </head>
 <body>
	
	<a href="insert.php">Add new </a>



 	<table align="center">
 		<tr>	
 			<th>ID</th>
 			<th>Name</th>
 			<th>Contact</th>
 			<th>Address</th>
 			<th>Email ID </th>
 			<th>Details</th>
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
	 			<td><?php echo $rs['contact']; ?></td>
	 			<td><?php echo htmlentities($rs['address']); ?></td>
	 			<td><?php echo $rs['email']; ?></td>
	 			<td> <a href="details.php?id=<?php echo $rs['id']; ?>">  Details </a></td>
				
				<?php 
				if($rs['status']=='YES')
				{


					 ?>
	 			<td> <a href="delete.php?id=<?php echo $rs['id']; ?>">  delete </a></td>
			 	<?php }

			 		else
			 		{

			 	 ?>
							<td> <a href="revert.php?id=<?php echo $rs['id']; ?>">  revert </a></td>
						
					<?php 
						}
					 ?>	


	 		</tr>	

 		<?php 
 			}
 		 ?>
 	</table>

 	<?php 

 		// $rows = mysqli_query($con,$query);

 		// if(!$rows)
 		// die("some error occured" . mysqli_error($con)  );

 		// echo "<table align='center'><tr><th>ID</th><th>Name</th><th>Contact</th><th>Address</th><th>Email ID </th></tr>";

 		// while($rs=mysqli_fetch_array($rows))
 		// {
 		// 		echo "<tr>";
 		// 		printf("<td>%s</td>",$rs['id']);
 		// 		echo "<td>".$rs['name']."</td>";
 		// 		printf("<td>%s</td>",$rs['contact']);
 		// 		printf("<td>%s</td>",$rs['address']);
 		// 		printf("<td>%s</td>",$rs['email']);
 		// 		echo "</tr>";
 		// }

 		// echo "</table>";


 	 ?>




 <?php 


 	$rows = mysqli_query($con,$query);

 	if(!$rows)
 		die("some error occured" . mysqli_error($con)  );

 	echo "<ul>";
 	while($rs=mysqli_fetch_array($rows))
 	{
 		echo "<li>". $rs['name'];
 	}
 	echo "</ul>";
  ?>
 </body>
 </html>