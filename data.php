<?php 
	$fruits =   [ "Mango", "Apple","orange" ]; 

	// 1. embed php in html 
	// 2. generate html in php 
	$size = count($fruits);

 ?>
<html>
	<head>
		<title> PHP and HTML</title>
	</head>
	<body>
		
		<?php if($size==0)
		{
			?>
			<h3> No Fruits availabel for now </h3>	
			<?php 
		} 
		else
		{

		?>
		<ul>
			<?php  foreach($fruits as $fruit) 
			{
				?>
				<li> <?php echo $fruit  ?></li>
				<?php 
			}?>
			
		</ul>
		<?php 
			}
		 ?>

		<hr>
		<?php 
			if($size==0)
			{
				echo "<h3> No Fruits availabel for now </h3> "; 
			}
			else
			{
				echo "<ul>";
				foreach($fruits as $fruit )
				{
					//echo "<li>$fruit</li>";
					printf("<li>%s</li>",$fruit);	

				}
				echo "</ul>";
			}




		 ?>




	</body>
</html>	