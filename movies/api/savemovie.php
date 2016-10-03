<?php 
	require '../include/constr.php';
	
	if(isset($_POST['name']))
	{

		$name = $_POST['name'];
		$categoryid =$_POST['categoryid'];
		$cast =$_POST['cast'];
		$releasedate=$_POST['releasedate'];
		$plot=$_POST['plot'];

	}	

	

	require '../include/closestr.php';
 ?>