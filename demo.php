Hello world todays date is <?php echo date('Y-m-d') ?>

<?php 
error_reporting(E_ALL); //E_ALL E_NOTICE E_WARNING // 0 

$i=10;

echo i;
echo '<br>hello world';

$j = 20;

$k = $i%$j;

echo "<br>total is ".$k ;

$i+=10;    //$i = $i+10;  

echo "<br> i = ".$i;

$a=--$i;   //$i+=1;  //$i=$i+1;

echo "<br> i = ".$i; 
echo "<br> a = ".$a;

define1("PI" , 3.14 );
echo "<br>". PI;
//parse error  prongram wont run 
//Notice - normal 
//Fatal error: next line wont execute 
//warning 


 ?>