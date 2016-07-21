<?php 
	//enctype="multipart/form-data"
	//var_dump($_FILES);
	//jellyfish.jpg -> jelly.fish1.jpg
	if(isset($_FILES['file1']))
	{
		$tmpname  =$_FILES['file1']['tmp_name']; 
		$filename = $_FILES['file1']['name'];
		$uploadfoldder = "./upload/"; 

		$savepath = $uploadfoldder.$filename;
		$pathinfo = pathinfo($savepath);
			$i=0;
		while(file_exists($savepath))
		{
			$i++;
			//echo " file already exists";

			$newfilename = $pathinfo['filename'] . $i . "." . $pathinfo['extension'];
			$savepath = $uploadfoldder.$newfilename;

		}
		 
			move_uploaded_file($tmpname, $savepath);
			echo "file uploaded";
		 
	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">

</head>
<body>
<form method="POST" enctype="multipart/form-data" >
<table>
	<tr>
		<td>Select File </td>
		<td> 
		<input type="file" name="file1" >
		 </td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		<input type="submit" value="upload file">
		</td>
	</tr>
</table>
</form>
</body>
</html>