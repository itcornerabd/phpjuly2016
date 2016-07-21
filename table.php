<?php 

	$fruits  = [
				["id"=>1, "name"=>"mango", "rate"=>10],
				["id"=>2, "name"=>"Apple", "rate"=>20],
				["id"=>3, "name"=>"orange", "rate"=>30],	
				];

				//var_dump($fruits);
	

 ?>
<html>
	<head>
		<title> Table</title>	
		<style>
			table
			{
				
				width: 500px;
			}
			table,tr,td,th
			{
				border:1px solid black;
				border-collapse: collapse;
			}
		</style>
	</head>
	<body>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Rate</th>
		</tr>
		<?php 
			foreach($fruits as $fruit)
			{

		 ?>

		<tr>
			<td><?php echo $fruit['id']; ?></td>
			<td><?php echo $fruit['name']; ?></td>
			<td><?php echo $fruit['rate']; ?></td>	
		</tr>
		<?php 
			}
		 ?>
	</table>
<hr>
<?php 
	echo "<table><tr><th>Id</th><th>Name</th><th>Rate</th></tr>";
			foreach($fruits as $fruit)
			{
			echo "<tr>";
			echo "<td>". $fruit['id']."</td>";
			echo "<td>". $fruit['name']."</td>";
			echo "<td>". $fruit['rate']."</td>";
			echo "</tr>";
		
			}
			echo "</table>";
		 ?>
	




 



	</body>
</html>