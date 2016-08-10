<?php 
	
	//$fruits = array("Apple","Mango","Orange");
	
	$fruits= ["Apple","Mango","Orange"];

	$fruits[]= "Pinapple";

	// var_dump($fruits);	
	// print_r($fruits);

	$size = count($fruits);

	for($i=0;$i<$size;$i++)
	{
		echo $fruits[$i]."<br>";
	}


	$fruits = [ "Ajay"=>"Mango" , 9=> "Apple" , "Satish"=>"Orange" ];
	//assoicitive array
	var_dump($fruits);

	$size = count($fruits);

	//names as name
	//users as user
	foreach($fruits as $key => $fruit )
	{
		echo $key . " likes " .  $fruit . "<br>";
	}	


 ?>

