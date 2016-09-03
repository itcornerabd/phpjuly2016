<?php 
	require '../include/constr.php';

	$return=[];



	$query ="SELECT distinct( substr(Word,1,1)) as letter FROM `shabdkosh` ";

	$rows = mysqli_query($con,$query);
	if(!$rows)
		$return[] = [ 'status'=>'fail' , 'error'=>'query error' ];
	else
	{	 	
		$letters=mysqli_fetch_all($rows , MYSQLI_ASSOC);

		if(count($letters)>0)
		 $return=['status'=>'suceess' , 'data'=>$letters];
		else
			$return[] = [ 'status'=>'fail' , 'error'=>'Record Not Found' ];	
	}


	echo json_encode($return);



	require '../include/closestr.php';

 ?>