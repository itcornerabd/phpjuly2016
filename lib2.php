<?php 

$name = "Rishab Jaiswal";

$spacepos = strpos($name," ");
$len = strlen($name);//16-6 6+1 

$fname = substr($name,0,$spacepos);
$lname = substr($name,$spacepos+1, $len-$spacepos);

echo $fname . " ".$lname;

echo "<hr>";

$fruits = array("c"=>"mango", "b"=>"apple", "d"=>"oranage", "a"=> "banana");
var_dump($fruits);
 // print_r($fruits);
echo count($fruits);

// sort($fruits);
// var_dump($fruits); //sort alpabetically while loosing index


// asort($fruits); //will not loose index
// var_dump($fruits);

// rsort($fruits); //will  loose index reverse sort
// var_dump($fruits);

 arsort($fruits); //will not loose index reverse sort
 var_dump($fruits);

 ksort($fruits);// sort accoriding to key
 var_dump($fruits);

 $str = implode($fruits,","); // convert array to string
 echo $str;
 //"mango|apple|orange"

 $newfruits = explode( "," , $str); //string to array

var_dump($newfruits);

$name = "ram ganesh gadkari";

$namearray= explode(" ",$name);

var_dump($namearray);	

echo $namearray[0]. " " . $namearray[2];

echo "<hr>";

date_default_timezone_set("Asia/Kolkata");
echo date("Y-m-d H:i:s a");

 ?>