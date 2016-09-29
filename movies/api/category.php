<?php 
	require '../include/constr.php';
		
	$query = "select * from category ";

	$result = mysqli_query($con,$query);

	if(!$result)
		die("error");

	$categories = mysqli_fetch_all($result,MYSQLI_ASSOC);


	$returndata = [
					"status"=>"success",
					"data"=>$categories
				   ];

	//var_dump($categories);
	echo json_encode($returndata);

require '../include/closestr.php';
 ?>