<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

	<style type="text/css">
		
   .img1
  {
background-image: Desert.jpg
  }


.img3
  {
background-image: Tulips.jpg
  }

.img2
  {
background-image: Koala.jpg
  }




	</style>
</head>
<body>
<div width=500 hight =500  id="#div1">
<
<img src="1.jpg"  id="img" width="500px" height="500px">

<input type="button" value="img1" class="btnclass" id="img1">
<input type="button" value="img2" class="btnclass" id="img2">
<input type="button" value="img3" class="btnclass" id="img3">
<input type="button" value="safaya" class="btnclass" id="safaya" >
</div>

</body>
</html>


<script src="jquery.js"></script>
<script>
	

	//sada clk
  $("#img1").click(function(){
		
	$("#img").attr('src','1.jpg')
	})


$("#img2").click(function(){
		
	$("#img").attr('src','2.jpg')
	})

$("#img3").click(function(){
		
	$("#img").attr('src','3.jpg')
	})




  



</script>