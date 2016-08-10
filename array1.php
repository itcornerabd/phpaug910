<?php 

	$fruits = ['Apple' , 'Orange', 'Mango', "Strawberry"];

	//echo $fruits[0];

	$size = count($fruits);

	echo $size;

	for($i=0;$i<$size;$i++)
	{
		echo "<br>". $fruits[$i];
	}

	//associtive array
	$fruits = [5 => 'Apple' , 11=>'Orange', 2=>'Mango', 7=>"Strawberry" ];

	echo "<hr/>";

	foreach($fruits as $key => $fruitname )
	{
		echo "<br>" .$key . "=" . $fruitname;
	}

	




	 var_dump($fruits);
	// print_r($fruits);

 ?>	
