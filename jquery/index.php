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

		<table>
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

		 

	</body>
</html>		
		<script src="jquery.js"></script>
<script>
	
	// $(document).ready(function() {
		

	// });

		// $("div").addClass('yellow')
		// $("span").addClass('red')

		// $(".cls").addClass('red');
		// $("#span1").addClass('yellow')

		$("div:eq(1)").addClass('red');
		$("#span1").html('<b> New content </b> ');
		var spancontent = $("#span1").html();

		$("a").attr('href','http://google.com');


		// $("tr:even").addClass('yellow')
		// $("tr:odd").addClass('red')
		// starting 0 irrespitive of parent

		// $("tr:nth-child(even)").addClass('yellow')
		// $("tr:nth-child(odd)").addClass('red')

		//count starts from 1 respective to parent


		// $("td:contains(Shahrukh)").prevAll().addClass('yellow');

		//$("td:contains(Shahrukh)").parent().addClass('yellow');

		$("tr:contains(Shahrukh)").addClass('yellow');



</script>




