<?php $con = mysqli_connect("localhost","root","","demo");

if(!$con)
	die("some error occured");



function input($element)
{
	if(isset($_REQUEST[$element]))
		return $_REQUEST[$element];
	else
		return "";
}


 

 ?>
