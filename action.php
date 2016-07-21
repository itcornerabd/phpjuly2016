<!DOCTYPE html>
<html>
<head>
	<title>Action Page</title>
</head>
<body>

Action Page 
<?php 

	var_dump($_GET);

	if(isset($_GET['ID']))
		echo $_GET['ID'];

	if(isset($_GET['name']))
		echo $_GET['name'];

	echo "<hr/>";

	var_dump($_POST);

	if(isset($_POST['txtname']))
		echo "<br> name is ".$_POST['txtname'];

	if(isset($_POST['txtaddress']))
		echo "<br> Address is ".$_POST['txtaddress'];

	if(isset($_POST['selecity']))
		echo "<br> City is ".$_POST['selecity'];

	if(isset($_POST['radgender']))
		echo "<br> Gender is ".$_POST['radgender'];

		if(isset($_POST['chk1']))
		echo "<br> Hobby is ".$_POST['chk1'];

		if(isset($_POST['chk2']))
		echo "<br> Hobby is ".$_POST['chk2'];

		if(isset($_POST['chk3']))
		echo "<br> Hobby is ".$_POST['chk3'];

	if(isset($_POST['hid']))
		echo "<br> hid is ".$_POST['hid'];

		if(isset($_POST['chkhobby']))
		{
			$chkhobby = $_POST['chkhobby'];
			foreach($chkhobby as $hobby)
			{
				echo "<br>".$hobby;
			}
		}
 ?>



</body>
</html>
