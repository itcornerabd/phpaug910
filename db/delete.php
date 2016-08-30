<?php 
//status yes no 
//active 0 1
//deleted yes no 
	require 'constr.php'; 

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$action=$_GET['action'];

		$active=1;
		if($action=='delete')
			$active=0;
	

		//$query = "delete from movie where id=$id";
		$query = "update movie set active=$active where id=$id";

		$result = mysqli_query($con,$query);

		if(!$result)
		{
			die("error in removal");
		}
		else
		{
			header("location:table.php");
			//echo "removed selected movie";
		}
	}
	require 'closestr.php';


 ?>