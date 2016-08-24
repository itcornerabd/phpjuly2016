<html>
	<head>
		<title>Jquery Demo</title>
		<style>
			.yellow
			{
				background-color: yellow;
			}
			.red
			{
				background-color: red;
			}

			.blue
			{
				background-color: blue;
			}
			
			table,tr,td,th
 		{
 			border: 1px solid black;
 			border-collapse: collapse;

 		}
 		table
 		{
 			width: 500px;
 		}
		</style>

	</head>
	<body >
		Demo Page 
		
		<div> div 1 </div>
		<div class="cls"> div 2 </div>
		<div class="cls"> div 3 </div>
		<span id="span1"> span 1</span>
		<span class="cls"> span 2</span>
		
		<a href="#">go to google </a>

		<table class="demo cls">
			<tr>
				<td>1</td>
				<td>Dilwale</td>
				<td>Shahrukh</td>
				<td>Kajol</td>
				<td>2016</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Sultan</td>
				<td>Salman</td>
				<td>Anuskha</td>
				<td>2016</td>
			</tr>
			<tr>
				<td>3</td>
				<td>natsamrat</td>
				<td>Nana</td>
				<td>medha</td>
				<td>2016</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Heropanti</td>
				<td>Tiger</td>
				<td>Kriti</td>
				<td>2015</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Housefull</td>
				<td>Shahrukh</td>
				<td>Jackline</td>
				<td>2016</td>
			</tr>
		</table>

		<hr>

		 <input type="button" value="Apply-red Class" data-class="red" id="btnred" class="btncls" >
		 <input type="button" value="Apply-yellow" data-class="yellow" id="btnyellow" class="btncls">
		 <input type="button" value="Apply-blue" data-class="blue" id="btnblue" class="btncls" >

	</body>
</html>		
		<script src="jquery.js"></script>
<script>
	
	 // hover mouseover mouseout keyup change 
	// $("#btnred").click(function(){
	// 	$("table").removeClass();
	// 	 $("table").addClass('red');
	// })

	// $("#btnyellow").click(function(){
	// 	$("table").removeClass();
	// 	 $("table").addClass('yellow');
	// })


	$(".btncls").click(function(){

		var desiredClass = $(this).attr('data-class');    //$(this).val()
	 	$("table").removeClass();
	 	$("table").addClass(desiredClass);

	})



	$("tr").hover(function(){

		$(this).addClass('yellow');
	})

	$("tr").mouseout(function(){

		$(this).removeClass('yellow');
	})


	// $("#img").attr('src','1.jpg')

</script>




