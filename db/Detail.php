<?php
require 'constr.php'; 

	if(isset($_GET['id']))
	{
		$id= $_GET['id'];

		$query = "select * from movie where id=$id";

		$rows = mysqli_query($con,$query);
		if(!$rows)
			die("error in fetching data");

		if($rs=mysqli_fetch_array($rows))
		{
			$name= $rs['name'];
			$cast =$rs['cast'];
			$plot = $rs['plot'];
		}	
		else
		{
			die("404 movie not found");
		}				
	}	
	else
	{
		die("404 invalid request");
	}


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Details Page</title>
</head>
<body>
<h1> <?=$name ?> </h1>
<h2><?=$cast ?></h2>	
<p> <?=$plot ?> </p>
</body>
</html>
<?php require 'closestr.php'; ?>