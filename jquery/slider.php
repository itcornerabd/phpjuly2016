<html>
	<head>
		<title>
			Slider
		</title>
		<link href="./js/jquery.bxslider.css" rel="stylesheet" />

	</head>
	<body>
		<ul class="bxslider">
		  <li><img src="1.jpg" /></li>
		  <li><img src="2.jpg" /></li>
		  <li><img src="3.jpg" /></li>
		  
		</ul>	
	</body>
</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="./js/jquery.bxslider.js"></script>

<script>
$(document).ready(function(){

	$('.bxslider').bxSlider({
		mode:'fade'
	});
});
</script>