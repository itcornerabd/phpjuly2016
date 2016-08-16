<?php
	session_start();

  

$curpage = $_SERVER['REQUEST_URI'];

$is_login=  strpos($curpage,"login.php");

if(is_bool($is_login))
{
	if(!isset($_SESSION['username']))
	{
	header("location:login.php");
	}
}

 

 $con = mysqli_connect("localhost","root","","demo");

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
