<?php
if(!empty($_POST['word']))
{
$word=$_POST['word'];
$meaning=$_POST['meaning'];
$con=mysqli_connect('localhost','root','','demo');
$query="insert into shabdkosh (Word,Meaning) values('$word','$meaning')";
$rows=mysqli_query($con,$query);
if($rows==1)
{
$return=['status'=>'suceess' , 'Word'=>$_POST['word'], 'Meaning'=>$_POST['meaning']];
}
else
{
$return=['status'=>'fail', 'data'=>'problem while insertion'];
}
}
else
{
$return=['status'=>'fail', 'data'=>'no input given'];
}
echo json_encode($return);
?>