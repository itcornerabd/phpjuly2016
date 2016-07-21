<!DOCTYPE html>
<html>
<head>
	<title>Javascript Demo</title>



</head>
<body>

	<input type="text" name="txtname" id="txtnum1" onkeyup="btnclick()">+
	<input type="text" name="txtname" id="txtnum2"  onkeyup="btnclick()">=
	<input type="text" name="txtname" id="total">	
	<button onclick='btnclick()'>Click me</button>

	<span id="span1"></span>

</body>
</html>
<script type="text/javascript">
	
function btnclick()
{
	var a= document.getElementById('txtnum1').value;
	var b= document.getElementById('txtnum2').value;
		
		a=parseInt(a);
		b=parseInt(b);

	var total = a+b;

	document.getElementById('total').value = total;
	document.getElementById('span1').innerHTML=total;

}


	//document.write ("Hello world");	
	var a=10;
	var b= a+10;

	console.log(a);
	//alert('hello wolrd');	
	
	///document.write(b);

</script>
