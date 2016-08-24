
<?php  
$name=$contact=$email=$address="";
$id=0;
$pagename="insert.php";

?>


<html>
	<head>
		<title>Edit</title>
		<link rel="stylesheet" href="./css/table.css">
	</head>

	<body>
		 
<form action="<?php echo $pagename ?>" method="POST" name="form1" id="form1">

		<table>
			<tr>
				<td>Name</td>
				<td >
					<input type="text" name="name" value="<?php echo $name ?>">
				</td>
			</tr>
			<tr>
				<td>Contact</td>
				<td>
					<input type="text" name="contact" value="<?php echo $name ?>" >
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"  value="<?php echo $name ?>"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<textarea name="address" ><?php echo $name ?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"> 
						<input type="hidden" name="id" value="<?php echo $id; ?>" >
						<input type="submit" value="ADD">

					
				</td>
				 
			</tr>
		</table>
	</form>
	</body>
</html>