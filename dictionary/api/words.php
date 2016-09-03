<?php 
	require '../include/constr.php';

	$return=[];

	if(isset($_GET['letter']))
	{

		$letter = input('letter');

		$query ="SELECT * FROM `shabdkosh` where Word like '$letter%'  ";

		$rows = mysqli_query($con,$query);
		if(!$rows)
			$return[] = [ 'status'=>'fail' , 'error'=>'query error' ];
		else
		{	 	

			$words=mysqli_fetch_all($rows , MYSQLI_ASSOC);

			if(count($words)>0)
			 $return=['status'=>'suceess' , 'data'=>$words];
			else
				$return[] = [ 'status'=>'fail' , 'error'=>'Record Not Found' ];	
		}

	}
	else
	{
		$return[] = [ 'status'=>'fail' , 'error'=>'Invalid Request' ];	
	}

	echo json_encode($return);



	require '../include/closestr.php';

 ?>