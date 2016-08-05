<?php 
require('constr.php');
// 1. db connection 
 // 2. query prepare
 // 3 . query execute 
 //  4. check result and read  
//error_reporting(0);



$query = "select * from tbl_info";


 ?>
 <html>
 <head>
 	<title>Database Demo</title>
 	<style type="text/css">
 		table,tr,td,th
 		{
 			border: 1px solid black;
 			border-collapse: collapse;

 		}
 		table
 		{
 			width: 500px;
 		}

 	</style>
 </head>
 <body>

 	<table align="center">
 		<tr>	
 			<th>ID</th>
 			<th>Name</th>
 			<th>Contact</th>
 			<th>Address</th>
 			<th>Email ID </th>
 			<th>Details</th>
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
	 			<td><?php echo $rs['address']; ?></td>
	 			<td><?php echo $rs['email'] ?></td>
	 			<td> <a href="details.php?id=<?php echo $rs['id']; ?>">  Details </a></td>
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