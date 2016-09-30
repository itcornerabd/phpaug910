<?php 
	require '../include/constr.php';


	 

	if(isset($_REQUEST['categoryid']))
	{

		$categoryid=$_REQUEST['categoryid'];
		$categoryid=mysqli_escape_string($con,$categoryid);

		$query = "select id,name,cast from movie where categoryid=$categoryid ";

		$result = mysqli_query($con,$query);

		if(!$result)
			die( "error".mysqli_error($con));

		$movies = mysqli_fetch_all($result,MYSQLI_ASSOC);
		
		$returndata = [
						"status"=>"success",
						"data"=>$movies
				   	  ];
		echo json_encode($returndata);				




	}
	

	require '../include/closestr.php';

 ?>