<html>
	<head>
		<title>Dictionary</title>
		<style>
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
	<body>
		

		<table>
			<tr>
				<td>
					<ul>
						<li>
							<a href="#" id="linka"> A </a>
						</li>
						<li>
							<a href="#" id="linkb" > B</a>
						</li>
						<li>
							<a href="#" id="linkc"> C</a>
						</li>
						<li>
						<a href="#" id="linkd">	D</a>
						</li>
					</ul>
				</td>
				<td width="50%">
					<div id="load">
						
					</div>
				</td>
			</tr>
		</table>

	</body>
</html>
<script type="text/javascript" src="jquery.js"></script>
<script>
	$("#linka").click(function(){
		
		$("#load").load('a.php');
	
	})


	$("#linkb").click(function(){

		var parameter = { 'letter':'B' , 'id':'1' }

		$.get('b.php',parameter,function(response){
			
			$("#load").html(response);

		})

		// console.log('after ajax code');
	})

	$("#linkc").click(function(){

		var parameter = { 'letter':'C' , 'id':'1' }

		$.post('c.php',parameter,function(response){
			console.log(response);
			$("#load").html(response);
		})
	})

	$("#linkd").click(function(){

		// $.getJSON('http://localhost/php/jquery/d.php',function(data) {

		// 	console.log(data);

		// } );

		 $.get ('http://localhost/php/jquery/d.php',function(data) {

		 	var html='';
		 	//console.log(data);
		 	data =$.parseJSON(data);

		 		html+= '<ul>';
		 		$.each(data , function(key,value){
		 			//console.log(key);
		 			html+='<li>'+value.word+'</li>';
		 			console.log(value.word);	
		 		}) 
		 	 	html+= '</ul>';
		 	 	 $("#load").html(html);

		  } );


	})

</script>