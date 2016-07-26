<!DOCTYPE html>
<html>
<head>
	<title>Timer </title>
</head>
<body>

<span id="timerspan">0</span>
<input type="button" id="start" value="start" onclick="start()">
<input type="button" id="stop" value="stop" onclick="stop()">

</body>
</html>
<script type="text/javascript">
var timer;	
var remaining = 500;
document.getElementById('timerspan').innerHTML=remaining;

function fun1()
{
	setTimeout(function(){
		alert('hello');
		var a=20;
		console.log(a);
	},5000);
}


function start()
{
	timer = setInterval(function(){
		// var val =  document.getElementById('timerspan').innerHTML;
		// val = parseInt(val);
		// val++;
		remaining--;
		var hr,min ,sec;

		min = parseInt(remaining/60);
		hr = parseInt(min/60);
		min =min-hr*60;
		sec	 =remaining%60;

		document.getElementById('timerspan').innerHTML= hr+":"+min +":"+sec ;
		if(remaining==0)
			clearInterval(timer);

	},1000);
}

function stop()
{
	clearInterval(timer);
}

</script>

