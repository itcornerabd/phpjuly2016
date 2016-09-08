<!DOCTYPE html>
<html>
	<head>

		 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
	body
	{
		margin :40px;
	}
</style>

	</head>
	<body>
		
		<div class="conatiner">
	<!--  -->

	



			<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
 Add New Word
</button>


				
				<div class="row">
					
					<div class="col-md-4">
						<div class="row" id="letterlist" >
							
						<div class="col-md-12">	
							<a href="#" class="btn btn-info" >asd</a>		
						</div>
						<div class="col-md-12">	
							<a href="#" class="btn btn-info" >asd</a>		
						</div>
					</div>
				</div>
					<div class="col-md-8" id="wordslist">
						
					</div>
					
				</div>

		</div>		



	</body>
</html>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
       		<form action="#" method="POST" id="wordform">
       			<div class="form-group">
       			<input type="text" name="word"  class="form-control" placeholder="word" required>	
				</div>
				
				<div class="form-group">
				     <textarea name="meaning" class="form-control" placeholder="meaning" required></textarea>	
				  </div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" id="save">Save changes</button>
				</div>

       		</form>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         
      </div>
    </div>
  </div>
</div>



<script>
	
	$.getJSON('./api/letters.php',function(data){

	  	var html='';
		if(data.status=='suceess')
		{
			$.each(data.data, function(key,value){

				console.log(value.letter);
				html+='<div class="col-md-12"><a href="#" class="btn btn-info letter" >';
				html+=value.letter;
				html+='</a></div>';
			})

			$("#letterlist").html(html);

		}
		else
		{
			alert('some error occcured please refresh');
		}		


	})


	$("body").on('click','.letter',function(){

	 console.log($(this).html())

	var senddata = {'letter':$(this).html()}

		$.getJSON('./api/words.php',senddata,function(rdata){
			var html='';
			if(rdata.status=='suceess')
			{

				$.each(rdata.data,function(key,value){

					html+='<h1> ' + value.Word  +  '</h1>'
					html+='<p> ' + value.Meaning +  '</p>'
					//console.log(value);

				})

				$("#wordslist").html(html);
			}
			else
			{
				alert('something wrong ');
			}

		})


	})

	$("#save").click(function(event){
		event.preventDefault();
		var sendparams=  $("#wordform").serialize()

		$.post('./api/insert.php',sendparams,function(returndata){

			returndata = $.parseJSON(returndata);

			if(returndata.status=='suceess')
			{
				//alert('your data is saved');
				$("#myModal").modal('hide');

				var alert1 ='<div class="alert alert-success" role="alert" ><strong>Well done!</strong> Your word saved sucessfully!!!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

				$('.conatiner').prepend(alert1);

				$("input").val('');
				$("textarea").val('');
			}
			else
			{
				alert('some problem occured');
			}

		})
	})	

</script>		