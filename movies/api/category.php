<?php 
	require '../include/constr.php';
		
	$query = "select * from category where cid > 3";

	$result = mysqli_query($con,$query);

	if(!$result)
		die("error");

	$categories = mysqli_fetch_all($result,MYSQLI_ASSOC);


	//var_dump($categories);
	echo json_encode($categories);

require '../include/closestr.php';
 ?>