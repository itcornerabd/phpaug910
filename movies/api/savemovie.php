<?php 
	require '../include/constr.php';
	
	if(isset($_POST['name']))
	{

		$name = $_POST['name'];
		$categoryid =$_POST['categoryid'];
		$cast =$_POST['cast'];
		$releasedate=$_POST['releasedate'];
		$plot=$_POST['plot'];
		$data = [];

		$query = "insert into movie (name, cast, plot, categoryid, Releasedate) values ('$name','$cast','$plot',$categoryid,'$releasedate' ) ";

		$result = mysqli_query($con,$query);
		if(!$result)
		{
			$data =['status'=>'fail','message'=>'query error'];
		} 
		else
		{
			$data =['status'=>'success'];			
		}


		echo json_encode($data);
	}	

	

	require '../include/closestr.php';
 ?>